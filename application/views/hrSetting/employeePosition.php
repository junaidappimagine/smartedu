
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
			<div id="alert"></div>
			<div class="well">
			    <fieldset>
				<!--<legend>Employee Position</legend>-->
				<div class="row">
				    <div class="col-md-4"><button type="button" class="btn btn-primary btn-sm" id="Add" value="Add" data-template="textbox" onclick="addPosition()"><i class="fa fa-plus fa-1x"></i><span class="f-s-14 f-w-500"> Add</span></a></div>
				</div>
				<br>
				    <div class="panel-body">
				       <div class="table-responsive">
					    <table id="dataRespTable" class="table table-striped table-bordered">
						<thead>
						   <tr>
						       <th>Employee Name</th>
						       <th>Category</th>
						       <th>Active</th>
						       <th>Action</th>
						   </tr>
						</thead>
						<tbody id="result"></tbody>
					    </table>
					</div>
				    </div>
			    </fieldset>
			</div>
		    </div>
		</div>
	    </div>
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
				<form id="FormValidation" method="post" action="" class="form-horizontal">
				    <div class="form-group">
					<label class="col-md-4 control-label">Position Name</label>
					<div class="col-md-4">
					    <input type="text" class="form-control input-sm" id="EMP_P_NAME" name="EMP_P_NAME" placeholder="" />
					</div>
				    </div>
				    <div class="form-group">
					<label class="col-md-4 control-label">Employee Category</label>
					<div class="col-md-4">
					    <select name="EMP_P_CATEGORY_ID" class="form-control selectpicker input-sm" id="EMP_P_CATEGORY_ID" data-style="btn-white">
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
						<input type="radio" name="EMP_P_ACTIVE" class="Active" id="" value="Y">Active
					    </label>
					    <label class="radio-inline">
						<input type="radio" name="EMP_P_ACTIVE" class="Inactive" id="" value="N">Inactive
						<input type="hidden" name="EMP_P_ACTIVE_YN"  id="EMP_P_ACTIVE_YN" value="Y">
					    </label>
					</div>
				    </div><br>
				    <div class="form-group">
					<label class="col-md-4 control-label"></label>
					<div class="col-md-2">
					    <button type="button" class="btn btn-primary btn-sm save" id="save">Create</button>
					    <button type="button" class="btn btn-warning btn-sm hidden update" id="update">Update</button>
					    <input type="hidden" id="updatedID">
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
	    var table = $("#dataRespTable").DataTable({
		//"sDom": "<'row'<'col-md-4 no 'f><'col-md-6 trcalign' TRC><'col-md-2 yes'l>r><t><'row'<'col-md-6'i><'col-md-6'p>>",
		"sDom": 'lfrtip',
		"bServerSide": true,
		"bProcessing": false,
		"sAjaxSource": '<?php echo base_url('hrSettingsC/employeePositionView')?>',
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
		{ data: 'EMP_P_NAME'},
		{ data: 'EMP_P_CATEGORY_ID'},
		{ data: 'EMP_P_ACTIVE_YN'},
		{
			data: null, className: "all", 
			    render: function( data, type, row) {
				return '<button type="button" name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" onclick="javascript:editPosition('+data['EMP_P_ID']+');"><i class="fa fa-edit"></i></button> <button type="button" id="delete" class="btn btn-xs btn-danger" onclick="javascript:deletePosition('+data['EMP_P_ID']+');"><i class="fa fa-trash-o"></i></button>';
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
	function inputMethod() {
	//alert();
	    if ($('#select').val() == 'textbox') {
	    $("#addfield").removeClass('hidden');
	    } else {
	    $("#addfield").addClass('hidden');
	    }
	}
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
	    EMP_P_NAME: {
	    validators: {
	    notEmpty: {
	    message: 'The Position Name is required'
	    }
	    }
	    },
	    EMP_P_CATEGORY_ID: {
	    validators: {
	    notEmpty: {
	    message: 'The Category is required'
	    }
	    }
	    },
	    }
	    });
	});
	function addPosition() {
	    $('#myModal').modal('show');
	    $('#FormValidation').bootstrapValidator('updateStatus', 'EMP_P_NAME','VALIDATED');
	    $('#FormValidation').bootstrapValidator('updateStatus', 'EMP_P_CATEGORY_ID','VALIDATED');
	    }
	    $('.form-horizontal input').on('change', function() {
	    var valu=$('input[name="EMP_P_ACTIVE"]:checked', '.form-horizontal').val();
	    $('input[name="EMP_P_ACTIVE_YN"]').val(valu);
	});
	//clear//
	function cleardata(){
	    $("#EMP_P_NAME").val('');
	    $("#EMP_P_CATEGORY_ID").val('');
	    $("#EMP_P_ACTIVE_YN").val('');
	}
	//insert//
	$("#save").on('click',function(){
	    var pos_name=$("#EMP_P_NAME").val();
	    var cat_id=$("#EMP_P_CATEGORY_ID").val();
	    var pos_status=$("#EMP_P_ACTIVE_YN").val();
	    $.ajax({
	    type: "POST",
	    url: "<?php echo site_url('HrConfigCtrl/employeePosition');?>",
	    data: {pos_name:pos_name,cat_id:cat_id,pos_status:pos_status},
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
	function editPosition(id){
	    $('#updatedID').val(id);
	    $('#myModal').modal('show');
	    $('.update').removeClass('hidden');
	    $('.save').addClass('hidden');
	    $.ajax({
	    type: "get",
	    url : "<?php echo site_url('HrConfigCtrl/employeePosition');?>",
	    data: {id:id},
	    dataType:'json',
	    success: function(json)
	    {
	    $('#EMP_P_NAME').val(json[0].EMP_P_NAME);
	    $('#EMP_P_CATEGORY_ID').val(json[0].EMP_P_CATEGORY_ID);
	    $('#EMP_P_ACTIVE_YN').val(json[0].EMP_P_ACTIVE_YN);
	    var check=$('#EMP_P_ACTIVE_YN').val();
	    console.log(check);
	    if (check=='Y') {
	    $('.Active').attr('checked',true);
	    $('.Inactive').prop('checked',false);
	    }else if(check=='N'){
	    $('.Inactive').attr('checked',true);
	    $('.Active').prop('checked',false);
	}
	}
	})
	}
	//update//
	$("#update").on('click',function(){
	    var pos_id=$('#updatedID').val();
	    console.log(pos_id);
	    var pos_name=$("#EMP_P_NAME").val();
	    var cat_id=$("#EMP_P_CATEGORY_ID").val();
	    var pos_status=$("#EMP_P_ACTIVE_YN").val();
	    
	    $.ajax({
	    type: "post",
	    url: "<?php echo site_url('HrConfigCtrl/employeePosition');?>",
	    data: {pos_id:pos_id,pos_name:pos_name,cat_id:cat_id,pos_status:pos_status},
	    success : function(html){
	    $('#dataRespTable').dataTable().fnDraw();
	    $('#myModal').modal('hide');
	    $('.update').addClass('hidden');
	    $('.save').removeClass('hidden');
	    cleardata();
	    },
	    });
	});
	//delete//
	function deletePosition($id) {
	    bootbox.confirm("<h5>Are you sure want to delete ?<h5/>", function(confirmed) {   
	    if (confirmed) {
	    $.ajax({
	    type: "delete",
		url: "<?php echo base_url('HrConfigCtrl/employeePosition?id=')?>"+$id,
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