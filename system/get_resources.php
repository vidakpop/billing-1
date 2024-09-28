<?php
/**
 *  PHP Mikrotik Billing (https://github.com/hotspotbilling/phpnuxbill/)
 *  by https://t.me/ibnux
 **/

require_once 'system/autoload/PEAR2/Autoload.php';

function mikrotik_get_resources($routerId)
{
    $mikrotik = ORM::for_table('tbl_routers')->where('enabled', '1')->find_one($routerId);

    if (!$mikrotik) {
        // Handle case where router is not found
        return null;
    }

    try {
        $client = Mikrotik::getClient($mikrotik['ip_address'], $mikrotik['username'], $mikrotik['password']);

        $health = $client->sendSync(new RouterOS\Request('/system health print'));
        $res = $client->sendSync(new RouterOS\Request('/system resource print'));

        $resourceData = $res->getAllOfType(RouterOS\Response::TYPE_DATA)[0];
        $uptime = $resourceData->getProperty('uptime');
        $freeMemory = $resourceData->getProperty('free-memory');
        $totalMemory = $resourceData->getProperty('total-memory');
        $cpuLoad = $resourceData->getProperty('cpu-load');

        return [
            'uptime' => $uptime,
            'freeMemory' => mikrotik_formatSize($freeMemory),
            'totalMemory' => mikrotik_formatSize($totalMemory),
            'cpuLoad' => $cpuLoad . '%'
        ];
    } catch (Exception $e) {
        // Handle exceptions, e.g., connection errors
        return null;
    }
}

// Function to round the value and append the appropriate unit
function mikrotik_formatSize($size)
{
    $units = ['B', 'KB', 'MB', 'GB'];
    $unitIndex = 0;
    while ($size >= 1024 && $unitIndex < count($units) - 1) {
        $size /= 1024;
        $unitIndex++;
    }
    return round($size, 2) . ' ' . $units[$unitIndex];
}

if (isset($_GET['router_id'])) {
    $routerId = $_GET['router_id'];
    $resources = mikrotik_get_resources($routerId);
    echo json_encode($resources);
}