
<style>
	.line{
		border-style:inset;
	}
</style>
<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Students</a></li>
				<li><a href="javascript:;">Students Details</a></li>
				<li class="active">Admission</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Students | Admission</h1>
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
                            <h4 class="panel-title">Admission</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
								   <form class="form-horizontal">
										<h5><b>Previous Educational Details</b></h5><hr class="line">
										<div class="form-group">
											<label class="col-md-2 control-label">Instituion Name</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
											<div class="col-md-2">
												<a id="add_sub" href="#">+ Add subject</a>
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label">Course</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
											<div class="sub hidden">
												<label class="col-md-2 control-label">Subject</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label">Year</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
											<div class="sub hidden">
												<label class="col-md-2 control-label">Mark</label>
												<div class="col-md-3">
													<input type="text" class="form-control input-sm" placeholder="" value=""/>
												</div>
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label">Total Marks</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
											<div class="sub hidden">
												<label class="col-md-2 control-label"></label>
												<div class="col-md-3">
													<button type="button" class="btn btn-sm btn-success">Save</button>
												</div>
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label"></label>
											<div class="col-md-3">
												<button type="button" class="btn btn-sm btn-success">Save & proceed</button>
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
	$('#add_sub').click(function(){
		$('.sub').removeClass('hidden');
	});
});
</script>