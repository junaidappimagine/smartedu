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
				<div class="col-md-offset-2 col-md-5" style="text-align: right;padding: 30px;">
					<a  href="<?php echo base_url('AcademicsC/');?>"  type="button" class="btn btn-primary btn-sm">Exam</a>
					<a  href='<?php echo base_url("AcademicsC/");?>'  type="button" class="btn btn-primary btn-sm">Edit</a>
					<a  href="<?php echo base_url('AcademicsC/');?>"  type="button" class="btn btn-primary btn-sm">Delete</a>
					<a  href="<?php echo base_url('AcademicsC/');?>"  type="button" class="btn btn-primary btn-sm">Manage</a>
				</div>
			</div><br>
			<div class="panel-body">
			<div>
				<div class="table-responsive">
					<h5>List of Students :</h5>
					<table class="table table-bordered" id="myTable">
						<thead>
							<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
								<th width="10%">Sl.no.</th>
								<th width="50%">Student name</th>
								<th width="20%">Admission number</th>
								<th width="20%">Roll number</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1.</td>
								<td><a  href="<?php echo base_url('AcademicsC/student_view?var1=Jack&var2=S51&var3=DT01&var4=Joseph');?>" >Jack</a></td>
								<td>S51</td>
								<td>DT01</td>
							</tr>
							<tr>
								<td>2.</td>
								<td><a  href="<?php echo base_url('AcademicsC/student_view?var1=Jenny&var2=S55&var3=DT02&var4=Stephn');?>" >Jenny</a></td>
								<td>S55</td>
								<td>DT02</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		 </div><br><br>
		   <div class="" style="background-color: #EFDC86;width:100%;">
				<h5 style="text-align: center;">No Student in this batch</h5>
			</div>
		</div>
	 </div>
	 <div>
    </div>
	 
  

