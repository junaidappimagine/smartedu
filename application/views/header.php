<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="CloudLogic" name="author" />
	<title>Smart EDU</title>
<!-- Css files to load here -->
	<link href="<?php echo base_url(); ?>assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/style-smartedu.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/theme/default-smartedu.css" rel="stylesheet" id="theme" />
	
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-validation/css/bootstrapValidator.css" rel="stylesheet" />

	<link href="<?php echo base_url(); ?>assets/plugins/DataTables/css/data-table.css" rel="stylesheet" />
	
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datetimepicker2/css/bootstrap-datetimepicker.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
	
	<script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>
	<!-- <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-1.9.1.min.js"></script> -->

	<!-- <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script> -->
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

	<!-- Added By Vijayaraj -->
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/bootstrap-wizard/css/bwizard.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
</head>
<body>
<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Smart EDU</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<form class="navbar-form full-width">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter keyword" />
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li>
					<li>
					   <li><a href="<?php echo base_url();?>EmailCtrl/email"><i class="fa fa-mail-o"></i>Mail</a></li>
					</li>
					<li class="dropdown">
						<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
							<i class="fa fa-bell-o"></i>
							<span class="label">5</span>
						</a>
						<ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">Notifications (5)</li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Server Error Reports</h6>
                                        <div class="text-muted f-s-11">3 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="<?php echo base_url(); ?>assets/img/user-1.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">25 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="<?php echo base_url(); ?>assets/img/user-2.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Olivia</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">35 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New User Registered</h6>
                                        <div class="text-muted f-s-11">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New Email From John</h6>
                                        <div class="text-muted f-s-11">2 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">View more</a>
                            </li>
						</ul>
					</li>
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url(); ?>assets/img/user-13.jpg" alt="" /> 
							<span class="hidden-xs">Developer</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
							<li><a href="javascript:;">Calendar</a></li>
							<li><a href="javascript:;">Setting</a></li>
							<li class="divider"></li>
							<li><a href="javascript:;">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="<?php echo base_url(); ?>assets/img/user-13.jpg" alt="" /></a>
						</div>
						<div class="info">
							Developer
							<small>Admin</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub active">
						<a href="<?php echo base_url(); ?>dashboardC/index">
						    <i class="fa fa-laptop text-warning"></i>
						    <span>Dashboard</span>
					    </a>
						
					</li>
					
					    <li class="has-sub">
						<a href="javascript:;">
							<span class="caret pull-right"></span>
							<i class="fa fa-suitcase text-warning"></i> 
							<span>Configuration</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="<?php echo base_url();?>GrSettingsC/generalSettingView">General settings</a></li>
							<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
							    <a href="javascript:;">
								    <span class="caret pull-right"></span><span>SMS Module</span>
							    </a>
							    <ul class="sub-menu">
							       <li><a href="<?php echo base_url();?>GrSettingsC/smsSettings">SMS Settings</a></li>
							       <li><a href="<?php echo base_url();?>GrSettingsC/sendStudents">Send SMS to Students</a></li>
							       <li><a href="<?php echo base_url();?>GrSettingsC/sendBatches">Send SMS to Batches</a></li>
							       <li><a href="<?php echo base_url();?>GrSettingsC/sendEmployees">Send SMS to Employees</a></li>
							       <li><a href="<?php echo base_url();?>GrSettingsC/sendEmployeeDepartment">Send SMS to Employees Departments</a></li>
							       <li><a href="<?php echo base_url();?>GrSettingsC/sendAll">Send SMS to all</a></li>
							       <li><a href="<?php echo base_url();?>GrSettingsC/smslogs">SMS logs</a></li>
							    </ul>
							</li>
							<li><a href="<?php echo base_url();?>GrSettingsC/users">Users</a></li>
						</ul>
					</li>

					    <li class="has-sub">
						<a href="javascript:;">
							<span class="caret pull-right"></span>
							<i class="fa fa-suitcase text-warning"></i> 
							<span>Academics</span>
						</a>
						
						<ul class="sub-menu">
						   
						    <li><a href="<?php echo base_url();?>AcademicsC/manageSubjects">Manage Subjects</a></li>
						    <li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
							    <a href="javascript:;">
								    <span class="caret pull-right"></span><span>Attendance</span>
							    </a>
							    <ul class="sub-menu">
							        <li><a href="<?php echo base_url();?>AcademicsC/attendanceRegister">Attendance Register</a></li>
								<li><a href="<?php echo base_url();?>AcademicsC/attendanceReport">Attendance Report</a></li>
							    </ul>
							</li>

							<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
							    <a href="javascript:;">
								    <span class="caret pull-right"></span><span>Timetable</span>
							    </a>
							    <ul class="sub-menu">
							       <li class="has-sub">
								    <a href="javascript:;"><b class="caret pull-right"></b>Configurations</a>
								    <ul class="sub-menu" >
									    <li><a href="<?php echo base_url();?>AcademicsC/classrommAllocation">Classromm Allocation</a></li>
									    <li><a href="<?php echo base_url();?>AcademicsC/createWeekdays">Create Weekdays</a></li>
									    <li><a href="<?php echo base_url();?>AcademicsC/setClassTimings">Set Class Timings</a></li>
								    </ul>
								</li>
							       <li><a href="<?php echo base_url();?>AcademicsC/manageTimetable">Manage Timetable</a></li>
							       <li><a href="<?php echo base_url();?>AcademicsC/timeTableView">View Timetable</a></li>
							    </ul>
							</li>
							<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
							    <a href="javascript:;">
								    <span class="caret pull-right"></span><span>Manage Courses & Batches</span>
							    </a>
							    <ul class="sub-menu">
							       <li><a href="<?php echo base_url();?>AcademicsC/manage_courses">Courses</a></li>
							       <li><a href="<?php echo base_url();?>AcademicsC/manage_batches">Batches</a></li>
							       <li><a href="<?php echo base_url();?>AcademicsC/#">Assign Class Teacher</a></li>
							    </ul>
							</li>

						</ul>
					</li>

					<li class="has-sub">
						<a href="javascript:;">
							<span class="caret pull-right"></span>
							<i class="fa fa-suitcase text-warning"></i> 
							<span>HR</span>
						</a>
						<ul class="sub-menu">
						    <!--<li><a href="<?php echo base_url();?>dashboardC/employee_category">Employee category</a></li>-->
							<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
							    <a href="javascript:;">
								    <span class="caret pull-right"></span><span>Configurations</span>
							    </a>
							    <ul class="sub-menu">
							       <li><a href="<?php echo base_url();?>HrSettingsC/employee_category">Employee category</a></li>
							       <li><a href="<?php echo base_url();?>HrSettingsC/employee_department">Employee Department</a></li>
							       <li><a href="<?php echo base_url();?>HrSettingsC/employee_position">Employee Position</a></li>
							       <li><a href="<?php echo base_url();?>HrSettingsC/employee_grade">Employee Grade</a></li>
							       <li><a href="<?php echo base_url();?>HrSettingsC/working_Days">Working Day </a></li>
							       <li><a href="<?php echo base_url();?>HrSettingsC/leave_Types">Leave Types </a></li>
							       <li><a href="<?php echo base_url();?>HrSettingsC/Bank_Details">Bank Details</a></li>
							       <li><a href="<?php echo base_url();?>HrSettingsC/additional_Details">Additional Details</a></li>
							    </ul>
							</li>
							<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
						    	<a href="javascript:;"><span class="caret pull-right"></span><span>Payroll and Payslip</span></a>
							    <ul class="sub-menu">
								    <li><a href="<?php echo base_url();?>Payrollcategory/Payroll_Categoryview">Payroll Category</a></li>
								    <li><a href="<?php echo base_url();?>Payrollgroup/Create_Payroll_Groupview">Payroll Groups</a></li>
								    <li><a href="<?php echo base_url();?>Payslip/payslip_payrollgroup_view">Payslips for Payroll Groups</a></li>
								    <li><a href="<?php echo base_url();?>Payslip/payslipFor_employees">Payslips for Employees</a></li>
								    <li><a href="<?php echo base_url();?>Payslip/rejected_payslip">Rejected Payslips</a></li>
								    <li><a href="<?php echo base_url();?>Payslip/EmpPayslip">Payslip Report</a></li>
								</ul>
							</li>
							<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
							    <a href="javascript:;"><span class="caret pull-right"></span><span>Employee Leave Management </span></a>
							    <ul class="sub-menu">
								    <li><a href="<?php echo base_url();?>HrLeaveMgmntCtrl/AttendanceRegister">Attendance Register</a></li>
								    <li><a href="<?php echo base_url();?>HrLeaveMgmntCtrl/AttendanceReport">Attendance Report</a></li>
								    <li><a href="<?php echo base_url();?>HrLeaveMgmntCtrl/LeaveRest">Leave Reset</a></li>
								    <li><a href="<?php echo base_url();?>HrLeaveMgmntCtrl/LeaveApplication">Leave Application</a></li>
								</ul>
							</li>

							<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
							    <a href="javascript:;"><span class="caret pull-right"></span><span>Employee Management</span></a>
							    <ul class="sub-menu">
								    <li><a href="<?php echo base_url();?>HR_EmployeeMgmnt/EmployeeAdmission">Employee admission</a></li>
								    <li><a href="<?php echo base_url();?>HR_EmployeeMgmnt/EmployeeSubjectAssociation">Employee subject association</a></li>
								</ul>
							</li>
							<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
							    <a href="<?php echo base_url();?>HrSettingsC/employeeSearch"><span>Employee Search</span></a>
							</li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<span class="caret pull-right"></span>
							<i class="fa fa-suitcase text-warning"></i> 
							<span>Finance</span>
						</a>
						<ul class="sub-menu">
						    <li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
							    <a href="javascript:;">
								    <span class="caret pull-right"></span><span>Asset Liability Management</span>
							    </a>
							    <ul class="sub-menu">
								<li><a href="<?php echo base_url('AssetCntrl/assetView')?>">Asset</a></li>
							       <li><a href="<?php echo base_url('AssetCntrl/liabilityView')?>">Liability</a></li>
							    </ul>
							</li>
							<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
						    	<a href="<?php echo base_url('FinCategoryCtrl/finCategoryview')?>"><span>Finance Categories</span></a>
							</li>
							<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
							    <a href="javascript:;">
									<span class="caret pull-right"></span><span>Transactions</span></a>
								<ul class="sub-menu">
							       <li><a href="<?php echo base_url('FinTransactionCtrl/expense')?>">Add Expense</a></li>
							       <li><a href="<?php echo base_url('FinTransactionCtrl/income')?>">Add Income</a></li>
									<li><a href="<?php echo base_url('FinTransactionCtrl/revertedTransaction')?>">Reverted Transactions</a></li>
							    </ul>
							</li>
							<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
							    <a href="<?php echo base_url('FinDonationCtrl/addNewDonation')?>"><span>Donations</span></a>
							</li>
							<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
							    <a href="javascript:;">
								    <span class="caret pull-right"></span><span>Fees</span>
							    </a>
							    <ul class="sub-menu">
									<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
										<a href="javascript:;">
											<span class="caret pull-right"></span><span>Configurations</span>
										</a>
										<ul class="sub-menu">
										   <li><a href="<?php echo base_url('FeesCntrl/fees_category')?>">Category</a></li>
										   <li><a href="<?php echo base_url('FeesCntrl/fees_particular')?>">Particulars</a></li>
										   <li><a href="<?php echo base_url('FeesCntrl/fees_discount')?>">Fee Discount</a></li>
										   <li><a href="<?php echo base_url('FeesCntrl/fees_fine')?>">Fine</a></li>
										</ul>
								    </li>
								    <li><a href="<?php echo base_url('FeesCntrl/schedule_fee_collection')?>" >Schedule Fee Collection</a></li>
								    <li><a href="<?php echo base_url('FeesCntrl/fee_collection')?>">Fee Collection</a></li>
								    <li><a href="<?php echo base_url('FeesCntrl/feesDefaulters')?>">Fee Defaulters</a></li>
									<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
										<a href="javascript:;">
											<span class="caret pull-right"></span><span>Fee Refund</span>
										</a>
										<ul class="sub-menu">
										    <li><a href="<?php echo base_url('FeesCntrl/ViewRefundRules ')?>">Create Refund Rule</a></li>
										    <li><a href="<?php echo base_url('FeesCntrl/view_refund')?>">View Refund</a></li>
										    <li><a href="<?php echo base_url('FeesCntrl/apply_refund')?>">Apply Refund</a></li>
										</ul>
								    </li>
							    </ul>
							</li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<span class="caret pull-right"></span>
							<i class="fa fa-suitcase text-warning"></i> 
							<span>Students</span>
						</a>
						<ul class="sub-menu">
						    <li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
						    	<a href="<?php echo base_url('StudentCntrl/student_detail')?>"><span>Students Details</span></a>
							</li>
							<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
						    	<a href="<?php echo base_url('StudentCntrl/finCategoryview')?>"><span> Roll No</span></a>
							</li>
							<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
						    	<a href="<?php echo base_url('StudentCntrl/admission')?>"><span>Admission</span></a>
							</li>
							<li class="has-sub" style="list-style-type:none; list-style:none; list-style-image:none;">
							    <a href="javascript:;">
									<span class="caret pull-right"></span><span>configurations</span></a>
								<ul class="sub-menu">
							       <li><a href="<?php echo base_url('StudentCntrl/manage_student_cat')?>"> Manage student Category</a></li>
							       <li><a href="<?php echo base_url('StudentCntrl/manage_roll')?>">Manage Student Roll No</a></li>
								</ul>
							</li>
						</ul>
					</li>
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->

		
		
		
		
		