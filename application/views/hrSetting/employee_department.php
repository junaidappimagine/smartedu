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
						<div class="table-responsive" >
						     <table id="dataRespTable" class="table table-striped table-bordered">
							 <thead>
							    <tr>
								<th>Employee Department</th>
								<th>Active</th>
								<th>Action</th>
							    </tr>
							 </thead>
							 <tbody id="result">
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
							<!-- <div class="form-group">
								<label class="col-md-4 control-label">Status</label>
								<div class="col-md-6">
								  <label class="radio-inline">
										<input type="radio" name="EMP_D_STATUS" id="radio_1" value="Y">Active
								   </label>
								  <label class="radio-inline">
										<input type="radio" name="EMP_D_STATUS" id="radio_2" value="N">Inactive
								  </label>
								</div>
							</div><br> -->
							<div class="form-group">
								<label class="col-md-2 control-label">Status</label>
								<div class="col-md-6">
								  	<label class="radio-inline">
									 	<input type="radio"  name="checking" id="first" value="Y" checked="" />Active
								   	</label>
								   	<label class="radio-inline">
									 	<input type="radio" name="checking" id="second" value="N"/>Inactive
								 	</label>
								 	<input type="hidden" name="EMP_D_STATUS" value="Y">
								</div>
							</div><br>
							<div class="form-group">
								<label class="col-md-4 control-label"></label>
								<!-- <div class="col-md-2">
									<button type="submit" class="btn btn-primary btn-sm" id="action" >Create</button>
								</div> -->
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
	    "sDom": "<'row'<'col-md-4 no 'f><'col-md-6 trcalign' TRC><'col-md-2 yes'l>r><t><'row'<'col-md-6'i><'col-md-6'p>>",
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
	$name=$('[name="EMP_D_NAME"]').val();
	$code=$('[name="EMP_D_CODE"]').val();
	$status=$('[name="EMP_D_STATUS"]').val();
	$.ajax({
		type: "POST",
	    url: "<?php echo base_url('HrConfigCtrl/employeeDepartment')?>",
	    data: {name:$name,code:$code,status:$status},
	    success: function(res) {
	      	fetchDepartmentDetails();	      	
	    }
	});
}

function fetchDepartmentDetails(){
	$.ajax({
		type: "get",
	    url: "<?php echo base_url('HrConfigCtrl/employeeDepartment')?>",
	    success: function(res) {
	      	$('#result').html(res);
	    }
	});
}

function editDepartment($this){
	$('#action').hide();
	$('#update').show();
	$id=$this;
	$.ajax({
		type: "get",
	    url: "<?php echo base_url('HrConfigCtrl/employeeDepartment')?>",
	    data:{id:$id},
	    dataType: "json",
	    success: function(res) {
	      	console.log(res);
	      	$('#myModal').modal('show');
	      	$('#Dept_Id').val(res[0].EMP_D_ID);
	      	$('#Dept_Name').val(res[0].EMP_D_NAME);
	      	$('#Dept_Code').val(res[0].EMP_D_CODE);
	      	$('[name="EMP_D_STATUS"]').val(res[0].EMP_D_STATUS);
	      	if(res[0].EMP_D_STATUS=='N'){
	      		$('#second').attr('checked',true);
	      		$('#first').attr('checked',false);
	      	}else {
	      		$('#second').attr('checked',false);
	      		$('#first').attr('checked',true);
	      	}
	    }
	});
}
function updateDepartment(){
	$('#myModal').modal('hide');
	var dept_id=$('#Dept_Id').val();
  	var dept_name=$('#Dept_Name').val();
  	var dept_code=$('#Dept_Code').val();
  	var dept_status=$('[name="EMP_D_STATUS"]').val();
	$.ajax({
		type: "put",
	    url: "<?php echo base_url('HrConfigCtrl/employeeDepartment')?>",
	    data:{dept_id:dept_id,dept_name:dept_name,dept_code:dept_code,dept_status:dept_status},
	    success: function(res) {
	      	fetchDepartmentDetails();
	    }
	});
}
$('#Add').click(function(){
	$('#action').show();
	$('#update').hide();
})

function deleteDepartment($this) {
	$id=$this;
	$.ajax({
		type: "delete",
	    url: "<?php echo base_url('HrConfigCtrl/employeeDepartment')?>",
	    data:{id:$id},
	    success: function(res) {
	      	fetchDepartmentDetails();
	    }
	});
}
$('.form-horizontal input').on('change', function() {
   var valu=$('input[name="checking"]:checked', '.form-horizontal').val();
   $('input[name="EMP_D_STATUS"]').val(valu);
   
});
</script>
	
	
  
		