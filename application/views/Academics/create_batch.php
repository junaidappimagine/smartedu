
<style>
	.line{
		border-style:inset;
	}
</style>
<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Academics</a></li>
				<li><a href="javascript:;">Manage Course & Batch</a></li>
				<li class="active">Manage Batch</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Manage Course & Batch | Manage Batch</h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                            </div>
                            <h4 class="panel-title"> Create New Batch</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								   <form class="form-horizontal">
										<div class="row">
											<div class="form-group">
												<label class="col-md-3 control-label">Name</label>
												<div class="col-md-3">
													<input type="text" class="form-control input-sm" placeholder="" value=""/>
												</div>
											</div><hr>
											<div class="form-group">
												<label class="col-md-3 control-label">Start Date</label></label>
												<div class="col-md-3">
													<span class="input-group">
														<input type="text" class="form-control dateSet input-sm"  id="from_date">
														<span class="input-group-addon" >
															<span class="glyphicon glyphicon-calendar"></span>
														</span>
													</span>
												</div>
											</div><hr>
											<div class="form-group">
												<label class="col-md-3 control-label">End Date</label>
												<div class="col-md-3">
													<span class="input-group">
														<input type="text" class="form-control dateSet1 input-sm"  id="from_date">
														<span class="input-group-addon" >
															<span class="glyphicon glyphicon-calendar"></span>
														</span>
													</span>
												</div>
											</div><hr>
											<div class="form-group">
												<label class="col-md-3 control-label">Import Previous batch subjects</label>
												<div class="col-md-offset-1 col-md-3">
													<div class="checkbox">
														<label><input type="checkbox" value="" ></label>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Import previous batch master fees</label>
												<div class="col-md-offset-1 col-md-3">
													<div class="checkbox">
														<label><input type="checkbox" value="" ></label>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-3 control-label">Active</label>
												<div class="col-md-offset-1 col-md-3">
													<div class="checkbox">
														<label><input type="checkbox" value="" checked></label>
													</div>
												</div>
											</div>
											<hr>
											<div class="form-group">
												<label class="col-md-3 control-label"></label>
												<div class="col-md-3">
													<button type="button" class="btn btn-sm btn-success">Save</button>
												</div>
											 </div>
										 </fieldset>
									</form>
								 </div>
						   </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12-->
			<div>
            <!-- end row -->
      </div>
		<!-- end #content -->
<script>
$(document).ready(function(){
		
$('.dateSet').datepicker({format: 'd MM yyyy'}).datepicker('setDate', '22 December 2016');
$('.dateSet1').datepicker({format: 'd MM yyyy'}).datepicker('setDate', '22 December 2017');

});

</script>