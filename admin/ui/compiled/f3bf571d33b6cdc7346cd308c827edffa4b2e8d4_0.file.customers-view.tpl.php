<?php
/* Smarty version 4.3.1, created on 2024-08-02 02:46:32
  from '/var/www/html/aleehnetworks/ui/ui/customers-view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66ac1e5806c1c3_21458793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3bf571d33b6cdc7346cd308c827edffa4b2e8d4' => 
    array (
      0 => '/var/www/html/aleehnetworks/ui/ui/customers-view.tpl',
      1 => 1722555989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_66ac1e5806c1c3_21458793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="flex flex-col lg:flex-row">
    <!-- Profile Section -->
    <div class="lg:w-1/3 p-4">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="p-4 flex flex-col items-center">
                <img class="w-24 h-24 rounded-full object-cover"
                    src="https://robohash.org/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
?set=set3&size=100x100&bgset=bg1"
                    onerror="this.src='<?php echo $_smarty_tpl->tpl_vars['UPLOAD_PATH']->value;?>
/user.default.jpg'" alt="avatar">
                <h3 class="mt-2 text-lg font-semibold text-gray-800"><?php echo $_smarty_tpl->tpl_vars['d']->value['fullname'];?>
</h3>
                <ul class="w-full mt-4 space-y-2">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array('status','username','phonenumber','email','address','password','pppoe_password'), 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                        <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                            <span class="font-medium text-gray-700"><?php echo Lang::T(ucfirst($_smarty_tpl->tpl_vars['item']->value));?>
</span>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value == 'password' || $_smarty_tpl->tpl_vars['item']->value == 'pppoe_password') {?>
                                <input type="password" value="<?php echo $_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['item']->value];?>
" class="text-right border-0 bg-transparent focus:outline-none"
                                    onmouseenter="this.type='text'" onmouseleave="this.type='password'" onclick="this.select()">
                            <?php } else { ?>
                                <span class="text-gray-600"><?php echo $_smarty_tpl->tpl_vars['d']->value[$_smarty_tpl->tpl_vars['item']->value];?>
</span>
                            <?php }?>
                        </li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <!-- Service Details -->
                    <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                        <span class="font-medium text-gray-700"><?php echo Lang::T('Service Type');?>
</span>
                        <span class="text-gray-600"><?php echo Lang::T($_smarty_tpl->tpl_vars['d']->value['service_type']);?>
</span>
                    </li>
                    <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                        <span class="font-medium text-gray-700"><?php echo Lang::T('Balance');?>
</span>
                        <span class="text-gray-600"><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['d']->value['balance']);?>
</span>
                    </li>
                    <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                        <span class="font-medium text-gray-700"><?php echo Lang::T('Auto Renewal');?>
</span>
                        <span class="text-gray-600"><?php if ($_smarty_tpl->tpl_vars['d']->value['auto_renewal']) {?>yes<?php } else { ?>no<?php }?></span>
                    </li>
                    <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                        <span class="font-medium text-gray-700"><?php echo Lang::T('Created On');?>
</span>
                        <span class="text-gray-600"><?php echo Lang::dateTimeFormat($_smarty_tpl->tpl_vars['d']->value['created_at']);?>
</span>
                    </li>
                    <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                        <span class="font-medium text-gray-700"><?php echo Lang::T('Last Login');?>
</span>
                        <span class="text-gray-600"><?php echo Lang::dateTimeFormat($_smarty_tpl->tpl_vars['d']->value['last_login']);?>
</span>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['d']->value['coordinates']) {?>
                        <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                            <span class="font-medium text-gray-700"><?php echo Lang::T('Coordinates');?>
</span>
                            <span class="text-gray-600">
                                <i class="fas fa-map-marker-alt"></i> <a class="text-blue-500 hover:underline"
                                    href="https://www.google.com/maps/dir//<?php echo $_smarty_tpl->tpl_vars['d']->value['coordinates'];?>
/" target="_blank">Get Directions</a>
                            </span>
                        </li>
                        <div id="map" class="w-full h-64 mt-4"></div>
                    <?php }?>
                </ul>
                <div class="flex flex-col mt-4">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/delete/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"
                        class="bg-red-600 text-white py-2 px-4 rounded shadow hover:bg-red-700 mb-2"
                        onclick="return confirm('<?php echo Lang::T('Delete');?>
?')"><i class="fas fa-trash"></i> <?php echo Lang::T('Delete');?>
</a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/edit/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"
                        class="bg-yellow-500 text-white py-2 px-4 rounded shadow hover:bg-yellow-600"><?php echo Lang::T('Edit');?>
</a>
                </div>
            </div>
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'package');
$_smarty_tpl->tpl_vars['package']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->do_else = false;
?>
            <div class="bg-white shadow rounded-lg mt-4 overflow-hidden">
                <div class="p-4">
                    <h4 class="text-center text-lg font-semibold text-gray-800"><?php echo $_smarty_tpl->tpl_vars['package']->value['type'];?>
 - <?php echo $_smarty_tpl->tpl_vars['package']->value['namebp'];?>
</h4>
                    <ul class="mt-4 space-y-2">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, array('status','type','created_on','expires_on','routers'), 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                                <span class="font-medium text-gray-700"><?php echo Lang::T(ucfirst($_smarty_tpl->tpl_vars['item']->value));?>
</span>
                                <span class="text-gray-600">
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value == 'status') {?>
                                        <?php if ($_smarty_tpl->tpl_vars['package']->value['status'] == 'on') {?>yes<?php } else { ?>no<?php }?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value == 'type') {?>
                                        <?php if ($_smarty_tpl->tpl_vars['package']->value['prepaid'] == 'yes') {?>Prepaid<?php } else { ?><b>Postpaid</b><?php }?>
                                    <?php } else { ?>
                                        <?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['package']->value[$_smarty_tpl->tpl_vars['item']->value]);?>

                                    <?php }?>
                                </span>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <div class="flex mt-4">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/deactivate/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['package']->value['plan_id'];?>
" class="bg-red-600 text-white py-2 px-4 rounded shadow hover:bg-red-700 flex-1 mr-2"
                            onclick="return confirm('This will deactivate Customer Plan, and make it expired')"><?php echo Lang::T('Deactivate');?>
</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/recharge/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['package']->value['plan_id'];?>
" class="bg-green-600 text-white py-2 px-4 rounded shadow hover:bg-green-700 flex-1"
                            ><?php echo Lang::T('Recharge');?>
</a>
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div class="flex mt-4">
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/list" class="bg-blue-600 text-white py-2 px-4 rounded shadow hover:bg-blue-700 flex-1 mr-2"><?php echo Lang::T('Back');?>
</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/sync/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" onclick="return confirm('This will sync Customer to Mikrotik?')"
                class="bg-teal-600 text-white py-2 px-4 rounded shadow hover:bg-teal-700 flex-1 mr-2"><?php echo Lang::T('Sync');?>
</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
message/send/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="bg-green-600 text-white py-2 px-4 rounded shadow hover:bg-green-700 flex-1"><?php echo Lang::T('Send Message');?>
</a>
        </div>
    </div>

    <!-- History Section -->
    <div class="lg:w-2/3 p-4">
        <ul class="flex border-b">
            <li class="mr-1">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/order"
                    class="py-2 px-4 inline-block text-gray-700 <?php if ($_smarty_tpl->tpl_vars['v']->value == 'order') {?>border-b-2 border-indigo-600 font-semibold<?php }?>">30 <?php echo Lang::T('Order History');?>
</a>
            </li>
            <li class="mr-1">
                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
/activation"
                    class="py-2 px-4 inline-block text-gray-700 <?php if ($_smarty_tpl->tpl_vars['v']->value == 'activation') {?>border-b-2 border-indigo-600 font-semibold<?php }?>">60 <?php echo Lang::T('Activation History');?>
</a>
            </li>
        </ul>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
