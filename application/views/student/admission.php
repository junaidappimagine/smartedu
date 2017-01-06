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
	    <form action="" method="POST" class="">
		<div id="wizard">
			<ol>
			    <li>Student Admission </li>
			    <li>Class and Batch details</li>
			    <li>Parent/Guardian details</li>
			    <li>Previous details</li>
			    <li>Additional Details</li>
			</ol>
			<!-- begin wizard step-1 -->
			<div>
			    <fieldset>
				<legend class="pull-left width-full">Student Admission</legend>
				<h5><b>Fields marked With <span class="imp">*</span> must be filled</b></h5><br>
			    <div class="row">
				    <div class="col-md-5">
					<div class="form-group">
					    <label class="col-md-5 control-label">Admission number<span class="imp">*</span></label>
					    <div class="col-md-7">
						    <input type="text" name="STU_ADM_NO" class="form-control input-sm" placeholder=""  value=""/>
					    </div>
					</div>
				    </div>
				    <div class="col-md-5">
					<div class="form-group">
					<label class="col-md-5 control-label">Admission Date<span class="imp">*</span></label>
					    <div class="col-md-7">
						<span class="input-group">
						    <input type="text" name="STU_ADM_DT" class="form-control dateSet input-sm"  id="from_date">
						    <span class="input-group-addon" >
							    <span class="glyphicon glyphicon-calendar"></span>
						    </span>
						</span>
					    </div>
					</div>
				    </div>
				</div>
				<h5><b>Personal Details</b></h5><hr class="line">
				
				<div class="row">
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">First Name</label>
					    <input type="text"  placeholder=""  name="STU_ADM_FIRST_NAME" id="" class="form-control input-sm" value="">
					</div>
				     </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Middle Name</label>
					    <input type="text"  placeholder=""  name="STU_ADM_MIDDLE_NAME" id="" class="form-control input-sm" value="">
					</div>
				     </div>
				     <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Last Name</label>
					    <input type="text"  placeholder=""  name="STU_ADM_LAST_NAME" id="" class="form-control input-sm" value="">
					</div>				 
				    </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Date of Birth</label>
					    <span class="input-group">
						<input type="text" name="STU_ADM_DOB" class="form-control dateSet input-sm"  id="from_date">
						<span class="input-group-addon" >
						    <span class="glyphicon glyphicon-calendar"></span>
						</span>
					    </span>
					</div>
				     </div>
				     
				</div>
				<div class="row">
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Gender</label>
					    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label class="radio-inline">
						    <input type="radio" class=""  value=""  name="optradio">Male
						</label>
						<label class="radio-inline">
						    <input type="radio" class=""  value=""  name="optradio">Female
						</label>
						<input type="hidden" name="STU_ADM_GENDER">
					</div>
				     </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Blood Group</label>
					    <select name="value" name=""  class="form-control input-sm selectpicker" data-style="btn-white btn-sm">
						<option>select blood group</option>
						<option>A+</option>
						<option>B+</option>
						<option>AB+</option>
						<option>O+</option>
						<option>AB-</option>
						<option>AB+</option>
						<option>A1B+</option>
						<option>A-</option>
						<option>B-</option>
						<option>O-</option>
						<option>A1B-</option>
					    </select>
					</div>
										 
				     </div>
				     <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Birth Place</label>
					    <input type="text" name="STU_ADM_BIRTH_PLACE"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>				 
				    </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Nationality</label>
					    <select name="STU_ADM_NATIONALITY"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm" >
						    <option>select</option>
						    <option selected>India</option>
						    <option>France</option>
						    <option>Dubai</option>
						    <option>newzland</option>
						    <option>australia</option>
					    </select>
					</div>
				     </div>
				     
				</div>
				<div class="row">
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Mother Tongue</label>
					 <input type="text"  placeholder=""  name="STU_ADM_MOTHER_TONGUE" id="" class="form-control input-sm" value="">
					</div>
				     </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Category</label>
					    <select name="STU_ADM_STUD_CATE"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm">
						<option>select a Category</option>
						<option>Term 1 Fee</option>
						<option>fee</option>
					    </select>
					</div>
				     </div>
				     <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Religion</label>
					    <input type="text"  placeholder=""  name="STU_ADM_RELIGION" id="" class="form-control input-sm" value="">
					</div>				 
				    </div>
				</div>
				<h5><b>Contact Deatils</b></h5><hr class="line">
				<div class="row">
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Address Line1</label>
					    <input type="text"  placeholder=""  name="STU_ADM_ADD1" id="" class="form-control input-sm" value="">
					</div>
				     </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Address Line2</label>
					    <input type="text"  placeholder=""  name="STU_ADM_ADD2" id="" class="form-control input-sm" value="">
					</div>
				     </div>
				     <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">City</label>
					    <input type="text"  placeholder=""  name="STU_ADM_CITY" id="" class="form-control input-sm" value="">
					</div>				 
				    </div>
				     <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">State</label>
					    <input type="text"  placeholder=""  name="STU_ADM_STATE" id="" class="form-control input-sm" value="">
					</div>				 
				    </div>
				     
				</div>
				<div class="row">
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Pin code</label>
					    <input type="text"  placeholder=""  name="STU_ADM_PINCODE" id="" class="form-control input-sm" value="">
					</div>
				     </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Country</label>
					    <select name="STU_ADM_COUNTRY"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm" >
							<option>select</option>
							<option selected>India</option>
							<option>France</option>
							<option>Dubai</option>
							<option>newzland</option>
							<option>australia</option>
						</select>
					</div>
				     </div>
				     <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Phone</label>
					    <input type="text"  placeholder=""  name="STU_ADM_PHONE" id="" class="form-control input-sm" value="">
					</div>				 
				    </div>
				     <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Mobile</label>
					    <input type="text"  placeholder=""  name="STU_ADM_MOBILE" id="" class="form-control input-sm" value="">
					</div>				 
				    </div>
				     
				</div>
				<div class="row">
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Email</label>
					    <input type="text"  placeholder=""  name="STU_ADM_EMAIL" id="" class="form-control input-sm" value="">
					</div>
				     </div>
				</div>
			    </fieldset>
			</div>
			<!-- end wizard step-1 -->
			<!-- begin wizard step-2 -->
			<div>
			<fieldset>
			    <legend class="pull-left width-full">Class and Batch details</legend>
				<div class="row">
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Class *</label>
					    <select name="STU_CB_COURSE"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm">
						    <option>select a Class</option>
						    <option value="class 1">class 1</option>
						    <option value="class 2">Class 2</option>
						    <option value="class 3">Class 3</option>
					    </select>
					</div>
				     </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Batch *</label>
					    <select name="STU_CB_BATCH"  class="form-control input-sm selectpicker" id="batch" data-style="btn-white btn-sm">
						    <option>select a Batch</option>
						    <option value="B.Tech">B.Tech</option>
					    </select>
					</div>
				     </div>
				     <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Roll Number</label>
					    <input type="text"  placeholder=""  name="STU_CB_ROLL_NO" id="" class="form-control input-sm" value="">
					</div>				 
				    </div>
				    
				</div>
			    </fieldset>
			</div>
			<!-- end wizard step-2 -->
			<!-- begin wizard step-3 -->
			<div>
			    <fieldset>
				<legend class="pull-left width-full">Parent/Guardian details</legend>
				<div class="row">
				    <div class="col-md-6">
					<div class="form-group">
					    <label class="col-md-5 control-label">Student Admission number<span class="imp">*</span></label>
					    <div class="col-md-7">
						    <input type="text" name="STU_PA_ADM_NO" class="form-control input-sm" placeholder="" value="STD063"/>
					    </div>
					</div>
				    </div>
					
				</div><br>
				<div class="row">
				    <div class="col-sm-4">
					<h5><b>Parent - Personal details</b></h5>
				    </div>
				    <div class="col-sm-3" style="margin-top:9px;">
					<a class="btn btn-primary btn-xs" role="button" id="addParent"><i class="fa fa-plus fa-1x"></i> Add New</a>
				    </div>
				</div><hr class="line">
				<div class="parentDeatils">
				<div class="row">
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">First Name *</label>
					    <input type="text"  placeholder=""  name="STU_PA_FIRST_NAME" id="" class="form-control input-sm" value="">
					</div>
				     </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Last Name</label>
					    <input type="text"  placeholder=""  name="STU_PA_LAST_NAME" id="" class="form-control input-sm" value="">
					</div>
				     </div>
				     <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Relation</label>
					    <input type="text"  placeholder=""  name="STU_PA_RELATION" id="" class="form-control input-sm" value="">
					</div>				 
				    </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Date of Birth</label>
					    <span class="input-group">
						<input type="text" class="form-control dateSet input-sm"  id="from_date" value="January 04, 2007">
						<span class="input-group-addon" >
						    <span class="glyphicon glyphicon-calendar"></span>
						</span>
					    </span>
					</div>
										 
				     </div>
				</div>
				<div class="row">
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Education</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>
										 
				     </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Occupation</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>
										 
				     </div>
				     <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Income</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>				 
				    </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Email</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>
										 
				     </div>
				     
				</div>
				<div class="row">
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Address Line 1</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>
										 
				     </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Address Line 2</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>
										 
				     </div>
				     <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">City</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>				 
				    </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">State</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>
										 
				     </div>
				     
				</div>
				<div class="row">
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Country</label>
					    <select name="value"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm" >
							<option>select</option>
							<option selected>India</option>
							<option>France</option>
							<option>Dubai</option>
							<option>newzland</option>
							<option>australia</option>
						</select>
					</div>
										 
				     </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Phone 1</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>
										 
				     </div>
				     <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Phone 2</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>				 
				    </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Mobile</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>				 
				     </div>
				</div>
				</div>
				
				
				<div class="" id="addData"><hr class="line">
				   
				</div>
				
			    </fieldset>
			</div>
			<!-- end wizard step-3 -->
			<!-- begin wizard step-4 -->
			<div>
			   <fieldset>
				<legend class="pull-left width-full">Previous Educational Details</legend>
				<div class="row">
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Institution Name</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>
										 
				    </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Class</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>
										 
				     </div>
				     <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Year</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>				 
				    </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Total marks</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>				 
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
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Id Card Number</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>
										 
				    </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Height of student</label>
					    <input type="text"  placeholder=""  name="" id="" class="form-control input-sm" value="">
					</div>
										 
				     </div>
				    <div class="col-sm-3">
					<div class="form-group">
					    <label class="control-label">Country</label>
					    <select name="value"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm" >
						    <option>select</option>
						    <option selected>India</option>
						    <option>France</option>
						    <option>Dubai</option>
						    <option>newzland</option>
						    <option>australia</option>
					    </select>
					</div>				 
				    </div>
				</div>
				<div class="col-md-4 col-md-offset-3">
					<button class="btn btn-inverse btn-sm" type="button">Save & Finish</button>
				</div>
			    </fieldset>
			</div>
			<!-- end wizard step-5 -->
			
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
		//App.init();
		FormWizard.init();
		$("#set_color").hover(function(){
	        $(this).css("color", "white");
	    });
	    $('.dateSet').datepicker({
	    format: 'd MM yyyy',
	    });
	    $(":file").filestyle({icon: false});
	     $("#addParent").click(function(){
		$(".parentDeatils").clone().appendTo("#addData");
		
	    });
	      $("#removeParent").click(function(){
		$("#addData").remove();
		
	    });

	});
	var displayData='<table border="1" class="table"><thead><th>Sr.No</th><th>Employee Name</th><th>Employee Id</th><th>Department</th></thead><tbody><tr><td colspan="4"><center>No Employee Found</center></td></tr></tbody></table>';
	function showAllData(){
		$('#showtable').html(displayData);
	}
	$('#empid').keyup(function(){
		$('#showtable').html(displayData);
	})
</script>