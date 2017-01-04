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
<li><a href="javascript:;">Donation</a></li>
<li class="active">NewDonation</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Transaction | New Donation</h1>
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
<h4 class="panel-title">Add Donation</h4>
</div>
<div class="panel-body">
<div class="well">
    <form class="form-horizontal" id="saveData">
         <fieldset>
                 <div class="form-group">
                         <label class="col-md-2 control-label">Donor Name <span  class="imp">*</span>: </label>
                         <div class="col-md-4">
                                <input type="hidden" name="FINC_DO_ID">
                                 <input type="text" class="form-control input-sm" name="FINC_DO_NAME">
                         </div>
                 </div>
                 <div class="form-group">
                         <label class="col-md-2 control-label">Description :</label>
                         <div class="col-md-4">
                                 <input type="text" class="form-control input-sm" name="FINC_DO_DESC">
                         </div>
                         
                 </div>
                 <div class="form-group">
                    <label class="control-label col-md-2">Transaction Date</label>
                  
            <div class="col-md-4">	   												    <span class="input-group">
                    <input type="text" class="form-control dateSet input-sm" size="30" id="from_date" name="FINC_DO_TXN_DT">
                    <span class="input-group-addon" >
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </span>
                 
                </div>
        </div>
              
                  <div class="form-group">
                         <label class="col-md-2 control-label">Amount <span  class="imp">*</span>: </label>
                         <div class="col-md-4">
                                 <input type="text" class="form-control input-sm" name="FINC_DO_AMT">
                         </div>
                 </div>
                     
           
             
                <legend>Additional Details</legend>
                     <br>
                 <div class="col-md-offset-3 col-md-1">
                      <button type="submit" class="btn btn-sm btn-primary">Add</button>
                  </div>
                  <div class="col-md-3">
                        <button type="button" class="btn btn-sm btn-danger ">Cancel</button>
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

$('#saveData').submit(function(e){
    var url_data="<?php echo base_url('FinanceAPI/donation');?>";
    $.ajax({
        type:'post',
        url:url_data,
        data:$('#saveData').serialize(),
        success:function(res){
            console.log(res);
        }
    });
    e.preventDefault();
})
</script>
