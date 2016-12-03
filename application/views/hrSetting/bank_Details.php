
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
                                <div class="col-md-4"><button type="button" class="btn btn-primary" id="Add" value="Add" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus fa-1x"></i><span class="f-s-14 f-w-500"> Add</span></a></div>
                                        </div><br>
                                     <table class="table table-bordered table-responsive" >
                                         <thead>
                                             <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                 <th width="600px">Categories</th>
                                                 <th width="300px">Active</th>
                                                 <th width="300px">Action</th>
                                                 
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <tr>
                                                 <td> <span class="badge badge-success">-</span> &nbsp;&nbsp;Account Name</td>
                                                 <td>Y</td>
                                                 <td><button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
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
                        </fieldset>
                        </div>
                        </div>
                    </div>
                    <div>
                    </div>
                    <div class="modal fade" id="myModal" role="dialog">
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
                                            <form method="" action="" class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Name</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control input-sm" id="name" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Status</label>
                                                    <div class="col-md-6">
                                                        <label class="radio-inline">
                                               <input type="radio" name="optradio" id="radio_1">Active
                                         </label>
                                                        <label class="radio-inline">
                                               <input type="radio" name="optradio" id="radio_2">Inactive
                                        </label>
                                                    </div>
                                                </div><br>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label"></label>
                                                    <div class="col-md-2">
                                                        <button type="button" class="btn btn-primary btn-sm" id="action">Create</button>
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
                                    } else if ($(this).val() == 'edit2') {
                                        //alert();
                                        $('.modal-title').text('Edit Bank Details');
                                        $('#action').text('Update');
                                        $("#radio_2").prop("checked", true);
                                        $('#name').val('Account Number');
                                        $("#cancel").removeClass('hidden');
                                    }
                                });
                            });
                        </script>