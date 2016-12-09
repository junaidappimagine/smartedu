    <html>
        <head>
            <style>
                .panel-body h1{
                 font-size: 15px;
                }
		
            </style>
        </head>     
        <body>
            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="javascript:;">HR</a></li>
                    <li><a href="javascript:;">Payroll and Payslip Management</a></li>
                    <li class="active">Payslips for Payroll Groups</li>
                    <li class="active">Generated Payslips - Keerthi</li>
                    <li class="active">View Payslip</li>
                </ol>
                 <h1 class="page-header">HR Management | Employee payslip </h1>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                            <div class="panel-heading">
                                <div class="panel-heading-btn">
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                   <!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                                </div>
                               <h4 class="panel-title">Generate Payslips</h4>
                            </div>
                            <div class="panel-body" >
				<div class="col-md-12 row">
				    <h1 class="page-header"><b> Employee Payslip - Keerthi</<b></h1>
					
				</div>
                                
				<div class="col-md-12 row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="col-sm-4" style="text-align: left;">Pay period</label>
                                            <label class="col-sm-1" style="text-align: left;">:</label>
                                            <label class="col-sm-6"><b><?php echo $result1 ;?></b></label>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="col-sm-3" style="text-align: left;">Status </label>
                                            <label class="col-sm-1" style="text-align: left;">:</label>
                                            <label class="col-sm-6"><b><?php echo $result3 ;?></b></label>
                                        </div><br><br>
                                    </div><br><br>
                                </div>
				<div class="col-md-12">
				    <div class="form-group">
					<label class="col-sm-2" style="text-align: left;">Name</label>
					<label class="col-sm-1" style="text-align: left;">:</label>
					<label class="col-sm-9"><?php echo $result ;?></label>
				    </div>
				    <div class="form-group">
					<label class="col-sm-2" style="text-align: left;">Department</label>
					<label class="col-sm-1" style="text-align: left;">:</label>
					<label class="col-sm-9"><?php echo $result2 ;?></label>
				    </div>
				    <div class="form-group">
					<label class="col-sm-2" style="text-align: left;">Position</label>
					<label class="col-sm-1" style="text-align: left;">:</label>
					<label class="col-sm-9">Junior</label>
				    </div>
                                    <legend style="padding-bottom: 80px;"></legend>
				</div>
                                
				<div class="col-md-12">
				     <h1 class="page-header"><b> Payroll Details </b></h1>
				     <div class="form-group">
					 
					<label class="col-sm-2" style="text-align: left;">Payroll group</label>
					<label class="col-sm-1" style="text-align: left;">:</label>
					<label class="col-sm-9">Current Payslip</label>
				    </div><br><br>
				 </div>
				 <!--   <div class="col-md-12 row">-->
				       
				        <div class="col-md-12" >
					    <h1 class="page-header"><b> Payroll categories of this payroll group </<b></h1>
				      
					    <h1 class="page-header"><b> Earnings </b></h1>
					   
					    <div class="form-group col-sm-12">
						<label class="col-sm-2" style="text-align: left;">Basic Pay</label>
						<label class="col-sm-1" style="text-align: left;">:</label>
						<label class="col-sm-9">Rs. 10000.00</label>
					    </div>
					    <div class="form-group col-sm-12">
						<label class="col-sm-2" style="text-align: left;">Bonus</label>
						<label class="col-sm-1" style="text-align: left;">:</label>
						<label class="col-sm-9">Rs. 20000.00</label>
						<div class="col-sm-5"></div>
					    </div>
                                            <div class="form-group col-sm-12">
						<label class="col-sm-2" style="text-align: left;">Total Earnings </label>
						<label class="col-sm-1" style="text-align: left;">:</label>
						<label class="col-sm-9">Rs. 30000.00</label>
						<div class="col-sm-5"></div>
					    </div>
					</div>
				  <!-- </div>-->
				    <div class="col-md-12">
					 <h1 class="page-header"><b> Deduction </b></h1>
					
					<div class="form-group col-sm-12">
					    <label class="col-sm-2" style="text-align: left;">Insurance</label>
					    <label class="col-sm-1" style="text-align: left;">:</label>
					    <label class="col-sm-9">Rs. 4000.00</label>
					</div>
					<div class="form-group col-sm-12">
					    <label class="col-sm-2" style="text-align: left;">Total Deduction</label>
					    <label class="col-sm-1" style="text-align: left;">:</label>
					    <label class="col-sm-9">Rs. 4000.00</label>
					</div>
					<br>
					<div class="form-group col-sm-12">
					    <br>
					    <label class="col-sm-2" style="text-align: left;"><h5><b>Net Pay</b></h5></label>
					    <label class="col-sm-1" style="text-align: left;">:</label>
					    <label class="col-sm-9">Rs. 36000.00</label>
					</div>
				    </div>
				    <div class="form-group">
					<div class="col-md-8 col-md-offset-3">
					    <div class="col-md-4">
						 <button type="submit" class="btn btn-sm btn-primary">Pdf Report</button>
					    </div>
					
					</div>
				    </div>
				
                                
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </body>
        <script>
	   
            $(document).ready(function(){
                         
	    $('#datePicker').datepicker({
		    format: 'M-yyyy'
		});
	   
		
            });
	    function addEarning() {
		$("#add").removeClass('hidden');
	    }
	    function removeData() {
		$("#add").addClass('hidden');
	    }
	    function dedData() {
		//alert();
		$("#ded").removeClass('hidden');
	    }
	    function removeDD() {
		$("#ded").addClass('hidden');
	    }
        </script>
     </html>

    