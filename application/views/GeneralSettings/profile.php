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
                                        <select id="selectProfile" class="form-control selectpicker"  data-style="btn-warning btn-xs">
                                            <option selected disabled>Profile</option>
                                            <option value="General">General</option>
                                            <option value="Personal">Personal</option>
                                            <option value="Address">Address</option>
                                            <option value="Contact">Contact</option>
                                            <option value="Bank">Bank info</option>
                                            <option value="Additional">Additional info</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <select id="selectSalary" class="form-control selectpicker"  data-style="btn-warning btn-xs">
                                            <option selected disabled>Salary</option>
                                            <option value="Payroll">Payroll</option>
                                            <option value="Payslip">Payslip</option>
                                        </select>
                                     </div>
                                    <div class="col-md-1">
                                        <select id="selectClass" class="form-control selectpicker"  data-style="btn-warning btn-xs">
                                            <option selected disabled>Leaves</option>
                                            <option value="">My leaves</option>
                                            <option value="">Apply leave</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <a href="<?php echo base_url('GrSettingsC/messages'); ?>" class="btn btn-warning btn-xs" role="button">Message</a> 
                                    </div>
                                    <div class="col-md-1">
                                          <select id="selectMore" class="form-control selectpicker"  data-style="btn-warning btn-xs">
                                                   <option selected disabled>More</option>
                                                   <option value="Library">Library</option>
                                                   <option value="Transport">Transport</option>
                                                   <option value="Activities">Activities</option>
                                          </select>
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
                            <label><b style="font-size: 15px;">Admin User </b></label><br>
                            <label><b style="font-size: 15px;"> Employee ID : admin</></label>
                        </div>
                    </div><br>
                <div class="well" style="width: 66% !important; margin-left: 172px;background-color: rgb(218,230,255);">
                    <table class="mytable hidden" width="85%">
                        <tr style="">
                            <td><label class="col-md-12 "><b>Joining date</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b style="color: gray;">February 19, 2016</b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Department</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b style="color: gray;">System Admin</b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Category</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b style="color: gray;">System Admin</b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Position</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b style="color: gray;">System Admin</b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Grade</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b style="color: gray;">System Admin</b></label></td>
                        </tr>
                         <tr>
                            <td><label class="col-md-12 "><b>Job Title</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "></label></td>
                        </tr>
                          <tr>
                            <td><label class="col-md-12 "><b>Manager</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b><a  href="<?php echo base_url('GrSettingsC/change'); ?>" style="color: rgb(0,0,255);">Change</a></b></label></td>
                        </tr>
                            <tr>
                            <td><label class="col-md-12 "><b>Gender</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b style="color: gray;">Male</b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>E-mail</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b style="color: gray;">cloudlogic@gmail.com</b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Status</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b style="color: gray;">Active</b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Qualification</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b style="color: gray;"></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Total Experience</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b style="color: gray;">0 Years 10 Months</b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Experience Info</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b style="color: gray;"></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Biometric ID</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b style="color: gray;"></b></label></td>
                        </tr>
                    </table>
                    <table class="mytable1 hidden" width="85%">
                        
                        <tr>
                            <td><label class="col-md-12 "><b>Date of Birth</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b style="color: gray;">02-05-2015 </b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Marital status</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                         <tr>
                            <td><label class="col-md-12 "><b>No. of children</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "></label></td>
                        </tr>
                          
                        <tr>
                            <td><label class="col-md-12 "><b>Father's Name</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Mother's Name</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Spouse's Name</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Blood group</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b style="color: gray;">Unknown</b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Nationality</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b style="color: gray;">India</b></label></td>
                        </tr>
                    </table>
                    <table class="mytable2 hidden" width="85%">
                        
                        <tr>
                            <td><label class="col-md-12 "><b>Home Address</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>City</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                         <tr>
                            <td><label class="col-md-12 "><b>State</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "></label></td>
                        </tr>
                          
                        <tr>
                            <td><label class="col-md-12 "><b>Country</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>PIN code</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Office Address</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>City</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Country</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>PIN code</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                    </table>
                    <table class="mytable3 hidden" width="85%">
                        
                        <tr>
                            <td><label class="col-md-12 "><b>Office phone 1</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Office phone 2</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                         <tr>
                            <td><label class="col-md-12 "><b>Mobile</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "></label></td>
                        </tr>
                          
                        <tr>
                            <td><label class="col-md-12 "><b>Home Phone</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 "><b>Fax</b></label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b></b></label></td>
                        </tr>
                    </table>
                    <table class="hidden" id="bank">
                        <tr>
                            <td><label class="col-md-12 "><b>No bank details entered for Admin. <a href="<?php echo base_url('GrSettingsC/bankDetails'); ?>">Add</a></b></label></td>
                        </tr>
                    </table>
                     <table class="hidden" id="additional">
                        <tr>
                            <td><label class="col-md-12 "><b>No additional details entered for Admin. <a href="<?php echo base_url('GrSettingsC/additionalInfo'); ?>">Add</a></b></label></td>
                        </tr>
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
        $(document).ready(function(){
            
            $('.mytable').removeClass('hidden');
            $('#actions').removeClass('hidden');
           
            });
         $('#selectProfile').change(function(){
                if ($(this).val() =='General') {
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
                }else if ($(this).val() =='Personal') {
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
                else if ($(this).val() =='Address') {
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
                 else if ($(this).val() =='Contact') {
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
                 else if ($(this).val() =='Bank') {
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
                 else if ($(this).val() =='Additional') {
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
         $('#selectSalary').change(function(){
                if ($(this).val() =='Payroll') {
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
                }else if ($(this).val() =='Payslip') {
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
          $('#selectMore').change(function(){
                if ($(this).val() =='Library') {
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
                }else if ($(this).val() =='Transport') {
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
                else if ($(this).val() =='Activities') {
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
