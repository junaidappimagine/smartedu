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
				<div class="col-md-1 col-md-offset-11">
					<a  href="<?php echo base_url('AcademicsC/create_course');?>"  type="button" class="btn btn-primary btn-sm">New</a>
				</div>
			</div><br>
			<div class="panel-body">
			<div>
				<div class="table-responsive">
					<table class="table table-bordered" id="myTable">
						<thead>
							<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
								<th width="10%">Sl.no.</th>
								<th width="40%">Course</th>
								<th width="10%">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1.</td>
								<td><a  href="<?php echo base_url('AcademicsC/manage_course_bacthview?var1=Course 1');?>" >Course 1</a></td>
									<td><a  href="<?php echo base_url('AcademicsC/edit_course?var1=Course 1&var2=C1&var3=Normal');?>" type="button" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
								<button type="button"  name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
							</tr>
							<tr>
								<td>2.</td>
								<td><a  href="<?php echo base_url('AcademicsC/manage_course_bacthview?var1=Diploma in Theatre Semester 6(GPA)');?>" >Diploma in Theatre Semester 6(GPA)</a></td>
									<td><a  href="<?php echo base_url('AcademicsC/edit_course?var1=Diploma in Theatre Semester 6(GPA)&var2=DT Sem6&var3=GPA');?>" type="button" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
								<button type="button"  name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
							</tr>
							<tr>
								<td>3.</td>
								<td><a  href="<?php echo base_url('AcademicsC/manage_course_bacthview?var1=Grade 1(Normal)');?>" >Grade 1(Normal)</a></td>
									<td><a  href="<?php echo base_url('AcademicsC/edit_course?var1=Grade 1(Normal)&var2=G1&var3=Normal');?>" type="button" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
								<button type="button"  name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		 </div><br><br>
		</div>
	 </div>
	 <div>
    </div>
	 
 
  


   