<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Home</a></li>
		<li><a href="javascript:;">Employee Payslip</a></li>
		<li class="active">Payslip Report</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Payslip Report<small></small></h1>
    <!-- end page-header -->
    <!-- begin row -->
    <div class="row">
		<!-- begin col-12 -->
		<div class="col-md-12">
		    <!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
			    <div class="panel-heading">
				<div class="panel-heading-btn">
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				</div>
				<h4 class="panel-title">Payslip Report</h4>
			    </div>
			    <div class="panel-body" id="crop-avatar">
                   <div class="well">
						<h4>Employee Payslip</h4>
						<hr>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-6" style="font-size:15px;">
									Pay period 
								</div>
								<div class="col-md-6" style="font-size:13px;">
									<b>:   December 2016</b>
								</div>
							</div>
							<div class="col-md-4" style="font-size:15px;">
								<div class="col-md-6">
									Status 
								</div>
								<div class="col-md-6" style="font-size:13px;">
									<b>:   Pending</b>
								</div>
							</div>
						</div><br>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-6">
									Name
								</div>
								<div class="col-md-6">
									<b>: <?php echo $result ;?></b>
								</div>
							</div>
						</div>
					   <br>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-6">
									Department 
								</div>
								<div class="col-md-6">
									<b>: <?php echo $result1 ;?></b>
								</div>
							</div>
						</div>
					   <br>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-6">
									Position 
								</div>
								<div class="col-md-6">
									<b>:   Junior</b>
								</div>
							</div>
						</div>
					   <br>
						<h4>Payroll Details</h4>
						<hr>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-6">
									Payroll group 
								</div>
								<div class="col-md-6">
									: Current Payslip
								</div>
							</div>
						</div><br><br>
						<h4>Payroll categories of this payroll group</h4>
						<hr>
						<h5><b>Earnings</b></h5>
						<br>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-6">
									Basic 
								</div>
								<div class="col-md-6">
									<b>: Rs. 20000.00</b>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-6">
									Housing Allowance 
								</div>
								<div class="col-md-6">
									<b>: Rs. 10000.00</b>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-6">
									  Human Resource Allowance 
								</div>
								<div class="col-md-6">
										<b>: Rs. 5000.00</b>
								</div>
							</div>
						</div>
					   <br>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-6">
									 Transport Allowance 
								</div>
								<div class="col-md-6">
										<b>: Rs. 5000.00</b>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-6">
									 Total Earnings 
								</div>
								<div class="col-md-6">
										<b>: Rs. 40000.00</b>
								</div>
							</div>
						</div><br>
						<h5><b>Deductions</b></h5><br>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-6">
									Income Tax 
								</div>
								<div class="col-md-6">
									<b>: Rs. 4000.00</b>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-6">
									 Provident Fund 
								</div>
								<div class="col-md-6">
									<b>: Rs. 5000.00</b>
								</div>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-6">
									Total Deductions 
								</div>
								<div class="col-md-6">
									<b: >Rs. 9000.00</b>
								</div>
							</div>
						</div><br><br>
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-6">
									Net Pay 
								</div>
								<div class="col-md-6">
									<b>: Rs. 310000.00</b>
								</div>
							</div>
							<div class="col-md-offset-1 col-md-3">
								<div class="col-md-6">  
									<a href="#"  class="btn btn-primary btn-sm">Delete Payslip</a>
								</div>
								<div class="col-md-6">  
								   <a href="#" class="btn btn-primary btn-sm">PDF Report</a>
							   </div>
							</div>
							
						</div>
					</div>
				</div>
		    <!-- end panel -->
		</div>
		<!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
