<?php
/**
 * PHP Messaging System
 **/

// Include necessary files and initialize
_admin();
$ui->assign('_title', Lang::T('SMS'));
$ui->assign('_system_menu', 'sms');
$ui->assign('_admin', $admin);

// Fetch balance from the database
$balance_row = ORM::for_table('balance')->find_one();
$balance = $balance_row ? $balance_row->amount : 0;

// Set balance in template
$ui->assign('balance', $balance);

// Display the SMS rate
$sms_rate = 0.40; // Set SMS rate
$ui->assign('sms_rate', $sms_rate);

    // Display the template
    $ui->display('sms.tpl');
}
?>
