<?php
/* Smarty version 4.3.1, created on 2024-08-02 03:00:45
  from '/var/www/html/neotech/ui/ui/sections/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66ac21ad6e7643_18547690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b5375aa21f5e623050873a8b40e79fc252ece33' => 
    array (
      0 => '/var/www/html/neotech/ui/ui/sections/footer.tpl',
      1 => 1716485623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ac21ad6e7643_18547690 (Smarty_Internal_Template $_smarty_tpl) {
?>        </section>
        </div>
        <footer class="main-footer">
            <div class="pull-right" id="version" onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
community#latestVersion';"></div>
            ByteRadius by <a href="https://netguru.co.ke" rel="nofollow noreferrer noopener"
                target="_blank">Netguru</a>        </footer>
        </div>
        <?php echo '<script'; ?>
 src="ui/ui/scripts/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="ui/ui/scripts/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="ui/ui/scripts/adminlte.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="ui/ui/scripts/plugins/select2.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="ui/ui/scripts/pace.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="ui/ui/scripts/custom.js"><?php echo '</script'; ?>
>

        <?php if ((isset($_smarty_tpl->tpl_vars['xfooter']->value))) {?>
            <?php echo $_smarty_tpl->tpl_vars['xfooter']->value;?>

        <?php }?>
        
            <?php echo '<script'; ?>
>
                $(document).ready(function() {
                    $('.select2').select2({theme: "bootstrap"});
                    $('.select2tag').select2({theme: "bootstrap", tags: true});
                    var listAtts = document.querySelectorAll(`button[type="submit"]`);
                    listAtts.forEach(function(el) {
                        if (el.addEventListener) { // all browsers except IE before version 9
                            el.addEventListener("click", function() {
                                $(this).html(
                                    `<span class="loading"></span>`
                                );
                                // setTimeout(() => {
                                //     $(this).prop("disabled", true);
                                // }, 100);
                            }, false);
                        } else {
                            if (el.attachEvent) { // IE before version 9
                                el.attachEvent("click", function() {
                                    $(this).html(
                                        `<span class="loading"></span>`
                                    );
                                    // setTimeout(() => {
                                    //     $(this).prop("disabled", true);
                                    // }, 100);
                                });
                            }
                        }

                    });
                });

                var listAtts = document.querySelectorAll(`[api-get-text]`);
                listAtts.forEach(function(el) {
                    $.get(el.getAttribute('api-get-text'), function(data) {
                        el.innerHTML = data;
                    });
                });

                function setKolaps() {
                    var kolaps = getCookie('kolaps');
                    if (kolaps) {
                        setCookie('kolaps', false, 30);
                    } else {
                        setCookie('kolaps', true, 30);
                    }
                    return true;
                }

                function setCookie(name, value, days) {
                    var expires = "";
                    if (days) {
                        var date = new Date();
                        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                        expires = "; expires=" + date.toUTCString();
                    }
                    document.cookie = name + "=" + (value || "") + expires + "; path=/";
                }

                function getCookie(name) {
                    var nameEQ = name + "=";
                    var ca = document.cookie.split(';');
                    for (var i = 0; i < ca.length; i++) {
                        var c = ca[i];
                        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                    }
                    return null;
                }

                $(function() {
                    $('[data-toggle="tooltip"]').tooltip()
                })
            <?php echo '</script'; ?>
>
        

        </body>

</html><?php }
}
