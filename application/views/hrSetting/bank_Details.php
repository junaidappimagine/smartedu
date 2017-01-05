
<div id="content" class="content">
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">HR</a></li>
        <li><a href="javascript:;">Configuration</a></li>
        <li class="active">Bank Details</li>
    </ol>
    <h1 class="page-header">HR Configuration | Bank Details</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                    </div>
                    <h4 class="panel-title">Bank Details</h4>
                </div>
                <div class="panel-body">
                    <div id="alert"></div>
                    <div class="well">
                        <fieldset>
                            <!--<legend>Bank Details</legend>-->
                            <div class="row">
                                <div class="col-md-4"><button type="button" class="btn btn-primary btn-sm" value="Add" data-template="textbox" onclick="addDetails()"><i class="fa fa-plus fa-1x"></i><span class="f-s-14 f-w-500"> Add</span></button></div>
                            </div><br>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="dataRespTable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Categories</th>
                                                <th>Active</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="result">
                                           
                                        </tbody>
                                    </table>
                                 </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        <div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">
                        <i class="fa  fa-times-circle "></i>
                    </button>
                    <h4 class="modal-title" id="header"></h4>
                </div>
                <div class="modal-body">
                    <div class="panel-body">
                        <div class="col-md-offset-3">
                            <form id="FormValidation" method="post" action="" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Name</label>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control input-sm" name="EMP_BNK_NAME" id="EMP_BNK_NAME" placeholder="" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Status</label>
                                    <div class="col-md-6">
                                        <label class="radio-inline">
                                                <input type="radio" name="EMP_BNK_ACTIVE" class="Active" id="radio_1" value="Y">Active
                                        </label>
                                                <label class="radio-inline">
                                                <input type="radio" name="EMP_BNK_ACTIVE" class="Inactive" id="radio_2" value="N">Inactive
                                                <input type="hidden" name="EMP_BNK_ACTIVE_YN" id="EMP_BNK_ACTIVE_YN">
                                        </label>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary btn-sm" name="" id="save">Create</button>
                                        <button type="button" class="btn btn-warning btn-sm hidden" name="" id="update">Update</button>
                                        <input type="hidden" class="updatedID">
                                    </div>
                                    <div class="col-md-2 hidden" id="cancel">
                                        <button type="button" class=" btn btn-danger btn-sm" data-dismiss="modal" aria-hidden="true">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function() {
            var table = $("#dataRespTable").DataTable({
                "sDom": "<'row'<'col-md-4 no 'f><'col-md-6 trcalign' TRC><'col-md-2 yes'l>r><t><'row'<'col-md-6'i><'col-md-6'p>>",
                "bServerSide": true,
                "bProcessing": false,
                "sAjaxSource": '<?php echo base_url('hrSettingsC/employeeBankDeatailsView')?>',
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
                { data: 'EMP_BNK_NAME'},
                { data: 'EMP_BNK_ACTIVE_YN'},
                {
                        data: null, className: "all", 
                            render: function( data, type, row) {
                                return '<button type="button" name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" onclick="javascript:editBankDetail('+data['EMP_BNK_ID']+');"><i class="fa fa-edit"></i></button> <button type="button" id="delete" class="btn btn-xs btn-danger" onclick="javascript:deleteBankDetail('+data['EMP_BNK_ID']+');"><i class="fa fa-trash-o"></i></button>';
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
        $(document).ready(function() {
             $('#FormValidation').bootstrapValidator({
		    message: 'This value is not valid',
                    excluded: ':disabled',
		    container: 'tooltip',
		    feedbackIcons:
		    {
			valid: 'fa fa-check',
			invalid: 'fa fa-times',
			validating: 'fa fa-refresh'
		    },
                fields: {
                    EMP_BNK_NAME: {
                        validators: {
                            notEmpty: {
                                message: 'The username is required'
                            }
                        }
                    },
                    
                }
            });
           
        });
        function addDetails() {
           
            $('#myModal').modal('show');
            $('#FormValidation').bootstrapValidator('updateStatus', 'EMP_BNK_NAME','VALIDATED');
        }
        //check box//
        $('.form-horizontal input').on('change', function() {
        var valu=$('input[name="EMP_BNK_ACTIVE"]:checked', '.form-horizontal').val();
        $('input[name="EMP_BNK_ACTIVE_YN"]').val(valu);
        });
        //clear function after insert//
        function cleardata(){
            $("#EMP_BNK_NAME").val('');
            $("#EMP_BNK_ACTIVE_YN").val('');
        }
        //fetch ann show the data//

        //insert///
        $("#save").click(function(){
            var bank_name=$("#EMP_BNK_NAME").val();
            var bank_status=$("#EMP_BNK_ACTIVE_YN").val();
            $.ajax({
               type: "POST",
               url: "<?php echo site_url('HrConfigCtrl/employeeBankdetails');?>",
               data: {bank_name:bank_name,bank_status:bank_status},
                success: function(res) {
                console.log(res);
                console.log(res.message);
                if(res.status==true){
                    $('#alert').append('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> '+res.message+'</div>');
                    $('#dataRespTable').dataTable().fnDraw();
                     cleardata();
                    $('#myModal').modal('hide');
                    }else{
                        $('#alert').append('<div class="alert alert-danger "><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">&times;</a><strong>Failure!</strong>'+res.message+'</div>');
                    }
                    setTimeout(function(){ $('#alert').empty(); }, 5000);
                }
            });
        });
        //edit//
         function editBankDetail(id){
		console.log($('.updatedID').val(id));
                $('#myModal').modal('show');
                $('#save').addClass('hidden')
                $('#update').removeClass('hidden')
                var URL ="<?php echo site_url('HrConfigCtrl/employeeBankdetails');?>";
		$.ajax({
		    type: "get",
		    url: URL,
		    data: {id:id},
		    dataType:'json',
		    success: function(json)
		    {
			$('#EMP_BNK_NAME').val(json[0].EMP_BNK_NAME);
                        $('#EMP_BNK_ACTIVE_YN').val(json[0].EMP_BNK_ACTIVE_YN);
                        var data=$('#EMP_BNK_ACTIVE_YN').val();
                        if (data=="Y") {
                            $('.Active').attr('checked',true);
                            $('.Inactive').prop('checked',false);
                        }else if (data=="N") {
                            $('.Inactive').attr('checked',true);
                            $('.Active').prop('checked',false);
                        }
		    }
		})
            }
            //update//
            $("#update").click(function(){
                var bank_id=$('.updatedID').val();
                var bank_name=$("#EMP_BNK_NAME").val();
                var bank_status=$("#EMP_BNK_ACTIVE_YN").val();
                $.ajax({
                   type: "post",
                   url: "<?php echo site_url('HrConfigCtrl/employeeBankdetails');?>",
                   data: {bank_id:bank_id,bank_name:bank_name,bank_status:bank_status},
                   success : function(html){
                        $('#dataRespTable').dataTable().fnDraw();
                        cleardata();
                        $('#myModal').modal('hide');
                    },
                });
            });
            //delete//
        function deleteBankDetail($id) {
            bootbox.confirm("<h5>Are you want to delete this record ?<h5/>", function(confirmed) {   
            if (confirmed) {
            $.ajax({
            type: "delete",
                url: "<?php echo base_url('HrConfigCtrl/employeeBankdetails?id=')?>"+$id,
                data:{id:$id},
                success: function(res) {
                    console.log(res.message);
                    console.log(res.message.message);
                    if(res.status==true){
                            $('#alert').append('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> '+res.message.message+'</div>');
                            $('#dataRespTable').dataTable().fnDraw();
                        }else{
                            $('#alert').append('<div class="alert alert-danger "><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">&times;</a><strong>Failure!</strong>'+res.message+'</div>');
                        }
                        setTimeout(function(){ $('#alert').empty(); }, 5000);
                }
            });
            }
    
            })
        }
    </script>   