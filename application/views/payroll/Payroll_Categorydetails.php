<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">HR</a></li>
				<li><a href="javascript:;">Payroll and Payslip</a></li>
				<li class="active">Payroll category view</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">HR Management | Payroll Category</h1>
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
                               <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                            </div>
                            <h4 class="panel-title">Payroll Category view</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<form class="form-horizontal">
									<fieldset>
									<legend>Payroll Category Details</legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Payroll Category name</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-sm" placeholder="" id="name" value="<?php echo $val1; ?>" />
											</div>
											<div class="col-md-offset-10">
												<!--<a href="<?php echo base_url('payrollcategory/Edit_Payroll_Category/?var1=Basic&var2=BA&var3=50%GROSS'); ?>" role="button" class="btn btn-primary" ><i class="fa fa-edit">Edit </i></a>-->
												<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit">Edit </i></button>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Category code</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-sm" placeholder="" id="code" value="<?php echo $val2; ?>" />
											</div>
										</div>
										<div class="form-group ">
											 <label class="col-md-2 control-label">Category type </label>
											 <div class="col-md-4">
												<label class="radio-inline">
													<input type="radio"  <?php if($val2=='BA') { echo 'checked="checked"'; } ?>  name="optradio" value="earnings" id="earnings">Earnings
												</label>
											   <label class="radio-inline">
													<input type="radio" <?php if($val2=='PF' || $val2=='LOP') { echo 'checked="checked"'; } ?> name="optradio" value="deductions" id="deductions">Deductions
												</label>
											 </div>
										</div>
										<hr>
										<div class="form-group">
											<label class="col-md-2 control-label">Value type</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-sm"  placeholder="" value="Formula "  />
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Defualt Value</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-sm"  placeholder=""  id="default_type" value="<?php echo $val3; ?>"   />
											</div>
										</div>
										<br>
									   <legend>Associated Payroll Groups</legend>
									   <p>List of payroll groups that have been set up using this payroll category :</p>
									   <div class="col-md-6">
											<?php if($val2=='BA') { ?>
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td class="col-md-3" style="text-align:center">Basic</td>
															<td class="col-md-3" style="text-align:center">Monthly</td>
														</tr>
													</tbody>
												</table>
											<?php } elseif($val2=='PF') { ?>
											<table class="table table-bordered">
												<tbody>
													<tr>
														<td class="col-md-3" style="text-align:center">20000</td>
														<td class="col-md-3" style="text-align:center">Monthly</td>
													</tr>
													<tr>
														<td class="col-md-3" style="text-align:center">Current Payslip</td>
														<td class="col-md-3" style="text-align:center">Monthly</td>
													</tr>
												</tbody>
											</table>
											<?php } elseif($val2=='LOP') { ?>
												<table class="table table-bordered">
													<tbody>
														<tr>
															<td class="col-md-3" style="text-align:center">20000</td>
															<td class="col-md-3" style="text-align:center">Monthly</td>
														</tr>
													</tbody>
												</table>
											<?php } ?>
										</div>
									</fieldset>
								</form>
							</div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12-->
				
                <!-- begin col-6 -->
               
			   <!-- <div class="col-md-6">-->
			        <!-- begin panel -->
                   <!-- <div class="panel panel-inverse" data-sortable-id="form-stuff-3">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Default Style</h4>
                        </div>
                        <div class="panel-body">
                            <form action="http://seantheme.com/" method="POST">
                                <fieldset>
                                    <legend>Legend</legend>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" /> Check me out
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary m-r-5">Login</button>
                                    <button type="submit" class="btn btn-sm btn-default">Cancel</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>-->
                    <!-- end panel -->
               <!-- </div>-->
                <!-- end col-6 -->
			  <div>
            <!-- end row -->
      </div>
		<!-- end #content -->
	 <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Edit Payroll Category</h4>
			</div>
			<div class="modal-body">
				<p style="color: red;font-style:oblique">This payroll category cannot be edited since it is used to set up some payroll groups. However, you can create a copy of this category and edit only the required attributes, or create a new category.</p>
			</div>
			<div class="modal-footer">
				<a onclick="edit();" role="button" class="btn btn-success btn-sm">Copy this category</a><a href="<?php echo base_url('payrollcategory/Create_Payroll_Category'); ?>" role="button" class="btn btn-danger btn-sm">Create new category</a>
			</div>
		</div>
    </div>
</div>	
<script>
function edit()
{
	var val1=$('#name').val();
	var val2=$('#code').val();
	var val3=$('#default_type').val();
	var val4= $('input[name=optradio]:checked').val();
	window.location.href='<?php echo base_url("payrollcategory/Edit_Payroll_Category/?var1='+val1+'&var2='+val2+'&var3='+val3+'&var4='+val4+'"); ?>';
}
</script>
		