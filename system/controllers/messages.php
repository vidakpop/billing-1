<?php

/**
 *  PHP Messaging System
 **/

_admin();
$ui->assign('_title', Lang::T('Messages'));
$ui->assign('_system_menu', 'messages');

$action = $routes['1'];
$ui->assign('_admin', $admin);

// Fetch all messages
$msgs = ORM::for_table('tbl_message')
    ->order_by_desc('date')
    ->find_array();

$ui->assign('messages', $msgs);
$ui->display('message-list.tpl');

?>
