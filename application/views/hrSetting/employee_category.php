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
									<div class="col-md-4"><button type="button" class="btn btn-primary btn-sm" id="Add" value="Add" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i><span class="f-s-14 f-w-500"> Add </span></a></div>
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
							 <tbody id="result">
							 <?php 
							 $category=$this->SampleMod->fetchCategoryDetails();
							 foreach ($category as $cat) { ?>
							 	<tr>
								<td><?php echo $cat['EMP_C_NAME'];?></td>
								<td><?php echo $cat['EMP_C_ACTIVE_YN'];?></td>
								<td><button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" onclick="editCategory('<?php echo $cat['EMP_C_ID'];?>')" category-id="<?php echo $cat['EMP_C_ID'];?>"><i class="fa fa-edit"></i></button>
								<button type="button" category-id="<?php echo $cat['EMP_C_ID'];?>" onclick="deleteCategory('<?php echo $cat['EMP_C_ID'];?>')" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
							   </tr>
							 <?php } ?>
							    
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
					<div class="col-md-offset-3">
						<form method="" action="" class="form-horizontal">
							<div class="form-group">
								<label class="col-md-2 control-label">Name</label>
								<div class="col-md-4">
									<input type="hidden" class="form-control input-sm" id="emp_id"  name="EMP_ID">
									<input type="text" class="form-control input-sm" id="name"  name="EMP_C_NAME">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Prefix</label>
								<div class="col-md-4">
									<input type="text" class="form-control input-sm" id="prefix" name="EMP_C_PREFIX">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Status</label>
								<div class="col-md-6">
								  	<label class="radio-inline">
									 	<input type="radio"  name="checking" value="Y" checked="" />Active
								   	</label>
								   	<label class="radio-inline">
									 	<input type="radio" name="checking" value="N"/>Inactive
								 	</label>
								 	<input type="hidden" name="EMP_C_ACTIVE_YN" value="Y">
								</div>
							</div><br>
							<div class="form-group">
								<label class="col-md-2 control-label"></label>
								<div class="col-md-2">
									<button type="button" class="btn btn-primary btn-sm add" id="action" onclick="addCategory()">Create</button>

									<button type="button" class="btn btn-primary btn-sm" id="update" onclick="updateCategory()">Update</button>
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
	$('#action').hide();
	$('#update').hide();
	$('button').click(function(){
		if($(this).val()=='Add')
		{
			$('.modal-title').text('Create Employee Category');
			$('#name').val('');
			$('#prefix').val('');
		}
		else if($(this).val()=='edit')
		{
			$('.modal-title').text('Edit Employee Category');
		}
		else if($(this).val()=='edit2')
		{
			$('.modal-title').text('Edit Employee Category');
			// $("#radio_2").prop("checked", true);
			// $("#radio_1").prop("checked", false);
			// $('#name').val('Category 2');
			// $('#prefix').val('C2');
		}
	});
});

function addCategory(){
	$('#myModal').modal('hide');
	$name=$('[name="EMP_C_NAME"]').val();
	$prefix=$('[name="EMP_C_PREFIX"]').val();
	$status=$('[name="EMP_C_ACTIVE_YN"]').val();
	$.ajax({
		type: "POST",
	    url: "<?php echo base_url('HrConfigCtrl/employeeCategory')?>",
	    data: {name:$name,prefix:$prefix,status:$status},
	    success: function(res) {
	      	fetchCategoryDetails();	      	
	    }
	});
}

function fetchCategoryDetails(){
	$.ajax({
		type: "get",
	    url: "<?php echo base_url('HrConfigCtrl/employeeCategory')?>",
	    success: function(res) {
	      	$('#result').html(res);
	      	// $('#data-table').dataTable().fnDraw();
	    }
	});
}

function editCategory($this){
	$('#action').hide();
	$('#update').show();
	$id=$this;
	$.ajax({
		type: "get",
	    url: "<?php echo base_url('HrConfigCtrl/employeeCategory')?>",
	    data:{id:$id},
	    dataType: "json",
	    success: function(res) {
	      	console.log(res);
	      	$('#myModal').modal('show');
	      	$('#emp_id').val(res[0].EMP_C_ID);
	      	$('#name').val(res[0].EMP_C_NAME);
	      	$('#prefix').val(res[0].EMP_C_PREFIX);
	    }
	});
}



function updateCategory(){
	$('#myModal').modal('hide');
	var id=$('#emp_id').val();
  	var name=$('#name').val();
  	var prefix=$('#prefix').val();
  	var status=$('[name="EMP_C_ACTIVE_YN"]').val();
	$.ajax({
		type: "put",
	    url: "<?php echo base_url('HrConfigCtrl/employeeCategory')?>",
	    data:{id:id,name:name,prefix:prefix,status:status},
	    success: function(res) {
	      	fetchCategoryDetails();
	    }
	});
}
$('#Add').click(function(){
	$('#action').show();
	$('#update').hide();
})

function deleteCategory($this) {
	$id=$this;
	$.ajax({
		type: "delete",
	    url: "<?php echo base_url('HrConfigCtrl/employeeCategory')?>",
	    data:{id:$id},
	    success: function(res) {
	      	fetchCategoryDetails();
	    }
	});
}
$('.form-horizontal input').on('change', function() {
   var valu=$('input[name="checking"]:checked', '.form-horizontal').val();
   $('input[name="EMP_C_ACTIVE_YN"]').val(valu);
   
});
</script>