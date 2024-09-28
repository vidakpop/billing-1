<?php
/* Smarty version 4.3.1, created on 2024-08-02 02:06:05
  from '/var/www/html/aleehnetworks/ui/ui/plan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66ac14dd53a793_64761876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e14269e5faa4661bee0f5146699e10ce27a1d5b2' => 
    array (
      0 => '/var/www/html/aleehnetworks/ui/ui/plan.tpl',
      1 => 1722545800,
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
function content_66ac14dd53a793_64761876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-hovered mb20 panel-primary">
            <div class="panel-heading">
                <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin'))) {?>
                    <div class="btn-group pull-right">
                        <a class="btn btn-primary btn-xs" title="save" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/sync"
                            onclick="return confirm('This will sync/send Customer active plan to Mikrotik?')"><span
                                class="glyphicon glyphicon-refresh" aria-hidden="true"></span> sync</a>
                    </div>
                    <div class="btn-group pull-right">
                        <a class="btn btn-info btn-xs" title="save" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/csv-prepaid"
                            onclick="return confirm('This will export to CSV?')"><span class="glyphicon glyphicon-download"
                                aria-hidden="true"></span> CSV</a>
                    </div>
                <?php }?>
                &nbsp;
            </div>
            <div class="panel-body">
                <div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
                    <div class="col-md-8">
                        <form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/list/">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="fa fa-search"></span>
                                </div>
                                <input type="text" name="search" class="form-control"
                                    placeholder="<?php echo Lang::T('Search by Username');?>
..." value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="submit"><?php echo Lang::T('Search');?>
</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/recharge" class="btn btn-primary btn-block"><i
                                class="ion ion-android-add"> </i> <?php echo Lang::T('Recharge Account');?>
</a>
                    </div>&nbsp;
                </div>
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th><?php echo Lang::T('Username');?>
</th>
                                <th><?php echo Lang::T('Plan Name');?>
</th>
                                <th><?php echo Lang::T('Type');?>
</th>
                                <th><?php echo Lang::T('Created On');?>
</th>
                                <th><?php echo Lang::T('Expires On');?>
</th>
                                <th><?php echo Lang::T('Method');?>
</th>
                                <th><?php echo Lang::T('Routers');?>
</th>
                                <th><?php echo Lang::T('Status');?>
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
                                <tr>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
customers/viewu/<?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['ds']->value['username'];?>
</a></td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['namebp'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['type'];?>
</td>
												<td><span style="color: green;"><?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['ds']->value['recharged_on'],$_smarty_tpl->tpl_vars['ds']->value['recharged_time']);?>
</span></td>
												<td><span style="color: red;"><?php echo Lang::dateAndTimeFormat($_smarty_tpl->tpl_vars['ds']->value['expiration'],$_smarty_tpl->tpl_vars['ds']->value['time']);?>
</span></td>
												<td><?php echo $_smarty_tpl->tpl_vars['ds']->value['method'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['routers'];?>
</td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'off') {?>
                                            <i class="fa fa-circle" style="color: red;"></i>
                                        <?php } else { ?>
                                            <i class="fa fa-circle" style="color: green;"></i>
                                        <?php }?>
                                    </td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"
                                            class="btn btn-warning btn-xs" style="color: black;"><?php echo Lang::T('Edit');?>
</a>
                                        <?php if (in_array($_smarty_tpl->tpl_vars['_admin']->value['user_type'],array('SuperAdmin','Admin'))) {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"
                                                onclick="return confirm('<?php echo Lang::T('Delete');?>
?')"
                                                class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['ds']->value['status'] == 'off' && $_smarty_tpl->tpl_vars['_c']->value['extend_expired']) {?>
                                            <a href="javascript:extend('<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
')"
                                                class="btn btn-info btn-xs"><?php echo Lang::T('Extend');?>
</a>
                                        <?php }?>
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

<?php echo '<script'; ?>
>
function extend(idP){
    var res = prompt("Extend for many days?", "3");
    if(res){
        if(confirm("Extend for "+res+" days?")){
            window.location.href = "<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
plan/extend/"+idP+"/"+res+"&stoken=<?php echo App::getToken();?>
";
        }
    }
}
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
