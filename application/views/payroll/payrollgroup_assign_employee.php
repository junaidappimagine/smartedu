<div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">Page Options</a></li>
            <li class="active">Blank Page</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">Payroll Group Employees View <small></small></h1>
        <!-- end page-header -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">Payroll Group Employees View</h4>
            </div>
            <div class="panel-body">
                    <div class="container" style="width: 100%">
                    <p><br></p>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-2">Department</label>
                            <label class="col-md-1"><b>:</b></label>
                            <div class="col-md-3">
                                <select class="form-control">
                                   <option>All Department</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <p><br> </p>
                        <table id="data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Employee Name</th>
                                    <th>Employee Categories</th>
                                    <th>Payroll Group</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Employee 1</td>
                                    <td>Administration</td>
                                    <td>System admin</td>
                                    <td>
                                        <a href="<?php echo base_url('payrollgroup/assign_Payrollgroup_View');?>"><button type="button" class="btn btn-primary btn btn-xs"">Assign Group</button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Employee 2</td>
                                    <td>Teaching</td>
                                    <td>Junior Teacher</td>
                                    <td>
                                        <a href="<?php echo base_url('payrollgroup/change_Payrollgroup_View');?>"><button type="button" class="btn btn-info btn btn-xs"">Change Group</button></a>
                                    </td>
                                </tr>
    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
