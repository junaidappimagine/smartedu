
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
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
                <div class="container" style="width: 100% !important">
                <!--<a href="<?php echo base_url('Payrollgroup/assign_Payrollgroup_Edit');?>"><button type="button" class="btn btn-info btn btn-sm col-sm-offset-10" name="Create_Payroll_group">Change Group</button></a>-->
                <!--<p><br></p>-->
                    <form>
                        <div class="col-md-12" style="border-bottom: 1px solid gray" >
                            <h4>Employee Payroll :</h4>
                            <!--<hr>-->
                            <div class="form-group">
                                <label class="col-sm-2" style="text-align: left;">Name</label>
                                <label class="col-sm-1" style="text-align: left;">:</label>
                                <label class="col-sm-9">Employee1</label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2" style="text-align: left;">Department</label>
                                <label class="col-sm-1" style="text-align: left;">:</label>
                                <label class="col-sm-9">Employee1</label>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2" style="text-align: left;">Position</label>
                                <label class="col-sm-1" style="text-align: left;">:</label>
                                <label class="col-sm-9">System Admin</label>
                            </div>
                        </div>
                         <hr>
                        <div class="col-md-12" style="border-bottom: 1px solid gray" > 
                            <h4>Payroll Details :</h4>
                            <div class="form-group col-sm-12">
                                <label class="col-sm-2" style="text-align: left;">Payroll Group</label>
                                <label class="col-sm-1" style="text-align: left;">:</label>
                                <label class="col-sm-9">Basic</label>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="col-sm-2" style="text-align: left;">Gross Pay</label>
                                <label class="col-sm-1" style="text-align: left;">:</label>
                                <div class="col-sm-9" >
                                    <div class="col-md-3" style="margin-left: -15px">
                                    <input type="text" class="form-control input-sm" name="" value="2500">
                                    </div>
                                    <button type="button" class="btn btn-info btn btn-sm gross_btn">Caculate</button>
                                    <button type="button" class="btn btn-danger btn btn-sm gross_btn">Cancel</button>
                                    <p></p>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="col-md-12" >
                            <h4>Payroll Category :</h4>
                            <p>The Payroll amount are calculated based payroll category setup.you can edit the amount if needed</p>
                            <div class="col-md-12" >
                                <h4>Earnings:</h4>
                                <div class="form-group col-sm-12">
                                    <label class="col-sm-2" style="text-align: left;">Basic Pay</label>
                                    <label class="col-sm-1" style="text-align: left;">:</label>
                                    <div class="col-sm-2">
                                    <input type="text" class="form-control input-sm" name="" value="13277">
                                    <p></p>
                                    </div>
                                    <div class="col-sm-5"></div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="col-sm-2" style="text-align: left;">Bonus</label>
                                    <label class="col-sm-1" style="text-align: left;">:</label>
                                    <div class="col-sm-2">
                                    <input type="text" class="form-control input-sm" name="" value="8500">
                                    <p></p>
                                    </div>
                                    <div class="col-sm-5"></div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="col-sm-2" style="text-align: left;">Totall Earnings</label>
                                    <label class="col-sm-1" style="text-align: left;">:</label>
                                    <label class="col-sm-9"><b>2200 INR</b></label>
                                </div>
                            </div>
                            <div class="col-md-12" >
                                <h4>Deduction:</h4>
                                <div class="form-group col-sm-12">
                                    <label class="col-sm-2" style="text-align: left;">Insurance</label>
                                    <label class="col-sm-1" style="text-align: left;">:</label>
                                    <div class="col-sm-2">
                                    <input type="text" class="form-control input-sm" name="" value="2000">
                                    <p></p>
                                </div>
    
                                </div>
                                <div class="form-group col-sm-12">
                                    <label class="col-sm-2" style="text-align: left;">Total Deduction</label>
                                    <label class="col-sm-1" style="text-align: left;">:</label>
                                    <label class="col-sm-9">2000 INR</label>
                                </div>
                                <br>
                                <div class="form-group col-sm-12">
                                    <br>
                                    <label class="col-sm-2" style="text-align: left;"><h5><b>Net Pay</b></h5></label>
                                    <label class="col-sm-1" style="text-align: left;">:</label>
                                    <label class="col-sm-9"><h5><b>2000 INR</b></h5></label>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="col-sm-12">
                        <center>
                            <input type="submit" class="btn btn-success btn btn-sm col-sm-offset-0" value="Assign">
                            <input type="button" class="btn btn-danger btn btn-sm col-sm-offset-0" name="" value="Cancel">
                        </center>
                    </div>
                </div>
            </div>
        </div>
</div>


<script>
$(".gross_btn").on('click',function(){
  $('.gross_btn').hide();
});
</script>