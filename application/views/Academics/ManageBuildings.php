	<style>
	    .bg_color{
		background-color: #FFF1AB !important;
	    }
	</style>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Manage Buildings</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">Academics | Configurations</h1>
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
			    </div>
			    <h4 class="panel-title">Manage Buildings</h4>
			</div>
			<div class="panel-body">
			  <legend>Manage Buildings</legend>
			   <a href="<?php echo base_url('AcademicsC/addBuildings');?>" class="btn btn-primary btn-sm">
			    <span class="glyphicon glyphicon-plus"></span> Add 
			  </a>
			  <p><br></p>
			  <div class="">
				<table class="table table-bordered table table-striped">
				    <thead>
					<tr>
					    <th>SI.NO</th>
					    <th>Buildings</th>
					    <th>No. of Rooms</th>
					    <th>Action</th>
					</tr>
				    </thead>
				    <tbody class="tablebody">
					<tr>
					    <td>1</td>
					    <td><a href="<?php echo base_url('AcademicsC/viewRoom');?>"> Tower A</a></td>
					    <td>1</td>
					    <td>
						<a href="<?php echo base_url('AcademicsC/editBuildings');?>"> Edit</a>&nbsp;&nbsp;
						<a id="deleterow" class="deleterow"> Delete</a>	
					    </td>
					</tr>
					<tr>
					    <td>2</td>
					    <td><a href="<?php echo base_url('AcademicsC/viewRoom');?>"> Tower B</a></td>
					    <td>3</td>
					    <td>
						<a href="<?php echo base_url('AcademicsC/editBuildings');?>"> Edit</a>&nbsp;&nbsp;
						<a id="deleterow" class="deleterow"> Delete</a>	
					    </td>
					</tr>

				    </tbody>
				</table>
			  </div>
			</div>
		    </div>
		  </div>
		    <!-- end panel -->
	    </div>
	<!-- end col-12-->
	  </div>
<script>
    $('.deleterow').on("click",function(){
    $(this).closest('tr').remove();
    $data=$('.table tr').length;
    if ($data == 1 ) {
	$('.tablebody').append('<tr><td class="bg_color" colspan="4"><center>No Data<center></td></tr>');
    }
    });
</script>