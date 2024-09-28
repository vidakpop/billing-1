<?php
/* Smarty version 4.3.1, created on 2024-08-02 02:06:05
  from '/var/www/html/aleehnetworks/ui/ui/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66ac14dd66e1f1_88026841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34a86c11c5748cf019c726a9bd0b292441a08c6e' => 
    array (
      0 => '/var/www/html/aleehnetworks/ui/ui/pagination.tpl',
      1 => 1716341390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac14dd66e1f1_88026841 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['paginator']->value) {?>
    <nav aria-label="Page navigation pagination-sm">
        <ul class="pagination">
            <li <?php if (empty($_smarty_tpl->tpl_vars['paginator']->value['prev'])) {?>class="disabled" <?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['url'];
echo $_smarty_tpl->tpl_vars['paginator']->value['prev'];?>
" aria-label="Previous">
                    <span aria-hidden="true"><?php echo Lang::T('Prev');?>
</span>
                </a>
            </li>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paginator']->value['pages'], 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                <li class="<?php if ($_smarty_tpl->tpl_vars['paginator']->value['page'] == $_smarty_tpl->tpl_vars['page']->value) {?>active<?php } elseif ($_smarty_tpl->tpl_vars['page']->value == '...') {?>disabled<?php }?>"><a
                        href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['url'];
echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <li <?php if ($_smarty_tpl->tpl_vars['paginator']->value['page'] >= $_smarty_tpl->tpl_vars['paginator']->value['count']) {?>class="disabled" <?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['paginator']->value['url'];
echo $_smarty_tpl->tpl_vars['paginator']->value['next'];?>
" aria-label="Next">
                    <span aria-hidden="true"><?php echo Lang::T('Next');?>
</span>
                </a>
            </li>
        </ul>
    </nav>
<?php }
}
}
