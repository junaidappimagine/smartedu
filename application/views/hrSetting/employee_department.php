<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">HR</a></li>
				<li><a href="javascript:;">Configurations</a></li>
				<li class="active">Employee Department</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">HR Configurations | Employee Department</h1>
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
                              <!--  <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                            </div>
                            <h4 class="panel-title">Employee Department</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
                               <!-- <fieldset>
                                    <legend>Employee Department</legend>-->
				 <div class="row">
					<div class="col-md-4"><button type="button" class="btn btn-primary btn-sm" id="Add" value="Add" onclick="addE_Department()"><i class="fa fa-plus"></i><span class="f-s-14 f-w-500"> Add</span></a></div>
				 </div><br>
			        	<div class="panel-body">
						<div class="table-responsive">
						     <table id="data-table" class="table table-striped table-bordered">
							 <thead>
							    <tr>
								<th>Employee Department</th>
								<th>Active</th>
								<th>Action</th>
							    </tr>
							 </thead>
							 <tbody>
							        <tr>
									<td> <span class="badge badge-success">-</span> &nbsp;&nbsp;Department 1(D1)</td>
									 <td>Y</td>
									<td><button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
									<button type="button"  name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
								</tr>
							        <tr>
									<td><span class="badge badge-danger">-</span>&nbsp;&nbsp;Department 2(D2)</td>
															 <td>N</td>
									<td><button type="button" name="edit"  id="edit2" value="edit2" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
									<button onclick="" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
								</tr>
							 </tbody>
						     </table>
						 </div>
					 </div>

				</div>
                        <!--end well-->
                    </div>
                    <!-- end panel -->
                </div>
	<div>
        </div>
		
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog modal-md">
		<!-- Modal content-->
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
						<form id="FormValidation" method="post" action="" class="form-horizontal">
							<div class="form-group">
								<label class="col-md-4 control-label">Department Name</label>
								<div class="col-md-4">
									<input type="text" class="form-control input-sm" id="name" name="EMP_D_NAME" placeholder="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Department Code</label>
								<div class="col-md-4">
									<input type="text" class="form-control input-sm" id="prefix" name="EMP_D_CODE" placeholder="" d/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Status</label>
								<div class="col-md-6">
								  <label class="radio-inline">
										<input type="radio" name="EMP_D_STATUS" id="radio_1" value="Y">Active
								   </label>
								  <label class="radio-inline">
										<input type="radio" name="EMP_D_STATUS" id="radio_2" value="N">Inactive
								  </label>
								</div>
							</div><br>
							<div class="form-group">
								<label class="col-md-4 control-label"></label>
								<div class="col-md-2">
									<button type="submit" class="btn btn-primary btn-sm" id="action" >Create</button>
								</div>
								<div class="col-md-2">
									 <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
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
	$('button').click(function(){
		console.log($(this).val());
		if($(this).val()=='Add')
		{
		    //alert();
		    $('.modal-title').text('Create Employee Department');
		    $('#action').text('Create');
		    $("#radio_1").prop("checked", true);
		     $("#radio_2").prop("checked", false);
	    
		    $('#name').val('');
		    $('#prefix').val('');
		}
		else if($(this).val()=='edit')
		{
		    //alert();
		    $('.modal-title').text('Edit Employee Department');
		    $('#action').text('Update');
		    $("#radio_1").prop("checked", true);
		    $('#name').val('Department 1');
		    $('#prefix').val('D1');
		    $('#FormValidation').bootstrapValidator('updateStatus', 'EMP_D_NAME','VALIDATED');
	            $('#FormValidation').bootstrapValidator('updateStatus', 'EMP_D_CODE','VALIDATED');
		}
		else if($(this).val()=='edit2')
		{
		    //alert();
		    $('.modal-title').text('Edit Employee Department');
		    $('#action').text('Update');
		    $("#radio_2").prop("checked", true);
		    $("#radio_1").prop("checked", false);
		    $('#name').val('Department 2');
		    $('#prefix').val('D2');
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
		EMP_D_NAME: {
		    validators: {
			notEmpty: {
			    message: 'The Department name is required'
			}
		    }
		},
		EMP_D_CODE: {
		    validators: {
			notEmpty: {
			    message: 'The Department code is required'
			}
		    }
		},
		
	    }
	});
});
    function addE_Department() {
	$('#myModal').modal('show');
	$('#FormValidation').bootstrapValidator('updateStatus', 'EMP_D_NAME','VALIDATED');
	$('#FormValidation').bootstrapValidator('updateStatus', 'EMP_D_CODE','VALIDATED');
    }
    $("#save").click(function(){
	var EMP_D_NAME=$("#EMP_D_NAME").val();
	var EMP_D_CODE=$("#EMP_D_CODE").val();
	var EMP_D_STATUS=$("#EMP_D_STATUS").val();
	$.ajax({
	   type: "POST",
	   url: "<?php echo site_url('/');?>",
	
	   data: {EMP_D_NAME:EMP_D_NAME,EMP_D_CODE:EMP_D_CODE,EMP_D_STATUS:EMP_D_STATUS},
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
		   $('#EMP_D_NAME').val(json[0].EMP_D_NAME);
		   $('#EMP_D_CODE').val(json[0].EMP_D_CODE);
		   $('#EMP_D_STATUS').val(json[0].EMP_D_STATUS);
	       }
	   })
       }
</script>	
	
	
  
		