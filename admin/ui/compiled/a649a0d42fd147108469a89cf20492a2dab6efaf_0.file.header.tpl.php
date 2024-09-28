<?php
/* Smarty version 4.3.1, created on 2024-08-02 02:56:52
  from '/var/www/html/aleehnetworks/ui/ui/sections/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66ac20c4b949f6_56126180',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a649a0d42fd147108469a89cf20492a2dab6efaf' => 
    array (
      0 => '/var/www/html/aleehnetworks/ui/ui/sections/header.tpl',
      1 => 1722556601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac20c4b949f6_56126180 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php echo $_smarty_tpl->tpl_vars['_title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</title>
    <link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />


    <link rel="stylesheet" href="ui/ui/styles/bootstrap.min.css">

    <link rel="stylesheet" href="ui/ui/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="ui/ui/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="ui/ui/styles/modern-AdminLTE.min.css">
    <link rel="stylesheet" href="ui/ui/styles/select2.min.css" />
    <link rel="stylesheet" href="ui/ui/styles/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="ui/ui/styles/sweetalert2.min.css" />
    <link rel="stylesheet" href="ui/ui/styles/plugins/pace.css" />
    <?php echo '<script'; ?>
 src="ui/ui/scripts/sweetalert2.all.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com"><?php echo '</script'; ?>
>
    <link href="https://fonts.googleapis.com/css2?family=Mnter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .mulish-font {
            font-family: 'Mulish', sans-serif;
        }
        .font-bold {
            font-weight: bold;
        }
        ::-moz-selection {
            /* Code for Firefox */
            color: red;
            background: yellow;
        }

        ::selection {
            color: red;
            background: yellow;
        }

        .select2-container .select2-selection--single .select2-selection__rendered {
            margin-top: 0px !important;
        }

        @media (min-width: 768px) {
            .outer {
                height: 200px
                    /* Or whatever */
            }
        }

        th:first-child,
        td:first-child {
            position: sticky;
            left: 0px;
            background-color: #f9f9f9;
        }


        .text1line {
            display: block;
            /* or inline-block */
            text-overflow: ellipsis;
            word-wrap: break-word;
            overflow: hidden;
            max-height: 1em;
            line-height: 1em;
        }


        .loading {
            pointer-events: none;
            opacity: 0.7;
        }

        .loading::after {
            content: "";
            display: inline-block;
            width: 16px;
            height: 16px;
            vertical-align: middle;
            margin-left: 10px;
            border: 2px solid #fff;
            border-top-color: transparent;
            border-radius: 50%;
            animation: spin 0.8s infinite linear;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

       /*
         * maintenance top-bar 
         */

         .notification-top-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 40px;
            line-height: 40px;
            width: 100%;
            background: #ec2106;
            text-align: center;
            color: #FFFFFF;
            font-family: serif;
            font-weight: bolder;
            font-size: 14px;
            z-index: 9999;
            box-sizing: border-box;
            padding: 0 10px;
        }

        .notification-top-bar p {
            padding: 0;
            margin: 0;
        }

        .notification-top-bar p a {
            padding: 5px 10px;
            border-radius: 3px;
            background: #FFF;
            color: #1ABC9C;
            font-weight: bold;
            text-decoration: none;
            display: inline;
            font-size: inherit;
        }

        @media (max-width: 600px) {
            .notification-top-bar {
                font-size: 12px;
                height: auto;
                line-height: normal;
                padding: 10px;
            }

            .notification-top-bar p a {
                padding: 5px 10px;
                margin: 5px 0;
                font-size: 10px;
                display: inline-block;
            }
        }
.sidebar-menu > li.active > a {
    color: #ffffff !important; /* Text color white */
    background-color: #38a169; 
    width: 90%;
    display: block;
    margin: 0 auto;
}

    /* Style for online status indicator */
    .user-image-container {
        position: relative;
    }
    .online-status {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 0.75rem;
        height: 0.75rem;
        background-color: #4caf50; /* green */
        border: 2px solid white;
        border-radius: 50%;
    }

.fixed-sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    overflow: auto;
    z-index: 1000; /* Adjust z-index as needed */
}
.logo-lg {
    color: #004d00; /* Dark green color */
    font-weight: bold; /* Make text bold */
}

</style>

    <?php if ((isset($_smarty_tpl->tpl_vars['xheader']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['xheader']->value;?>

    <?php }?>

</head>

<body class="hold-transition modern-skin-light bg-white  text-gray-800 sidebar-mini <?php if ($_smarty_tpl->tpl_vars['_kolaps']->value) {?>sidebar-collapse<?php }?>">
    <div class="wrapper">
        <header class="main-header">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard" class="logo">
                <span class="logo-mini"><b>B</b>Isp</span>
                <span class="logo-lg"><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" onclick="return setKolaps()">
    <span class="sr-only">Toggle navigation</span>
    </a>
<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- User Initial with Background Color and Online Status -->
                <div class="relative flex items-center justify-center w-10 h-10 rounded-full bg-[#f29f67] text-white">
                    <!-- User Initial -->
                    <span class="text-lg font-bold"><?php echo $_smarty_tpl->tpl_vars['_admin']->value['fullname'][0];?>
</span>
                    <!-- Online Status Indicator -->
                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                </div>
                            </a>    <ul class="dropdown-menu">
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/change-password">
                <i class="ion ion-settings"></i> <?php echo Lang::T('Change Password');?>

            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users-view/<?php echo $_smarty_tpl->tpl_vars['_admin']->value['id'];?>
">
                <i class="ion ion-person"></i> <?php echo Lang::T('My Account');?>

            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logout">
                <i class="ion ion-power"></i> <?php echo Lang::T('Logout');?>

            </a>
        </li>
    </ul>
</li>
                    </ul>
                </div>
            </nav>
        </header>
<aside class="main-sidebar bg-gray-200 font-bold Mulish-font text-gray-900 fixed-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
                    <li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'dashboard') {?>class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
dashboard">
                            <i class="fa-solid fa-house"></i>
                            <span><?php echo Lang::T('Dashboard');?>
</span>
                        </a>
                    </li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_DASHBOARD']->value;?>

<li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'onlineusers') {?>active<?php }?> treeview">
                        <a href="#">
                            <i class="fa fa-signal"></i> <span><?php echo Lang::T('Online Clients');?>
</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'hotspot') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
onlineusers/hotspot"><?php echo Lang::T('Hotspot Client');?>
</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'send_bulk') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plugin/pppoe"><?php echo Lang::T('Pppoe Clients');?>
</a></li>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_MESSAGE']->value;?>

                        </ul>
                    </li>

 			

                    <?php if (!in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('Report'))) {?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'services') {?>active<?php }?> treeview">
                        <a href="#">
                            <i class="ion ion-cube"></i> <span><?php echo Lang::T('Clients');?>
</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'all') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers">All Clients</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'hotspot') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/hotspot">Hotspot Clients</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'pppoe') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/pppoe">PPPOE</a></li>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_PLANS']->value;?>

                        </ul>
                    </li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_CUSTOMERS']->value;?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'plan') {?>active<?php }?> treeview">
                        <a href="#">
                            <i class="fa fa-ticket"></i> <span><?php echo Lang::T('Services');?>
</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/list"><?php echo Lang::T('Active Accounts');?>
</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['_c']->value['disable_voucher'] != 'yes') {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'voucher') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/voucher"><?php echo Lang::T('Vouchers');?>
</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'refill') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/refill"><?php echo Lang::T('Refill Client');?>
</a></li>
                            <?php }?>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'recharge') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/recharge"><?php echo Lang::T('Recharge Client');?>
</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes') {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'deposit') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/deposit"><?php echo Lang::T('Top-Up Wallet');?>
</a></li>
                            <?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_SERVICES']->value;?>

                        </ul>
                    </li>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_SERVICES']->value;?>

                    <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin'))) {?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'services') {?>active<?php }?> treeview">
                        <a href="#">
                            <i class="ion ion-cube"></i> <span><?php echo Lang::T(' Internet Packages');?>
</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'hotspot') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/hotspot">Hotspot</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'pppoe') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/pppoe">PPPOE</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
bandwidth/list"><?php echo Lang::T('Bandwidth');?>
</a></li>
                            <?php if ($_smarty_tpl->tpl_vars['_c']->value['enable_balance'] == 'yes') {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'balance') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/balance"><?php echo Lang::T('Customer Balance');?>
</a></li>
                            <?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_PLANS']->value;?>

                        </ul>
                    </li>
                    <?php }?>
<li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'message') {?>active<?php }?> treeview">
                        <a href="#">
                            <i class="fa fa-inbox"></i> <span><?php echo Lang::T('Communications');?>
</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'send') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
message/send"><?php echo Lang::T('Single Client');?>
</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'send_bulk') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
message/send_bulk"><?php echo Lang::T('Bulk Clients');?>
</a></li>
			    <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'messages') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
messages"><?php echo Lang::T('Sent Messages');?>
</a></li>
			     <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'messages') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
sms"><?php echo Lang::T('Recharge SMS');?>
</a></li>


                            <?php echo $_smarty_tpl->tpl_vars['_MENU_MESSAGE']->value;?>

                        </ul>
                    </li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_PLANS']->value;?>

                    
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_REPORTS']->value;?>

			<li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'setting') {?>class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/activation">
                            <i class="ion ion-chatboxes"></i>
                            <span class="text"><?php echo Lang::T('Payments');?>
</span>
                        </a>
                    </li>

                    
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_MESSAGE']->value;?>

                    <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin'))) {?>

                    <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'network') {?>active<?php }?> treeview">
                        <a href="#">
                            <i class="ion ion-network"></i> <span><?php echo Lang::T('Network');?>
</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[0] == 'routers' && $_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/list"><?php echo Lang::T('Routers');?>
</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[0] == 'pool' && $_smarty_tpl->tpl_vars['_routes']->value[1] == 'list') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
pool/list"><?php echo Lang::T('IP Pool');?>
</a></li>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_NETWORK']->value;?>

                        </ul>
                    </li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_NETWORKS']->value;?>

                    <?php if ($_smarty_tpl->tpl_vars['_c']->value['radius_enable']) {?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'radius') {?>active<?php }?> treeview">
                        <a href="#">
                            <i class="fa fa-database"></i> <span><?php echo Lang::T('Radius');?>
</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[0] == 'radius' && $_smarty_tpl->tpl_vars['_routes']->value[1] == 'nas-list') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
radius/nas-list"><?php echo Lang::T('Radius NAS');?>
</a></li>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_RADIUS']->value;?>

                        </ul>
                    </li>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_RADIUS']->value;?>

                                        <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_PAGES']->value;?>


<li class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'reports') {?>active<?php }?> treeview">
                        <a href="#">
                            <i class="ion ion-clipboard"></i> <span><?php echo Lang::T('Reports');?>
</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'daily-report') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/daily-report"><?php echo Lang::T('Daily Reports');?>
</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'by-period') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
reports/by-period"><?php echo Lang::T('Period Reports');?>
</a></li>
                           
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_REPORTS']->value;?>

                        </ul>
                    </li>
                    <li
                        class="<?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'settings' || $_smarty_tpl->tpl_vars['_system_menu']->value == 'paymentgateway') {?>active<?php }?> treeview">
                        <a href="#">
                            <i class="ion ion-gear-a"></i> <span><?php echo Lang::T('Settings');?>
</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin'))) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'app') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/app"><?php echo Lang::T('General Settings');?>
</a></li>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'notifications') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/notifications"><?php echo Lang::T('Sms Templates');?>
</a></li>
                            <?php }?>
                            <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin','Agent'))) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['_routes']->value[1] == 'users') {?>class="active" <?php }?>><a
                                    href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/users"><?php echo Lang::T('Administrator Users');?>
</a></li>
                            <?php }?>
                            <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin'))) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'paymentgateway') {?>class="active" <?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
paymentgateway">
                                    <span class="text"><?php echo Lang::T('Payment Setup');?>
</span>
                                </a>
                            </li>
                            <?php echo $_smarty_tpl->tpl_vars['_MENU_SETTINGS']->value;?>

                                                        <?php }?>
                        </ul>
                    </li>
                    <?php echo $_smarty_tpl->tpl_vars['_MENU_AFTER_SETTINGS']->value;?>

                    <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin'))) {?>
                    <li <?php if ($_smarty_tpl->tpl_vars['_system_menu']->value == 'logs') {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
logs/phpnuxbill">
                            <i class="ion ion-clock"></i> <span><?php echo Lang::T('System Logs');?>
</span>
                                                    </a>
                                           </li>
                    <?php }?>
                       </ul>
            </section>
        </aside>


        <div class="content-wrapper">
            
            <section class="content">
                <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                <?php echo '<script'; ?>
>
                    // Display SweetAlert toast notification
                    Swal.fire({
                        icon: '<?php if ($_smarty_tpl->tpl_vars['notify_t']->value == "s") {?>success<?php } else { ?>error<?php }?>',
                        title: '<?php echo $_smarty_tpl->tpl_vars['notify']->value;?>
',
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 5000,
                        timerProgressBar: false,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                    });
                <?php echo '</script'; ?>
>
                <?php }
}
}
