<?php
/* Smarty version 4.3.1, created on 2024-08-02 01:47:43
  from '/var/www/html/aleehnetworks/ui/ui/user-login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66ac108f7b9d47_88873135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '780caeae81e0557c972af2996b13193961a24371' => 
    array (
      0 => '/var/www/html/aleehnetworks/ui/ui/user-login.tpl',
      1 => 1718924401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac108f7b9d47_88873135 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Login - Your Company Name</title>
    <link rel="shortcut icon" href="ui/ui/images/logo.png" type="image/x-icon" />
    <?php echo '<script'; ?>
 src="https://cdn.tailwindcss.com"><?php echo '</script'; ?>
>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Mulish', sans-serif;
            background-image: url('https://i.pinimg.com/564x/3e/81/d9/3e81d9135fbeb2ebb0a8706ef460458a.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-6">
        <div class="mb-6 text-center">
            <h1 class="text-3xl font-bold text-[#1e1e2c]"><?php echo $_smarty_tpl->tpl_vars['_c']->value['CompanyName'];?>
</h1>
        </div>

        <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
        <div class="mb-4 p-4 rounded-md <?php if ($_smarty_tpl->tpl_vars['notify_t']->value == 's') {?>bg-green-100 text-green-700<?php } else { ?>bg-red-100 text-red-700<?php }?>">
            <p><?php echo $_smarty_tpl->tpl_vars['notify']->value;?>
</p>
        </div>
        <?php }?>
        <div>
            <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
login/post" method="post">
                <div class="mb-4">
                    <label class="block text-[#1e1e2c] font-bold mb-2" for="username">
                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['country_code_phone'] != '') {?>
                            <?php echo Lang::T('Phone Number');?>

                        <?php } else { ?>
                            <?php echo Lang::T('Username');?>

                        <?php }?>
                    </label>
                    <div class="relative">
                        <?php if ($_smarty_tpl->tpl_vars['_c']->value['country_code_phone'] != '') {?>
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-phone-alt text-[#1e1e2c]"></i>
                        </div>
                        <?php } else { ?>
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-user text-[#1e1e2c]"></i>
                        </div>
                        <?php }?>
                        <input class="form-input w-full pl-10 pr-3 py-2 rounded-lg border border-[#1e1e2c] focus:outline-none focus:ring-2 focus:ring-[#f29f67] focus:border-transparent transition-all duration-300" type="text" name="username" placeholder="<?php echo Lang::T('Username');?>
">
                    </div>
                </div>
                <div class="mb-6">
                    <label class="block text-[#1e1e2c] font-bold mb-2" for="password">
                        <?php echo Lang::T('Password');?>

                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-[#1e1e2c]"></i>
                        </div>
                        <input class="form-input w-full pl-10 pr-3 py-2 rounded-lg border border-[#1e1e2c] focus:outline-none focus:ring-2 focus:ring-[#f29f67] focus:border-transparent transition-all duration-300" type="password" name="password" placeholder="<?php echo Lang::T('Password');?>
">
                    </div>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember-me" class="form-checkbox text-[#f29f67] rounded">
                        <label for="remember-me" class="ml-2 text-[#1e1e2c]">Remember me</label>
                    </div>
                    <a href="#" class="text-sm text-[#f29f67] hover:text-[#f29f67]/80">Forgot password?</a>
                </div>
                <button class="w-full bg-[#f29f67] hover:bg-[#f29f67]/80 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition-all duration-300" type="submit">
                    <?php echo Lang::T('Login');?>

                </button>
            </form>
            <div class="mt-4 text-center">
                <span class="text-[#1e1e2c]">Don't have an account?</span>
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
register" class="text-[#f29f67] hover:text-[#f29f67]/80 ml-1">Register</a>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
