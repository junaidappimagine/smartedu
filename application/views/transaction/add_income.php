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
        <li class="active">Income</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Transaction | Income</h1>
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
    <h4 class="panel-title">Add Income</h4>
    </div>
    <div class="panel-body">
    <div class="well">
       <form class="form-horizontal" id="saveData">
            <fieldset>
              
                    <div class="form-group">
                            <label class="col-md-2 control-label">Title <span  class="imp">*</span>: </label>
                            <div class="col-md-4">
                                <input type="hidden" name="FINC_TXN_IN_ID">
                                <input type="text" class="form-control input-sm" name="FINC_TXN_IN_TITLE">
                            </div>
                    </div>
                    <div class="form-group">
                            <label class="col-md-2 control-label">Description :</label>
                            <div class="col-md-4">
                                    <input type="text" class="form-control input-sm" name="FINC_TXN_IN_DESC">
                            </div>
                            
                    </div>
                     <div class="form-group">
                            <label class="col-md-2 control-label">Amount <span  class="imp">*</span>: </label>
                            <div class="col-md-4">
                                    <input type="text" class="form-control input-sm" name="FINC_TXN_IN_AMT">
                            </div>
                    </div>
                     <div class="form-group">
                                <label class="control-label col-md-2">Date</label>
                              
                        <div class="col-md-4">	   												    <span class="input-group">
                            <input type="text" class="form-control dateSet input-sm" size="30" id="from_date" name="FINC_TXN_IN_DT">
                            <span class="input-group-addon" >
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                            </span>
                             
                            </div>
                     </div>
                     <div class="form-group">
                          <label class="col-md-2 control-label">Category <span  class="imp">*</span>: </label>
                              <div class="col-md-4">
                    <select class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm" name="FINC_TXN_IN_CA_ID">
                      <option value="">Select</option>
            <?php foreach ($fin_cat as $cat) { ?>
                <option value="<?php echo $cat['FINC_CA_ID']?>"><?php echo $cat['FINC_CA_NAME']?></option>
           <?php  } ?>
                 
                   </select>
                              </div>
                     </div>
              
                     <br>
                    <div class="col-md-offset-3 col-md-1">
                         <button type="submit" class="btn btn-sm btn-primary">Save</button>
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

        $('#saveData').submit(function(e){
          var url_data="<?php echo base_url('FinanceTxnAPI/income');?>";
          var url1="<?php echo base_url('FinTransactionCtrl/income');?>";
          $.ajax({
              type:'post',
              url:url_data,
              data:$('#saveData').serialize(),
              success:function(res){
                  console.log(res);
                  window.location.href = url1; 
              }
          });
          e.preventDefault();
        })
    </script>
 