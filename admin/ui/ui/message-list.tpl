{include file="sections/header.tpl"}

<style>
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        display: inline-block;
        padding: 5px 10px;
        margin-right: 5px;
        border: 1px solid #ccc;
        background-color: #fff;
        color: #333;
        cursor: pointer;
    }
</style>

<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-hovered mb20 panel-primary">
            <div class="panel-heading">
                {Lang::T('Manage Messages')}
            </div>
            <div class="panel-body">
                <br>&nbsp;
                <div class="table-responsive table_mobile">
                    <table id="messageTable" class="table table-bordered table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>{Lang::T('From')}</th>
                                <th>{Lang::T('To')}</th>
                                <th>{Lang::T('Title')}</th>
                                <th>{Lang::T('Date')}</th>
                                <th>{Lang::T('Status')}</th>
                                <th>{Lang::T('Actions')}</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach $messages as $msg}
                                <tr {if $msg.status == 0}class="info"{/if}>
                                    <td>{$msg.from_user}</td>
                                    <td>{$msg.to_user}</td>
                                    <td onclick="window.location.href = '{$_url}messages/view/{$msg.id}'" style="cursor:pointer;">{$msg.title}</td>
                                    <td>{Lang::dateTimeFormat($msg.date)}</td>
                                    <td>{if $msg.status == 0}{Lang::T('Not Sent')}{else}{Lang::T('Sent')}{/if}</td>
                                    <td align="center">
                                        <a href="{$_url}messages/view/{$msg.id}" class="btn btn-success btn-xs">{Lang::T('View')}</a>
                                    </td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    var $j = jQuery.noConflict();

    $j(document).ready(function() {
        $j('#messageTable').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ],
            "pageLength": 25,
            "order": [[3, 'desc']]
        });
    });
</script>

{include file="sections/footer.tpl"}
