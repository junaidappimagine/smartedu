<style>
     .panel-body h1{
                    font-size: 18px;
                }
</style>
    <div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Manage Course & Batch</a></li>
		    <li class="active">Manage Course </li>
	   </ol>
	    <h1 class="page-header">Manage Course & Batch | Manage Course 
</h1>
	    <div class="row">
		<div class="col-md-12">
	<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
	    <div class="panel-heading">
		<div class="panel-heading-btn">
		    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
		    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
		    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
		   <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
		</div>
		<h4 class="panel-title">Manage Course</h4>
	    </div>
	    <div class="panel-body">
		<div class="well">
			<div class="row">
				<div class="col-md-offset-3 col-md-5" style="text-align: right;padding: 30px;">
					<a  href="<?php echo base_url('AcademicsC/new_batch');?>"  type="button" class="btn btn-primary btn-sm">New</a>
					<a  href='<?php echo base_url("AcademicsC/group_batch?var1=$result1");?>'  type="button" class="btn btn-primary btn-sm">Group batches</a>
					<a  href="<?php echo base_url('AcademicsC/assign_sub_amount');?>"  type="button" class="btn btn-primary btn-sm">Assign Subject Amount</a>
				</div>
			</div><br>
			<?php if($result1=='Course 1')
			{ ?>
			<div class="panel-body">
			<div>
				<div class="table-responsive">
					<h5>List of batches :</h5>
					<table class="table table-bordered" id="myTable">
						<thead>
							<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
								<th width="10%">Sl.no.</th>
								<th width="40%">Batch</th>
								<th width="10%">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1.</td>
								<td><a  href="<?php echo base_url('AcademicsC/batchwise_student?var1=A');?>" >C1-A</a></td>
								<td><a  href="<?php echo base_url('AcademicsC/edit_batch?var1=A');?>" type="button" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
								<button type="button"  name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		 </div><br><br>
		 <?php } ?>
		 <?php if($result1=='Diploma in Theatre Semester 6(GPA)')
			{ ?>
			<div class="panel-body" id="class1">
				<div class="table-responsive">
					<h5>List of batches :</h5>
					<table class="table table-bordered" id="myTable">
						<thead>
							<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
								<th width="10%">Sl.no.</th>
								<th width="40%">Batch</th>
								<th width="10%">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1.</td>
								<td><a  href="<?php echo base_url('AcademicsC/batchwise_student?var1=A 2015');?>" >DT Sem6 - A 2015</a></td>
								<td><a  href="<?php echo base_url('AcademicsC/edit_batch?var1=A 2015');?>" type="button" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
								<button type="button"  name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			 <?php } ?>
			 
			<?php if($result1=='Grade 1(Normal)')
			{ ?>
			<div>
				<table width="100%;">
				   <tr>
				   <td style="text-align: center;background-color: #c3d9ff!important;padding:8px">No Batches in this Course</td>
				   </tr>
			   </table>
		    </div>
			 <?php } ?>
		</div>
	 </div>
	 <div>
    </div>
	 
  

