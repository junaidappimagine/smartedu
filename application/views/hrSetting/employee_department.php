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
			<div id="alert"></div>
			<div class="well">
			    <div class="row">
			       <div class="col-md-4"><button type="button" class="btn btn-primary btn-sm" id="Add" value="Add" onclick="addE_Department()"><i class="fa fa-plus"></i><span class="f-s-14 f-w-500"> Add</span></a></div>
			    </div>
			    <br>
			    <div class="panel-body">
				<div class="table-responsive" >
				    <table id="dataRespTable" class="table table-striped table-bordered">
					<thead>
					   <tr>
					       <th>Employee Department</th>
					       <th>Active</th>
					       <th>Action</th>
					   </tr>
					</thead>
					<tbody id="result"></tbody>
				    </table>
				 </div>
			     </div>
			</div>
		    <!--end well-->
		    </div>
		<!-- end panel -->
	    </div>
	</div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog modal-md">
	 <!-- Modal content-->
	    <div class="modal-content">
		<div class="modal-header">
		<button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="fa  fa-times-circle "></i></button>
		    <h4 class="modal-title" id="header"></h4>
		</div>
		<div class="modal-body">
		    <div class="panel-body">
			<div class="col-md-offset-2">
			    <form id="FormValidation" method="post" action="" class="form-horizontal">
				<div class="form-group">
				    <label class="col-md-4 control-label">Department Name</label>
				    <div class="col-md-4">
					<input type="hidden" class="form-control input-sm" id="Dept_Id"  name="DEPT_ID">
					<input type="text" class="form-control input-sm" id="Dept_Name" name="EMP_D_NAME" placeholder="" />
				    </div>
				</div>
				<div class="form-group">
				    <label class="col-md-4 control-label">Department Code</label>
				    <div class="col-md-4">
					<input type="text" class="form-control input-sm" id="Dept_Code" name="EMP_D_CODE" placeholder="" d/>
				    </div>
				</div>
				<div class="form-group">
				    <label class="col-md-4 control-label">Status</label>
				    <div class="col-md-4">
					<label class="radio-inline">
					    <input type="radio"  name="checking" id="first" value="Y" checked="" />Active
					</label>
					<label class="radio-inline">
					    <input type="radio" name="checking" id="second" value="N"/>Inactive
					</label>
					<input type="hidden" name="EMP_D_STATUS" value="Y">
				    </div>
				</div>
				<br>
				<div class="form-group">
				    <label class="col-md-4 control-label"></label>
				    <div class="col-md-2">
					<button type="button" class="btn btn-primary btn-sm add" id="action" onclick="addDepartment()">Create</button>
					<button type="button" class="btn btn-primary btn-sm" id="update" onclick="updateDepartment()">Update</button>
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
	var table = $("#dataRespTable").DataTable({
	//"sDom": "<'row'<'col-md-4 no 'f><'col-md-6 trcalign' TRC><'col-md-2 yes'l>r><t><'row'<'col-md-6'i><'col-md-6'p>>",
	"sDom": 'lfrtip',
	"bServerSide": true,
	"bProcessing": false,
	"sAjaxSource": '<?php echo base_url('hrSettingsC/employeeDepartmentView')?>',
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
	{ data: 'EMP_D_NAME'},
	{ data: 'EMP_D_STATUS'},
	{
	    data: null, className: "all", 
		render: function( data, type, row) {
		    return '<button type="button" name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" onclick="javascript:editDepartment('+data['EMP_D_ID']+');"><i class="fa fa-edit"></i></button> <button type="button" id="delete" class="btn btn-xs btn-danger" onclick="javascript:deleteDepartment('+data['EMP_D_ID']+');"><i class="fa fa-trash-o"></i></button>';
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
	});
	
	$(document).ready(function() {
	$('#action').hide();
	$('#update').hide();
	$('button').click(function(){
	if($(this).val()=='Add')
	{
		$('.modal-title').text('Create Employee Department');
		$('#Dept_Name').val('');
		$('#Dept_Code').val('');
	}
	else if($(this).val()=='edit')
	{
		$('.modal-title').text('Edit Employee Department');
	}
	else if($(this).val()=='edit2')
	{
		$('.modal-title').text('Edit Employee Department');
	}
	});
	});
	function addE_Department() {
	$('#myModal').modal('show');
	}
	function addDepartment(){
	$('#myModal').modal('hide');
	$dept_name=$('[name="EMP_D_NAME"]').val();
	$dept_code=$('[name="EMP_D_CODE"]').val();
	$dept_status=$('[name="EMP_D_STATUS"]').val();
	$.ajax({
	type: "POST",
	url: "<?php echo base_url('HrConfigCtrl/employeeDepartment')?>",
	data: {dept_name:$dept_name,dept_code:$dept_code,dept_status:$dept_status},
	success: function(res) {
	console.log(res);
	console.log(res.message);
	if(res.status==true){
	    $('#alert').append('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> '+res.message+'</div>');
	    $('#dataRespTable').dataTable().fnDraw();
	     //cleardata();
	    $('#myModal').modal('hide');
	    }else{
		$('#alert').append('<div class="alert alert-danger "><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">&times;</a><strong>Failure!</strong>'+res.message+'</div>');
	    }
	    setTimeout(function(){ $('#alert').empty(); }, 5000);
	}
	});
	}
	function editDepartment(id){
	console.log($('.updatedID').val(id));
	$('#myModal').modal('show');
	$('#action').hide();
	$('#update').show();
	var URL ="<?php echo site_url('HrConfigCtrl/employeeDepartment');?>";
	$.ajax({
	type: "get",
	url: URL,
	data: {id:id},
	dataType:'json',
	success: function(json)
	{
	$('#Dept_Id').val(json[0].EMP_D_ID);
	$('#Dept_Name').val(json[0].EMP_D_NAME);
	$('#Dept_Code').val(json[0].EMP_D_CODE);
	$('[name="EMP_D_STATUS"]').val(json[0].EMP_D_STATUS);
	if(json[0].EMP_D_STATUS=='N'){
		$('#second').attr('checked',true);
		$('#first').attr('checked',false);
	}else {
		$('#second').attr('checked',false);
		$('#first').attr('checked',true);
	}
	}
	})
	}
	function updateDepartment(){
	$('#myModal').modal('hide');
	var dept_id=$('#Dept_Id').val();
	var dept_name=$('#Dept_Name').val();
	var dept_code=$('#Dept_Code').val();
	var dept_status=$('[name="EMP_D_STATUS"]').val();
	$.ajax({
	type: "post",
	url: "<?php echo base_url('HrConfigCtrl/employeeDepartment')?>",
	data:{dept_id:dept_id,dept_name:dept_name,dept_code:dept_code,dept_status:dept_status},
	success: function(res) {
	$('#dataRespTable').dataTable().fnDraw();
	}
	});
	}
	$('#Add').click(function(){
	$('#action').show();
	$('#update').hide();
	})
	function deleteDepartment($id) {
	bootbox.confirm("<h5>Are you want to delete this record ?<h5/>", function(confirmed) {   
	if (confirmed) {
	$.ajax({
	type: "delete",
	url: "<?php echo base_url('HrConfigCtrl/employeeDepartment?id=')?>"+$id,
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
	$('.form-horizontal input').on('change', function() {
	var valu=$('input[name="checking"]:checked', '.form-horizontal').val();
	$('input[name="EMP_D_STATUS"]').val(valu);
	});
    </script>
    
    

