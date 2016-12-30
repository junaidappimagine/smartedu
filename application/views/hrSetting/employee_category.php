<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">HR</a></li>
				<li><a href="javascript:;">Configurations</a></li>
				<li class="active">Employee Category</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">HR Configurations | Employee Category</h1>
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
                               <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                            </div>
                            <h4 class="panel-title">Employee Category</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
                               <!-- <fieldset>
                                    <legend>Employee Category</legend>-->
					<div class="row">
						<div class="col-md-4"><button type="button" class="btn btn-primary btn-sm" id="Add" value="Add" onclick="addE_Category()"><i class="fa fa-plus"></i><span class="f-s-14 f-w-500"> Add </span></a></div>
					 </div><br>
                                   
                                <!--</fieldset>-->
				        <div class="panel-body">
						<div class="table-responsive">
						     <table id="data-table" class="table table-striped table-bordered">
							 <thead>
							    <tr>
								<th>Employee Categories</th>
								<th>Active</th>
								<th>Action</th>
							    </tr>
							 </thead>
							 <tbody>
							    <tr>
								<td> <span class="badge badge-success">-</span> &nbsp;&nbsp;Category 1(C1)</td>
								<td>Y</td>
								<td><button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
								<button type="button"  name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
							   </tr>
							   <tr>
								<td><span class="badge badge-danger">-</span>&nbsp;&nbsp;Category 2(C2)</td>
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
            <!-- end row -->
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
					<div class="col-md-offset-3">
						<form  id="FormValidation" method="post" action="" class="form-horizontal">
							<div class="form-group">
								<label class="col-md-2 control-label">Name</label>
								<div class="col-md-4">
									<input type="text" class="form-control input-sm" name="EMP_C_NAME" id="name" placeholder="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Prefix</label>
								<div class="col-md-4">
									<input type="text" class="form-control input-sm" name="EMP_C_PREFIX" id="prefix" placeholder="" d/>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Status</label>
								<div class="col-md-6">
								  <label class="radio-inline">
									 <input type="radio" name="EMP_C_ACTIVE_YN" id="active" value="Y">Active
								   </label>
								   <label class="radio-inline">
									 <input type="radio" name="EMP_C_ACTIVE_YN" id="inactive" value="N">Inactive
								 </label>
								</div>
							</div><br>
							<div class="form-group">
								<label class="col-md-2 control-label"></label>
								<div class="col-md-2">
									<button type="submit" class="btn btn-primary btn-sm" id="save" name="insert">Create</button>
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
 <?php //if($_POST['insert']=='Save'){
     if (isset($_POST["insert"])) {     
     echo "<pre>";
     print_r($_POST);exit;
     
     }?>
<script>
   
$(document).ready(function() {
	$('button').click(function(){
		console.log($(this).val());
		if($(this).val()=='Add')
		{
			//alert();
			$('.modal-title').text('Create Employee Category');
			$('#action').text('Create');
			$("#radio_1").prop("checked", true);
			 $("#radio_2").prop("checked", false);
		
			$('#name').val('');
			$('#prefix').val('');
		}
		else if($(this).val()=='edit')
		{
			//alert();
			$('.modal-title').text('Edit Employee Category');
			$('#action').text('Update');
			$("#radio_1").prop("checked", true);
			$('#name').val('Category 1');
			$('#prefix').val('C1');
		}
		else if($(this).val()=='edit2')
		{
			//alert();
			$('.modal-title').text('Edit Employee Category');
			$('#action').text('Update');
			$("#radio_2").prop("checked", true);
			$("#radio_1").prop("checked", false);
			$('#name').val('Category 2');
			$('#prefix').val('C2');
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
		EMP_C_NAME: {
		    validators: {
			notEmpty: {
			    message: 'The Department name is required'
			}
		    }
		},
		EMP_C_PREFIX: {
		    validators: {
			notEmpty: {
			    message: 'The Department code is required'
			}
		    }
		},
		
	    }
	});
});
	$('input:radio[name="EMP_C_ACTIVE_YN"]').change(function() {
		if ($(this).val() == 'Y') {
			$('#active').val('Y');
		}else if ($(this).val() == 'N') {
			$('#inactive').val('N');
		}
		else {
		  
		}
	});
	function addE_Category() {
	    $('#myModal').modal('show');
	    $('#FormValidation').bootstrapValidator('updateStatus', 'EMP_C_NAME','VALIDATED');
	    $('#FormValidation').bootstrapValidator('updateStatus', 'EMP_C_PREFIX','VALIDATED');
	}
	$("#save").click(function(){
	    var EMP_C_NAME=$("#EMP_C_NAME").val();
	    var EMP_D_CODE=$("#EMP_C_PREFIX").val();
	    var EMP_C_ACTIVE_YN=$("#EMP_C_ACTIVE_YN").val();
	    $.ajax({
	       type: "POST",
	       url: "<?php echo site_url('/');?>",
	    
	       data: {EMP_C_NAME:EMP_C_NAME,EMP_C_PREFIX:EMP_C_PREFIX,EMP_C_ACTIVE_YN:EMP_C_ACTIVE_YN},
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
		       $('#EMP_C_NAME').val(json[0].EMP_C_NAME);
		       $('#EMP_C_PREFIX').val(json[0].EMP_C_PREFIX);
		       $('#EMP_C_ACTIVE_YN').val(json[0].EMP_C_ACTIVE_YN);
		   }
	       })
	}
</script>	
	
	
  
		