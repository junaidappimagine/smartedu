	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">View Class Room</li>
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
			    <h4 class="panel-title"> View Class Room</h4>
			</div>
			<div class="panel-body">
			<div class="Roomview">
			  <legend>View Class Room</legend>
			  <a href="<?php echo base_url('AcademicsC/addRoom');?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Add</a>
			  <p><br></p>
			  <form class="form-horizontal">
				<div class="form-group">
					<label class="col-md-2 ">Buliding Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>:</b></label>
					<label class="col-md-2 "> Tower A </label>
				</div>
				<div class="table-responsive">
					<table class="table table-bordered table table-striped">
					    <thead>
						<tr>
						    <th>Sl.No</th>
						    <th>Room Name </th>
						    <th>Capacity</th>
						    <th>Action</th>
						</tr>
					    </thead>
					    <tbody class="tablebody">
						<tr>
						    <td>1</td>
						    <td>A1</td>
						    <td>30</td>
						    <td><a href="<?php  echo base_url('AcademicsC/editRoom')?>">Edit</a> &nbsp;&nbsp;&nbsp;<a class="deleteroom">Delete</a> </td>
						</tr>
						<tr>
						    <td>2</td>
						    <td>A2</td>
						    <td>30</td>
						    <td><a href="<?php  echo base_url('AcademicsC/editRoom')?>">Edit</a> &nbsp;&nbsp;&nbsp;<a class="deleteroom">Delete</a> </td>
						</tr>
						<tr>
						    <td>3</td>
						    <td>A3</td>
						    <td>20</td>
						    <td><a href="<?php  echo base_url('AcademicsC/editRoom')?>">Edit</a> &nbsp;&nbsp;&nbsp;<a class="deleteroom">Delete</a> </td>
						</tr>

					    </tbody>
					</table>
				</div>
			  </form>
			</div>
			</div>
		    </div>
		  </div>
		    <!-- end panel -->
	    </div>
	<!-- end col-12-->
	  </div>
<script>
    $('.deleteroom').on('click',function(){
	$(this).closest('tr').remove();
	$data=$('.table tr').length;
	if ($data == 1 ) {
	    $('.tablebody').append('<tr><td style="background-color:#FFF1AB" colspan="4"><center>No Data<center></td></tr>');
	}
    });
</script>