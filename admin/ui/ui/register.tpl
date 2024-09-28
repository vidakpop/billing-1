<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{Lang::T('Register')} - {$_c['CompanyName']}</title>
    <link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        html.dark {
            background: linear-gradient(135deg, #3b3b3b, #1f1f1f);
        }

        html.light {
            background: linear-gradient(135deg, #f5f5f5, #e0e0e0);
        }

        body {
            font-family: 'Mulish', sans-serif;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-4xl bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
        <div class="mb-6 text-center relative">
            <div class="absolute top-0 right-0 p-2">
                <button id="modeSwitch" class="text-gray-500 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white rounded-full p-1">
                    <i id="lightIcon" class="hidden dark:block fas fa-sun"></i>
                    <i id="darkIcon" class="block dark:hidden fas fa-moon"></i>
                </button>
            </div>
            <h1 class="text-3xl font-bold text-[#1e1e2c] dark:text-white">{$_c['CompanyName']}</h1>
        </div>
        {if isset($notify)}
        <div class="mb-4 p-4 rounded-md {if $notify_t == 's'}bg-green-100 text-green-700 dark:bg-green-800 dark:text-green-400{else}bg-red-100 text-red-700 dark:bg-red-800 dark:text-red-400{/if}">
            <p>{$notify}</p>
        </div>
        {/if}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="col-span-1 md:col-span-1">
                <!-- Registration Info -->
                {include file="$_path/../pages/Registration_Info.html"}
            </div>
            <form class="col-span-2 md:col-span-2" action="{$_url}register/post" method="post">
                <div class="p-8 bg-white dark:bg-gray-700 rounded-lg shadow-md">
                    <div class="mb-6">
                        <label class="block text-[#1e1e2c] dark:text-white font-bold mb-2" for="username">
                            {if $_c['country_code_phone']!= ''}{Lang::T('Phone Number')}{else}{Lang::T('Username')}{/if}
                        </label>
                        <div class="relative">
                            {if $_c['country_code_phone']!= ''}
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-phone-alt text-[#1e1e2c] dark:text-white"></i>
                            </div>
                            {else}
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-user text-[#1e1e2c] dark:text-white"></i>
                            </div>
                            {/if}
                            <input type="text" name="username" id="username" class="form-input w-full pl-10 pr-3 py-2 rounded-lg border border-[#1e1e2c] dark:border-white focus:outline-none focus:ring-2 focus:ring-[#f29f67] focus:border-transparent transition-all duration-300 dark:bg-gray-800 dark:text-white" placeholder="{if $_c['country_code_phone']!= ''}{$_c['country_code_phone']} {Lang::T('Phone Number')}{else}{Lang::T('Username')}{/if}">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label class="block text-[#1e1e2c] dark:text-white font-bold mb-2" for="fullname">{Lang::T('Full Name')}</label>
                        <input type="text" required name="fullname" id="fullname" class="form-input w-full py-2 rounded-lg border border-[#1e1e2c] dark:border-white focus:outline-none focus:ring-2 focus:ring-[#f29f67] focus:border-transparent transition-all duration-300 dark:bg-gray-800 dark:text-white" value="{$fullname}">
                    </div>
                    <div class="mb-6">
                        <label class="block text-[#1e1e2c] dark:text-white font-bold mb-2" for="email">{Lang::T('Email')}</label>
                        <input type="email" name="email" id="email" class="form-input w-full py-2 rounded-lg border border-[#1e1e2c] dark:border-white focus:outline-none focus:ring-2 focus:ring-[#f29f67] focus:border-transparent transition-all duration-300 dark:bg-gray-800 dark:text-white" placeholder="xxxxxxx@xxxx.xx" value="{$email}">
                    </div>
                    <div class="mb-6">
                        <label class="block text-[#1e1e2c] dark:text-white font-bold mb-2" for="address">{Lang::T('Address')}</label>
                        <input type="text" name="address" id="address" class="form-input w-full py-2 rounded-lg border border-[#1e1e2c] dark:border-white focus:outline-none focus:ring-2 focus:ring-[#f29f67] focus:border-transparent transition-all duration-300 dark:bg-gray-800 dark:text-white" value="{$address}">
                    </div>
                    <div class="mb-6">
                        <label class="block text-[#1e1e2c] dark:text-white font-bold mb-2" for="password">{Lang::T('Password')}</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-[#1e1e2c] dark:text-white"></i>
                            </div>
                            <input type="password" required name="password" id="password" class="form-input w-full pl-10 pr-3 py-2 rounded-lg border border-[#1e1e2c] dark:border-white focus:outline-none focus:ring-2 focus:ring-[#f29f67] focus:border-transparent transition-all duration-300
dark:bg-gray-800 dark:text-white">
</div>
<div class="mb-6">
<label class="block text-[#1e1e2c] dark:text-white font-bold mb-2" for="cpassword">{Lang::T('Confirm Password')}</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
<i class="fas fa-lock text-[#1e1e2c] dark:text-white"></i>
</div>
<input type="password" required name="cpassword" id="cpassword" class="form-input w-full pl-10 pr-3 py-2 rounded-lg border border-[#1e1e2c] dark:border-white focus:outline-none focus:ring-2 focus:ring-[#f29f67] focus:border-transparent transition-all duration-300 dark:bg-gray-800 dark:text-white">
</div>
</div>
<div class="flex justify-between">
<div>
<a href="{$_url}login" class="text-[#f29f67] hover:text-[#f29f67]/80 dark:text-white">{Lang::T('Cancel')}</a>
</div>
<div>
<button type="submit" class="flex items-center justify-center bg-[#f29f67] hover:bg-[#f29f67]/80 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition-all duration-300 relative">
<span class="icon">
<i class="fas fa-user-plus"></i>
</span>
{Lang::T('Register')}
<div class="loader absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden">
<div class="w-6 h-6 border-4 border-white border-t-4 border-t-transparent rounded-full animate-spin"></div>
</div>
</button>
</div>
</div>
</div>
</form>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        $('form').submit(function() {
            $(this).find('.loader').removeClass('hidden');
        });

        const modeSwitch = document.getElementById('modeSwitch');
        const lightIcon = document.getElementById('lightIcon');
        const darkIcon = document.getElementById('darkIcon');
        const html = document.documentElement;

        modeSwitch.addEventListener('click', () => {
            if (html.classList.contains('dark')) {
                html.classList.remove('dark');
                html.classList.add('light');
                lightIcon.classList.add('hidden');
                darkIcon.classList.remove('hidden');
            } else {
                html.classList.remove('light');
                html.classList.add('dark');
                lightIcon.classList.remove('hidden');
                darkIcon.classList.add('hidden');
            }
        });
    });
</script>
</body>

</html>