<?php //print_r($emp_gen_code);exit;?>
<style type="text/css">
		a { color: inherit; } 
		#set_bck_color {
			background-color: rgb(45, 53, 60);
		    border-radius: 6px;
		    color: white;
		    width: 125px;
		}
	</style>
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
		<form class="" id="saveData">
		    <div id="wizard">
			<ol>
			    <li>Employee admission</li>
			    <li>Contact Information</li>
			    <li>Bank Details</li>
			    <li>Additional Details</li>
			    <li>Assign Manager</li>
			    <li>Add Payroll</li>
			</ol>
		    <!-- begin wizard step-1 -->
		    <div>
			<fieldset>
			    <legend class="pull-left width-full">Basic Information</legend>
			    <div class="row">
				<div class="form-group col-md-3">
				    <label class="control-label ">Employee number</label>
				      <input type="text" class="form-control input-sm" id="" name="EMP_NO" readonly value="<?php echo $emp_gen_code[0]['EMP_AUTO_GEN_CODE']?>">
				      
				</div>
				<div class="form-group col-md-3">
				    <label class="control-label ">Joining date</label>
				    <span class="input-group">
					<input type="text" class="form-control dateSet input-sm" name="EMP_JOIN_DT" size="30" id="from_date">
					<span class="input-group-addon" >
					    <span class="glyphicon glyphicon-calendar"></span>
					</span>
				    </span>
				</div>
				<div class="form-group col-md-3">
				    <label class="control-label">First Name</label>
				    <input type="text" class="form-control input-sm" id="" name="EMP_FIRST_NAME" placeholder="">
				</div>
				<div class="form-group col-md-3">
				    <label class="control-label">Last Name</label>
				    <input type="text" class="form-control input-sm" id="" name="EMP_LAST_NAME" placeholder="">
				</div>
				</div>
			    <div class="row">
				<div class="form-group col-md-3">
				    <label class="control-label">Gender</label><br>
				    <label class="radio-inline">
				      <input type="radio" name="EMP_GENDER" >Male
				    </label>
				    <label class="radio-inline">
				      <input type="radio" name="EMP_GENDER">Female
				    </label>
				</div>
				<div class="form-group col-md-3">
				    <label class="control-label">Date of Birth</label>
				    <span class="input-group">
					<input type="text" class="form-control dateSet input-sm" size="30" id="from_date" name="EMP_DOB">
					<span class="input-group-addon" >
					    <span class="glyphicon glyphicon-calendar"></span>
					</span>
				    </span>
				</div>
				<div class="form-group col-md-3">
				    <label class="control-label">Marital status</label>
				    <select class="form-control selectpicker input-sm" name="EMP_MARITAL_STATUS" data-live-search="true" data-style="btn-white btn-sm" >
					<option>Single</option>
					<option >Married</option>
					<option >Divorced</option>
				    </select>
				</div>
				<div class="form-group col-md-3">
				    <label class="control-label">Religion</label>
				    <input type="text" class="form-control input-sm" name="EMP_RELIGION" id="" placeholder="">
				</div>
				</div>
			    <div class="row">
				<div class="form-group col-md-3">
				    <label class="control-label">Blood group</label>
				    <select class="form-control selectpicker input-sm" name="EMP_BLOOD_GROUP" data-live-search="true" data-style="btn-white btn-sm" >
					<option>UnKnown</option>
					<option >A+</option>
					<option >A-</option>
					<option >A1+</option>
					<option >A1-</option>
					<option >B+</option>
				    </select>
				</div>
				<div class="form-group col-md-3">
				    <label class="control-label">Nationality</label>
				    <select class="form-control selectpicker input-sm" name="EMP_NATIONALITY" data-live-search="true" data-style="btn-white btn-sm" >
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
				<div class="form-group col-md-3">
				    <label class="control-label">Upload photo</label>
				    <input style="height: 30px;line-height: 1.5;padding: 5px 10px;" type="file" class="filestyle form-control input-sm" name="EMP_PROFILE" data-icon="false">
				</div>
				</div>
				<hr>
				<legend class="pull-left width-full">Work Information</legend>
				<div class="row">
				<div class="form-group col-md-3">
				    <label class="control-label">Department </label>
				      <select class="form-control selectpicker input-sm" name="EMP_DEPT" data-live-search="true" data-style="btn-white btn-sm" >
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
				<div class="form-group col-md-3">
				    <label class="control-label">Category</label>
				      <select class="form-control selectpicker input-sm" name="EMP_CATEGORY" data-live-search="true" data-style="btn-white btn-sm" >
					<option>Select</option>
					<option >Finance</option>
					<option >Human Resource</option>
					<option >Librarion</option>
					<option >System Admin</option>
					<option >Teacher</option>
				      </select>
				</div>
				<div class="form-group col-md-3">
				    <label class="control-label">Position</label>
				    <select class="form-control selectpicker input-sm" name="EMP_POSITION" data-live-search="true" data-style="btn-white btn-sm" >
				      <option>Select</option>
				      <option >System Admin</option>
				    </select>
				</div>
				<div class="form-group col-md-3">
				    <label class="control-label">Grade</label>
				    <select class="form-control selectpicker input-sm" name="EMP_GRADE" data-live-search="true" data-style="btn-white btn-sm" >
					<option>Select</option>
					<option >Grade 1</option>
					<option >Grade 2</option>
					<option >Grade 3</option>
					<option >Grade 4</option>
					<option >System Admin</option>
				    </select>
				</div>
				</div>
				<div class="row">
				<div class="form-group col-md-3">
				    <label class="control-label">Job Title</label>
				    <input type="text" class="form-control input-sm" name="EMP_JOB_TITLE" placeholder="">
				</div>
				<div class="form-group col-md-3">
				    <label class="control-label">Qualification</label>
				    <input type="text" class="form-control input-sm" name="EMP_QUALI" placeholder="">
				</div>
				<div class="form-group col-md-3">
				    <label class="control-label">Experience info</label>
				    <textarea rows="3" class="form-control input-sm" name="EMP_EXPE_INFO"></textarea>
				</div>
				<div class="form-group col-md-3">
				    <label class="control-label col-md-12">Total experience</label>
				    <div class="col-md-6">
				    <?php $Year=['Year','0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'];?>
				      <select class="form-control selectpicker input-sm" name="EMP_TOT_EXPE_YEAR" data-live-search="true" data-style="btn-white btn-sm">
				      <?php foreach ($Year as $year) {?>
					<option><?php echo $year;?></option>
				      <?php } ?>
				      </select>
				    </div>
				    <div class="col-md-6">
					<?php $Month=['Month','0','1','2','3','4','5','6','7','8','9','10','11'];?>
				      <select class="form-control selectpicker input-sm" name="EMP_TOT_EXPE_MONTH" data-live-search="true" data-style="btn-white btn-sm">
					<?php foreach ($Month as $month) {?>
						<option><?php echo $month;?></option>
					     <?php } ?>
				      </select>
				    </div>
				</div>
				</div>
			</fieldset>
		    </div>
		    <!-- end wizard step-1 -->
		    <!-- begin wizard step-2 -->
		    <div>
			<fieldset>
			    <legend class="pull-left width-full">Contact Information</legend>
			    <div class="row">
			    <div class="form-group col-md-3">
				<label class="control-label">Address Line 1</label>
				<input type="text" class="form-control input-sm" name="EMP_ADD_1" placeholder="">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Address Line 1</label>
				<input type="text" class="form-control input-sm" name="EMP_ADD_2" placeholder="">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">City</label>
				<input type="text" class="form-control  input-sm" name="EMP_CITY" placeholder="">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">State</label>
				<input type="text" class="form-control input-sm" name="EMP_STATE" placeholder="">
			    </div>
			    </div>
			    <div class="row">
			    <div class="form-group col-md-3">
				<label class="control-label">Pincode</label>
				<input type="text" class="form-control input-sm" name="EMP_PINCODE" placeholder="">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Country</label>
				<select class="form-control selectpicker" name="EMP_COUNTRY" data-live-search="true" data-style="btn-white btn-sm">
				    <option>Select</option>
				    <option>India</option>
				</select>
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Phone</label>
				<input type="text" class="form-control input-sm" name="EMP_PHONE" placeholder="">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Office Phone</label>
				<input type="text" class="form-control input-sm" name="EMP_OFF_PHONE" placeholder="">
			    </div>
			    </div>
			    <div class="row">
			    <div class="form-group col-md-3">
				<label class="control-label">Mobile</label>
				<input type="text" class="form-control input-sm" name="EMP_MOBILE" placeholder="">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">E-mail</label>
				<input type="text" class="form-control input-sm" name="EMP_EMAIL" placeholder="">
			    </div>
			    </div>
		    </fieldset>
		    </div>
		    <!-- end wizard step-2 -->
		    <!-- begin wizard step-4 -->
		    <div>
		       <fieldset>
			    <legend class="pull-left width-full">Bank Details</legend>
			    <div class="row">
			    <div class="form-group col-md-3">
				<label class="control-label">Account Name</label>
				  <input type="text" class="form-control input-sm" name="EMP_ACC_NAME" placeholder="">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Account Number</label>
				<input type="text" class="form-control input-sm" name="EMP_ACC_NO" placeholder="">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Bank Name</label>
				<input type="text" class="form-control input-sm" name="EMP_BANK_NAME" placeholder="">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Branch Name</label>
				<input type="text" class="form-control input-sm" iname="EMP_BANK_BRANCH_NAME" placeholder="">
			    </div>
			    </div>
			</fieldset>
		    </div>
		    <!-- end wizard step-4 -->
		    <!-- begin wizard step-5 -->
		    <div>
		       <fieldset>
			    <legend class="pull-left width-full">Addtional Deatails</legend>
			    <div class="row">
			    <div class="form-group col-md-3">
				<label class="control-label">Passport Number</label>
				<input type="text" class="form-control input-sm" name="EMP_PASSPORT_NO" placeholder="">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">PAN Number</label>
				<input type="text" class="form-control input-sm" name="EMP_PAN_NO" placeholder="">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Adhar</label>
				<input type="text" class="form-control input-sm" name="EMP_ADHAR_NO" placeholder="">
			    </div>
			    <div class="form-group col-md-3">
				<label class="control-label">Work Permit</label>
				<input type="text" class="form-control input-sm" name="EMP_WORK_PERMIT" placeholder="">
			    </div>
			    </div>
			    </fieldset>
		    </div>
		    <!-- end wizard step-5 -->
		    <!-- begin wizard step-6 -->
		    <div>
			<fieldset>
			     <legend class="pull-left width-full">Set Reporting manager for lara</legend>
			     <div class="row">
			     <div class="form-group col-md-3">
				<label class="control-label">Selected Manager :</label><br>
				<label class="control-label">(Not Selected)</label>
			     </div>
			     <div class="form-group col-md-3">
				<label class="control-label">Search by Name:</label>
				<input type="text" name="" class="form-control input-sm" id="empid">
			     </div>
				     <!-- <div class="row"> -->
			     <div class="col-md-3">
				<label></label>
				<select onchange="showAllData()" class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white btn-sm">
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
			     <div class="col-md-3">
				<label></label>
				<select onchange="showAllData()" class="form-control input-sm selectpicker" data-live-search="true" data-style="btn-white btn-sm">
				    <option>Category</option>
				    <option >Finance</option>
				    <option >Human Resource</option>
				    <option >Librarion</option>
				    <option >System Admin</option>
				    <option >Teacher</option>
				</select>
			     </div>
			     </div>
			     <div class="row">
			     <div class="col-md-3">
				<label></label>
				<select onchange="showAllData()" class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm">
				    <option>Position</option>
				    <option >System Admin</option>
			       </select>
			     </div>
			     <div class="col-md-3">
				<label></label>
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
				    <div class="form-group ">
					<label class="control-label">Payroll Groups</label>
					<div class="col-md-8">
					   <select class="form-control selectpicker" name="EMP_PAY_GRP_NAME" data-live-search="true" data-style="btn-white btn-sm">
						    <option>Monthly payroll</option>
						    <option >Select</option>
						  </select>
					</div>
				    </div>
				</div>
				    <div class="col-md-4" id="set_bck_color">
					    <!-- <a href="<?php //echo site_url('HR_EmployeeMgmnt/AddPayroll'); ?>" id="set_color" class=btn btn-inverse btn-sm">Use this group</a> -->
					    <button type="button" class="btn btn-inverse btn-sm" id="openpayroll">Use this group</button>
				    </div>
			    </div>
				    <hr>
				    <h3 style="font-size:20px;">Step 2: Add Payroll Details</h3>
				    <h6 style="">Select payroll group and then proceed</h6>
				    <div class="col-md-4">
					    <button class="btn btn-inverse btn-sm" type="submit">Finish</button>
				    </div>
				    <div id="addpayroll" style="display: block;">
				    <h4>Selected Payroll Group</h4>
				    <hr>
				    <div class="row">
				    <div class="col-md-2"><label>Payroll groups</label></div>
				    <div class="col-md-2"><label>Monthly Payroll</label></div>
				    <div class="col-md-2"><label>Change</label></div>
				    </div>
				    <hr>
				    <h4>Add Payroll Details</h4>
				    <hr>
				    <div class="row">
				    <div class="col-md-2"><label>Gross Pay</label></div>
				    <div class="col-md-2"><label>1000.00$</label><input name="name=" emp_pay_grp_name""="" type="hidden"></div>
				    <div class="col-md-2"><label>Change</label></div>
				    </div>
				    <hr>
				    <h4>Payroll categories of this payroll group</h4>
				    <p>This payroll amounts are calculated based on how each payroll category is set up. You can edit the amount if needed</p>
				    <div class="col-md-6">
					<legend>Earning</legend>
					    <div class="form-group row">
						<!--<label class="control-label col-md-12"><h3>Earning</h3></label>-->
					    </div>
					    <div class="form-group col-md-12">
						<label class="control-label col-md-4">Basic pay</label>
						<div class="col-md-6">
						  <input class="form-control" name="EMP_PAY_CATE_TYPE" value="5000.00" type="text">
						</div>
					    </div>
					    <br>
					    <div class="form-group col-md-12">
						<label class="control-label col-md-4">Travellign Allowance</label>
						<div class="col-md-6">
						  <input class="form-control" name="" value="5000.00" type="text">
						</div>
					    </div>
					    <div class="form-group col-md-12">
						<label class="control-label col-md-4">House rend Allowance</label>
						<div class="col-md-6">
						  <input class="form-control" name="" value="5000.00" type="text">
						</div>
					    </div>
					    <div class="form-group col-md-12">
						<label class="control-label col-md-4">Total Earning</label>
						<div class="col-md-6">
						  <input class="form-control" name="EMP_PAY_TOT_ERN_AMT" value="5000.00" type="text">
						</div>
					    </div>
				    </div>
				    <div class="col-md-6">
					<legend>Deduction</legend>
					    <div class="form-group row">
						
						<!--<label class="control-label col-md-12"><h3>Deduction</h3></label>-->
					     </div>
					    <div class="form-group col-md-12">
						<label class="control-label col-md-4">Tax</label>
						<div class="col-md-6">
						  <input class="form-control" name="EMP_PAY_NET_AMT" value="5000.00" type="text">
						</div>
					    </div>
					    <div class="form-group col-md-12">
						<label class="control-label col-md-4">Provident Fund</label>
						<div class="col-md-6">
						  <input class="form-control" name="EMP_PAY_NET_AMT" value="5000.00" type="text">
						</div>
					    </div>
					    <div class="form-group col-md-12">
						<label class="control-label col-md-4">Total Deduction</label>
						<div class="col-md-6">
						  <input class="form-control" name="EMP_PAY_TOT_DED_AMT" value="" type="text">
						</div>
					    </div>
					    <div class="form-group col-md-12">
						<label class="control-label col-md-4">Net Pay</label>
						<div class="col-md-6">
						  <input class="form-control" name="EMP_PAY_NET_AMT" value="" type="text">
						</div>
					    </div>
					    </div>
				    	    <div class="col-md-12">
						<center><button class="btn btn-inverse btn-sm" type="button">Assign Payroll</button>
						<button class="btn btn-inverse btn-sm" type="button">Finsh</button></center>
					    </div>
				    </div>
					   <!-- </div>	-->		
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

<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-1.9.1.min.js"></script>
<script>
	$(document).ready(function() {
		$('#addpayroll').hide();
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
	});
	$('#openpayroll').click(function(){
		$('#addpayroll').show();
	});
	$('#saveData').submit(function(e){
		var url = "<?php echo base_url('EmployeeMngmnt/employeeAdmission')?>";		
		var urlNew = "<?php echo base_url('HR_EmployeeMgmnt/EmployeeAdmission')?>";		
		$.ajax({
       		type: "POST",
		url: url,
       		data: $("#saveData").serialize(),
            success: function(res)
            {
               console.log(res);
               // window.location.href = urlNew; 
            }
     	});
		e.preventDefault(); 
	})
</script>