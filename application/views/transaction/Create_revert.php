<style>
.imp{
color:red;
}


</style>

<!-- begin #content -->
<div id="content" class="content">
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
<li><a href="javascript:;">Home</a></li>
<li><a href="javascript:;">Transaction</a></li>
<li><a href="javascript:;">Revert Transaction</a></li>
<li class="active">Advanced</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Transaction | Revert Transaction</h1>
<!-- end page-header -->

<!-- begin row -->
<div class="row">
<!-- begin col-6 -->
<div class="col-md-12">
<!-- begin panel -->
<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
<div class="panel-heading">
<div class="panel-heading-btn">
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
<!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
</div>
<h4 class="panel-title">Add Revert Transaction</h4>
</div>
<div class="panel-body">
<div class="well">
    <form class="form-horizontal">
         <fieldset>
               
                    <div class="form-group">
                         <label class="col-md-2 control-label">Student Name : </label>
                         <div class="col-md-4">
                            <input type="text" class="form-control input-sm" placeholder="" value=""/>
                         </div>
                    </div>
                    <div class="form-group">
                         <label class="col-md-2 control-label">Admission Number :</label>
                         <div class="col-md-4">
                            <input type="text" class="form-control input-sm" placeholder="" value="" />
                         </div>
                         
                    </div>
                    <div class="form-group">
                         <label class="col-md-2 control-label">Employee Name: </label>
                         <div class="col-md-4">
                            <input type="text" class="form-control input-sm" placeholder="" value=""/>
                         </div>
                    </div>
                    <div class="form-group">
                         <label class="col-md-2 control-label">Employee Number: </label>
                         <div class="col-md-4">
                            <input type="text" class="form-control input-sm" placeholder="" value=""/>
                         </div>
                 </div>
                    
                    <div class="form-group">
                         <label class="col-md-2 control-label">Guest Name: </label>
                         <div class="col-md-4">
                            <input type="text" class="form-control input-sm" placeholder="" value=""/>
                         </div>
                    </div>
                    <div class="form-group">
                         <label class="col-md-2 control-label">Fee Collection Name: </label>
                         <div class="col-md-4">
                            <input type="text" class="form-control input-sm" placeholder="" value=""/>
                         </div>
                    </div>
                    
                     <div class="form-group">
                       <label class="col-md-2 control-label">Transaction Type: </label>
                       <div class="col-md-4">
                           <select name="value" class="form-control input-sm selectpicker" data-style="btn-white btn-sm" >
                               <option value="payslip">Payslips</option>
                               <option value="fees">Fees</option>
                               <option value="other">Others</option>
                           </select>
                       </div>
                   </div>
                     
                    <div class="form-group">
                       <label class="col-md-2 control-label">Category Name: </label>
                       <div class="col-md-4">
                           <select name="value" class="form-control input-sm selectpicker" data-style="btn-white btn-sm" >
                               <option value="appregister">Applicant Registration</option>
                               <option value="fee">Fee</option>
                               <option value="hostel">Hostel</option>
                               <option value="instant">Instant Fee</option>
                               <option value="inventory">Inventory</option>
                               <option value="library">Library</option>
                           </select>
                       </div>
                   </div>
                 
                 <div class="form-group">
                    <label class="control-label col-md-2">Start Date</label>
                  
                <div class="col-md-4"><span class="input-group">
                    <input type="text" class="form-control dateSet input-sm" size="30" id="from_date">
                    <span class="input-group-addon" >
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </span>
                </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2">End Date</label>
                    <div class="col-md-4">
                        <span class="input-group">
                    <input type="text" class="form-control dateSet input-sm" size="30" id="from_date">
                    <span class="input-group-addon" >
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </span>
                </div>
                </div>
                 <div class="col-md-offset-2 col-md-2">
                      <button type="button" class="btn btn-sm btn-primary">Search</button>
                  </div>
                 </fieldset>
         </form>
    
</div>
</div>
</div>
<!-- end panel -->
</div>
<!-- end col-12-->


<div>
<!-- end row -->
</div>
<!-- end #content -->
<script>
$('.dateSet').datepicker({
format: 'd MM yyyy',
});
</script>
