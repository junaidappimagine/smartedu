
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
                    <div class="well">
                        <fieldset>
                            <!--<legend>Bank Details</legend>-->
                            <div class="row">
                                <div class="col-md-4"><button type="button" class="btn btn-primary btn-sm" value="Add" data-template="textbox" onclick="addDetails()"><i class="fa fa-plus fa-1x"></i><span class="f-s-14 f-w-500"> Add</span></button></div>
                            </div><br>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="data-table" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Categories</th>
                                                <th>Active</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> <span class="badge badge-success">-</span> &nbsp;&nbsp;Account Name</td>
                                                <td>Y</td>
                                                <td><button type="button"  onclick="editData()" name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
                                                   <button type="button" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
                                            </tr>
                                            <tr>
                                                <td><span class="badge badge-danger">-</span>&nbsp;&nbsp;Account Number</td>
                                                <td>N</td>
                                                <td><button type="button" name="edit" id="edit2" value="edit2" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
                                                    <button onclick="" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
                                            </tr>
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
                                        <input type="text" class="form-control input-sm" name="EMP_BNK_NAME" id="name" placeholder="" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Status</label>
                                    <div class="col-md-6">
                                        <label class="radio-inline">
                                                <input type="radio" name="EMP_BNK_ACTIVE_YN" id="radio_1" value="Y">Active
                                        </label>
                                                <label class="radio-inline">
                                                <input type="radio" name="EMP_BNK_ACTIVE_YN" id="radio_2" value="N">Inactive
                                        </label>
                                    </div>
                                </div><br>
                                <div class="form-group">
                                    <label class="col-md-2 control-label"></label>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary btn-sm" name="action" id="save">Create</button>
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
            
            $('button').click(function() {
                console.log($(this).val());
                if ($(this).val() == 'Add') {
                    //alert();
                    $('.modal-title').text('Create Bank Details');
                    $('#action').text('Create');
                    $("#radio_1").prop("checked", true);
                    $("#radio_2").prop("checked", false);
                    $('#name').val('');
                    $("#cancel").removeClass('hidden');
                } else if ($(this).val() == 'edit') {
                    //alert();
                    $('.modal-title').text('Edit Bank Details');
                    $('#action').text('Update');
                    $("#radio_1").prop("checked", true);
                    $('#name').val('Account Name');
                    $("#cancel").removeClass('hidden');
                     $('#FormValidation').bootstrapValidator('updateStatus', 'EMP_BNK_NAME','VALIDATED');
                } else if ($(this).val() == 'edit2') {
                    //alert();
                    $('.modal-title').text('Edit Bank Details');
                    $('#action').text('Update');
                    $("#radio_2").prop("checked", true);
                    $('#name').val('Account Number');
                    $("#cancel").removeClass('hidden');
                }
            });
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
        $("#save").click(function(){
            var EMP_BNK_NAME=$("#EMP_BNK_NAME").val();
            var EMP_BNK_ACTIVE_YN=$("#EMP_BNK_ACTIVE_YN").val();
            $.ajax({
               type: "POST",
               url: "<?php echo site_url('/');?>",
            
               data: {EMP_BNK_NAME:EMP_BNK_NAME,EMP_BNK_ACTIVE_YN:EMP_BNK_ACTIVE_YN},
               success : function(html){
                     
                },
            });
        });
         function editData($id){
		$('#id').val($id);
                var URL ="<?php echo site_url('/');?>";
		$.ajax({
		    type: "POST",
		    url: URL,
		    data: {id:id},
		    dataType:'json',
		    success: function(json)
		    {
			$('#EMP_BNK_NAME').val(json[0].EMP_BNK_NAME);
                        $('#EMP_BNK_ACTIVE_YN').val(json[0].EMP_BNK_ACTIVE_YN);
		    }
		})
            }
    </script>   