<?php
/* Smarty version 4.3.1, created on 2024-08-02 02:56:59
  from '/var/www/html/aleehnetworks/ui/ui/hotspot_customers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66ac20cbe980a9_96262486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8c7078258ab2a2cd9ea5f1c4cdc9a3c272d945a' => 
    array (
      0 => '/var/www/html/aleehnetworks/ui/ui/hotspot_customers.tpl',
      1 => 1722555599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_66ac20cbe980a9_96262486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- Include Tailwind CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<!-- Include FontAwesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600&display=swap');

    body {
        font-family: 'Mulish', sans-serif;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        display: inline-block;
        padding: 5px 10px;
        margin-right: 5px;
        border: 1px solid #ccc;
        background-color: #fff;
        color: #333;
        cursor: pointer;
    }

    .no-package {
        font-size: 0.75rem; /* Adjusted font size */
    }

    .action-icons a {
        margin-right: 0.5rem; /* Spacing between icons */
    }

    .username {
        color: #4f46e5; /* Tailwind's indigo-600 */
        font-weight: bold;
    }
</style>

<div class="container mx-auto mt-8">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="mb-4">
            <form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers?type=hotspot" class="flex flex-wrap items-center justify-between space-y-4 md:space-y-0">
                <div class="flex items-center relative">
                    <input type="text" name="search" class="form-control border border-gray-300 rounded-md p-2 pl-10" placeholder="<?php echo Lang::T('Search');?>
..." value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.41-1.41l4.1 4.1a1 1 0 01-1.42 1.42l-4.1-4.1zM8 14A6 6 0 108 2a6 6 0 000 12z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <div class="flex space-x-4">
                    <button class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit"><?php echo Lang::T('Query');?>
</button>
                    <button class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" name="export" value="csv">
                        <i class="fas fa-download"></i> CSV
                    </button>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/add" class="btn btn-success bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                        <i class="fas fa-plus mr-2"></i> <?php echo Lang::T('Add Client');?>

                    </a>
                </div>
            </form>
        </div>

        <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
            <table id="customerTable" class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-200 text-left"><?php echo Lang::T('Username');?>
</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left"><?php echo Lang::T('Full Name');?>
</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left"><?php echo Lang::T('Balance');?>
</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left"><?php echo Lang::T('Service Type');?>
</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left"><?php echo Lang::T('Status');?>
</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left"><?php echo Lang::T('Created On');?>
</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-center"><?php echo Lang::T('Manage');?>
</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customers']->value, 'customer');
$_smarty_tpl->tpl_vars['customer']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customer']->value) {
$_smarty_tpl->tpl_vars['customer']->do_else = false;
?>
                        <tr class="<?php if ($_smarty_tpl->tpl_vars['customer']->value['status'] != 'Active') {?>bg-red-100<?php }?> hover:bg-gray-100">
                            <td class="py-2 px-4 border-b border-gray-200 cursor-pointer username" onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/view/<?php echo $_smarty_tpl->tpl_vars['customer']->value['id'];?>
'"><?php echo $_smarty_tpl->tpl_vars['customer']->value['username'];?>
</td>
                            <td class="py-2 px-4 border-b border-gray-200 cursor-pointer" onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/view/<?php echo $_smarty_tpl->tpl_vars['customer']->value['id'];?>
'"><?php echo $_smarty_tpl->tpl_vars['customer']->value['fullname'];?>
</td>
                            <td class="py-2 px-4 border-b border-gray-200"><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['customer']->value['balance']);?>
</td>
                            <td class="py-2 px-4 border-b border-gray-200"><?php echo $_smarty_tpl->tpl_vars['customer']->value['service_type'];?>
</td>
                            <td class="py-2 px-4 border-b border-gray-200"><?php echo Lang::T($_smarty_tpl->tpl_vars['customer']->value['status']);?>
</td>
                            <td class="py-2 px-4 border-b border-gray-200"><?php echo Lang::dateTimeFormat($_smarty_tpl->tpl_vars['customer']->value['created_at']);?>
</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-center action-icons flex ">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/view/<?php echo $_smarty_tpl->tpl_vars['customer']->value['id'];?>
" class="text-white bg-green-500 hover:bg-green-700 rounded-md px-2 py-1 mx-1">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var $j = jQuery.noConflict();

    $j(document).ready(function() {
        $j('#customerTable').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ],
            "pageLength": 25
        });
    });
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
