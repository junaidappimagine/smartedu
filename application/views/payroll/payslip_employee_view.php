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
                    <li class="active">Employees with Outdated Payroll </li>
                </ol>
                 <h1 class="page-header">HR Management | Employees with Outdated Payrol </h1>
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
                                    <h1 class="page-header"><b>Generate Payslips - Employees with Outdated Payroll</<b></h1>
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
                                        <label class="col-md-2 control-label">Pay period</label>
                                         <label class="col-md-10">
                                             : &nbsp; December 2016 
                                         </label>
                                    </div><br>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                        <span>Showing 4 of 8 Employees of this payroll group</span>
                                    </div>
                                    <div class="col-md-4">
                                        <label style="cursor:pointer" id="goBack"><u>Back to payslip summary</u></label>
                                    </div>
                                    </div>
                                </div></br></br>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                        <th>Employee</th>
                                                        <th>Employee number</th>
                                                        <th>Department</th>
                                                        <th>Additional leaves</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Keerthi </td>
                                                        <td>EMP003</td>
                                                        <td>Maths</td>
                                                        <th>0</th>
                                                        <td><a href="<?php echo base_url('payslip/genaratePayslip'); ?>"> <button type="button" class="btn btn-warning btn btn-xs">Genarate Payslip</button></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sarah  </td>
                                                        <td>EMP004</td>
                                                        <td>Maths</td>
                                                        <th>0</th>
                                                        <td><a href="<?php echo base_url('payslip/genaratePayslip'); ?>"> <button type="button" class="btn btn-warning btn btn-xs">Genarate Payslip</button></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lara </td>
                                                        <td>EMP005</td>
                                                        <td>Maths</td>
                                                        <th>0</th>
                                                        <td><a href="<?php echo base_url('payslip/genaratePayslip'); ?>"> <button type="button" class="btn btn-warning btn btn-xs">Genarate Payslip</button></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Karan </td>
                                                        <td>EMP008</td>
                                                        <td>Maths</td>
                                                        <th>0</th>
                                                        <td><a href="<?php echo base_url('payslip/genaratePayslip'); ?>"> <button type="button" class="btn btn-warning btn btn-xs">Genarate Payslip</button></a></td>
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
                
                $('#goBack').on('click', function(){
                    window.history.back();
                })
		
        </script>
     </html>

    