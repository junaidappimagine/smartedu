<!-- begin #content -->
    <div id="content" class="content">
	    <!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">HR</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Employee Grade</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">HR Configurations | Employee Grade</h1>
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
		<h4 class="panel-title">Employee Grade</h4>
	    </div>
	    <div class="panel-body">
	    	<div id="alert"></div>

	    <div class="well">
		    <div class="row">
			    <div class="col-md-4"><button type="button" class="btn btn-primary btn-sm" id="Add" value="Add" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i><span class="f-s-14 f-w-500"> Add </span></a></div>
		    </div><br>
    <div class="panel-body">
      <div class="table-responsive">
	       <table id="dataRespTable" class="table table-striped table-bordered">
		      <thead>
			     <tr>
			     <th>Employee Grade</th>
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
</div>
	<!-- end panel -->
    </div>
    <!-- end col-12-->
		    
    <
	      <div>
<!-- end row -->
</div>
    <!-- end #content -->
<!-- Modal -->
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
	   <form method="post" action="" class="form-horizontal">
	       <div class="form-group">
		   <label class="col-md-4 control-label">Grade Name</label>
		   <div class="col-md-5">
		       <input type="text" name="EMP_G_NAME" class="form-control input-sm" id="name" placeholder="" />
		   </div>
	       </div>
	       <div class="form-group">
		   <label class="col-md-4 control-label">Priority</label>
		   <div class="col-md-5">
		       <input type="text" name="EMP_G_PRIORITY" class="form-control input-sm" id="priority" placeholder="" />
		   </div>
	       </div>
		<div class="form-group">
		   <label class="col-md-4 control-label">Max Periods per Day</label>
		   <div class="col-md-5">
		       <input type="text" name="EMP_G_MAX_DAY" class="form-control input-sm" id="day" placeholder="" />
		   </div>
		</div>
		<div class="form-group">
		   <label class="col-md-4 control-label">Max Periods per Week</label>
		   <div class="col-md-5">
		       <input type="text" name="EMP_G_MAX_WEEK" class="form-control input-sm" id="week" placeholder="" />
		   </div>
		</div>
		<div class="form-group">
		    <label class="col-md-4 control-label">Status</label>
		    <div class="col-md-6">
			<label class="radio-inline">
			    <input type="radio" name="EMP_G_ACTIVE_YN" checked class="staus_yes staus" id="radio_1">Active
			</label>
			<label class="radio-inline">
			    <input type="radio" name="EMP_G_ACTIVE_YN" class="staus_no staus" id="radio_2">Inactive
			</label>
			<input type="hidden" name="" class="staus_val" >
		    </div>
		</div><br>
		<div class="form-group">
		<label class="col-md-4 control-label"></label>
		<div class="col-md-2">
			<button type="button" name="insert" class="btn btn-primary btn-sm submit" id="submit" >Create</button>
			<button type="button" name="update" class="btn btn-warning btn-sm update hidden" id="update" >Update</button>
		</div>
		<div class="col-md-2">
			 <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
			 <input type="hidden" id="updatedID">
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
	"sAjaxSource": '<?php echo base_url('hrSettingsC/employeeGradeView')?>',
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
	{ data: 'EMP_G_NAME'},
	{ data: 'EMP_G_ACTIVE_YN'},
	{
		data: null, className: "all", 
		    render: function( data, type, row) {
			return '<button type="button" name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" onclick="javascript:editGrade('+data['EMP_G_ID']+');"><i class="fa fa-edit"></i></button> <button type="button" id="delete" class="btn btn-xs btn-danger" onclick="javascript:deleteGrade('+data['EMP_G_ID']+');"><i class="fa fa-trash-o"></i></button>';
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



//check and radio button//
    $('.form-horizontal input').on('change',function(){
    if($('.staus_yes').is(':checked')){
    console.log($('.staus_val').val('Y'))
    }else if($('.staus_no').is(':checked')){
      console.log($('.staus_val').val('N'))
    }
    })
    //emptyfunction//
    function cleardata(){
	$('#name').val('');
	$('#priority').val('');
	$('#day').val('');
	$('#week').val('');
	$('.staus_val').val('');
    }
   //insert//
    $('.submit').on('click',function(){ 
	var grade_name=$('#name').val();
	var priority=$('#priority').val();
	var max_day=$('#day').val();
	var max_week=$('#week').val();
	var status=$('.staus_val').val();
	console.log(radio_1,'radio');
	$.ajax({
	    type:"POST",
	    url:"<?php echo base_url('HrConfigCtrl/employeeGrade')?>",
	    data:{grade_name:grade_name,priority:priority,max_day:max_day,max_week:max_week,status:status},
	    success: function(res) {
	    	console.log(res);
	    	console.log(res.message);
	    	if(res.status==true){
		    	$('#alert').append('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> '+res.message+'</div>');
		    	cleardata();
			$('#myModal').modal('hide');
			$('#dataRespTable').dataTable().fnDraw();
		    }else{
		    	$('#alert').append('<div class="alert alert-danger "><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">&times;</a><strong>Failure!</strong>'+res.message+'</div>');
		    }
		    setTimeout(function(){ $('#alert').empty(); }, 5000);
	    }	    
	});	
    });
//edit//
    function editGrade(id){
	$('#updatedID').val(id);
	$('.update').removeClass('hidden');
	$('.submit').addClass('hidden');
	$('#myModal').modal('show')
	console.log(id);
	$.ajax({
	type:'get',
	url:'<?php echo base_url('HrConfigCtrl/employeeGrade');?>',
	data:{id:id},
	dataType:'json',
	success:function(json){
	    $('#name').val(json[0].EMP_G_NAME);
	    $('#priority').val(json[0].EMP_G_PRIORITY);
	    $('#day').val(json[0].EMP_G_MAX_DAY);
	    $('#week').val(json[0].EMP_G_MAX_WEEK);
	    $('.staus_val').val(json[0].EMP_G_ACTIVE_YN);
	    var data=$('.staus_val').val();
	    console.log(data,'aid')
	    if (data=='Y') {
		$('.staus_yes').attr('checked',true);
		$('.staus_no').prop('checked',false);
	    }else if (data=='N') {
		$('.staus_no').attr('checked',true);
		$('.staus_yes').prop('checked',false);
	    }
	    fetchEmpGradeDetails();
	}
	})
    }
//update//
    $('.update').on('click',function(){
	    var id=$('#updatedID').val();
	    //console.log(id);
	    var grade_name=$('#name').val();
	    var priority=$('#priority').val();
	    var max_day=$('#day').val();
	    var max_week=$('#week').val();
	    var status=$('.staus_val').val();
	    console.log(radio_1,'radio');
	    $.ajax({
		type:"post",
		url:"<?php echo base_url('HrConfigCtrl/employeeGrade')?>",
		data:{id:id,grade_name:grade_name,priority:priority,max_day:max_day,max_week:max_week,status:status},
		success:function(res){
		console.log(res)
		cleardata();
		$('#myModal').modal('hide');
	      	$('#dataRespTable').dataTable().fnDraw();
		//refersh()
		}
	    });	
    });
//delete//
function deleteGrade($id) {
	 bootbox.confirm("<h5>Are you want to delete this record ?<h5/>", function(confirmed) {   
	    if (confirmed) {
			$.ajax({
				type: "delete",
			    url: "<?php echo base_url('HrConfigCtrl/employeeGrade?id=')?>"+$id,
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



    