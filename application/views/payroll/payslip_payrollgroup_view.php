<!-- begin #content -->
    <div id="content" class="content">
        <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">HR</a></li>
                <li><a href="javascript:;">Payroll and Payslip Management</a></li>
                <li class="active">Payslips for Payroll Groups</li>
        </ol>
        <h1 class="page-header">HR Management | Payslips for Payroll Groups</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                        <h4 class="panel-title">Payslips for Payroll Groups</h4>
                    </div>
                    <div class="panel-body">
                        <!--<div class="panel-body">-->
                        <h4>Salary Waged Payroll</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                            <th>Payroll group</th>
                                            <th>Recent payslip</th>
                                            <th>Employees</th>
                                            <th></th>
                                        </tr>
                                        <tr>
                                            <th colspan="4" style="background: #f0f3f5 none repeat scroll 0 0;">Monthly</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Current Payslip</td>
                                            <td>December 2016</td>
                                            <td>7</td>
                                            <td><a href="<?php echo base_url('payslip/generate_payslips'); ?>"> <button type="button" class="btn btn-warning btn btn-xs">Generate payslip</button> </a>
                                                <a href="<?php echo base_url('payslip/view_Generate_Payslip'); ?>"> <button type="button" class="btn btn-primary btn btn-xs">View Payslips</button></a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
