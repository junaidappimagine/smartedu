

	<div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Manage Course & Batch</a></li>
		    <li class="active">Manage Batch </li>
	   </ol>
	    <h1 class="page-header">Manage Course & Batch | Manage Batch 
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
		<h4 class="panel-title">Manage Batch</h4>
	    </div>
	    <div class="panel-body">
		<div class="well">
			<div class="row">
				<div class="col-md-6 col-md-offset-6" style="text-align: right;">
					<a  href="<?php echo base_url('AcademicsC/grading_system');?>"  type="button" class="btn btn-primary btn-sm">Grading System</a>
					<a  href="<?php echo base_url('AcademicsC/batch_transfer');?>"  type="button" class="btn btn-primary btn-sm">Batch Transfer</a>
					<a  href="<?php echo base_url('AcademicsC/revertBatchesTransfer');?>"  type="button" class="btn btn-primary btn-sm">Revert Batch Transfer</a>
				</div>
			</div><br>
			<div class="row">
				<div class="col-md-6">
					<label class="control-label col-md-6">Select a Course</label>
					<div class="col-md-6">
						<select class="selectpicker form-control" id="course" data-style="btn-sm btn-white">
						<option>Select a course</option>
						<option value="course">Course1</option>
						<option value="diploma">Diploma in Theatre Semester 6(GPA)</option>
						<option value="grade">Grade 1(Normal)</option>
					</select>
					</div>
				</div>
			</div><br>
			<div class="panel-body hidden main">
				<ul class="nav nav-tabs">
				  <li class="active"><a data-toggle="tab" href="#abatches">Active Batches</a></li>
				  <li><a data-toggle="tab" href="#ibatches">Inactive Batches</a></li>
				</ul>
				<div class="tab-content">
					<div id="abatches" class="tab-pane fade in active">
						<div class="table-responsive">
							<table class="table table-bordered" id="myTable">
							<thead id="sub">
								<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
									<th width="10%">Sl.no.</th>
									<th width="40%">Batche Name</th>
									<th width="10%">Option</th>
								</tr>
							</thead>
							<tbody>
								<tr id="first_course" class="hidden" >
									
									<td>1.</td>
									<td>C1-A</td>
									<td><a  href="<?php echo base_url('AcademicsC/edit_batch?var1=A');?>">Deactivate</a></td>
								</tr>
								<tr  id="second_course" class="hidden" >
									<td>1.</td>
									<td>DT Sem6 - A 2015</td>
									<td><a  href="<?php echo base_url('AcademicsC/edit_batch?var1=A 2015');?>"></a><strike>Deactivate</strike></td>
								</tr>
							</tbody>
							</table>
							<table id="third_course" class="hidden" width="100%;">
								<tr>
								<td style="text-align: center;background-color: #c3d9ff!important;padding:8px">No batches exist in this course</td>
								</tr>
							</table>
						</div>
					</div>
					<div id="ibatches" class="tab-pane fade">
					  <table width="100%;">
						<tr>
						<td style="text-align: center;background-color: #c3d9ff!important;padding:8px">No Inactive batche exist for this course</td>
						</tr>
					</table>
					</div>
				</div>
			</div><br><br>
		</div>
	 </div>
	 <div>
    </div>
	 
<script>
	
$('#course').change(function(){

if($(this).val()=='course')
{
	$('#sub').show();
	$('.main').removeClass('hidden');
	$('#first_course').removeClass('hidden');
	$('#third_course').addClass('hidden');
	$('#second_course').addClass('hidden');
}
if($(this).val()=='diploma')
{
	$('#sub').show();
	$('.main').removeClass('hidden');
	$('#second_course').removeClass('hidden');
	$('#first_course').addClass('hidden');
	$('#third_course').addClass('hidden');
}

if($(this).val()=='grade')
{
	$('.main').removeClass('hidden');
	$('#second_course').addClass('hidden');
	$('#first_course').addClass('hidden');
	$('#third_course').removeClass('hidden');
	$('#sub').hide();
}
});

</script>
  


   