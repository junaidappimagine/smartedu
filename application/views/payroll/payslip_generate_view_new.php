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
                    <li class="active">Generate Payslips</li>
                    <!--<li class="active">Employees with Outdated Payroll </li>-->
                </ol>
                 <h1 class="page-header">HR Management | View Payslips </h1>
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
                               <h4 class="panel-title">Payroll group - Current Payslip</h4>
                            </div>
                            <div class="panel-body" >
                                <div class="col-md-10 row">
                                    <h1 class="page-header"><b>Payroll group - Current Payslip</<b></h1>
                                    <div class="form-group">
                                        <span class="col-md-4">Payroll group</span>
                                        <span class="col-md-4">Payment frequency</span>
                                        <span class="col-md-4">Payslips generated</span>
                                         <!--<label class="col-md-10">
                                             : &nbsp; Current Payslip
                                         </label><br>-->
                                    </div>
                                </div>
                                <div class="col-md-10 row">
                                    <div class="form-group">
                                        <p></p>
                                        <label class="col-md-4 control-label"><b>January 2017</b></label>
                                        <label class="col-md-4 control-label"><b>Salaried - Monthly</b></label>
                                        <label class="col-md-4 control-label"><b>2 of 8 Employees</b></label>
                                    </div><br>
                                    <p></p>
                                    <hr>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="col-md-8">
                                        <div class="col-md-2" style="margin:25px">
                                            <label>Filters</label>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="col-md-2 control-label">Employees</label>
                                            <select class="form-control selectpicker input-sm"  data-style="btn-white btn-sm" name="" id="dropdown1" onchange="filterData()">
                                                <option value="" selected="selected">All</option>
                                                <option value="With LOB">With LOB</option>
                                                <option value="Outdated Payroll">Outdated Payroll</option>
                                                <option value="Without LOB">Without LOB</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="col-md-12 control-label">Payslip status</label>
                                            <select class="form-control selectpicker input-sm"  data-style="btn-white btn-sm" name="" id="dropdown2" onchange="filterData()">
                                                <option value="" selected="selected">All</option>
                                                <option value="Approved">Approved</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Rejected">Rejected</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="<?php echo base_url('payslip/payslip_view_all');?>"><button type="button" class="btn btn-inverse btn btn-sm" style="float: right">View All Payslips</button></a>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table id="data-table" class="table table-bordered">
                                                <thead>
                                                    <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                        <th>Employee</th>
                                                        <th>Employee number</th>
                                                        <th>Department</th>
                                                        <th>Net Salary (Rs. )</th>
                                                        <th>Payslip status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>ereererere rere  </td>
                                                        <td>EMP009</td>
                                                        <td>Hindi</td>
                                                        <th>3550.00</th>
                                                        <th>Pending</th>
                                                        <td>
                                                            <a>View Payslip</a> &nbsp;&nbsp;&nbsp;&nbsp;<a  id="Add" class="btnDelete"><i class="fa fa-trash"></i><span>&nbsp; Delete payslip</span></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('payslip/pdf_generate');?>">PDF report</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kunal</td>
                                                        <td>EMP001</td>
                                                        <td>Science</td>
                                                        <th>53250.00</th>
                                                        <th>Pending</th>
                                                        <td>
                                                            <a>View Payslip</a> &nbsp;&nbsp;&nbsp;&nbsp;<a  id="Add" class="btnDelete"><i class="fa fa-trash"></i><span>&nbsp; Delete payslip</span></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('payslip/pdf_generate');?>">PDF report</a>
                                                        </td>
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
                </div>
            </body>
        <script>
		$(function () {
		    $('.datepicker-dob').datepicker({format:'MM yyyy'});
		});
		
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
                    table.columns(1).search( this.value ).draw();
                } );
                $('#dropdown2').on('change', function () {
                    var table =  $('#data-table').DataTable();
                    table.columns(4).search( this.value ).draw();
                } );
		
        </script>
     </html>

    