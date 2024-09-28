{include file="sections/header.tpl"}

<form class="form-horizontal" method="post" role="form" action="{$_url}settings/app-post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <div class="panel panel-primary panel-hovered panel-stacked mb30">
                                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">{Lang::T('Application Name/ Company Name')}</label>
                        <div class="col-md-6">
                            <input type="text" required class="form-control" id="CompanyName" name="CompanyName"
                                value="{$_c['CompanyName']}">
                        </div>
                        <span class="help-block col-md-4">{Lang::T('This Name will be shown on the Title')}</span>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">{Lang::T('Company Logo')}</label>
                        <div class="col-md-6">
                            <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                            <span class="help-block">For PDF Reports | Best size 1078 x 200 | uploaded image will be
                                autosize</span>
                        </div>
                        <span class="help-block col-md-4">
                            <a href="./{$logo}" target="_blank"><img src="./{$logo}" height="48" alt="logo for PDF"></a>
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">{Lang::T('Address')}</label>
                        <div class="col-md-6">
                            <textarea class="form-control" id="address" name="address"
                                rows="3">{Lang::htmlspecialchars($_c['address'])}</textarea>
                        </div>
                        <span class="help-block col-md-4">{Lang::T('You can use html tag')}</span>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">{Lang::T('Phone Number')}</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="phone" name="phone" value="{$_c['phone']}">
                        </div>
                    </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label"><i class="glyphicon glyphicon-print"></i> Print Max
                            Char</label>
                        <div class="col-md-6">
                            <input type="number" required class="form-control" id="printer_cols" placeholder="37"
                                name="printer_cols" value="{$_c['printer_cols']}">
                        </div>
                        <span class="help-block col-md-4">For invoice print using Thermal Printer</span>
                    </div>
                                <div class="panel-body">
                               <div class="form-group">
                        <label class="col-md-2 control-label">{Lang::T('Voucher Format')}</label>
                        <div class="col-md-6">
                            <select name="voucher_format" id="voucher_format" class="form-control">
                                <option value="up" {if $_c['voucher_format']=='up' }selected="selected" {/if}>UPPERCASE
                                </option>
                                <option value="low" {if $_c['voucher_format']=='low' }selected="selected" {/if}>
                                    lowercase
                                </option>
                                <option value="rand" {if $_c['voucher_format']=='rand' }selected="selected" {/if}>
                                    RaNdoM
                                </option>
                                <option value="numbers" {if $_c['voucher_format'] == 'numbers'}selected="selected"
                                    {/if}>
                                    Numbers
                                </option>
                            </select>
                        </div>
                        <p class="help-block col-md-4">UPPERCASE lowercase RaNdoM</p>
                    </div>
                    {if $_c['disable_voucher'] != 'yes'}
                        <div class="form-group">
                            <label class="col-md-2 control-label">{Lang::T('Disable Registration')}</label>
                            <div class="col-md-6">
                                <select name="disable_registration" id="disable_registration" class="form-control">
                                    <option value="no" {if $_c['disable_registration']=='no' }selected="selected" {/if}>No
                                    </option>
                                    <option value="yes" {if $_c['disable_registration']=='yes' }selected="selected" {/if}>
                                        Yes
                                    </option>
                                </select>
                            </div>
                            <p class="help-block col-md-4">
                                {Lang::T('Customer just Login with Phone number and Voucher Code, Voucher will be
                            password')}
                            </p>
                        </div>
                                            {/if}
                </div>
           <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">{Lang::T('Enable System')}</label>
                        <div class="col-md-6">
                            <select name="enable_balance" id="enable_balance" class="form-control">
                                <option value="no" {if $_c['enable_balance']=='no' }selected="selected" {/if}>No
                                </option>
                                <option value="yes" {if $_c['enable_balance']=='yes' }selected="selected" {/if}>Yes
                                </option>
                            </select>
                        </div>
                        <p class="help-block col-md-4">{Lang::T('Customer can deposit money to buy voucher')}</p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">{Lang::T('Allow Transfer')}</label>
                        <div class="col-md-6">
                            <select name="allow_balance_transfer" id="allow_balance_transfer" class="form-control">
                                <option value="no" {if $_c['allow_balance_transfer']=='no' }selected="selected" {/if}>
                                    No</option>
                                <option value="yes" {if $_c['allow_balance_transfer']=='yes' }selected="selected" {/if}>
                                    Yes</option>
                            </select>
                        </div>
                        <p class="help-block col-md-4">{Lang::T('Allow balance transfer between customers')}</p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">{Lang::T('Minimum Balance Transfer')}</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="minimum_transfer" name="minimum_transfer"
                                value="{$_c['minimum_transfer']}">
                        </div>
                    </div>
                </div>
                               <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <a class="btn btn-success btn-xs" style="color: black;" href="javascript:testSms()">Test SMS</a>
                                            </div>
                    {Lang::T('SMS OTP Registration')}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">SMS Server URL</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="sms_url" name="sms_url" value="{$_c['sms_url']}"
                                placeholder="https://domain/?param_number=[number]&param_text=[text]&secret=">
                        </div>
                        <p class="help-block col-md-4">Must include <b>[text]</b> &amp; <b>[number]</b>, it will be
                            replaced.
                        </p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Or use Mikrotik SMS</label>
                        <div class="col-md-6">
                            <select class="form-control"
                                onchange="document.getElementById('sms_url').value = this.value">
                                <option value="">Select Router</option>
                                {foreach $r as $rs}
                                    <option value="{$rs['name']}" {if $rs['name']==$_c['sms_url']}selected{/if}>
                                        {$rs['name']}</option>
                                {/foreach}
                            </select>
                        </div>
                        <p class="help-block col-md-4">Must include <b>[text]</b> &amp; <b>[number]</b>, it will be
                            replaced.
                        </p>
                    </div>
                    <small id="emailHelp" class="form-text text-muted">You can use WhatsApp in here too. <a
                            href="https://wa.nux.my.id/login" target="_blank">Free Server</a></small>
                </div>
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <a class="btn btn-success btn-xs" style="color: black;" href="javascript:testWa()">Test WA</a>
                                            </div>
                    {Lang::T('Whatsapp Notification')}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">Whatsapp Server URL</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="wa_url" name="wa_url" value="{$_c['wa_url']}"
                                placeholder="https://domain/?param_number=[number]&param_text=[text]&secret=">
                        </div>
                        <p class="help-block col-md-4">Must include <b>[text]</b> &amp; <b>[number]</b>, it will be
                            replaced.
                        </p>
                    </div>
                        </div>
                <div class="panel-heading">
                    <div class="btn-group pull-right">
                        <a class="btn btn-success btn-xs" style="color: black;" href="javascript:testEmail()">Test
                            Email</a>
                                            </div>
                    {Lang::T('Email Notification')}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">SMTP Host : port</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="smtp_host" name="smtp_host"
                                value="{$_c['smtp_host']}" placeholder="smtp.host.tld">
                        </div>
                        <div class="col-md-2">
                            <input type="number" class="form-control" id="smtp_port" name="smtp_port"
                                value="{$_c['smtp_port']}" placeholder="465 587 port">
                        </div>
                        <p class="help-block col-md-4">Empty this to use internal mail() PHP</p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">SMTP username</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="smtp_user" name="smtp_user"
                                value="{$_c['smtp_user']}" placeholder="user@host.tld">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">SMTP Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" id="smtp_pass" name="smtp_pass"
                                value="{$_c['smtp_pass']}" onmouseleave="this.type = 'password'"
                                onmouseenter="this.type = 'text'">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">SMTP Security</label>
                        <div class="col-md-6">
                            <select name="smtp_ssltls" id="smtp_ssltls" class="form-control">
                                <option value="" {if $_c['smtp_ssltls']=='' }selected="selected" {/if}>Not Secure
                                </option>
                                <option value="ssl" {if $_c['smtp_ssltls']=='ssl' }selected="selected" {/if}>SSL
                                </option>
                                <option value="tls" {if $_c['smtp_ssltls']=='tls' }selected="selected" {/if}>TLS
                                </option>
                            </select>
                        </div>
                        <p class="help-block col-md-4">UPPERCASE lowercase RaNdoM</p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Mail From</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="mail_from" name="mail_from"
                                value="{$_c['mail_from']}" placeholder="noreply@host.tld">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Mail Reply To</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="mail_reply_to" name="mail_reply_to"
                                value="{$_c['mail_reply_to']}" placeholder="support@host.tld">
                        </div>
                        <p class="help-block col-md-4">Customer will reply email to this address, empty if you want to
                            use From Address</p>
                    </div>
                </div>
                                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label">{Lang::T('Expired Notification')}</label>
                        <div class="col-md-6">
                            <select name="user_notification_expired" id="user_notification_expired"
                                class="form-control">
                                <option value="none">None</option>
                                <option value="wa" {if $_c['user_notification_expired']=='wa' }selected="selected"
                                    {/if}>Whatsapp</option>
                                <option value="sms" {if $_c['user_notification_expired']=='sms' }selected="selected"
                                    {/if}>SMS</option>
                            </select>
                        </div>
                        <p class="help-block col-md-4">{Lang::T('User will get notification when package expired')}</p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">{Lang::T('Payment Notification')}</label>
                        <div class="col-md-6">
                            <select name="user_notification_payment" id="user_notification_payment"
                                class="form-control">
                                <option value="none">None</option>
                                <option value="wa" {if $_c['user_notification_payment']=='wa' }selected="selected"
                                    {/if}>Whatsapp</option>
                                <option value="sms" {if $_c['user_notification_payment']=='sms' }selected="selected"
                                    {/if}>SMS</option>
                            </select>
                        </div>
                        <p class="help-block col-md-4">
                            {Lang::T('User will get invoice notification when buy package or package refilled')}</p>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label">{Lang::T('Reminder Notification')}</label>
                        <div class="col-md-6">
                            <select name="user_notification_reminder" id="user_notification_reminder"
                                class="form-control">
                                <option value="none">None</option>
                                <option value="wa" {if $_c['user_notification_reminder']=='wa' }selected="selected"
                                    {/if}>Whatsapp</option>
                                <option value="sms" {if $_c['user_notification_reminder']=='sms' }selected="selected"
                                    {/if}>SMS</option>
                            </select>
                        </div>
                    </div>
                </div>
               
            <div class="panel-body">
                <div class="form-group">
                    <button class="btn btn-success btn-block" type="submit">{Lang::T('Save
                        Changes')}</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    function testWa() {
        var target = prompt("Phone number\nSave First before Test", "");
        if (target != null) {
            window.location.href = '{$_url}settings/app&testWa=' + target;
        }
    }

    function testSms() {
        var target = prompt("Phone number\nSave First before Test", "");
        if (target != null) {
            window.location.href = '{$_url}settings/app&testSms=' + target;
        }
    }


    function testEmail() {
        var target = prompt("Email\nSave First before Test", "");
        if (target != null) {
            window.location.href = '{$_url}settings/app&testEmail=' + target;
        }
    }

    function testTg() {
        window.location.href = '{$_url}settings/app&testTg=test';
    }
</script>
{include file="sections/footer.tpl"}