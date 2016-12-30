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
                <li><a href="javascript:;">User</a></li>
                <li><a href="javascript:;">Admin</a></li>
                
            </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">User profile | User information <small></small></h1>
        <!-- end page-header -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                </div>
                <h4 class="panel-title">User information</h4>
            </div>
            <div class="panel-body">
             <div class="well" style="width: 40% !important; margin-left: 286px;background-color: rgb(218,230,255);">
                <div class="container" style="width: 100% !important">
               
                  <br>
                  <form class="form-horizontal">
                    <table class="mytable" width="65%">
                        <tr style="">
                            <td><label class="col-md-12 ">Username</label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b>Admin</b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 ">Name</label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b>Admin User</b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 ">Role</label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b>Admin</b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 ">E-mail</label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 "><b>cloudlogic@gmail.com</b></label></td>
                        </tr>
                        <tr>
                            <td><label class="col-md-12 ">Language</label></td>
                            <td><label class="col-md-12 "><b>:</b></label></td>
                            <td><label class="col-md-12 ">
                            <select class="form-control selectpicker" data-style="btn-white btn-sm" id="selectDept">
                                <option>English</option>
                                <option value="">French</option>
                                <option value="">Hindi</option>
                                <option value="">Tamil</option>
                            </select></label></td>
                        </tr>
                    </table>
                    <div>
                        <p></p>
                        <br>
                    </div>
                  </form>
              </div>
             </div><br>
            <div class="form-group col-md-offset-4">
                <div class="col-md-2">
                    <a href="<?php echo base_url('GrSettingsC/profile'); ?>" class="btn btn-primary btn-xs" role="button">View Profile</a>
                </div>
                <div class="col-md-3 ">
                    <a href="<?php echo base_url('GrSettingsC/changePassword'); ?>" class="btn btn-warning btn-xs" role="button">Change Password</a>
                </div>
            </div>
            </div>
        </div>
</div>
