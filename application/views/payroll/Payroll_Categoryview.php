<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">HR</a></li>
				<li><a href="javascript:;">Payroll and Payslip</a></li>
				<li class="active">Payroll Category List View</li>
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
                            <h4 class="panel-title">Payroll Category List</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
                                <!--<fieldset>-->
                                   <!-- <legend>Payroll Categories</legend>-->
				    <div class="row">
					    <div class="col-md-4"><a href="<?php echo base_url('Payrollcategory/Create_Payroll_Category'); ?>" class="btn btn-primary btn-sm" role="button">Create Payroll Category</a></div>
                                    </div><br>
				    <div class="panel-body">
				    <h6>List of payroll categories that define employee earnings.</h6>
				    <div class="table-responsive">
					<table id="data-table" class="table table-striped table-bordered">
					    <thead>
						<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
						    <th>Category Name</th>
						    <th>Category Code</th>
						    <th>Value</th>
						    <th>Action</th>
						</tr>
						<tr>
						    <th colspan="4">Earnings</th>
						</tr>
					    </thead>
					    <tbody>
						<tr>
						    <td>Basic</td>
						    <td>BA</td>
						    <td>50%GROSS</td>
						    <td><a href="<?php echo base_url('Payrollcategory/Payroll_Categorydetails?var1=Basic&var2=BA&var3=50%GROSS'); ?>"> View </a></td>
						</tr>
					     </tbody>
					</table>
				     </div>	
				    <h6>List of payroll categories that define employee deductions.</h6>
				    <div class="table-responsive">
					    <table id="myTable" class="table table-striped table-bordered">
						<thead>
						    <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
							<th>Category Name</th>
							<th>Category Code</th>
							<th>Value</th>
							<th>Action</th>
						    </tr>
						    <tr>
							<th colspan="4" >Deductions</th>
						    </tr>
						</thead>
						<tbody>
						    <tr>
							<td>Provident fund</td>
							<td>PF</td>
							<td>10%GROSS</td>
							<td><a href="<?php echo base_url('Payrollcategory/Payroll_Categorydetails?var1=Provident fund&var2=PF&var3=10%GROSS'); ?>"> View </a></td>
						    </tr>
						    <tr>
							<td>Provident fund</td>
							<td>LOP</td>
							<td>1.5%GROSS</td>
							<td><a href="<?php echo base_url('Payrollcategory/Payroll_Categorydetails/Provident fund?var1=Provident Fund&var2=LOP&var3=1.5%GROSS'); ?>"> View </a></td>
						    </tr>
						 </tbody>
					    </table>
					 </div>	
					</div>		<!--</fieldset>-->
				    </div>
                        <!--end well-->
				</div>
                    <!-- end panel -->
		    </div>
	<!-- end #content -->
	<script>
	    $(document).ready(function(){
		$('#myTable').DataTable();
	    });
	</script>
		