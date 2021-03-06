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
				<div class="col-md-offset-8 col-md-1" style="text-align: right;">
					<!--<a  href="<?php echo base_url('AcademicsC/');?>"  type="button" class="btn btn-primary btn-sm">Exam</a>-->
					<a  href='<?php echo base_url("AcademicsC/edit_batch?var1=$result");?>'  type="button" class="btn btn-warning btn-sm">Edit</a>
				</div>
				<div class="col-md-1" style="text-align: center;">
					<a  href="#"  type="button" class="btn btn-warning btn-sm delete">Delete</a>
				</div>
				<div class="col-md-2">
					<div class="dropdown">
						<a  href="#"  type="button" class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown">
						<span class="caret"></span>&nbsp;Manage</a>
						<ul class="dropdown-menu">
						  <li><a href="<?php echo base_url("AcademicsC/manageSubjects/");?>">Subject</a></li>
						  <li><a href="<?php echo base_url("AcademicsC/manageSubjects/");?>">Assign class teacher</a></li>
						  <li><a href="<?php echo base_url("StudentCntrl/manage_roll/");?>">Manage roll number</a></li>
						</ul>
					</div>
				</div>
			</div><br><br><br>
			<div class="row">
				<div class="col-md-5">
				    <label class="control-label col-md-4">Select a class</label>
				    <div class="col-md-6">
					   <select class="selectpicker form-control" id="course" data-style="btn-sm btn-white">
						  <option value="">Select a class</option>
						  <option value="course">Course 1</option>
						  <option value="dip" selected>Diploma in theater semester 6(GPA)</option>
						  <option value="grade">Garda 1(Normal)</option>
						</select>
				    </div>
				</div>
				<div class="col-md-5">
				    <label class="control-label col-md-4">Select a Batch</label>
				    <div class="col-md-6">
					   <select class="selectpicker form-control" id="batch" data-style="btn-sm btn-white">
						  <option value="">Select a batch</option>
						  <option value="c1" class="course hidden">C1-A</option>
						  <option value="dt" class="dip hidden" selected>DT Sem6-A2015</option>
					   </select>
				    </div>
				</div>
               </div><br><br>
			<?php if($result=='A 2015') { ?>
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
							<!--<tr>
								<td>2.</td>
								<td><a  href="<?php echo base_url('AcademicsC/student_view?var1=Jenny&var2=S55&var3=DT02&var4=Stephen');?>" >Jenny</a></td>
								<td>S55</td>
								<td>DT02</td>
							</tr>-->
						</tbody>
					</table>
				</div>
			</div>
		 </div>
			<?php } ?>
			<br><br>
		  <?php if($result=='A') { ?>
		   <div>
			<table width="100%;">
			   <tr>
			   <td style="text-align: center;background-color: #c3d9ff!important;padding:8px">No Student Found</td>
			   </tr>
		      </table>
		   </div>
		   <?php } ?>
		</div>
	 </div>
	 <div>
    </div>
	 <script>
		$(document).ready(function(){
			
			var readData=$('#course').val();
			if(readData=='dip')
			{
				$('.course').addClass('hidden');
				$('.dip').removeClass('hidden');
			}
			
			$('.delete').on('click',function(){
				var result = confirm("Are You Sure Want to delete?");
				if (result==true) {
				
			   }
			});
			$('#course').change(function(){
				console.log($(this).val());
				if($(this).val()=='course'){
					$('.course').removeClass('hidden');
					$('.dip').addClass('hidden');
				}
				else if($(this).val()=='dip'){
					$('.course').addClass('hidden');
					$('.dip').removeClass('hidden');
				}
				else if($(this).val()=='grade'){
					$('.course').addClass('hidden');
					$('.dip').addClass('hidden');
				}
			});
		});
	</script>
  

