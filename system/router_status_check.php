<?php

// Include necessary files
include "../init.php";

$isCli = php_sapi_name() === 'cli';
if (!$isCli) {
    echo "<pre>";
}

echo "PHP Time\t" . date('Y-m-d H:i:s') . "\n";
$res = ORM::raw_execute('SELECT NOW() AS WAKTU;');
$statement = ORM::get_last_statement();
$rows = array();
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    echo "MYSQL Time\t" . $row['WAKTU'] . "\n";
}
$_c = $config;

function icmp_ping($ip_address, $timeout = 15, $count = 20) { // Updated timeout and count
    $ip_parts = explode(':', $ip_address);
    $ip = $ip_parts[0];

    $escaped_ip = escapeshellarg($ip);

    exec("ping -c $count -W $timeout $escaped_ip 2>&1", $output, $return_var);

    // Log ping command output and return status for debugging
    error_log("Ping command output: " . implode("\n", $output));
    error_log("Ping command return status: $return_var");

    if ($return_var === 0) {
        // Parse ping output to check for packet loss and average round-trip time
        $statistics = implode("\n", $output);
        if (preg_match('/(\d+)% packet loss/', $statistics, $matches)) {
            $packet_loss = intval($matches[1]);
            if ($packet_loss === 0) {
                return true; // Successful ping with no packet loss
            } elseif ($packet_loss < 100) {
                // Packet loss is detected but not 100%, consider as minor issue
                return true;
            }
        }
    }

    return false; // Default to false if ping failed or packet loss detected
}

function get_appconfig_value($setting) {
    // Retrieve configuration value from database table
    $config = ORM::for_table('tbl_appconfig')->where('setting', $setting)->find_one();
    return $config ? $config->value : null;
}

function send_sms($phone_number, $message) {
    // Send SMS using configured URL template
    $sms_url_template = get_appconfig_value('sms_url');
    if (!$sms_url_template) {
        echo "SMS URL not configured\n";
        return;
    }

    $url = str_replace(['[text]', '[number]'], [urlencode($message), urlencode($phone_number)], $sms_url_template);

    // Initiate CURL request to send SMS
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
    ]);

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch) . "\n";
    } else {
        echo "SMS sent to $phone_number with response: $response and HTTP code: $http_code\n";
    }

    curl_close($ch);
}

function send_whatsapp($phone_number, $message) {
    // Send WhatsApp message using configured URL template
    $wa_url_template = get_appconfig_value('wa_url');
    if (!$wa_url_template) {
        echo "WhatsApp URL not configured\n";
        return;
    }

    $url = str_replace(['[text]', '[number]'], [urlencode($message), urlencode($phone_number)], $wa_url_template);

    // Initiate CURL request to send WhatsApp message
    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
    ]);

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if (curl_errno($ch)) {
        echo 'Curl error: ' . curl_error($ch) . "\n";
    } else {
        echo "WhatsApp message sent to $phone_number with response: $response and HTTP code: $http_code\n";
    }

    curl_close($ch);
}

function check_and_update_router_status($router) {
    // Check current router status via ICMP ping
    $current_status = $router->status;
    $new_status = icmp_ping($router['ip_address'], 15, 20) ? 'Online' : 'Offline'; // Adjusted timeout and count

    $current_time = date('Y-m-d H:i:s');

    if ($current_status !== $new_status) {
        // Status has changed, notify all users and update status
        $users = ORM::for_table('tbl_users')->find_many();

        if ($new_status === 'Offline') {
            // Router is offline, send notifications
            foreach ($users as $user) {
                $message = "Router {$router['name']} is Offline at $current_time. Error.";
                send_sms($user['phone'], $message);
                send_whatsapp($user['phone'], $message);
            }
            $router->offline_since = $current_time; // Record offline time
        } else {
            // Router is back online, calculate downtime and notify users
            $offline_since = new DateTime($router->offline_since);
            $now = new DateTime($current_time);
            $interval = $offline_since->diff($now);
            $downtime = $interval->format('%h h, %i m, and %s s');

            foreach ($users as $user) {
                $message = "Router {$router['name']} is now Online at $current_time. Fixed. Downtime: $downtime.";
                send_sms($user['phone'], $message);
                send_whatsapp($user['phone'], $message);
            }
            $router->offline_since = null; // Clear offline_since after coming online
        }
    }

    // Update router status and last check time
    $router->status = $new_status;
    $router->last_check = $current_time;
    $router->save();
}

// Get all active routers from database
$routers = ORM::for_table('tbl_routers')->where('enabled', '1')->find_many();

// Check status for each router
foreach ($routers as $router) {
    check_and_update_router_status($router);
}

echo "Router status check completed at " . date('Y-m-d H:i:s') . "\n";
?>
