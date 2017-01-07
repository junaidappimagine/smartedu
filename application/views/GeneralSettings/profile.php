<?php /*echo "<pre>"; print_r($AdDetails);exit;*/?>
<style>
    @media only screen and (min-width: 320px) and (max-width: 359px){
    .mytable{
        width: 250px !important;
        }
    }
    @media only screen and (min-width: 360px) and (max-width: 500px){
    .mytable{
        width: 290px !important;
        }
    }
    @media only screen and (min-width: 500px) and (max-width: 769px){
        .mytable{
            width: 450px !important;
            /*background-color: blue;*/
        }
    }
    @media only screen and (min-width: 800px) and (max-width: 980px){
        .mytable{
            width: 500px !important;
            /*background-color: red;*/
        }
    }

</style>

<div id="content" class="content">
        <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">HR</a></li>
                <li><a href="javascript:;">Employees</a></li>
                <li><a href="javascript:;">Keerthi</a></li>
            </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Profile | Details<small></small></h1>
        <!-- end page-header -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                </div>
                <h4 class="panel-title">Profile</h4>
            </div>
            <div class="panel-body">
                  <div class="row">
			<div style="">
                            <div class="form-group">
                                    <label class="col-md-7 control-label"></label>
				    
                                    <div class="col-md-1">
					<div class="input-group-btn">
					    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Profile &nbsp;<span class="caret"></span></button>
					    <ul class="dropdown-menu">
						<li><a class="Profile" >General</a></li>
						<li><a class="Profile" >Personal</a></li>
						<li><a class="Profile">Address</a></li>
						<li><a class="Profile">Contact</a></li>
						<li><a class="Profile">Address</a></li>
						<li><a class="Profile">Bank info</a></li>
						<li><a class="Profile">Additional info</a></li>
					    </ul>
					</div>
<!--                                        <select id="selectProfile" class="form-control selectpicker"   data-style="btn-warning btn-sm">
                                            <option selected disabled>Profile</option>
                                            <option value="General">General</option>
                                            <option value="Personal">Personal</option>
                                            <option value="Address">Address</option>
                                            <option value="Contact">Contact</option>
                                            <option value="Bank">Bank info</option>
                                            <option value="Additional">Additional info</option>
                                        </select>
-->                                    </div>
                                    <div class="col-md-1">
					<div class="input-group-btn">
					    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Salary &nbsp;<span class="caret"></span></button>
					    <ul class="dropdown-menu">
						<li><a class="Salary" >Payroll</a></li>
						<li><a class="Salary" >Payslip</a></li>
					    </ul>
					</div>
                                        <!--<select id="selectSalary" class="form-control selectpicker"  data-style="btn-warning btn-sm">
                                            <option selected disabled>Salary</option>
                                            <option value="Payroll">Payroll</option>
                                            <option value="Payslip">Payslip</option>
                                        </select>-->
                                     </div>
                                    <div class="col-md-1">
					<div class="input-group-btn">
					    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Leave &nbsp;<span class="caret"></span></button>
					    <ul class="dropdown-menu">
						<li><a class="Leave" href="<?php echo base_url('/');?>" >My leaves</a></li>
						<!--<li><a class="Leave" >Apply leave</a></li>-->
					    </ul>
					</div>
                                        <!--<select id="selectClass" class="form-control selectpicker"   data-style="btn-warning btn-sm">
                                            <option selected disabled>Leaves</option>
                                            <option value="">My leaves</option>
                                            <option value="">Apply leave</option>
                                        </select>-->
                                    </div>
                                    <div class="col-md-1">
                                        <a href="<?php echo base_url('GrSettingsC/messages'); ?>" class="btn btn-primary dropdown-toggle">Message</a> 
					<!--<button type="button"  data-toggle="dropdown">More &nbsp;<span class="caret"></span></button>-->
                                    </div>
                                    <div class="col-md-1">
					<div class="input-group-btn">
					    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">More &nbsp;<span class="caret"></span></button>
					    <ul class="dropdown-menu">
						<li><a class="More">Library</a></li>
						<li><a class="More">Transport</a></li>
						<li><a class="More">Activities</a></li>
					    </ul>
					</div>
                                          <!--<select id="selectMore" class="form-control selectpicker"  data-style="btn-warning btn-sm">
                                                   <option selected disabled>More</option>
                                                   <option value="Library">Library</option>
                                                   <option value="Transport">Transport</option>
                                                   <option value="Activities">Activities</option>
                                          </select>-->
                                    </div>
                            </div>
                        </div>
		    </div>
                  <hr>
                <div class="container" style="width: 100% !important">
                  <br>
                  <form class="form-horizontal">
                    <div class="row">
                        <div class="col-sm-2 col-sm-offset-2">
                            <img style="width: 125px;height: 125px;" class = "img-thumbnail" src="<?php echo base_url(); ?>assets/img/client3.png">
                        </div>
                         <div class="col-sm-3">
                            <p></p><p></p><br><br>
                            <label><b style="font-size: 15px;" id="UserName">Admin User </b></label><br>
                            <label><b style="font-size: 15px;" id="UserID"> Employee ID : admin</></label>
                        </div>
                    </div><br>
                <div class="well" style="width: 66% !important; margin-left: 172px;background-color: rgb(218,230,255);">
                    <table class="mytable hidden" width="85%">
                        <tr style="">
                            <td><label class="col-md-12 "><b>Joining date</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="Joindate" ><?php echo $AdDetails[0]['EMP_JOIN_DT']; ?></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Department</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="Department" ><?php echo $AdDetails[0]['EMP_DEPT']; ?></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Category</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="Category" ><?php echo $AdDetails[0]['EMP_CATEGORY']; ?></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Position</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="Position" ><?php echo $AdDetails[0]['EMP_POSITION']; ?></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Grade</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="Grade" ><?php echo $AdDetails[0]['EMP_GRADE']; ?></b></label></td>
                        </tr>
                         <tr>
                            <td><label class="col-md-12 "><b>Job Title</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="JobTitle"><?php echo $AdDetails[0]['EMP_JOB_TITLE']; ?></b></label></td>
                        </tr>
                          <tr>
                            <td><label class="col-md-12 "><b>Manager</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b><a  href="<?php echo base_url('GrSettingsC/change'); ?>" style="color: rgb(0,0,255);">Change</a></b></label></td>
                        </tr>
                            <tr>
                            <td><label class="col-md-12 "><b>Gender</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="Gender" ><?php echo $AdDetails[0]['EMP_GENDER']; ?></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>E-mail</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="E-mail" ><?php echo $AdDetails[0]['EMP_EMAIL']; ?></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Status</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="Status" ></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Qualification</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="Qualification" ><?php echo $AdDetails[0]['EMP_QUALI']; ?></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Total Experience</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="TotalExp" ></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Experience Info</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="ExpInfo"  ><?php echo $AdDetails[0]['EMP_EXPE_INFO']; ?></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Biometric ID</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="BiometricID" ></b></label></td>
                        </tr>
                    </table>
                    <table class="mytable1 hidden" width="85%">
                        
                        <tr>
                            <td><label class="col-md-12 "><b>Date of Birth</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="DateofBirth" ><?php echo $AdDetails[0]['EMP_DOB']; ?></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Marital status</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="MatStatus" ><?php echo $AdDetails[0]['EMP_MARITAL_STATUS']; ?></b></label></td>
                        </tr>
                         <tr>
                            <td><label class="col-md-12 "><b>No. of children</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="No_of_Child" ></b></label></td>
                        </tr>
                          
                        <tr>
                            <td><label class="col-md-12 "><b>Father's Name</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="FatherName" ></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Mother's Name</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b  id="MotherName"></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Spouse's Name</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b  id="SpouseName"></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Blood group</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="BloodGrp" ><?php echo $AdDetails[0]['EMP_BLOOD_GROUP']; ?></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Nationality</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="Nation" ><?php echo $AdDetails[0]['EMP_COUNTRY']; ?></b></label></td>
                        </tr>
                    </table>
                    <table class="mytable2 hidden" width="85%">
                        
                        <tr>
                            <td><label class="col-md-12 "><b>Home Address</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="HomeAdd"><?php echo $AdDetails[0]['EMP_ADD_1']; ?></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>City</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="HomeCity"><?php echo $AdDetails[0]['EMP_CITY']; ?></b></label></td>
                        </tr>
                         <tr>
                            <td><label class="col-md-12 "><b>State</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="HomeState"><?php echo $AdDetails[0]['EMP_STATE']; ?></b></label></td>
                        </tr>
                          
                        <tr>
                            <td><label class="col-md-12 "><b>Country</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="HomeCountry"><?php echo $AdDetails[0]['EMP_COUNTRY']; ?></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>PIN code</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="HomePinCode"><?php echo $AdDetails[0]['EMP_PINCODE']; ?></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Office Address</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="OffAdd"></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>City</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="OffCity"></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Country</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="offCountry"></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>PIN code</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="offPinCode"></b></label></td>
                        </tr>
                    </table>
                    <table class="mytable3 hidden" width="85%">
                        
                        <tr>
                            <td><label class="col-md-12 "><b>Office phone 1</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="offPhone_1"><?php echo $AdDetails[0]['EMP_OFF_PHONE']; ?></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Office phone 2</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="offPhone_2"></b></label></td>
                        </tr>
                         <tr>
                            <td><label class="col-md-12 "><b>Mobile</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="Mobile"><?php echo $AdDetails[0]['EMP_MOBILE']; ?></b></label></td>
                        </tr>
                          
                        <tr>
                            <td><label class="col-md-12 "><b>Home Phone</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="HomePhone"></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Fax</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="Fax"></b></label></td>
                        </tr>
                    </table>
                    <table class="hidden" id="bank">
			<tr>
                            <td><label class="col-md-12 "><b>Account Name</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="AccountName"><?php echo $AdDetails[0]['EMP_ACC_NAME']; ?></b></label></td>
                        </tr>
			<tr>
                            <td><label class="col-md-12 "><b>Account Number</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="AccountNumber"><?php echo $AdDetails[0]['EMP_ACC_NO']; ?></b></label></td>
                        </tr>
			<tr>
                            <td><label class="col-md-12 "><b>Bank Name	</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="BankName"><?php echo $AdDetails[0]['EMP_BANK_NAME']; ?></b></label></td>
                        </tr>
			<tr>
                            <td><label class="col-md-12 "><b>Branch Name</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="BranchName"><?php echo $AdDetails[0]['EMP_BANK_BRANCH_NAME']; ?></b></label></td>
                        </tr>
<!--                        <tr>
                            <td><label class="col-md-12 "><b>No bank details entered for Admin. <a href="<?php echo base_url('GrSettingsC/bankDetails'); ?>">Add</a></b></label></td>
                        </tr>
-->                    </table>
                     <table class="hidden" id="additional">
			<tr>
                            <td><label class="col-md-12 "><b>Passport Number</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="PassportNumber"><?php echo $AdDetails[0]['EMP_PASSPORT_NO']; ?></b></label></td>
                        </tr>
			<tr>
                            <td><label class="col-md-12 "><b>Verified to work in this country</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="Verified_Y_N"><?php echo $AdDetails[0]['EMP_WORK_PERMIT']; ?></b></label></td>
                        </tr>
			<tr>
                            <td><label class="col-md-12 "><b>Pan Number</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="PanNumber"><?php echo $AdDetails[0]['EMP_PAN_NO']; ?></b></label></td>
                        </tr>
			<tr>
                            <td><label class="col-md-12 "><b>Adhar Number</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b id="AdharName"><?php echo $AdDetails[0]['EMP_ADHAR_NO']; ?></b></label></td>
                        </tr>
                        <!--<tr>
                            <td><label class="col-md-12 "><b>No additional details entered for Admin. <a href="<?php echo base_url('GrSettingsC/additionalInfo'); ?>">Add</a></b></label></td>
                        </tr>-->
                    </table>
                    <table class="hidden" id="payroll">
                        <tr>
                            <td><label class="col-md-12 "><b>No payroll details entered for Admin.<a href="<?php echo base_url('payrollgroup/Create_Payroll_Groupview'); ?>">Add</a></b></label></td>
                        </tr>
                    </table>
                    <div class="form-group hidden" id="payslip">
                        <label class="col-md-4 col-md-offset-0 control-label"> <b style="margin-left: 0px;">Select a month & year :</b></label>
                        <div class="col-md-3">
                            <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
                                <option value="">Select a Month</option>
                            </select>
                        </div>
                    </div>
                    <table class="hidden" id="library">
                        <tr>
                            <td><label class="col-md-12 "><b style="margin-left: 170px;">No active library record present</b></label></td>
                        </tr>
                    </table>
                    <table class="hidden" id="transport">
                        <tr>
                            <td><label class="col-md-12 "><b style="margin-left: 170px;">Employee did not avail transport facility</b></label></td>
                        </tr>
                    </table>
                     <table class="hidden" id="activities">
                        <tr>
                            <td><label class="col-md-12 "><b style="margin-left: 170px;">No activities for the selected date</b></label></td>
                        </tr>
                    </table>

                </div>
                  </form>
              
             </div>
            <div class="form-group col-md-offset-4 hidden" id="actions">
                <div class="col-md-2">
                   <a href="<?php echo base_url('GrSettingsC/editGeneralDetails'); ?>" class="btn btn-primary btn-sm" role="button"><i class="fa fa-edit"></i> Edit</a>
                </div>
                <div class="col-md-3 ">
                    <a href="<?php echo base_url('GrSettingsC/profile_pdf_generate'); ?>" class="btn btn-primary btn-sm" role="button">PDF Report</a>
                </div>
            </div>
              </div>
            </div>
        </div>
</div>
     <script>
//        $(document).ready(function(){
//            $('.mytable').removeClass('hidden');
//            $('#actions').removeClass('hidden');
//	    $.ajax({
//		    type:"get",
//		    url:"<?php echo base_url();?>",
//		    dataType:"json",
//		    success:function (json){
//			//profile//
//			$('#UserName').text();
//			$('#UserID').text();
//			//general//
//			$('#Department').text();
//			$('#Category').text();
//			$('#Position').text();
//			$('#Grade').text();
//			$('#JobTitle').text();
//			$('#Gender').text();
//			$('#E-mail').text();
//			$('#Status').text();
//			$('#Qualification').text();
//			$('#TotalExp').text();
//			$('#ExpInfo').text();
//			$('#BiometricID').text();
//			//personal//
//			
//			$('#DateofBirth').text();
//			$('#MatStatus').text();
//			$('#No_of_Child').text();
//			$('#FatherName').text();
//			$('#MotherName').text();
//			$('#SpouseName').text();
//			$('#BloodGrp').text();
//			$('#Nation').text();
//			
//			//address//
//			$('#HomeAdd').text();
//			$('#HomeCity').text();
//			$('#HomeState').text();
//			$('#HomeCountry').text();
//			$('#HomePinCode').text();
//			$('#OffAdd').text();
//			$('#OffCity').text();
//			$('#offCountry').text();
//			$('#offPinCode').text();
//			
//			//contact
//			$('#offPhone_1').text();
//			$('#offPhone_2').text();
//			$('#Mobile').text();
//			$('#HomePhone').text();
//			$('#Fax').text();
//			
//			//bank//
//			$('#AccountNumber').text();
//			$('#AccountName').text();
//			$('#BankName').text();
//			$('#BranchName').text();
//			
//			//Additional
//			$('#PassportNumber').text();
//			$('#Verified_Y_N').text();
//			$('#PanNumber').text();
//			$('#').text();
//		    }
//		})
//           
//            });
	    //$('#selectProfile').on('change',function(){
	    $('.Profile').on('click',function(){
		var selectData=$(this).text();
		console.log(selectData)
                if (selectData=='General') {
                    $('.mytable').removeClass('hidden');
                    $('#actions').removeClass('hidden');
                    $('.mytable1').addClass('hidden');
                    $('.mytable2').addClass('hidden');
                    $('.mytable3').addClass('hidden');
                    $('#bank').addClass('hidden');
                    $('#additional').addClass('hidden');
                    $('#payslip').addClass('hidden');
                    $('#payroll').addClass('hidden');
                     $('#activities').addClass('hidden');
                    $('#transport').addClass('hidden');
                    $('#library').addClass('hidden');
                }else if (selectData=='Personal') {
                    $('.mytable1').removeClass('hidden');
                    $('.mytable').addClass('hidden');
                    $('.mytable2').addClass('hidden');
                    $('.mytable3').addClass('hidden');
                    $('#bank').addClass('hidden');
                    $('#additional').addClass('hidden');
                    $('#payslip').addClass('hidden');
                    $('#payroll').addClass('hidden');
                     $('#activities').addClass('hidden');
                    $('#transport').addClass('hidden');
                    $('#library').addClass('hidden');
                    $('#actions').removeClass('hidden');
                }
                else if (selectData=='Address') {
                    $('.mytable2').removeClass('hidden');
                    $('.mytable').addClass('hidden');
                    $('.mytable1').addClass('hidden');
                    $('.mytable3').addClass('hidden');
                    $('#bank').addClass('hidden');
                    $('#additional').addClass('hidden');
                    $('#payslip').addClass('hidden');
                    $('#payroll').addClass('hidden');
                     $('#activities').addClass('hidden');
                    $('#transport').addClass('hidden');
                    $('#library').addClass('hidden');
                    $('#actions').removeClass('hidden');
                }
                 else if (selectData=='Contact') {
                    $('.mytable3').removeClass('hidden');
                    $('.mytable').addClass('hidden');
                    $('.mytable1').addClass('hidden');
                    $('.mytable2').addClass('hidden');
                    $('#bank').addClass('hidden');
                    $('#additional').addClass('hidden');
                    $('#payslip').addClass('hidden');
                    $('#payroll').addClass('hidden');
                     $('#activities').addClass('hidden');
                    $('#transport').addClass('hidden');
                    $('#library').addClass('hidden');
                    $('#actions').removeClass('hidden');
                }
                 else if (selectData=='Bank info') {
                    $('#bank').removeClass('hidden');
                    $('.mytable3').addClass('hidden');
                    $('.mytable').addClass('hidden');
                    $('.mytable1').addClass('hidden');
                    $('.mytable2').addClass('hidden');
                    $('#additional').addClass('hidden');
                    $('#actions').addClass('hidden');
                    $('#payslip').addClass('hidden');
                    $('#payroll').addClass('hidden');
                     $('#activities').addClass('hidden');
                    $('#transport').addClass('hidden');
                    $('#library').addClass('hidden');
                   
                }
                 else if (selectData=='Additional info') {
                    $('#bank').addClass('hidden');
                    $('.mytable3').addClass('hidden');
                    $('.mytable').addClass('hidden');
                    $('.mytable1').addClass('hidden');
                    $('.mytable2').addClass('hidden');
                    $('#additional').removeClass('hidden');
                    $('#actions').addClass('hidden');
                    $('#payslip').addClass('hidden');
                    $('#payroll').addClass('hidden');
                     $('#activities').addClass('hidden');
                    $('#transport').addClass('hidden');
                    $('#library').addClass('hidden');
                }
                else
                {
                    $('#bank').addClass('hidden');
                    $('#additional').addClass('hidden');
                    $('.mytable').addClass('hidden');
                    $('.mytable1').addClass('hidden');
                    $('.mytable2').addClass('hidden');
                    $('.mytable3').addClass('hidden');
                    $('#payslip').addClass('hidden');
                    $('#payroll').addClass('hidden');
                    $('#actions').addClass('hidden');
                     $('#activities').addClass('hidden');
                    $('#transport').addClass('hidden');
                    $('#library').addClass('hidden');
                }
            });
	    //$('#selectSalary').change(function(){
	    $('.Salary').on('click',function(){
		var value=$(this).text();
                if (value=='Payroll') {
                    $('#payroll').removeClass('hidden');
                    $('#payslip').addClass('hidden');
                    $('.mytable').addClass('hidden');
                    $('#bank').addClass('hidden');
                    $('#additional').addClass('hidden');
                    $('.mytable').addClass('hidden');
                    $('.mytable1').addClass('hidden');
                    $('.mytable2').addClass('hidden');
                    $('.mytable3').addClass('hidden');
                    $('#actions').addClass('hidden');
                     $('#activities').addClass('hidden');
                    $('#transport').addClass('hidden');
                    $('#library').addClass('hidden');
                }else if (value =='Payslip') {
                    $('#payslip').removeClass('hidden');
                    $('#payroll').addClass('hidden');
                     $('.mytable').addClass('hidden');
                     $('#bank').addClass('hidden');
                    $('#additional').addClass('hidden');
                    $('.mytable').addClass('hidden');
                    $('.mytable1').addClass('hidden');
                    $('.mytable2').addClass('hidden');
                    $('.mytable3').addClass('hidden');
                     $('#actions').addClass('hidden');
                      $('#activities').addClass('hidden');
                    $('#transport').addClass('hidden');
                    $('#library').addClass('hidden');
                }
                else
                {
                    $('#payslip').addClass('hidden');
                    $('#payroll').addClass('hidden');
                    $('#bank').addClass('hidden');
                    $('#additional').addClass('hidden');
                    $('.mytable').addClass('hidden');
                    $('.mytable1').addClass('hidden');
                    $('.mytable2').addClass('hidden');
                    $('.mytable3').addClass('hidden');
                     $('#actions').addClass('hidden');
                      $('#activities').addClass('hidden');
                    $('#transport').addClass('hidden');
                    $('#library').addClass('hidden');
                }
            });
	    //$('#selectMore').change(function(){
	    $('.More').on('click',function(){
		var Morevalue=$(this).text();
                if (Morevalue=='Library') {
                    $('#library').removeClass('hidden');
                    $('#payroll').addClass('hidden');
                    $('#payslip').addClass('hidden');
                    $('.mytable').addClass('hidden');
                    $('#bank').addClass('hidden');
                    $('#additional').addClass('hidden');
                    $('.mytable').addClass('hidden');
                    $('.mytable1').addClass('hidden');
                    $('.mytable2').addClass('hidden');
                    $('.mytable3').addClass('hidden');
                    $('#actions').addClass('hidden');
                     $('#transport').addClass('hidden');
                      $('#activities').addClass('hidden');
                }else if (Morevalue =='Transport') {
                    $('#transport').removeClass('hidden');
                    $('#library').addClass('hidden');
                    $('#payslip').addClass('hidden');
                    $('#payroll').addClass('hidden');
                     $('.mytable').addClass('hidden');
                     $('#bank').addClass('hidden');
                    $('#additional').addClass('hidden');
                    $('.mytable').addClass('hidden');
                    $('.mytable1').addClass('hidden');
                    $('.mytable2').addClass('hidden');
                    $('.mytable3').addClass('hidden');
                    $('#actions').addClass('hidden');
                    $('#activities').addClass('hidden');
                }
                else if (Morevalue =='Activities') {
                    $('#activities').removeClass('hidden');
                    $('#transport').addClass('hidden');
                    $('#library').addClass('hidden');
                    $('#payslip').addClass('hidden');
                    $('#payroll').addClass('hidden');
                     $('.mytable').addClass('hidden');
                     $('#bank').addClass('hidden');
                    $('#additional').addClass('hidden');
                    $('.mytable').addClass('hidden');
                    $('.mytable1').addClass('hidden');
                    $('.mytable2').addClass('hidden');
                    $('.mytable3').addClass('hidden');
                    $('#actions').addClass('hidden');
                     
                }
                else
                {
                    $('#activities').addClass('hidden');
                    $('#transport').addClass('hidden');
                    $('#library').addClass('hidden');
                    $('#payslip').addClass('hidden');
                    $('#payroll').addClass('hidden');
                    $('#bank').addClass('hidden');
                    $('#additional').addClass('hidden');
                    $('.mytable').addClass('hidden');
                    $('.mytable1').addClass('hidden');
                    $('.mytable2').addClass('hidden');
                    $('.mytable3').addClass('hidden');
                     $('#actions').addClass('hidden');
                }
            });
     </script>
