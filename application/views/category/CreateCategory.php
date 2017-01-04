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
        <li><a href="javascript:;">Finance</a></li>
        <li class="active">Category</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Finance | Category</h1>
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
    <h4 class="panel-title"> <?php if($mode=='add'){ echo 'Create Finance Category';}else if($mode=='edit'){  echo 'Update Finance Category';}?>
    </div>
    <div class="panel-body">
    <div class="well">
<form class="form-horizontal" id="saveData">
     <fieldset>
             <div class="form-group">
                <label class="col-md-2 control-label">Category Name : </label>
                <div class="col-md-4">
                    <input type="hidden" class="form-control input-sm" name="FINC_CA_ID" id="FINC_CA_ID">
                    <input type="text" class="form-control input-sm" name="FINC_CA_NAME" id="FINC_CA_NAME">
                </div>
             </div>
                <div class="form-group">
                    <label class="col-md-2 control-label">Description :</label>
                    <div class="col-md-4">
                        <input type="text" class="form-control input-sm" name="FINC_CA_DESC" id="FINC_CA_DESC">
                    </div>
                </div>
             <div class="form-group">
                <label class="col-md-2 control-label">Is this under income?</label>
                <div class="col-md-4">
                    <label class="">
                        <input type="checkbox" value="N" id="checkbox" name="FINC_CA_INCOME_YN">
                    </label>
                </div>
             </div>
             <br>
                <div class="col-md-offset-3">
                 <button type="button" onclick="saveCategoryData()" class="btn btn-primary btn-sm"><?php if($mode=="add"){ echo 'Create'; }elseif($mode=="edit"){ echo 'Update'; } ?></button>
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
        function saveCategoryData(){
            var url_data="<?php echo base_url('FinanceAPI/category');?>";
            var url1="<?php echo base_url('FinCategoryCtrl/finCategoryview');?>";
            $.ajax({
                type:'post',
                url:url_data,
                data:$('#saveData').serialize(),
                success:function(res){
                    console.log(res.status);
                    window.location.href = url1;
                }
            });
        }

        <?php if($mode=='edit') {?>
            $(document).ready(function(){
                var id="<?php echo $row_id;?>";
                $.ajax({
                    type:'get',
                    url:"<?php echo base_url('FinanceAPI/category');?>",
                    data:{id:id},
                    dataType: "json",
                    success:function(res){
                        console.log(res);
                        $('#FINC_CA_ID').val(res[0].FINC_CA_ID);
                        $('#FINC_CA_NAME').val(res[0].FINC_CA_NAME);
                        $('#FINC_CA_DESC').val(res[0].FINC_CA_DESC);
                        $('#checkbox').val(res[0].FINC_CA_INCOME_YN);
                        if($('#checkbox').val()=='Y'){
                            $('#checkbox').attr('checked',true);
                        }else {
                            $('#checkbox').val('N');
                            $('#checkbox').attr('checked',false);
                        }
                    }
                });
            });
        <?php } ?>

        $('#checkbox').change(function() {
            if($(this).is(":checked")) {
                $(this).val('Y');
            }
            else {
                $(this).val('N');
            }       
        });
    </script>