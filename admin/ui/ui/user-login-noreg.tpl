<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{Lang::T('Login')} - {$_c['CompanyName']}</title>
    <link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Mulish font -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gradient-to-b from-indigo-500 to-indigo-600 text-gray-800 font-mulish">
    <div class="container mx-auto">
        <div class="hidden xs:mb-24"></div>
        <div class="form-head mb-20">
            <h1 class="site-logo h2 mb-5 mt-5 text-center text-uppercase font-bold">
                {$_c['CompanyName']}
            </h1>
            <hr class="border-t border-white">
        </div>
        {if isset($notify)}
            <div class="alert alert-{if $notify_t == 's'}success{else}danger{/if} bg-white text-gray-800 px-4 py-2 mb-4 rounded">
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">×</span>
                </button>
                <div>{$notify}</div>
            </div>
        {/if}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="col-span-1 md:col-span-1">
                <div class="panel panel-info bg-white rounded-lg shadow-md">
                    <div class="panel-heading text-center text-lg font-bold bg-indigo-600 text-white py-3">
                        {Lang::T('Announcement')}
                    </div>
                    <div class="panel-body px-4 py-6">
                        {include file="$_path/../pages/Announcement.html"}
                    </div>
                </div>
            </div>
            <div class="col-span-1 md:col-span-1">
                <div class="panel panel-primary bg-white rounded-lg shadow-md">
                    <div class="panel-heading text-center text-lg font-bold bg-indigo-600 text-white py-3">
                        {Lang::T('Login / Activate Voucher')}
                    </div>
                    <div class="panel-body px-4 py-6">
                        <form action="{$_url}login/activation" method="post">
                            <div class="form-group mb-4">
                                <label class="block font-bold">{if $_c['country_code_phone']!= ''}{Lang::T('Phone Number')}{else}{Lang::T('Username')}{/if}</label>
                                <div class="relative">
                                    <span
                                        class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-600">
                                        <i class="fas fa-user"></i>
                                    </span>
                                    <input type="text" class="form-control pl-10 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                                        name="username" required
                                        placeholder="{if $_c['country_code_phone']!= ''}{$_c['country_code_phone']} {Lang::T('Phone Number')}{else}{Lang::T('Username')}{/if}">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="block font-bold">{Lang::T('Enter voucher code here')}</label>
                                <input type="text" class="form-control border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                                    name="voucher" required autocomplete="off"
                                    placeholder="{Lang::T('Code Voucher')}">
                            </div>
                            <div class="btn-group btn-group-justified mb-5">
                                <button type="submit"
                                    class="btn btn-primary w-full">{Lang::T('Login / Activate Voucher')}</button>
                            </div>
                            <div class="text-center">
                                <a href="./pages/Privacy_Policy.html" target="_blank"
                                    class="text-gray-400 hover:text-indigo-300">{Lang::T('Privacy')}</a>
                                &bull;
                                <a href="./pages/Terms_of_Conditions.html" target="_blank"
                                    class="text-gray-400 hover:text-indigo-300">{Lang::T('ToC')}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
</body>

</html>
