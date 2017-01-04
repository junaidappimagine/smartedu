
            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
                            <li><a href="javascript:;">Finance</a></li>
                            <li><a href="javascript:;">Asset Liability Management </a></li>
                             <li><a href="javascript:;">Asset</a></li>
                    </ol>
                    <h1 class="page-header">Asset Liability Management | Assets</h1>
                    <div class="row">
                        <div class="col-md-12">
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                           <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                        </div>
                         <h4 class="panel-title"><?php if($mode=="add"){ echo 'Create Liability'; }elseif($mode=="edit"){ echo 'Update Liability'; } ?></h4>
                    </div>
                    <div class="panel-body">
                        <div class="well">
                                <form class="form-horizontal" id="saveData">
                                        <fieldset>
                                               <legend>
                                                <div class="col-sm-10">
                                                        <h1 class="page-header" style="font-size:21px;"><?php if($mode=="add"){ echo 'Create Liability'; }elseif($mode=="edit"){ echo 'Update Liability'; } ?></h1>
                                                </div>
                                                </legend>
                                                <div class="form-group">
                                                        <label class="col-md-2 control-label">Title :</label>
                                                        <div class="col-md-3">
                                                            <input type="hidden" id="FINC_LI_ID" name="FINC_LI_ID">
                                                            <input type="text" class="form-control input-sm" id="FINC_LI_TITLE" name="FINC_LI_TITLE">
					                </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-md-2 control-label">Description :</label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm" id="FINC_LI_DESC" name="FINC_LI_DESC">
					                </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-md-2 control-label">Amount :</label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm" id="FINC_LI_AMT" name="FINC_LI_AMT">
					                </div>
                                                </div>
                                                <<div class="form-group">
                                                    <div class="col-md-offset-3">
                                                        <button type="button" onclick="saveLiablityData()" class="btn btn-primary btn-sm"><?php if($mode=="add"){ echo 'Create'; }elseif($mode=="edit"){ echo 'Update'; } ?></button>
                                                    </div>
                                                </div>
                                        </fieldset>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        <div>
    </div>
	<script>
        function saveLiablityData(){
            var url_data="<?php echo base_url('FinanceAPI/liability');?>";
            var url1="<?php echo base_url('AssetCntrl/liabilityView');?>";
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
                    url:"<?php echo base_url('FinanceAPI/liability');?>",
                    data:{id:id},
                    dataType: "json",
                    success:function(res){
                        console.log(res);
                        $('#FINC_LI_ID').val(res[0].FINC_LI_ID);
                        $('#FINC_LI_TITLE').val(res[0].FINC_LI_TITLE);
                        $('#FINC_LI_DESC').val(res[0].FINC_LI_DESC);
                        $('#FINC_LI_AMT').val(res[0].FINC_LI_AMT);
                    }
                });
            });
        <?php } ?>
    </script>

		