
<style type="text/css">
	a { color: inherit; } 
	#set_bck_color {
		background-color: rgb(45, 53, 60);
	    border-radius: 6px;
	    color: white;
	    width: 125px;
	}
</style>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Home</a></li>
		<li><a href="javascript:;">Employee Management</a></li>
		<li class="active">Employee admission </li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Employee admission <small></small></h1>
    <!-- end page-header -->
    <!-- begin row -->
    <!-- begin row -->
			<div class="row">
                <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Employee admission </h4>
                        </div>
                        <div class="panel-body">
                            <form action="" method="POST" class="form-horizontal">
								<div id="wizard">
									<ol>
										<li>Employee admission</li>
										<li>Contact Information</li>
										<li>Emergency Contact</li>
										<li>Bank Details</li>
										<li>Additional Details</li>
										<li>Assign Manager</li>
										<li>Add Payroll</li>
									</ol>
									<!-- begin wizard step-1 -->
									<div>
                                        <fieldset>
                                            <legend class="pull-left width-full">Basic Information</legend>
									    	<div class="form-group">
											    <label class="control-label col-md-2">Employee number</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Joining date</label>
											    <div class="col-md-4">
											      <!-- <input type="text" class="form-control" id="" placeholder=""> -->
												    <span class="input-group">
														<input type="text" class="form-control dateSet input-sm" size="30" id="from_date">
														<span class="input-group-addon" >
														    <span class="glyphicon glyphicon-calendar"></span>
														</span>
													</span>
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">First Name</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Middle Name</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>

											<div class="form-group">
											    <label class="control-label col-md-2">Last Name</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Gender</label>
											    <div class="col-md-4">
												    <label class="radio-inline">
												      <input type="radio" name="optradio">Male
												    </label>
												    <label class="radio-inline">
												      <input type="radio" name="optradio">Female
												    </label>
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Marital status</label>
											    <div class="col-md-4">
											      <select class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm" >
											      	<option>Single</option>
											      	<option >Married</option>
								    				<option >Divorced</option>
											      </select>
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Religion</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Blood group</label>
											    <div class="col-md-4">
											      <select class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm" >
											      	<option>UnKnown</option>
											      	<option >A+</option>
								    				<option >A-</option>
								    				<option >A1+</option>
								    				<option >A1-</option>
								    				<option >B+</option>
											      </select>
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Nationality</label>
											    <div class="col-md-4">
											      <select class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm" >
											      	<option value="">Afghanistan (‫افغانستان‬‎)</option>
													<option value="">Åland Islands (Åland)</option>
													<option value="">Albania (Shqipëria)</option>
													<option value="3">Algeria (‫الجزائر‬‎)</option>
													<option value="">American Samoa</option>
													<option value="">Andorra</option>
													<option value="">Angola</option>
													<option value="">Anguilla</option>
													<option value="">Antarctica</option>
													<option value="">Antigua and Barbuda</option>
											      </select>
											    </div>
											</div>
											<div class="form-group">
											 	<label class="control-label col-md-2">Upload photo</label>
											 	<div class="col-md-4">
												<input type="file" class="filestyle" data-icon="false">
												</div>
											</div>
											<hr>
											<h3>Work Information</h3>
											<div class="form-group">
											    <label class="control-label col-md-2">Department </label>
											    <div class="col-md-4">
											      <select class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm" >
											      	<option>Select</option>
											      	<option value="English">English</option>
								    				<option value="Hindi">Hindi</option>
								    				<option value="Maths">Maths</option>
								    				<option value="">Other Languages</option>
								    				<option value="Science">Science</option>
								    				<option value="">Social Studies</option>
								    				<option value="">System Admin</option>
											      </select>
											    </div>
											</div>
											
											
											<div class="form-group">
											    <label class="control-label col-md-2">Category</label>
											    <div class="col-md-4">
											      <select class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm" >
											      	<option>Select</option>
											      	<option >Finance</option>
								    				<option >Human Resource</option>
								    				<option >Librarion</option>
								    				<option >System Admin</option>
								    				<option >Teacher</option>
											      </select>
											    </div>
											</div>

											<div class="form-group">
											    <label class="control-label col-md-2">Position</label>
											    <div class="col-md-4">
											      <select class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm" >
											      	<option>Select</option>
											      	<option >System Admin</option>
											      </select>
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Grade</label>
											    <div class="col-md-4">
											      <select class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm" >
											      	<option>Select</option>
											      	<option >Grade 1</option>
								    				<option >Grade 2</option>
								    				<option >Grade 3</option>
								    				<option >Grade 4</option>
								    				<option >System Admin</option>
											      </select>
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Job Title</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Qualification</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Experience info</label>
											    <div class="col-md-4">
											      <textarea rows="3" class="form-control"></textarea>
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Total experience</label>
											    <div class="col-md-2">
											    <?php $Year=['Year','0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'];?>
											      <select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white btn-sm">
											      <?php foreach ($Year as $year) {?>
											      	<option><?php echo $year;?></option>
											      <?php } ?>
											      </select>
											    </div>
											    <div class="col-md-2">
											    	<?php $Month=['Month','0','1','2','3','4','5','6','7','8','9','10','11'];?>
											      <select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white btn-sm">
											      	<?php foreach ($Month as $month) {?>
												      	<option><?php echo $month;?></option>
												     <?php } ?>
											      </select>
											    </div>
											</div>
										</fieldset>
									</div>
									<!-- end wizard step-1 -->
									<!-- begin wizard step-2 -->
									<div>
										<fieldset>
											<legend class="pull-left width-full">Contact Information</legend>
                                            <div class="form-group">
											    <label class="control-label col-md-2">Address Line 1</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Address Line 1</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">City</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">State</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Pincode</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Country</label>
											    <div class="col-md-4">
											      <select class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm">
											      	<option>Select</option>
											      	<option>India</option>
											      </select>
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Phone</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Office Phone</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Mobile</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">E-mail</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
										</fieldset>
									</div>
									<!-- end wizard step-2 -->
									<!-- begin wizard step-3 -->
									<div>
										<fieldset>
											<legend class="pull-left width-full">Emergency Contact</legend>
                                            <div class="form-group">
											    <label class="control-label col-md-2">First Name</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Last Name</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Religion</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Occupation</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Address Line 1</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">City</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">State</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Country</label>
											    <div class="col-md-4">
											       <select class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm">
											      	<option>Select</option>
											      	<option>India</option>
											      </select>
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Phone</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Mobile</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">E-mail</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
                                        </fieldset>
									</div>
									<!-- end wizard step-3 -->
									<!-- begin wizard step-4 -->
									<div>
									   <fieldset>
											<legend class="pull-left width-full">Bank Details</legend>
                                            <div class="form-group">
											    <label class="control-label col-md-2">Account Name</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Account Number</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Bank Name</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Branch Name</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
										</fieldset>
									</div>
									<!-- end wizard step-4 -->
									<!-- begin wizard step-5 -->
									<div>
									   <fieldset>
											<legend class="pull-left width-full">Addtional Deatails</legend>
                                            <div class="form-group">
											    <label class="control-label col-md-2">Passport Number</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">PAN Number</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Adhar</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
											<div class="form-group">
											    <label class="control-label col-md-2">Work Permit</label>
											    <div class="col-md-4">
											      <input type="text" class="form-control" id="" placeholder="">
											    </div>
											</div>
										</fieldset>
									</div>
									<!-- end wizard step-5 -->
									<!-- begin wizard step-6 -->
									<div>
									   <fieldset>
											<legend class="pull-left width-full">Set Reporting manager for lara</legend>
                                            <div class="form-group">
											    <label class="control-label col-md-2">Selected Manager :</label>
											    <div class="col-md-4">
											      <label class="control-label col-md-4">(Not Selected)</label>
											    </div>
											</div>
											<hr>
											<div class="form-group">
											    <label class="control-label col-md-2">Search by Name:</label>
											    <div class="col-md-3">
											      <input type="text" name="" class="form-control" id="empid">
											    </div>
											</div>
											<!-- <div class="row"> -->
												<div class="col-md-3">
													<div class="form-group">
												       <select onchange="showAllData()" class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm">
												      	<option>Department</option>
												      	<option value="English">English</option>
									    				<option value="Hindi">Hindi</option>
									    				<option value="Maths">Maths</option>
									    				<option value="">Other Languages</option>
									    				<option value="Science">Science</option>
									    				<option value="">Social Studies</option>
									    				<option value="">System Admin</option>
												      </select>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
												       <select onchange="showAllData()" class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm">
												      	<option>Category</option>
												      	<option >Finance</option>
									    				<option >Human Resource</option>
									    				<option >Librarion</option>
									    				<option >System Admin</option>
									    				<option >Teacher</option>
												      </select>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
												       <select onchange="showAllData()" class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm">
												      	<option>Position</option>
												      	<option >System Admin</option>
												      </select>
													</div>
												</div>
												<div class="col-md-3">
													<div class="form-group">
												       <select onchange="showAllData()" class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm">
												      	<option>Grade</option>
												      	<option >Grade 1</option>
									    				<option >Grade 2</option>
									    				<option >Grade 3</option>
									    				<option >Grade 4</option>
									    				<option >System Admin</option>
												      </select>
													</div>
												</div>
											<!-- </div> -->
											<div id="showtable"></div>
										</fieldset>
									</div>
									<!-- end wizard step-6 -->
									<!-- begin wizard step-7 -->
									<div>
									   <fieldset>
											<legend class="pull-left width-full">Add to Payroll Group</legend>
											<div class="row">
												<div class="col-md-4">
		                                            <div class="form-group">
													    <label class="control-label col-md-2">Payroll Groups</label>
													    <div class="col-md-8">
													       <select class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm">
														      	<option>Monthly payroll</option>
														      	<option >Select</option>
														      </select>
													    </div>
													</div>
												</div>
												<div class="col-md-4" id="set_bck_color">
													<a href="<?php echo site_url('HR_EmployeeMgmnt/AddPayroll'); ?>" id="set_color" class=btn btn-inverse btn-sm">Use this group</a>
												</div>
											</div>
											<hr>
											<h3 style="font-size:20px;">Step 2: Add Payroll Details</h3>
											<h6 style="line-spacing:200px;">Select payroll group and then proceed</h6>
											<div class="col-md-4">
												<button class="btn btn-inverse btn-sm" type="button">Skip & Finish</button>
											</div>
										</fieldset>
									</div>
									<!-- end wizard step-7 -->
								</div>
							</form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
    <!-- end row -->
</div>
<script>
	$(document).ready(function() {
		App.init();
		FormWizard.init();
		$("#set_color").hover(function(){
	        $(this).css("color", "white");
	    });
	    $('.dateSet').datepicker({
			format: 'd MM yyyy',
	    });
	    $(":file").filestyle({icon: false});
	});
	var displayData='<table border="1" class="table"><thead><th>Sr.No</th><th>Employee Name</th><th>Employee Id</th><th>Department</th></thead><tbody><tr><td colspan="4"><center>No Employee Found</center></td></tr></tbody></table>';
	function showAllData(){
		$('#showtable').html(displayData);
	}
	$('#empid').keyup(function(){
		$('#showtable').html(displayData);
	})
</script>