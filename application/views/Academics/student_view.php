<style>
	.left{
		 font-weight: bold;
		 font-size: 15px;
	}
	.right{
		font-size: 14px;
	}
</style>
<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Students</a></li>
				<li><a href="javascript:;">Students Details</a></li>
				<li class="active">Advanced Search</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Students | Advanced Search</h1>
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
                            <h4 class="panel-title"></h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<fieldset>
									 <div class="row">
										<div class="col-md-offset-4 col-md-6" style="text-align:right;">
											<a type="button" href="<?php echo base_url('AcademicsC/reports');?>" class="btn btn-primary btn-sm">Reports</a>
											<a type="button" href="<?php echo base_url('AcademicsC/gaurdians');?>" class="btn btn-primary btn-sm">Guardians</a>
											<a type="button" href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Send email</a>
											<a type="button" href="#" data-toggle="modal" data-target="#delstudents" class="btn btn-primary btn-sm">Delete</a>
										</div>
									</div><hr>
									<div class="row">
											<div class="col-md-offset-2 col-md-3" style="text-align:right;">
												<img src="<?php echo base_url('assets/img/student.jpg');?>" width="200px" height="180px">
											</div>
											<div class="col-md-5" >
												<h3>  <?php echo $result;?> </h3>
												<h4 style="color:#ab0000"> Course: Diploma in Theatre Semester 6(GPA) </h4>
												<h4 style="color:#ab0000"> Batch : DT Sem6 - A 2015 </h4>
												<h4 style="color:#ab0000"> Admn no : <?php echo $result1;?> </h4>
												<h4 style="color:#ab0000"> Roll number : <?php echo $result2;?>  </h4>
											</div>
										</div><hr>
										<div class="row student_view">
											<div class="col-md-offset-2 col-md-8">
												<div class="table-responsive">
													<table class="table table-bordered" width="700px">
														<tbody>
														<tr  style="background-color: #c3d9ff; border-color: #b6e2ef;">
															<td  class="left">Admission Date</td>
															<td class="right">03 August 2016</td>
														</tr>
														<tr>
															<td  class="left">Date of Birth</td>
															<td class="right">18 September 2002</td>
														</tr>
														<tr style="background-color: #c3d9ff; border-color: #b6e2ef;">
															<td  class="left">Blood group</td>
															<td class="right">A+</td>
														</tr>
														<tr>
															<td  class="left">Gender</td>
															<td class="right">Male</td>
														</tr>
														<tr style="background-color: #c3d9ff; border-color: #b6e2ef;">
															<td  class="left">Nationality</td>
															<td class="right">India (भारत)</td>
														</tr>
														<tr>
															<td  class="left">Mother Tongue</td>
															<td class="right">American English</td>
														</tr>
														<tr style="background-color: #c3d9ff; border-color: #b6e2ef;">
															<td  class="left">Category</td>
															<td class="right">Staff child</td>
														</tr>
														<tr>
															<td  class="left">Religion</td>
															<td class="right">Christianity</td>
														</tr>
														<tr style="background-color: #c3d9ff; border-color: #b6e2ef;">
															<td  class="left">Address</td>
															<td class="right">Canal street, New Orleans</td>
														</tr>
														<tr>
															<td  class="left">City</td>
															<td class="right">LA</td>
														</tr>
														<tr style="background-color:#c3d9ff; border-color: #b6e2ef;">
															<td  class="left">State</td>
															<td class="right">LA</td>
														</tr>
														<tr>
															<td  class="left">PIN code</td>
															<td class="right">95201</td>
														</tr>
														<tr  style="background-color: #c3d9ff; border-color: #b6e2ef;">
															<td  class="left">Country</td>
															<td class="right">India (भारत)</td>
														</tr>
														<tr>
															<td  class="left">Birth Place</td>
															<td class="right">NEW ORLEANS</td>
														</tr>
														<tr style="background-color: #c3d9ff; border-color: #b6e2ef;">
															<td  class="left">Phone</td>
															<td class="right"></td>
														</tr>
														<tr>
															<td  class="left">Mobile</td>
															<td class="right">009497242000</td>
														</tr>
														<tr style="background-color:#c3d9ff; border-color: #b6e2ef;">
															<td  class="left">E-mail</td>
															<td class="right"></td>
														</tr>
														<tr>
															<td  class="left">E-mail Alerts</td>
															<td class="right">Enabled</td>
														</tr>
														<tr class="odd left" style="background-color:#c3d9ff; border-color: #b6e2ef;">
															<td  class="left">Biometric ID</td>
															<td class="right"></td>
														</tr>
														<tr>
															<td  class="left"></td>
															<td class="right">Immediate contact</td>
														</tr>
														<tr  style="background-color: #c3d9ff; border-color: #b6e2ef;">
															<td  class="left">Name</td>
															<td class="right">
															<a href="<?php echo base_url("AcademicsC/gaurdians?var1='$result3'&var2='$result'");?>"> <?php echo $result3?> </a>
															</td>
														</tr>
														<tr>
															<td  class="left">Username</td>
															<td class="right">pS51</td>
														</tr>
														<tr style="background-color:#c3d9ff; border-color: #b6e2ef;">
															<td  class="left"></td>
															<td class="right">
															<a href="">Change immediate contact</a>
															</td>
														</tr>
														<tr>
															<td  class="left"></td>
															<td class="right">
															<span>
															(
															<a  id="add_details">Add additional details</a>
															)
															</span>
															</td>
														</tr>
														<tr  style="background-color: #c3d9ff; border-color: #b6e2ef;">
															<td  class="left"></td>
															<td class="right">
															No previous data (
															<a href="<?php echo base_url('AcademicsC/previous_edu');?>"> Add previous data </a>
															)
															</td>
														</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="row current_sib  hidden">
											<div class="col-md-offset-2">
												<form class="form-horizontal">
													<h5><b>Additional Details</b></h5><hr class="line">
													<div class="form-group">
														<label class="col-md-2 control-label">Height</label>
														<div class="col-md-3">
															<input type="text" class="form-control input-sm" placeholder="" value=""/>
														</div>
													</div><hr>
													<div class="form-group">
														<label class="col-md-2 control-label">Weight</label>
														<div class="col-md-3">
															<input type="text" class="form-control input-sm" placeholder="" value=""/>
														</div>
													</div><hr>
													<div class="form-group">
														<label class="col-md-2 control-label">Allergies</label>
														<div class="col-md-3">
															<input type="text" class="form-control input-sm" placeholder="" value=""/>
														</div>
													</div><hr>
												</form>
											</div>
										</div>
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
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Send Email</h4>
        </div>
        <div class="modal-body">
			<div class="panel-body">
				<div class="col-md-offset-3">
					<form method="" action="" class="form-horizontal">
						<div class="form-group">
							<label class="col-md-3 control-label">Subject *</label>
							<div class="col-md-5">
								<input type="text" class="form-control input-sm" id="name" placeholder="" />
							</div>
						</div>
						 <div class="form-group">
							<label class="col-md-3 control-label">Recipients *</label>
							<div class="col-md-5">
								<select name="value"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm" >
									<option>student</option>
									<option>Guardian</option>
									<option>Student & Guardian</option>
								</select>
							</div>
						 </div>
						 <div class="form-group">
							<label class="col-md-3 control-label">Subject *</label>
							<div class="col-md-5">
								<textarea name="" rows="2" cols=""></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-offset-1 col-md-2 control-label"></label>
							<div class="col-md-6">
								<button type="button" class="btn btn-primary btn-sm" id="action" >Create</button>
								<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>
    </div>
</div>
<div class="modal fade" id="delstudents" role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete Student</h4>
        </div>
        <div class="modal-body">
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<a  id="show_fill"><h4 style="color:#ab0000;text-decoration: underline;">Student leaving institution</h4></a>
						<h6 style="text-align: justify;">For students leaving the institution, use this option to remove them from the list of active students  and place them in the former students list.</h6>
					</div>
					<div class="col-md-6">
						<a href=""><h4 style="color:#ab0000;text-decoration: underline;">Remove Students Record</h4></a>
						<h6 style="text-align: justify;">Completely delete the students record form the istitution's database. Use this option only if your cretaed the student record by accident and want to remove it completely</h6>
					</div>
				</div>
				<div class="col-md-offset-3 fill_form hidden">
					<form method="" action="" class="form-horizontal">
						<div class="form-group">
							<label class="col-md-3 control-label">Reasons for leaving :</label>
							<div class="col-md-5">
								<input type="text" class="form-control input-sm" id="name" placeholder="" />
							</div>
						</div>
						 <div class="form-group">
							<label class="col-md-3 control-label">Leaving date :</label>
								<div class="col-md-5">
									<span class="input-group">
										<input type="text" class="form-control dateSet input-sm"  id="from_date">
										<span class="input-group-addon" >
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</span>
								</div>
						 </div>
						<div class="form-group">
							<label class="col-md-offset-1 col-md-2 control-label"></label>
							<div class="col-md-6">
								<button type="button" class="btn btn-primary btn-sm" id="action" >Create</button>
								<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
    </div>
    </div>
</div>
  
<script>
$(document).ready(function() {
	$("#add_details").click(function(){
		//alert();
		$('.current_sib').removeClass('hidden');
	});
	$("#show_fill").click(function(){
		$('.fill_form').removeClass('hidden');
	});
	$('.dateSet').datepicker({
        format: 'd MM yyyy',
   });
});
</script>