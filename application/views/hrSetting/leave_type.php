<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">HR</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Leave Types</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">HR Configurations | Leave Types</h1>
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
				<!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
			    </div>
			    <h4 class="panel-title">Leave Types</h4>
			</div>
			 <div class="panel-body">
			    <div id="alert"></div>
			    <legend>Leave Types</legend>
			    <div class="row">
				<div class="col-md-2">
				    <a type="button" class="btn btn-primary btn-sm col-md-offset-0" href="<?php echo base_url('HrSettingsC/leaveTypesAdd'); ?>"><i class="fa fa-plus fa-1x"></i><span class="f-s-14 f-w-500"> Add</span></a>
				</div>
				<div class="col-md-10">
				    <h5 class="col-md-offset-0">Setup leave types that employees are allowed such as causal leaves,sick leaves.</h5>
				    <p></p>
				    <br>
				</div>
			    </div>
			    	<!--<div class="panel-body">-->
				<div class="table-responsive">
				     <table id="dataRespTable" class="table table-striped table-bordered">
					<thead>
					    <tr>
						<th>Leave Type</th>
						<th>Leave Code</th>
						<th>Leave Count</th>
						<th>Valid from</th>
						<th>Leave Balance</th>
						<th>Balance Count</th>
						<th>Additional Leaves</th>
						<th>Status</th>
						<th>Action</th>
					    </tr>
					</thead>
					<tbody id="result"></tbody>
				     </table>
				 </div>
				<!--</div>-->			   
			</div>
		    <!-- end panel -->
		    </div>
	<!-- end col-12-->
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
	    "sAjaxSource": '<?php echo base_url('hrSettingsC/employeeLeaveTypeView')?>',
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
	    { data: 'EMP_L_NAME'},
	    { data: 'EMP_L_CODE'},
	    { data: 'EMP_L_COUNT'},
	    { data: 'EMP_L_VALID_FROM'},
	    { data: 'EMP_L_ALLOW_LEAVE_BAL'},
	    { data: 'EMP_L_ALLOW_BAL_COUNT'},
	    { data: 'EMP_L_ADDI_LEAVE_DED_YN'},
	    { data: 'EMP_L_STATUS'},
	    {
	    data: null, className: "all", 
		render: function( data, type, row) {
		    return '<a href="<?php echo base_url("HrSettingsC/leaveTypeEdit/'+ data['EMP_L_ID']+ '");?>"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a> <button type="button" id="delete" class="btn btn-xs btn-danger" onclick="javascript:deleteLeavetype('+data['EMP_L_ID']+');"><i class="fa fa-trash-o"></i></button>';
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
    //delete//
    function deleteLeavetype($id) {
        bootbox.confirm("<h5>Are you sure want to delete ?<h5/>", function(confirmed) {   
            if (confirmed) {
		$.ajax({
		type: "delete",
		    url: "<?php echo base_url('HrConfigCtrl/employeeLeaveType?id=')?>"+$id,
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