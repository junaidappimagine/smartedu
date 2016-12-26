
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
				<li class="active">Manage Course</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Manage Course & Batch | Manage Course</h1>
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
                            <h4 class="panel-title"> Create New Course</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								   <form class="form-horizontal">
										<div class="row">
											<div class="form-group">
												<label class="col-md-2 control-label">Course Name</label>
												<div class="col-md-3">
													<input type="text" class="form-control input-sm" placeholder="" value="<?php if($mode=='edit'){echo $result1;}?>"/>
												</div>
											</div><hr>
											<div class="form-group">
												<label class="col-md-2 control-label">Section Name</label>
												<div class="col-md-3">
													<input type="text" class="form-control input-sm" placeholder="" value=""/>
												</div>
											</div><hr>
											<div class="form-group">
												<label class="col-md-2 control-label">Code</label>
												<div class="col-md-3">
													<input type="text" class="form-control input-sm" placeholder="" value="<?php if($mode=='edit'){echo $result2;}?>"/>
												</div>
											</div><hr>
											<div class="form-group">
												<label class="col-md-2 control-label">Grading System Type</label>
												<div class="col-md-3">
													<select name="value"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm">
														<option  <?php if($mode=='edit' && $result3=="Normal"){ echo 'selected="selected"' ;}?> >Normal</option>
														<option  <?php if($mode=='edit' && $result3=="GPA"){ echo 'selected="selected"' ;}?>>GPA</option>
														<option>CWA</option>
														<option>CCE</option>
														<option>ICSE</option>
													</select>
												</div>
											</div><hr>
											<div class="form-group">
												<label class="col-md-2 control-label">Enable Elective Section</label>
												<div class="col-md-offset-1 col-md-3">
													<div class="checkbox">
														<label><input type="checkbox" value="" <?php if($mode=='edit' && $result3=="GPA"){ echo 'checked="checked"' ;}?> ></label>
													</div>
												</div>
											</div><hr>
											<?php if($mode=="add")
											{ ?>
											<fieldset>
											<h5><b>Initial Batch Details</b></h5><hr class="line">
											<div class="form-group">
												<label class="col-md-2 control-label">Name</label>
												<div class="col-md-3">
													<input type="text" class="form-control input-sm" placeholder="" value=""/>
												</div>
											</div><hr>
											<div class="form-group">
												<label class="col-md-2 control-label">Start Date</label></label>
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
												<label class="col-md-2 control-label">End Date</label>
												<div class="col-md-3">
													<span class="input-group">
														<input type="text" class="form-control dateSet1 input-sm"  id="from_date">
														<span class="input-group-addon" >
															<span class="glyphicon glyphicon-calendar"></span>
														</span>
													</span>
												</div>
											</div><hr>
											<?php } ?>
											<div class="form-group">
												<label class="col-md-2 control-label"></label>
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