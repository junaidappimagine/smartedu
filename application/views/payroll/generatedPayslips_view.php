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
                    <li class="active">Payslips for Employees</li>
                    <li class="active">Generate Payslips - Keerthi</li>
                </ol>
                 <h1 class="page-header">HR Management | Generated Payslips </h1>
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
                               <h4 class="panel-title">Generated Employee Payslips </h4>
                            </div>
                            <div class="panel-body" >
				<div class="col-md-12 row">
				    <div class="col-md-10">
					<h1 class="page-header"><b> Generate Payslips - Keerthi (EMP003) </<b></h1>
				    </div>
				    <div class="col-md-2">
					<a href="<?php echo base_url('payslip/generate_payslip'); ?>"> <button class="btn btn-warning btn-xs">Generate payslip</button> </a>
				    </div>
					  
				</div>
				<div class="col-md-12" >
				   
				    <div class="form-group">
					<label class="col-sm-2" style="text-align: left;">Name</label>
					<label class="col-sm-1" style="text-align: left;">:</label>
					<label class="col-sm-9">Keerthi</label>
				    </div>
				    <div class="form-group">
					<label class="col-sm-2" style="text-align: left;">Department</label>
					<label class="col-sm-1" style="text-align: left;">:</label>
					<label class="col-sm-9">Maths</label>
				    </div>
				    <div class="form-group">
					<label class="col-sm-2" style="text-align: left;">Position</label>
					<label class="col-sm-1" style="text-align: left;">:</label>
					<label class="col-sm-9">Junior</label>
				    </div>
                                    <div class="form-group">
					 
					<label class="col-sm-2" style="text-align: left;">Payroll group</label>
					<label class="col-sm-1" style="text-align: left;">:</label>
					<label class="col-sm-2">Current Payslip</label>
                                        <label class="col-sm-2"><a href="<?php echo base_url('payslip/view_Payroll');?>">View Payroll</a></label>   
				    </div>
				    <div class="form-group">
					<p></p>
					<p></p>
				    </div>
				    <legend style=" padding-bottom: 90px;"></legend>
				  
				</div>
                                <div class="row">
					<div class="form-group">
					    <div class="col-md-10">
						<label class="col-md-2 control-label"><p></p><p>Payslip Status</p></label>
					    <div class="col-md-3">
						<select class="form-control selectpicker" data-style="btn-white btn-sm"  id="dropdown1">
						    <option value="" selected="selected">All</option>
						    <option value="Pending">Pending</option>
						    <option value="Approved">Approved</option>
						</select>
					    </div>
					    </div>
                                    </div>
                                </div><br>
                                  <div class="form-group col-sm-12">
					    <div class="table-responsive">
						<table id="data-table" class="table table-striped table-bordered">
						    <thead>
						    <tr>
							<th>Pay period</th>
							<th>Salary</th>
							<th>Payslip status</th>
							<th></th>           
						    </tr>
						    </thead>
						    <tbody>
							<tr>
							    <td>December 2016</td>
							    <td>31000.00</td>
							    <td>Pending</td>
							    <td><a href="<?php echo base_url('payslip/viewPayslip?var1=keerthi&var2=December 2016&var3=Maths&var4=Pending');?>">View Payslip</a> &nbsp;&nbsp;&nbsp;&nbsp;<a  id="Add" class="btnDelete"><i class="fa fa-trash"></i><span>&nbsp; Delete payslip</span></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('payslip/pdf_generate');?>">PDF report</a></td>
							</tr>
							<tr>
							    <td>march 2016</td>
							    <td>31000.00</td>
							    <td>Pending</td>
							    <td><a href="<?php echo base_url('payslip/viewPayslip?var1=Senthil&var2=march 2016&var3=Hindi&var4=Pending');?>">View Payslip</a> &nbsp;&nbsp;&nbsp;&nbsp;<a  id="Add" class="btnDelete" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash"></i><span>&nbsp; Delete payslip</span></a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url('payslip/pdf_generate');?>">PDF report</a></td>
							</tr>
							<tr>
							    <td>February 2016</td>
							    <td>31000.00</td>
							    <td>Approved</td>
							    <td><a href="<?php echo base_url('payslip/viewPayslip?var1=Rafeeq&var2=February 2016&var3=English&var4=Approved');?>">View Payslip</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url('payslip/pdf_generate');?>">PDF report</a></td>
							</tr>
						    </tbody>
						</table>
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
	 	 
		$('#datePicker')
		    .datepicker({
			format: 'M-Y'
		    });
		    } );
		    
		    function filterData() {
			$("#add").removeClass('hidden');
		    }
		    $(".btnDelete").click(function(){
			var $row = $(this).parents('tr');
		    
			    bootbox.confirm("Are you sure you want to delete?", function(confirmed) {   
			if (confirmed) {
			 
			 $row.remove();
			}    
		    });
		  
		    
	    });
	    $('#dropdown1').on('change', function () {
		
		 var table =  $('#data-table').DataTable();
                    table.columns(2).search( this.value ).draw();
                } );
        </script>
     </html>

    