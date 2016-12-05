
	
<div id="content" class="content">
    <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">HR</a></li>
        <li><a href="javascript:;">Configuration</a></li>
        <li class="active">Additional Details</li>
    </ol>
    <h1 class="page-header">HR Configuration | Additional Details</h1>
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
                    <h4 class="panel-title">Additional Details</h4>
                </div>
                <div class="panel-body">
                    <div class="well">
                       <fieldset>
                           <!-- <legend>Additional Details</legend>-->
                            <div class="row">
                                <div class="col-md-4"><button type="button" class="btn btn-primary" id="Add" value="Add" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus fa-1x"></i><span class="f-s-14 f-w-500"> Add</span></a></div>
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
					       <tr class="">
						   <td> <span class="badge badge-success">-</span> &nbsp;&nbsp;Passport Name</td>
						   <td>Y</td>
						   <td><button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
						       <button type="button" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
					       </tr>
					       <tr class="">
						    <td><span class="badge badge-danger">-</span>&nbsp;&nbsp;PAN Number</td>
					       <td>N</td>
					       <td><button type="button" name="edit" id="`34578" value="edit2" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
						   <button onclick="" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
					       </tr>
					       <tr class="">
						   <td><span class="badge badge-success">-</span>&nbsp;&nbsp;Height</td>
						   <td>Y</td>
						   <td><button type="button" name="edit" id="edit3" value="edit3" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
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
                                                    <label class="col-md-4 control-label">Name</label>
                                                    <div class="col-md-4">
                                                        <input type="text" class="form-control input-sm" id="passNumber" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Input Method</label>
                                                    <div class="col-md-4">
                                                        <select name="value" class="form-control input-sm" id="method" onchange="inputMethod()">
								<option selected >select Method</option>
								<option value="area">text area</option>
								<option value="select">select box</option>
								<option value="box">check box</option>
								<option value="down">Drop down</option>
							</select>

                                                        <div class="form-group input_fields_wrap hidden" id="addfield">
                                                            <a class="add_field_button "><i class="fa fa-plus">Add</i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Manadatory</label>
                                                    <div class="col-md-2">
                                                        <input type="checkbox" class="form-control input-sm" id="" placeholder="" />
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
                            if ($('#method').val() == 'box' || $('#method').val() =='down') {
				//alert('in');
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
                                    $('.modal-title').text('Create Additional Details');
                                    $('#action').text('Create');
                                    $("#radio_1").prop("checked", true)
				    $("#radio_2").prop("checked", false);
				    $('#passNumber').val('');
				    $('#method').find('option:first').attr('selected', 'selected');
				    $("#cancel").removeClass('hidden');
				    $("#addfield").addClass('hidden');
				    $('.remove_row').remove();
                                } else if ($(this).val() == 'edit') {
                                    //alert();
                                    $('.modal-title').text('Edit Additional Details');
                                    $('#action').text('Update');
                                    $("#radio_1").prop("checked", true);
                                    $('#passNumber').val('Passport Number');
				    $('#method').val('box');
                                    $("#cancel").removeClass('hidden');
				    $("#addfield").removeClass('hidden');
                                }
				else if ($(this).val() == 'edit2') {
                                    //alert();
                                    $('.modal-title').text('Edit Additional Details');
                                    $('#action').text('Update');
                                    $("#radio_2").prop("checked", true);
                                    $('#passNumber').val('PAN Number');
                                    $("#cancel").removeClass('hidden');
				     $('#method').val('area');
				     $("#addfield").addClass('hidden');
                                } else if ($(this).val() == 'edit3') {
                                    //alert();
                                    $('.modal-title').text('Edit Additional Details');
                                    $('#action').text('Update');
                                    $("#radio_1").prop("checked", true);
                                    $('#passNumber').val('Height');
				    $('#method').val('down');
                                    $("#cancel").removeClass('hidden');
				    $("#addfield").removeClass('hidden');
                                }
                            });

                        });
			
			 var max_fields = 10; //maximum input boxes allowed
                            var wrapper = $(".input_fields_wrap"); //Fields wrapper
                            var add_button = $(".add_field_button"); //Add button ID

                            var x = 1; //initlal text box count
                            $(add_button).click(function(e) { //on add input button click
                                e.preventDefault();
                                if (x < max_fields) { //max input box allowed
                                    x++; //text box increment
                                    $(wrapper).append('<div class="remove_row" id="clearData"> <input type="text" class="form-control input-sm" name="mytext[]" placeholder="" /><a href="#" class="remove_field" style="color:red;">Remove</a></div>'); //add input box
                                }
                            });

                            $(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
                                e.preventDefault();
                                $(this).parent('div').remove();
                                x--;
                            })
                    </script>
		    