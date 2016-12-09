
<div id="content" class="content">
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">HR</a></li>
        <li><a href="javascript:;">Configuration</a></li>
        <li class="active">Employee Position</li>
    </ol>
    <h1 class="page-header">HR Configuration | Employee Position</h1>
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
                    <h4 class="panel-title">Employee Position</h4>
                </div>
                <div class="panel-body">
                    <div class="well">
                        <fieldset>
                            <!--<legend>Employee Position</legend>-->
                            <div class="row">
                                <div class="col-md-4"><button type="button" class="btn btn-primary btn-sm" id="Add" value="Add" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus fa-1x"></i><span class="f-s-14 f-w-500"> Add</span></a></div>
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
					        <tr class="odd gradeX">
                                                    <td> <span class="badge badge-success">-</span> &nbsp;&nbsp;Position 1(p1)</td>
                                                    <td>Y</td>
                                                    <td><button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
                                                    <button type="button" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
					        </tr>
					        <tr class="even gradeC">
						    <td><span class="badge badge-danger">-</span>&nbsp;&nbsp;Position 2(p2)</td>
                                                    <td>N</td>
                                                    <td><button type="button" name="edit" id="`34578" value="edit2" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
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
                                        <div class="col-md-offset-2">
                                            <form method="" action="" class="form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Position Name</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control input-sm" id="e_position" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Employee Category</label>
                                                    <div class="col-md-4">
                                                        <select name="value" class="form-control input-sm" id="cat">
                                                            <option>Select Category</option>
                                                            <option value="p1">p1</option>
                                                            <option value="p2">p2</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Status</label>
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
                                                    <label class="col-md-4 control-label"></label>
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
                        function inputMethod() {
                            //alert();
                            if ($('#select').val() == 'textbox') {
                                $("#addfield").removeClass('hidden');
                            } else {
                                $("#addfield").addClass('hidden');
                            }
                        }
                        $(document).ready(function() {
                            $('button').click(function() {
                                console.log($(this).val());
                                if ($(this).val() == 'Add') {
                                    //alert();
                                    $('.modal-title').text('Create Employee Position');
                                    $('#action').text('Create');
                                    $("#radio_1").prop("checked", true)
                                    $("#radio_2").prop("checked", false);
                                    $("#cancel").removeClass('hidden');
                                    $('#e_position').val('');
                                    $('#cat').find('option:first').attr('selected','selected');
                                } else if ($(this).val() == 'edit') {
                                    //alert();
                                    $('.modal-title').text('Edit Employee Position');
                                    $('#action').text('Update');
                                    $("#radio_1").prop("checked", true);
                                    $('#e_position').val('Position 1');
                                    $('#cat').val('p1');
                                    $("#cancel").removeClass('hidden');
                                } else if ($(this).val() == 'edit2') {
                                    //alert();
                                    $('.modal-title').text('Edit Additional Details');
                                    $('#action').text('Update');
                                    $("#radio_2").prop("checked", true);
                                    $('#e_position').val('Position 2');
                                    $('#cat').val('p2');
                                }
                            });
                        });
                    </script>