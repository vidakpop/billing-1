<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{$_title} - {$_c['CompanyName']}</title>
    <link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />


    <link rel="stylesheet" href="ui/ui/styles/bootstrap.min.css">

    <link rel="stylesheet" href="ui/ui/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="ui/ui/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="ui/ui/styles/modern-AdminLTE.min.css">
    <link rel="stylesheet" href="ui/ui/styles/select2.min.css" />
    <link rel="stylesheet" href="ui/ui/styles/select2-bootstrap.min.css" />
    <link rel="stylesheet" href="ui/ui/styles/sweetalert2.min.css" />
    <link rel="stylesheet" href="ui/ui/styles/plugins/pace.css" />
    <script src="ui/ui/scripts/sweetalert2.all.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
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

    {if isset($xheader)}
    {$xheader}
    {/if}

</head>

<body class="hold-transition modern-skin-light bg-white  text-gray-800 sidebar-mini {if $_kolaps}sidebar-collapse{/if}">
    <div class="wrapper">
        <header class="main-header">
            <a href="{$_url}dashboard" class="logo">
                <span class="logo-mini"><b>B</b>Isp</span>
                <span class="logo-lg">{$_c['CompanyName']}</span>
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
                    <span class="text-lg font-bold">{$_admin['fullname'][0]}</span>
                    <!-- Online Status Indicator -->
                    <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 border-2 border-white rounded-full"></span>
                </div>
                            </a>    <ul class="dropdown-menu">
        <li>
            <a href="{$_url}settings/change-password">
                <i class="ion ion-settings"></i> {Lang::T('Change Password')}
            </a>
        </li>
        <li>
            <a href="{$_url}settings/users-view/{$_admin['id']}">
                <i class="ion ion-person"></i> {Lang::T('My Account')}
            </a>
        </li>
        <li>
            <a href="{$_url}logout">
                <i class="ion ion-power"></i> {Lang::T('Logout')}
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
                    <li {if $_system_menu eq 'dashboard' }class="active" {/if}>
                        <a href="{$_url}dashboard">
                            <i class="fa-solid fa-house"></i>
                            <span>{Lang::T('Dashboard')}</span>
                        </a>
                    </li>
                    {$_MENU_AFTER_DASHBOARD}
<li class="{if $_system_menu eq 'onlineusers'}active{/if} treeview">
                        <a href="#">
                            <i class="fa fa-signal"></i> <span>{Lang::T('Online Clients')}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li {if $_routes[1] eq 'hotspot' }class="active" {/if}><a
                                    href="{$_url}onlineusers/hotspot">{Lang::T('Hotspot Client')}</a></li>
                            <li {if $_routes[1] eq 'send_bulk' }class="active" {/if}><a
                                    href="{$_url}plugin/pppoe">{Lang::T('Pppoe Clients')}</a></li>
                            {$_MENU_MESSAGE}
                        </ul>
                    </li>

 			

                    {if !in_array($_admin['user_type'],['Report'])}
                    <li class="{if $_system_menu eq 'services'}active{/if} treeview">
                        <a href="#">
                            <i class="ion ion-cube"></i> <span>{Lang::T('Clients')}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li {if $_routes[1] eq 'all' }class="active" {/if}><a
                                    href="{$_url}customers">All Clients</a></li>
                            <li {if $_routes[1] eq 'hotspot' }class="active" {/if}><a
                                    href="{$_url}customers/hotspot">Hotspot Clients</a></li>
                            <li {if $_routes[1] eq 'pppoe' }class="active" {/if}><a
                                    href="{$_url}customers/pppoe">PPPOE</a></li>
                            {$_MENU_PLANS}
                        </ul>
                    </li>
                    {$_MENU_AFTER_CUSTOMERS}
                    <li class="{if $_system_menu eq 'plan'}active{/if} treeview">
                        <a href="#">
                            <i class="fa fa-ticket"></i> <span>{Lang::T('Services')}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li {if $_routes[1] eq 'list' }class="active" {/if}><a
                                    href="{$_url}plan/list">{Lang::T('Active Accounts')}</a></li>
                            {if $_c['disable_voucher'] != 'yes'}
                            <li {if $_routes[1] eq 'voucher' }class="active" {/if}><a
                                    href="{$_url}plan/voucher">{Lang::T('Vouchers')}</a></li>
                            <li {if $_routes[1] eq 'refill' }class="active" {/if}><a
                                    href="{$_url}plan/refill">{Lang::T('Refill Client')}</a></li>
                            {/if}
                            <li {if $_routes[1] eq 'recharge' }class="active" {/if}><a
                                    href="{$_url}plan/recharge">{Lang::T('Recharge Client')}</a></li>
                            {if $_c['enable_balance'] == 'yes'}
                            <li {if $_routes[1] eq 'deposit' }class="active" {/if}><a
                                    href="{$_url}plan/deposit">{Lang::T('Top-Up Wallet')}</a></li>
                            {/if}
                            {$_MENU_SERVICES}
                        </ul>
                    </li>
                    {/if}
                    {$_MENU_AFTER_SERVICES}
                    {if in_array($_admin['user_type'],['SuperAdmin','Admin'])}
                    <li class="{if $_system_menu eq 'services'}active{/if} treeview">
                        <a href="#">
                            <i class="ion ion-cube"></i> <span>{Lang::T(' Internet Packages')}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li {if $_routes[1] eq 'hotspot' }class="active" {/if}><a
                                    href="{$_url}services/hotspot">Hotspot</a></li>
                            <li {if $_routes[1] eq 'pppoe' }class="active" {/if}><a
                                    href="{$_url}services/pppoe">PPPOE</a></li>
                            <li {if $_routes[1] eq 'list' }class="active" {/if}><a
                                    href="{$_url}bandwidth/list">{Lang::T('Bandwidth')}</a></li>
                            {if $_c['enable_balance'] == 'yes'}
                            <li {if $_routes[1] eq 'balance' }class="active" {/if}><a
                                    href="{$_url}services/balance">{Lang::T('Customer Balance')}</a></li>
                            {/if}
                            {$_MENU_PLANS}
                        </ul>
                    </li>
                    {/if}
<li class="{if $_system_menu eq 'message'}active{/if} treeview">
                        <a href="#">
                            <i class="fa fa-inbox"></i> <span>{Lang::T('Communications')}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li {if $_routes[1] eq 'send' }class="active" {/if}><a
                                    href="{$_url}message/send">{Lang::T('Single Client')}</a></li>
                            <li {if $_routes[1] eq 'send_bulk' }class="active" {/if}><a
                                    href="{$_url}message/send_bulk">{Lang::T('Bulk Clients')}</a></li>
			    <li {if $_routes[1] eq 'messages' }class="active" {/if}><a
                                    href="{$_url}messages">{Lang::T('Sent Messages')}</a></li>
			     <li {if $_routes[1] eq 'messages' }class="active" {/if}><a
                                    href="{$_url}sms">{Lang::T('Recharge SMS')}</a></li>


                            {$_MENU_MESSAGE}
                        </ul>
                    </li>
                    {$_MENU_AFTER_PLANS}
                    
                    {$_MENU_AFTER_REPORTS}
			<li {if $_system_menu eq 'setting' }class="active" {/if}>
                        <a href="{$_url}reports/activation">
                            <i class="ion ion-chatboxes"></i>
                            <span class="text">{Lang::T('Payments')}</span>
                        </a>
                    </li>

                    
                    {$_MENU_AFTER_MESSAGE}
                    {if in_array($_admin['user_type'],['SuperAdmin','Admin'])}

                    <li class="{if $_system_menu eq 'network'}active{/if} treeview">
                        <a href="#">
                            <i class="ion ion-network"></i> <span>{Lang::T('Network')}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li {if $_routes[0] eq 'routers' and $_routes[1] eq 'list' }class="active" {/if}><a
                                    href="{$_url}routers/list">{Lang::T('Routers')}</a></li>
                            <li {if $_routes[0] eq 'pool' and $_routes[1] eq 'list' }class="active" {/if}><a
                                    href="{$_url}pool/list">{Lang::T('IP Pool')}</a></li>
                            {$_MENU_NETWORK}
                        </ul>
                    </li>
                    {$_MENU_AFTER_NETWORKS}
                    {if $_c['radius_enable']}
                    <li class="{if $_system_menu eq 'radius'}active{/if} treeview">
                        <a href="#">
                            <i class="fa fa-database"></i> <span>{Lang::T('Radius')}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li {if $_routes[0] eq 'radius' and $_routes[1] eq 'nas-list' }class="active" {/if}><a
                                    href="{$_url}radius/nas-list">{Lang::T('Radius NAS')}</a></li>
                            {$_MENU_RADIUS}
                        </ul>
                    </li>
                    {/if}
                    {$_MENU_AFTER_RADIUS}
                                        {/if}
                    {$_MENU_AFTER_PAGES}

<li class="{if $_system_menu eq 'reports'}active{/if} treeview">
                        <a href="#">
                            <i class="ion ion-clipboard"></i> <span>{Lang::T('Reports')}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li {if $_routes[1] eq 'daily-report' }class="active" {/if}><a
                                    href="{$_url}reports/daily-report">{Lang::T('Daily Reports')}</a></li>
                            <li {if $_routes[1] eq 'by-period' }class="active" {/if}><a
                                    href="{$_url}reports/by-period">{Lang::T('Period Reports')}</a></li>
                           
                            {$_MENU_REPORTS}
                        </ul>
                    </li>
                    <li
                        class="{if $_system_menu eq 'settings' || $_system_menu eq 'paymentgateway' }active{/if} treeview">
                        <a href="#">
                            <i class="ion ion-gear-a"></i> <span>{Lang::T('Settings')}</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-right pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            {if in_array($_admin['user_type'],['SuperAdmin','Admin'])}
                            <li {if $_routes[1] eq 'app' }class="active" {/if}><a
                                    href="{$_url}settings/app">{Lang::T('General Settings')}</a></li>
                            <li {if $_routes[1] eq 'notifications' }class="active" {/if}><a
                                    href="{$_url}settings/notifications">{Lang::T('Sms Templates')}</a></li>
                            {/if}
                            {if in_array($_admin['user_type'],['SuperAdmin','Admin','Agent'])}
                            <li {if $_routes[1] eq 'users' }class="active" {/if}><a
                                    href="{$_url}settings/users">{Lang::T('Administrator Users')}</a></li>
                            {/if}
                            {if in_array($_admin['user_type'],['SuperAdmin','Admin'])}
                            <li {if $_system_menu eq 'paymentgateway' }class="active" {/if}>
                                <a href="{$_url}paymentgateway">
                                    <span class="text">{Lang::T('Payment Setup')}</span>
                                </a>
                            </li>
                            {$_MENU_SETTINGS}
                                                        {/if}
                        </ul>
                    </li>
                    {$_MENU_AFTER_SETTINGS}
                    {if in_array($_admin['user_type'],['SuperAdmin','Admin'])}
                    <li {if $_system_menu eq 'logs' }class="active"{/if}>
                        <a href="{$_url}logs/phpnuxbill">
                            <i class="ion ion-clock"></i> <span>{Lang::T('System Logs')}</span>
                                                    </a>
                                           </li>
                    {/if}
                       </ul>
            </section>
        </aside>


        <div class="content-wrapper">
            
            <section class="content">
                {if isset($notify)}
                <script>
                    // Display SweetAlert toast notification
                    Swal.fire({
                        icon: '{if $notify_t == "s"}success{else}error{/if}',
                        title: '{$notify}',
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
                </script>
                {/if}