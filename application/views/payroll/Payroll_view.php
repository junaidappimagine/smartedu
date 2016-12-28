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
                    <li><a href="javascript:;">Payroll and Payslip</a></li>
                    <li class="active">Payroll Group View </li>
                </ol>
                 <h1 class="page-header">HR Management | Payroll Group </h1>
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
                               <h4 class="panel-title">Payroll Group View</h4>
                            </div>
                            <div class="panel-body" >
                                <div class="col-md-12 row" >
                                    <div class="col-sm-10">
                                        <h1 class="page-header"><b>Payroll Group Details</b></h1>
                                    </div>
                                    <div class="col-sm-2">
                                        <center><a href="<?php echo base_url('Payrollgroup/Payroll_Edit');?>" name="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i>Edit</a>  <a href="<?php echo base_url('Payrollgroup/payrollgroup_Employees_view');?>" name="edit" class="btn btn-xs btn-warning">Empolyee</a></center>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12 row" > 
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Payroll Group Name </label>
                                         <label class="col-md-8">
                                            : &nbsp; BASIC
                                         </label>
                                    </div>
                                </div>
                                <div class="row col-md-12">
                                  <hr>
                                </div>
                                <div class="col-md-12 row">
                                    <h1 class="page-header"><b>Salary Preference</<b></h1>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Pyment Frequency</label>
                                         <label class="col-md-10">
                                             : &nbsp; Monthly
                                         </label><br>
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Payslip generation date </label>
                                         <label class="col-md-10">
                                             : &nbsp; Day 2 of every month
                                         </label>
                                    </div><br>
                                </div>
                                <!--<div class="col-md-12 row">-->
                                <!--    <h1 class="page-header"><b>Loss of Pay Criteria</b></h1>-->
                                <!--    <div class="form-group">-->
                                <!--        <label class="col-md-2 control-label">LOP Calculation Method</label>-->
                                <!--         <label class="col-md-10">-->
                                <!--             : &nbsp; 10%GROSS-->
                                <!--         </label>-->
                                <!--    </div>-->
                                <!--</div>-->
                                 <div class="col-md-12 row"><br>
                                    <h1 class="page-header"><b>Payroll Categories</b></h1>
                                    <p style="color:#333;">Earnings</p>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                        <th>Payroll Category name(Code)</th>
                                                        <th>Value</th>
                                                    </tr>
                                                </thead>
                                                          <tbody>
                                                           <tr id="earn_id"><td colspan="4" style="color:#333;background: #f0f3f5 none repeat scroll 0 0;"><b>Earnings</b></td></tr>
                                                              <tr id="erng">
                                                                  <td>Basic (BA)</td>
                                                                  <td>50%GROSS</td>
                                                              </tr>
                                                              <tr id="deduct_id"><td colspan="4" style="color:#333;background: #f0f3f5 none repeat scroll 0 0;"><b>Deduction</b></td></tr>
                                                              <tr id="deduct">
                                                                  <td>Provident fund (PF)</td>
                                                                  <td>10%GROSS</td>
                                                              </tr>
                                                              <tr id="deduct1">
                                                                  <td>Provident fund (LOP)</td>
                                                                  <td>1.5%GROSS</td>
                                                              </tr>
                                                          </tbody>
                                            </table>

                                        </div>
                                    </div><br>
                                     <p style="color:#333;">Deduction</p>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                        <th>Payroll Category name(Code)</th>
                                                        <th>Value</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr id="earn"><td colspan="4" style="color:#333;background: #f0f3f5 none repeat scroll 0 0;"><b>Earnings</b></td></tr>
                                                    <tr><td colspan="4">No data</td></tr>
                                                    <tr id="ded"><td colspan="4" style="color:#333;background: #f0f3f5 none repeat scroll 0 0;"><b>Deduction</b></td></tr>
                                                    <tr><td colspan="4">No data</td></tr>
                                                </tbody>
                                        </table><br>

                                        </div>
                                    </div>

                                </div>
                            </div>
                             
                        </div>
                    </div>
                </div>
                </div>
            </body>
     </html>

    