<?php
/* Smarty version 4.3.1, created on 2024-08-02 03:03:06
  from '/var/www/html/neotech/ui/ui/routers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66ac223ae95fb5_98914326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adc5e101505128533421201e6b0fde620cbe21e0' => 
    array (
      0 => '/var/www/html/neotech/ui/ui/routers.tpl',
      1 => 1718750940,
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
function content_66ac223ae95fb5_98914326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-hovered mb20 panel">
            <div class="panel-heading"><?php echo Lang::T('Routers');?>
</div>
            <div class="panel-body">
                <div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
                    <div class="col-md-8">
                        <form id="site-search" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/list/">
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
routers/add" class="btn btn-primary btn-block"><i
                                class="ion ion-android-add"> </i> <?php echo Lang::T('New Router');?>
</a>
                    </div>&nbsp;
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th><?php echo Lang::T('Router Name');?>
</th>
                                <th><?php echo Lang::T('IP Address');?>
</th>
                                <th><?php echo Lang::T('Status');?>
</th>
                                <th><?php echo Lang::T('Uptime');?>
</th>
                                <th><?php echo Lang::T('Free Memory');?>
</th>
                                <th><?php echo Lang::T('CPU Load');?>
</th>
                                <th><?php echo Lang::T('Manage');?>
</th>
                                <th>ID</th>
                                <th><?php echo Lang::T('Download');?>
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
                                <tr <?php if ($_smarty_tpl->tpl_vars['ds']->value['enabled'] != 1) {?>class="danger" title="disabled" <?php }?>>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['ip_address'];?>
</td>
                                    <td class="router-status" data-router-id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"></td>
                                    <td class="router-uptime" data-router-id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"></td>
                                    <td class="router-used-memory" data-router-id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"></td>
                                    <td class="router-cpu-load" data-router-id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"></td>
                                    <td>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/edit/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" class="btn btn-info btn-xs"><?php echo Lang::T('Edit');?>
</a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/delete/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"
                                            onclick="return confirm('<?php echo Lang::T('Delete');?>
?')"
                                            class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                                        <button class="btn btn-warning btn-xs btn-reboot" data-router-id="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
"><i class="fa fa-refresh"></i> <?php echo Lang::T('Reboot');?>
</button>
                                    </td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
</td>
                                    <td>
                                        <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/download" method="post" style="display:inline;">
                                            <input type="hidden" name="router_id" value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
">
                                            <input type="hidden" name="router_name" value="<?php echo $_smarty_tpl->tpl_vars['ds']->value['name'];?>
">
                                            <button type="submit" class="btn btn-success btn-xs">
                                                <i class="fa fa-download"></i> <?php echo Lang::T('Download');?>

                                            </button>
                                        </form>
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
?>

<style>
    .loader {
        display: inline-block;
        animation: loading 1s infinite;
        margin: 0; /* Added this line */
    }

    @keyframes loading {
        0% {
            content: ".";
        }
        33% {
            content: "..";
        }
        66% {
            content: "...";
        }
    }

    .router-uptime {
        color: #28a745; /* Green for uptime */
	font-weight: bold;
    }

    .router-used-memory {
        color: #fd7e14; /* Orange for memory */
	font-weight: bold;
    }

    .router-cpu-load {
        color: #d63384; /* Pink for CPU load */
	font-weight: bold;
    }

    .router-status {
        font-weight: bold;
    }

    .router-status .status {
        display: inline-block;
        padding: 2px 8px;
        border-radius: 4px;
        font-size: 12px;
    }

    .router-status .online {
        background-color: #28a745;
        color: white;
    }

    .router-status .offline {
        background-color: #dc3545;
        color: white;
    }
</style>

<?php echo '<script'; ?>
>
$(document).ready(function() {
    // Fetch router resources asynchronously
    $('.router-uptime, .router-used-memory, .router-total-memory, .router-cpu-load, .router-status').each(function() {
        var routerId = $(this).data('router-id');
        var elementClass = $(this).attr('class').split(' ')[0];
        var row = $(this).closest('tr');

        $.ajax({
            url: '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/get_resources',
            data: { router_id: routerId },
            dataType: 'json',
            success: function(resources) {
                if (resources) {
                    if (elementClass === 'router-uptime') {
                        row.find('.router-uptime').html(resources.uptime);
                    } else if (elementClass === 'router-used-memory') {
                        row.find('.router-used-memory').html(resources.freeMemory);
                    } else if (elementClass === 'router-total-memory') {
                        row.find('.router-total-memory').html(resources.totalMemory);
                    } else if (elementClass === 'router-cpu-load') {
                        row.find('.router-cpu-load').html(resources.cpuLoad);
                    }

                    // Update router status
                    var statusElement = row.find('.router-status');
                    if (resources.status === 'Online') {
                        statusElement.html('<span class="status online">Online</span>');
                    } else {
                        statusElement.html('<span class="status offline">Offline</span>');
                    }
                } else {
                    row.find('.' + elementClass).html('N/A');
                    // Set router status to offline if resources are not available
                    var statusElement = row.find('.router-status');
                    statusElement.html('<span class="status offline">Offline</span>');
                }
            },
            error: function(xhr, status, error) {
                // Handle error cases
                console.error(xhr.responseText);
            }
        });
    });

    // Reboot router
    $('.btn-reboot').on('click', function() {
        var routerId = $(this).data('router-id');
        if (confirm('Are you sure you want to reboot this router?')) {
            $.ajax({
                url: '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
routers/reboot',
                data: { router_id: routerId },
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'Rebooting') {
                        alert(response.message);
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert('Failed to send reboot command. Please try again.');
                }
            });
        }
    });
});
<?php echo '</script'; ?>
>
<?php }
}
