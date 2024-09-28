{include file="sections/header.tpl"}

<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-hovered mb20 ">
			<div class="panel-heading">{Lang::T('Bandwidth Plans')}</div>
			<div class="panel-body">
				<div class="md-whiteframe-z1 mb20 text-center" style="padding: 15px">
					<div class="col-md-8">
						<form id="site-search" method="post" action="{$_url}bandwidth/list/">
							<div class="input-group">
								<div class="input-group-addon">
									<span class="fa fa-search"></span>
								</div>
								<input type="text" name="name" class="form-control"
									placeholder="{Lang::T('Search by Name')}...">
								<div class="input-group-btn">
									<button class="btn btn-success" type="submit">{Lang::T('Search')}</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-md-4">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBandwidthModal">
    				{Lang::T('Add New Bandwidth')}
					</button>
					</div>&nbsp;
				</div>
				<div class="table-responsive">
					<table class="table table-bordered table-condensed table-striped table_mobile">
						<thead>
							<tr>
								<th>{Lang::T('Bandwidth Name')}</th>
								<th>{Lang::T('Rate')}</th>
								<th>{Lang::T('Burst')}</th>
								<th>{Lang::T('Manage')}</th>
							</tr>
						</thead>
						<tbody>
							{foreach $d as $ds}
								<tr>
									<td>{$ds['name_bw']}</td>
									<td>{$ds['rate_down']} {$ds['rate_down_unit']} / {$ds['rate_up']} {$ds['rate_up_unit']}
									</td>
									<td>{$ds['burst']}</td>
									<td>
										<a href="{$_url}bandwidth/edit/{$ds['id']}"
											class="btn btn-sm btn-warning">{Lang::T('Edit')}</a>
										<a href="{$_url}bandwidth/delete/{$ds['id']}" id="{$ds['id']}"
											class="btn btn-danger btn-sm"
											onclick="return confirm('{Lang::T('Delete')}?')"><i
												class="glyphicon glyphicon-trash"></i></a>
									</td>
								</tr>
							{/foreach}
						</tbody>
					</table>
				</div>
				{include file="pagination.tpl"}
			</div>
		</div>
	</div>
</div>
</div>
<div class="modal fade" id="addBandwidthModal" tabindex="-1" role="dialog" aria-labelledby="addBandwidthModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBandwidthModalLabel">{Lang::T('Add New Bandwidth')}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
          		<form class="form-horizontal" method="post" role="form" action="{$_url}bandwidth/add-post">
					<div class="form-group">
						<label class="col-md-2 control-label">{Lang::T('Bandwidth Name')}</label>
						<div class="col-md-6">
							<input type="text" class="form-control" id="name" name="name">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">{Lang::T('Rate Download')}</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="rate_down" name="rate_down">
						</div>
						<div class="col-md-2">
							<select class="form-control" id="rate_down_unit" name="rate_down_unit">
								<option value="Kbps">Kbps</option>
								<option value="Mbps">Mbps</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">{Lang::T('Rate Upload')}</label>
						<div class="col-md-4">
							<input type="text" class="form-control" id="rate_up" name="rate_up">
						</div>
						<div class="col-md-2">
							<select class="form-control" id="rate_up_unit" name="rate_up_unit">
								<option value="Kbps">Kbps</option>
								<option value="Mbps">Mbps</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Burst Limit</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="burst[]" placeholder="[Burst/Limit]">
						</div>
					</div>
										<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-primary"
								type="submit">{Lang::T('Submit')}</button>
							Or <a href="{$_url}bandwidth/list">{Lang::T('Cancel')}</a>
						</div>
					</div>
				</form>
            </div>
                    </div>
    </div>
</div>

{include file="sections/footer.tpl"}