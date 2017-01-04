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
                    </div>
                    <h4 class="panel-title"><?php if($mode=="add"){ echo 'Create Assets View'; }elseif($mode=="edit"){ echo 'Update Assets View'; } ?></h4>
                </div>
                <div class="panel-body">
                    <div class="well">
                        <form class="form-horizontal" id="saveData">
                            <fieldset>
                                <legend>
                                    <div class="col-sm-10">
                                        <h1 class="page-header" style="font-size:21px;"><?php if($mode=="add"){ echo 'Create Asset'; }elseif($mode=="edit"){ echo 'Update Asset'; } ?></h1>
                                    </div>
                                </legend>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Title :</label>
                                    <div class="col-md-3">
                                        <input type="hidden" name="FINC_AS_ID" value="" id="FINC_AS_ID">
                                        <input type="text" class="form-control input-sm" id="FINC_AS_TITLE" name="FINC_AS_TITLE" value="">
	                               </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Description :</label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control input-sm" name="FINC_AS_DESC" id="FINC_AS_DESC" value="">
		                            </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Amount :</label>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control input-sm" name="FINC_AS_AMT" id="FINC_AS_AMT" value="">
		                            </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-offset-3">
                                        <button type="submit" class="btn btn-primary btn-sm"><?php if($mode=="add"){ echo 'Create'; }elseif($mode=="edit"){ echo 'Update'; } ?></button>
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
    $(document).ready(function() {
        var table = $("#dataRespTable").DataTable({
            "sDom": "<'row'<'col-md-4 no 'f><'col-md-6 trcalign' TRC><'col-md-2 yes'l>r><t><'row'<'col-md-6'i><'col-md-6'p>>",
            "bServerSide": true,
            "bProcessing": false,
            "sAjaxSource": '<?php echo base_url('hrSettingsC/employeeCategoryView')?>',
            'responsive': true,
            //'scrollX':true,
            "bStateSave": true, 
            "lengthMenu": [
                [10, 20, 50, -1],
                [10, 20, 50, "All"] // change per page values here
            ],
            // "order": [[ 0, "desc" ]],
            "language": {
            "sLengthMenu": "_MENU_",
            "lengthMenu": " _MENU_ records",
            "processing": true
            },
            columns: [
            { data: 'EMP_C_NAME'},
            { data: 'EMP_C_ACTIVE_YN'},
            {
                data: null, className: "all", 
                    render: function( data, type, row) {
                    return '<button type="button" name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" onclick="javascript:editCategory('+data['EMP_C_ID']+');"><i class="fa fa-edit"></i></button> <button type="button" id="delete" class="btn btn-xs btn-danger" onclick="javascript:deleteCategory('+data['EMP_C_ID']+');"><i class="fa fa-trash-o"></i></button>';
                    }
                },
            ],
            'fnServerData': function(sSource, aoData, fnCallback){
                $.ajax({
                'dataType': 'json',
                'type'    : 'POST',
                'url'     : sSource,
                'data'    : aoData,
                'success' : fnCallback
                });
            },
            "tableTools": {
                "sSwfPath": "<?php echo site_url()?>assets/plugins/DataTables/swf/copy_csv_xls_pdf.swf",
            }
            });       
                
        //------------- Start for Processing Icon image------------------------------------//       
        $('#dataRespTable')
            .on( 'processing.dt', function ( e, settings, processing ) {
            // $('#processingIndicator').css( 'display', processing ? loadLoader() : unLoader());
        }).dataTable(); 
    });

    $('#saveData').submit(function(e){
        var url_data="<?php echo base_url('FinanceAPI/Asset');?>";
        var url1="<?php echo base_url('AssetCntrl/assetView');?>";
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

    <?php if($mode=='edit') {?>
        $(document).ready(function(){
            var id="<?php echo $row_id;?>";
            $.ajax({
                type:'get',
                url:"<?php echo base_url('FinanceAPI/Asset');?>",
                data:{id:id},
                dataType: "json",
                success:function(res){
                    console.log(res[0].FINC_AS_TITLE);
                    $('#FINC_AS_ID').val(res[0].FINC_AS_ID);
                    $('#FINC_AS_TITLE').val(res[0].FINC_AS_TITLE);
                    $('#FINC_AS_DESC').val(res[0].FINC_AS_DESC);
                    $('#FINC_AS_AMT').val(res[0].FINC_AS_AMT);
                }
            });
        })
    <?php } ?>
</script>

		