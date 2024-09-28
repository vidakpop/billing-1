<?php
if (isset($_GET['action']) && $_GET['action'] === 'balance') {
    header('Content-Type: application/json');

    function sms_balance() {
        $api_url = 'https://portal.bytewavenetworks.com/api/http/balance?api_token=108|yS1EznTgtmhRM5prqTyXTvashAddg6zP509JhC2U6262587d';
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            $error_msg = curl_error($ch);
            curl_close($ch);
            return array('status' => 'error', 'message' => $error_msg);
        }

        curl_close($ch);
        return json_decode($response, true);
    }

    $sms_balance = sms_balance();
    echo json_encode($sms_balance);
    exit();
} 
?>
