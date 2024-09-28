<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>{Lang::T('Register')} - {$_c['CompanyName']}</title>
    <link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="ui/ui/scripts/sweetalert2.all.min.js"></script>
    <style>
        body {
            font-family: 'Mulish', sans-serif;
            background: url('https://i.pinimg.com/564x/3e/81/d9/3e81d9135fbeb2ebb0a8706ef460458a.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .text-primary {
            color: #1e1e2c;
        }
        .bg-primary {
            background-color: #1e1e2c;
        }
        .bg-secondary {
            background-color: #f29f67;
        }
        .hover-bg-secondary:hover {
            background-color: #e48d53;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-3xl">
        <div class="mb-6 text-center">
            <h1 class="text-4xl font-bold text-primary">{$_c['CompanyName']}</h1>
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
                },
                customClass: {
                    popup: 'bg-white text-primary shadow-lg rounded-lg',
                    title: 'text-lg font-semibold',
                    icon: 'text-secondary', // Replace with the desired color for the success icon
                    iconHtml: '<i class="fas fa-check-circle"></i>', // Replace with the desired icon for success
                }
            });
        </script>
        {/if}
        <div class="bg-white rounded-lg p-6 shadow-lg">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-2/3 px-4">
                    <div class="mb-4">
                        <div class="mb-4 text-lg font-semibold text-primary">1. {Lang::T('Register as Member')}</div>
                        <div>
                            <form action="{$_url}register" method="post">
                                <div class="mb-4">
                                    <label class="block text-primary font-bold mb-2" for="username">
                                        {if $_c['country_code_phone']!= ''}{Lang::T('Phone Number')}{else}{Lang::T('Username')}{/if}
                                    </label>
                                    <div class="relative">
                                        {if $_c['country_code_phone']!= ''}
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-phone-alt text-gray-400"></i>
                                        </div>
                                        {else}
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fas fa-user text-gray-400"></i>
                                        </div>
                                        {/if}
                                        <input class="form-input w-full pl-10 pr-3 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-secondary focus:border-transparent" type="text" name="username" placeholder="{if $_c['country_code_phone']!= ''}{$_c['country_code_phone']} {Lang::T('Phone Number')}{else}{Lang::T('Username')}{/if}">
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <a class="text-sm text-primary hover:text-gray-800" href="{$_url}login">
                                        {Lang::T('Cancel')}
                                    </a>
                                    <button class="bg-secondary hover-bg-secondary text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                        {Lang::T('Request OTP')}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <a href="javascript:showPrivacy()" class="text-sm text-primary hover:text-gray-800 mr-2">Privacy</a>
                        <span class="text-primary">•</span>
                        <a href="javascript:showTaC()" class="text-sm text-primary hover:text-gray-800 ml-2">T &amp; C</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="HTMLModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body" id="HTMLModal_konten"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">&times;</button>
                </div>
            </div>
        </div>
    </div>
    {if $_c['tawkto'] != ''}
    <!-- Start of Tawk.to Script -->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
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
