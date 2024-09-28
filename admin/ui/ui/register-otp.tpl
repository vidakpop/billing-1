<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{Lang::T('Register')} - {$_c['CompanyName']}</title>
    <link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />

    <!-- Mulish font -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Mulish', sans-serif;
            background: url('https://i.pinimg.com/564x/b4/c5/3b/b4c53b877e01e224a6172e53ac6e8a0f.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-head {
            text-align: center;
            margin-bottom: 20px;
        }
        .site-logo {
            font-size: 24px;
            color: #1e1e2c;
            font-weight: bold;
            text-transform: uppercase;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-size: 14px;
            color: #1e1e2c;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        .form-group input:focus {
            outline: none;
            border-color: #f29f67;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            border-radius: 4px;
            text-decoration: none;
        }
        .btn-primary {
            background-color: #f29f67;
            color: #fff;
        }
        .btn-primary:hover {
            background-color: #e48d53;
        }
        .btn-secondary {
            background-color: #1e1e2c;
            color: #fff;
        }
        .btn-secondary:hover {
            background-color: #38384a;
        }
        .text-center a {
            color: #1e1e2c;
            text-decoration: none;
        }
        .text-center a:hover {
            color: #38384a;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="form-head">
            <h1 class="site-logo">{$_c['CompanyName']}</h1>
        </div>
        {if isset($notify)}
        <script>
            Swal.fire({
                icon: '{if $notify_t == "s"}success{else}warning{/if}',
                title: '{$notify}',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            });
        </script>
        {/if}
        <form action="{$_url}register/post" method="post">
            <div class="form-group">
                <label for="username">
                    {if $_c['country_code_phone']!= ''}{Lang::T('Phone Number')}{else}{Lang::T('Username')}{/if}
                </label>
                {if $_c['country_code_phone']!= ''}
                <input type="text" name="username" id="username" placeholder="{$_c['country_code_phone']} {Lang::T('Phone Number')}">
                {else}
                <input type="text" name="username" id="username" placeholder="{Lang::T('Username')}">
                {/if}
            </div>
            <div class="form-group">
                <label for="otp_code">{Lang::T('SMS Verification Code')}</label>
                <input type="text" required name="otp_code" id="otp_code" placeholder="{Lang::T('Verification Code')}">
            </div>
            <div class="form-group">
                <label for="fullname">{Lang::T('Full Name')}</label>
                <input type="text" required name="fullname" id="fullname" value="{$fullname}">
            </div>
            <div class="form-group">
                <label for="email">{Lang::T('Email')}</label>
                <input type="email" name="email" id="email" placeholder="xxxxxx@xxx.xx" value="{$email}">
            </div>
            <div class="form-group">
                <label for="address">{Lang::T('Address')}</label>
                <input type="text" name="address" id="address" value="{$address}">
            </div>
            <div class="form-group">
                <label for="password">{Lang::T('Password')}</label>
                <input type="password" required name="password" id="password">
            </div>
            <div class="form-group">
                <label for="cpassword">{Lang::T('Confirm Password')}</label>
                <input type="password" required name="cpassword" id="cpassword">
            </div>
            <div class="form-group d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">
                    {Lang::T('Register')}
                </button>
                <a href="{$_url}register" class="btn btn-secondary">
                    {Lang::T('Cancel')}
                </a>
            </div>
            <div class="text-center mt-4">
                <a href="javascript:showPrivacy()">{Lang::T('Privacy')}</a>
                <span class="mx-2 text-gray-800">•</span>
                <a href="javascript:showTaC()">{Lang::T('T & C')}</a>
            </div>
        </form>
    </div>

    {if $_c['tawkto'] != ''}
    <!-- Start of Tawk.to Script -->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/{$_c['tawkto']}';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!-- End of Tawk.to Script -->
    {/if}
    <script src="ui/ui/scripts/vendors.js?v=1"></script>
</body>

</html>
