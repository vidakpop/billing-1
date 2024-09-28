<?php
/**
 * Verify Paystack Payment
 **/

// Include necessary files and initialize
_admin();
$ui->assign('_title', Lang::T('Payment Verification'));
$ui->assign('_system_menu', 'sms');
$ui->assign('_admin', $admin);

if (isset($_GET['reference'])) {
    $reference = $_GET['reference'];

    $paystack_secret_key = 'sk_live_96e0fc93ffc118bef55d81438d569f9f704d1199'; // Replace with your Paystack secret key

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            "authorization: Bearer $paystack_secret_key",
            "content-type: application/json",
            "cache-control: no-cache"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        r2(U . 'sms.php', 'e', Lang::T('Curl returned error: ' . $err));
    } else {
        $tranx = json_decode($response, true);

        if (!$tranx['status']) {
            r2(U . 'sms.php', 'e', Lang::T('API returned error: ' . $tranx['message']));
        } else {
            if ($tranx['data']['status'] == 'success') {
                // Payment was successful
                $email = $tranx['data']['customer']['email'];
                $amount = $tranx['data']['amount'] / 100; // Amount in KES
                $phone = $_POST['phone']; // Retrieve phone number from session or form data

                // Update balance in the database
                $balance_row = ORM::for_table('balance')->find_one();
                $balance_row->amount += $amount;
                $balance_row->save();

                // Send SMS notification
                $message = "Your SMS top-up of " . $amount . " KES was successful. Thank you!";
                $url = "https://api.netguru.co.ke/bytewave.php?message=" . urlencode($message) . "&phone=" . urlencode($phone) . "&senderid=Lineserve&api=60|wMNX8WcxrIuRAal5LseGW8ixwGlMljl4nIrMQpN5";

                $smsResponse = file_get_contents($url);

                if ($smsResponse) {
                    r2(U . 'sms.php', 's', Lang::T('Payment Successful! Your SMS balance has been updated successfully!'));
                } else {
                    r2(U . 'sms.php', 'e', Lang::T('Failed to send SMS. Please try again later.'));
                }
            } else {
                r2(U . 'sms.php', 'e', Lang::T('Payment verification failed.'));
            }
        }
    }
} else {
    r2(U . 'sms.php', 'e', Lang::T('No reference supplied.'));
}
?>
