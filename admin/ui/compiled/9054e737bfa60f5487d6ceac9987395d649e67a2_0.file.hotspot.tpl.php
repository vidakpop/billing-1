<?php
/* Smarty version 4.3.1, created on 2024-08-02 17:20:43
  from '/var/www/html/neotech/ui/ui/hotspot.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66aceb3b132a50_21522194',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9054e737bfa60f5487d6ceac9987395d649e67a2' => 
    array (
      0 => '/var/www/html/neotech/ui/ui/hotspot.tpl',
      1 => 1716341390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.tpl' => 1,
    'file:pagination.tpl' => 1,
    'file:sections/footer.tpl' => 1,
  ),
),false)) {
function content_66aceb3b132a50_21522194 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-hovered mb20 panel-primary">
            <div class="panel-heading">
                <div class="btn-group pull-right">
                    <a class="btn btn-primary btn-xs" title="save" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/sync/hotspot"
                        onclick="return confirm('This will sync/send hotspot plan to Mikrotik?')"><span
                            class="glyphicon glyphicon-refresh" aria-hidden="true"></span> sync</a>
                </div><?php echo Lang::T('Hotspot Plans');?>

            </div>
            <div class="panel-body">
                <div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
                    <div class="col-md-8">
                        <form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/hotspot/">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-search"></span>
                                </div>
                                <input type="text" name="name" class="form-control"
                                    placeholder="<?php echo Lang::T('Search by Name');?>
...">
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="submit"><?php echo Lang::T('Search');?>
</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/add" class="btn btn-primary btn-block"><i class="ion ion-android-add">
                            </i> <?php echo Lang::T('New Service Plan');?>
</a>
                    </div>&nbsp;
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th><?php echo Lang::T('Plan Name');?>
</th>
                                <th><?php echo Lang::T('Plan Type');?>
</th>
                                <th><?php echo Lang::T('Bandwidth Plans');?>
</th>
                                <th><?php echo Lang::T('Plan Category');?>
</th>
                                <th><?php echo Lang::T('Plan Price');?>
</th>
                                <th><?php echo Lang::T('Time Limit');?>
</th>
                                <th><?php echo Lang::T('Data Limit');?>
</th>
                                <th><?php echo Lang::T('Plan Validity');?>
</th>
                                <th><?php echo Lang::T('Routers');?>
</th>
                                <th><?php echo Lang::T('Expired IP Pool');?>
</th>
                                <th><?php echo Lang::T('ID');?>
</th>
                                <th><?php echo Lang::T('Manage');?>
</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                            <tr <?php if ($_smarty_tpl->tpl_vars['ds']->value['enabled'] != 1) {?>class="danger" title="disabled" <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['prepaid'] != 'yes') {?>class="warning" title="Postpaid" <?php }?>>
                                <td class="headcol"><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_plan'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['plan_type'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name_bw'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['typebp'];?>
</td>
                                <td><?php echo Lang::moneyFormat($_smarty_tpl->tpl_vars['ds']->value['price']);?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['time_limit'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['time_unit'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['data_limit'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['data_unit'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['validity'];?>
 <?php echo $_smarty_tpl->tpl_vars['ds']->value['validity_unit'];?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['is_radius']) {?>
                                    <span class="label label-primary">RADIUS</span>
                                    <?php } else { ?>
                                    <?php if ($_smarty_tpl->tpl_vars['ds']->value['routers'] != '') {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/edit/0&name=<?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</a>
                                    <?php }?>
                                    <?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['pool_expired'];
if ($_smarty_tpl->tpl_vars['ds']->value['list_expired']) {
if ($_smarty_tpl->tpl_vars['ds']->value['pool_expired']) {?> |
                                    <?php }
echo $_smarty_tpl->tpl_vars['ds']->value['list_expired'];
}?></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"
                                        class="btn btn-info btn-xs"><?php echo Lang::T('Edit');?>
</a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
services/delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"
                                        onclick="return confirm('<?php echo Lang::T('Delete');?>
?')"
                                        class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </tbody>
                    </table>
                </div>
                <?php $_smarty_tpl->_subTemplateRender("file:pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
