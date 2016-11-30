<style>
    @media only screen and (min-width: 320px) and (max-width: 359px){
    .mytable{
        width: 250px !important;
        }
    }
    @media only screen and (min-width: 360px) and (max-width: 500px){
    .mytable{
        width: 290px !important;
        }
    }
    @media only screen and (min-width: 500px) and (max-width: 769px){
        .mytable{
            width: 450px !important;
            /*background-color: blue;*/
        }
    }
    @media only screen and (min-width: 800px) and (max-width: 980px){
        .mytable{
            width: 500px !important;
            /*background-color: red;*/
        }
    }
</style>

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
              <!--  <div class="panel-body">-->
                <div class="container" style="width: 100% !important">
                  <p></p>
                  <a href="<?php echo base_url('payrollgroup/payrollgroup_Assign_Employees');?>"><button type="button" class="btn btn-info btn btn-sm " name="Create_Payroll_group">+ Assign</button></a>
                  <p></p>
                  <br>
                  <form class="form-horizontal">
                    <table class="mytable" width="40%">
                        <tr>
                            <td><label class="col-md-12 ">Payroll group</label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b>BASIC</b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 ">Department</label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td>
                                <div class="col-sm-12">
                                    <select class="form-control input-sm">
                                        <option>All Department</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                 </div>
                            </td>
                        </tr>
                    </table>
                    <div>
                        <p></p>
                        <br>
                    </div>
                  </form>
                 <!-- </div>-->
                <!--  <div class="panel-body">-->
                  <div class="table-responsive">
                   <!--   <p><br> </p>-->
                      <table id="data-table" class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>Employee Name</th>
                                  <th>Department</th>
                                  <th>Employee Categories</th>
                                  <th>Recent Payslip</th>
                                  <th>Action</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>Employee 1</td>
                                  <td>Administration</td>
                                  <td>System admin</td>
                                  <td>03-10-2016</td>
                                  <td>
                                      <a href="<?php echo base_url('payrollgroup/view_payroll');?>"><button type="button" class="btn btn-warning btn btn-xs"">View Payroll</button></a>
                                      <a href="<?php echo base_url('');?>"><button type="button" class="btn btn-danger btn btn-xs">Remove</button></a>
                                  </td>
                              </tr>
                          </tbody>
                      </table>
                  </div>
                 <!-- </div>-->
              </div>
            </div>
        </div>
</div>