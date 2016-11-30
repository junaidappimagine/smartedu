<div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">Page Options</a></li>
            <li class="active">Blank Page</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Payroll Group <small></small></h1>
        <!-- end page-header -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">Payroll Group</h4>
            </div>
            <div class="panel-body">
                <p>
                <a class="btn btn-primary btn-sm"  href="<?php echo site_url('payrollgroup/Add_Payroll_Groupview');?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500"> Add</span></a>
                <!--<input type="button" class="btn btn-success btn btn-sm col-sm-offset-10" name="Create_Payroll_group" value="+ Create Payroll group">-->
                </p>
            <!--<div class="panel-body">-->
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Payroll Group Name</th>
                            <th>Assigned Employees</th>
                            <th>Payroll Categories</th>
                            <th>Salary Preferences</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Basics</td>
                            <td>15</td>
                            <td>BA,ALL,CAT1</td>
                            <td>Monthly</td>
                            <td>
                                <a href="#"><button type="button" class="btn btn-warning btn btn-xs"">View</button></a>
                                <a href="<?php echo base_url('payrollgroup/payrollgroup_Employees_view');?>"><button type="button" class="btn btn-info btn btn-xs">Employee</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
              <!--</div>-->
            

            </div>
        </div>
</div>