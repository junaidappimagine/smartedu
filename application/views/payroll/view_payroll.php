<style>
    @media only screen and (min-width: 320px) and (max-width: 359px){
    .mytable{
        width: 240px !important;
        }
    }
    @media only screen and (min-width: 360px) and (max-width: 500px){
    .mytable{
        width: 280px !important;
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
    .alignflied{
         margin-top: 7px;
    }
</style>
<div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">HR</a></li>
            <li><a href="javascript:;">Payroll and Payslip</a></li>
            <li class="active">Employees Payroll View</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">View Employee Payroll <small></small></h1>
        <!-- end page-header -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                </div>
                <h4 class="panel-title">View Employee Payroll</h4>
            </div>
            <div class="panel-body">
                <div class="container" style="width: 100% !important">
                <?php if($mode=="View"){?>
                    <a href="<?php echo base_url('Payrollgroup/edit_Payroll');?>" name="edit" class="btn btn-xs btn-primary col-md-offset-11"><i class="fa fa-edit"></i>Edit</a>
                <?php }else{?>
                    <a class="hidden" href="<?php echo base_url('Payrollgroup/edit_Payroll');?>" name="edit" class="btn btn-xs btn-primary col-md-offset-11"><i class="fa fa-edit"></i>Edit</a>
                <?php }?>
                <p></p>
                    <form action="#">
                        <table class="mytable">
                            <legend>Employee Payroll</legend>
                            <tr>
                                <td><label class="col-md-12 ">Name</label></td>
                                <td><label class="col-md-12 "><b>:</b></label></td>
                                <td><label class="col-md-12 ">Employee1</label></td>
                            </tr>
                            <tr>
                                <td><label class="col-md-12 ">Department</label></td>
                                <td><label class="col-md-12 "><b>:</b></label></td>
                                <td><label class="col-md-12 ">Administration</label></td>
                            </tr>
                             <tr>
                                <td><label class="col-md-12 ">Position</label></td>
                                <td><label class="col-md-12 "><b>:</b></label></td>
                                <td><label class="col-md-12 ">System Admin</label></td>
                            </tr>
                        </table>
                        <table class="mytable">
                            <p></p>
                            <legend>Payroll Details</legend>
                            <tr>
                                <td><label class="col-md-12 ">Payroll Group</label></td>
                                <td><label class="col-md-12 "><b>:</b></label></td>
                                <td>
                                    <label class="col-md-12 ">Basic</label>
                                </td>
                            </tr>
<!--                            <tr>
                                <td><label class="col-md-12 ">Gross Pay</label></td>
                                <td><label class="col-md-12 "><b>:</b></label></td>
                                <?php if($mode=='View') {?>
                                    <td><label class="col-md-12 ">30500</label></td>
                                <?php }else {?>
                                    <td>
                                       <div class="col-sm-12 ">
                                           <input type="text" name="" class="form-control input-sm" value="30500" >
                                       </div>
                                    </td>
                                    <td>    
                                       <div class="col-lg-12 col-lg-12 col-md-12 col-sm-12  col-xs-12">
                                            <label>INR &nbsp;</label>
                                            <input type="button" name="" class="btn btn-primary btn btn-sm gross_btn" value="Calculate">
                                            <input type="button" name="" onclick="window.history.back();" class="btn btn-danger btn btn-sm gross_btn" value="Cancel">
                                        </div>
                                    </td>
                                 <?php }?>
                            </tr>   
-->
                            <tr>
                                    <td><label class="col-md-12 ">Gross Pay</label></td>
                                    <td><label class="col-md-12 "><b>: &nbsp; &nbsp;&nbsp;</b></label></td>
                                    <?php if($mode=='View') {?>
                                    <td><label class="col-md-12 ">30500</label></td>
                                     <?php }else {?>
                                     <td><input type="text" name="" class="form-control input-sm" value="30500" ></td>
                                    <td><label>&nbsp;   INR &nbsp;</label>
                                    <input type="button" name="" class="btn btn-primary btn btn-sm gross_btn" value="Calculate">
                                    <input type="button" name="" onclick="window.history.back();"  class="btn btn-danger btn btn-sm gross_btn" value="Cancel">
                                    </td>
                                    <?php }?>
                            </tr>

                        
                        </table>
                        <p></p>
                        <legend>Payroll Category</legend>
                        <p>The Payroll amount are calculated based payroll category setup.you can edit the amount if needed</p>
                        <!--<div class="col-md-12" >-->
                        <table class="mytable" width="">
                            <!--<legend>Earnings</legend>-->
                             <h4>Earnings</h4>
                            <tr>
                                <td><label class="col-md-12 ">Basic Pay</label></td>
                                <td><label class="col-md-12 "><b>:</b></label></td>
                                <?php if($mode=='View') {?>
                                    <td><label class="col-md-12 ">13277 INR</label></td>
                                <?php }else {?>
                                    <td>
                                       <div class="col-sm-12 form-group">
                                           <input type="text" name="" class="form-control input-sm alignflied" value="13277" >
                                       </div>
                                    </td>
                                    <td><label>INR</label></td>
                                    
                                <?php }?>
                            </tr>
                            <p></p>
                            <tr>
                                <td><label class="col-md-12 ">Bonus</label></td>
                                <td><label class="col-md-12 "><b>:</b></label></td>
                                <?php if($mode=='View') {?>
                                    <td><label class="col-md-12 ">8500 INR</label></td>
                                 <?php }else {?>
                                    <td>
                                       <div class="col-sm-12 form-group">
                                           <input type="text" name="" class="form-control input-sm alignflied" value="8500" >
                                       </div>
                                    </td>
                                    <td><label>INR</label></td>
                                <?php }?>
                            </tr>
                             <tr>
                                <td><label class="col-md-12 ">Totall Earnings</label></td>
                                <td><label class="col-md-12 "><b>:</b></label></td>
                                <td><label class="col-md-12 "><b>2200 INR</b></label></td>
                            </tr>
                        </table>
                        <table class="mytable" width="">
                            <!--<legend>Deduction</legend>-->
                            <h4>Deduction</h4>
                            <tr>
                                <td><label class="col-md-12 ">Insurance</label></td>
                                <td><label class="col-md-12 "><b>:</b></label></td>
                                <?php if($mode=='View') {?>
                                    <td><label class="col-md-12 ">2000 INR</label></td>
                                <?php }else {?>
                                <td>
                                       <div class="col-sm-12 form-group">
                                           <input type="text" name="" class="form-control input-sm alignflied" value="2000" >
                                       </div>
                                    </td>
                                <td><label>INR</label></td>
                                <?php }?>
                            </tr>
                            <tr>
                                <td><label class="col-md-12 ">Total Deduction</label></td>
                                <td><label class="col-md-12 "><b>:</b></label></td>
                                <td><label class="col-md-12 ">2000 INR</label></td>
                            </tr>
                             <tr>
                                <td><label class="col-md-12 "><b>Net Pay</b></label></td>
                                <td><label class="col-md-12 "><b>:</b></label></td>
                                <td><label class="col-md-12 "><b>2000 INR</b></label></td>
                            </tr>
                        </table>
                        <!--</div>-->
                         <?php if($mode=='Edit') {?>
                            <div class="col-sm-12">
                                <br>
                                    <center>
                                        <input class="btn btn-success btn btn-sm " value="Update" type="submit">
                                        <input class="btn btn-danger btn btn-sm" onclick="window.history.back();" name="" value="Cancel" type="button">
                                    </center>
                            </div>
                        <?php }?>
                    </form>
                </div> 
            </div>
        </div>
</div>
<script>
    $(".gross_btn").on('click',function(){
      $('.gross_btn').hide();
    });
</script>
