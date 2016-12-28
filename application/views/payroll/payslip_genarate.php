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
                </ol>
                 <h1 class="page-header">HR Management | Generate Payslips </h1>
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
                               <h4 class="panel-title">Generate Payslips </h4>
                            </div>
                            <div class="panel-body" >
                                <div class="col-md-12 row">
                                    <h1 class="page-header"><b>Generate Payslips </<b></h1>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Payroll group</label>
                                         <label class="col-md-10">
                                             : &nbsp; Current Payslip
                                         </label><br>
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Payment frequency</label>
                                         <label class="col-md-10">
                                             : &nbsp; Salaried - Monthly
                                         </label>
                                    </div><br>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Pay Period</label>
					<div class="col-sm-3 form-group datePick">
					    <span class='input-group'>
						<input type="text" name="pay_period" id="pay_period" class="form-control input-group datepicker-dob input-sm">
						<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
						</span>
					    </span>
					</div>
					<div class="col-sm-2 form-group dateValChange" style="display:none;">
					    <span></span>
					</div>
					<div class="col-md-1">
					    <button class="btn btn-inverse btn btn-sm" type="button" name="proceed" id="payslipDetails">Proceed</button>
					    <div id="dateChange" style="display:none; cursor: pointer;"><u>Changedate</u></div>
					    
					</div>
					<div id="cancelbut" style="display:none; cursor: pointer;" class="col-md-1">
					    <u>Cancel</u>
					</div>
                                    </div><br>
                                </div>
				<div class="col-md-12 showDiv" style="display:none">
				    <div class="row">
					<hr>
					<label>Employees in this payroll group : <b>8</b></label>
					<label style="float:right">Total net pay : <b>Rs. 211800.00</b></label></br></br>
					<label><b>Summary</b></label></br>
					<div class="table-responsive">
					    <table class="table table-bordered">
						<thead>
						    <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
							<th>Payslip status</th>
							<th>No. of employees</th>
							<th></th>
						    </tr>
						</thead>
						<tbody>
						    <tr>
							<td>Payslip generated</td>
							<td>1</td>
							<td>
							    <a href="<?php echo base_url('Payslip/view_Payroll_Payslip_New'); ?>"> <button type="button" class="btn btn-warning btn btn-xs">View Payslips</button></a>
							    <!--<a href="<?php echo base_url('Payslip/generate_payslips'); ?>"> <button type="button" class="btn btn-primary btn btn-xs">Generate All</button> </a>-->
							</td>
						    </tr>
						    <tr>
							<td>Payslip not generated</td>
							<td>6</td>
							<td></td>
						    </tr>
						    <tr>
							<td>&nbsp&nbsp Employees with outdated payroll</td>
							<td>5</td>
							<td>
							    <a href="<?php echo base_url('Payslip/view_Employee'); ?>"> <button type="button" class="btn btn-warning btn btn-xs">View Employees</button></a>
							    <!--<a href="<?php echo base_url('Payslip/generate_payslips'); ?>"> <button type="button" class="btn btn-primary btn btn-xs">Generate All</button> </a>-->
							</td>
						    </tr>
						    <tr>
							<td>&nbsp&nbsp Employees with updated payroll</td>
							<td>1</td>
							<td>
							    <a href="<?php echo base_url('Payslip/view_Employee'); ?>"> <button type="button" class="btn btn-warning btn btn-xs">View Employees</button></a>
							    <a href="<?php echo base_url('Payslip/generate_payslip_all'); ?>"> <button type="button" class="btn btn-primary btn btn-xs">Generate Payslip for All</button> </a>
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
		
		$('#payslipDetails').on('click', function(){
		    var datevalue = $('#pay_period').val();
		    //alert(ss);
		    $('.showDiv').css('display','block');
		    $('.datePick').css('display','none');
		    $('.dateValChange').text(datevalue).css('display','block');
		    $('#payslipDetails').css('display','none');
		    $('#dateChange').css('display','block');
		});
		
		$('#dateChange').on('click', function(){
		    $('#payslipDetails').css('display','block');
		    $('.datePick').css('display','block');
		    $('#pay_period').val('');
		    $('.dateValChange').css('display','none');
		    $('#dateChange').css('display','none');
		    $('#cancelbut').css('display','block');
		});
		
		$('#cancelbut').on('click', function(){
		    $('.datePick').css('display','none');
		    $('.dateValChange').css('display','block');
		    $('#payslipDetails').css('display','none');
		    $('#dateChange').css('display','block');
		    $('#cancelbut').css('display','none');
		});
		
        </script>
     </html>

    