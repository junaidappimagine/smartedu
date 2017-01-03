

	<div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Manage Course & Batch</a></li>
		    <li><a href="javascript:;">Manage Batch </a></li>
		    <li class="active">Batch Transfer</li>
	   </ol>
	    <h1 class="page-header"> Manage Batch  | Student fees
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
		<h4 class="panel-title">Student fees</h4>
	    </div>
	    <div class="panel-body">
		<div class="well">
			<?php if($result=='ishan') { ?>
				<div class="ishan">
					<div class="row">
						<div class="col-md-3">
							<p><b>Ishan</b></p>
							<p>Class & Batch :&nbsp;&nbsp;&nbsp; C1-A</p>
							<p>Admn no :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STD003</p>
							<p>Roll number :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -</p>
						</div>
						<div class="col-md-offset-6" style="margin-top:80px;text-align:right;">
							<a data-toggle="modal" data-target="#myModal">Student preferences</a>
						</div>
					</div>
					<div class="panel-body  main">
						<div class="table-responsive">
							<table class="table table-bordered" id="myTable">
								<thead id="sub">
									<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
										<th width="10%">C1-A</th>
										<th width="90%" style="text-align:right" colspan="3">2 Unpaid Fees</th>
									</tr>
									<tr style="">
										<th width="30%">Fees Name</th>
										<th width="20%">Status</th>
										<th width="20%">Amount(RS.)</th>
										<th width="20%">Date</th>
									</tr>
								</thead>
								<tbody>
									<th colspan="4" style="background-color: #EEEEEE">General Fees</th>
									<tr id="first_course">
										<td><a href="<?php echo base_url('AcademicsC/list_fees?var1=fee');?>">fee</a></td>
										<td style="color:red">Unpaid</td>
										<td>7650.00 / 7650.00 </td>
										<td>Due on 12-13-2016 </td>
									</tr>
									<th colspan="4"  style="background-color: #EEEEEE">Instant Fees</th>
									<tr  id="second_course">
										<td><a href="<?php echo base_url('AcademicsC/list_fees?var1=term');?>">term fee</a></td>
										<td>Paid</td>
										<td>8000.00</td>
										<td>Paid on 03-23-2016</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php if($result=='jeena') { ?>
			<div class="jeena">
				<div class="row">
					<div class="col-md-3">
						<p><b>Jeena</b></p>
						<p>Class & Batch : C1-A</p>
						<p>Admn no:STD011</p>
						<p>Roll number : -</p>
					</div>
					<div class="col-md-offset-5" style="margin-top:80px;text-align:right;">
						<a>Student preferences</a>
					</div>
				</div>
				<div class="panel-body  main">
					<div class="table-responsive">
						<table class="table table-bordered" id="myTable">
							<thead id="sub">
								<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
									<th width="10%">C1-A</th>
									<th width="90%" style="text-align:right" colspan="3">4 Unpaid Fees</th>
								</tr>
								<tr style="">
									<th width="30%">Fees Name</th>
									<th width="20%">Status</th>
									<th width="20%">Amount(RS.)</th>
									<th width="20%">Date</th>
								</tr>
							</thead>
							<tbody>
								<th colspan="4" style="background-color: #EEEEEE">General Fees</th>
								<tr id="first_course">
									<td>fee</td>
									<td style="color:red">Unpaid</td>
									<td>7650.00 / 7650.00  </td>
									<td>Due on 12-13-2016</td>
								</tr>
								<tr id="first_course">
									<td>Term 2 collection fee</td>
									<td style="color:red">Unpaid</td>
									<td>7800.00 / 7800.00</td>
									<td>Due on 03-24-2016</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
		</div><br><br>
		</div>
	 </div>
	 <div>

 
  <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Student fees preferences</h4>
        </div>
        <div class="modal-body">
        <form>
			<div class="radio">
			  <label><input type="radio" name="optradio" checked><b>Create fees collection</b></label><br>
			  <p style="font-size: 13px;">Fee collections can be created for this student. </p>
			</div><br>
			<div class="radio">
			  <label><input type="radio" name="optradio"><b>Do not create fees collection for this student in the current batch</b></label><br>
			  <p style="font-size: 13px;">Fee collections cannot be created for this student in the current batch. However, fee collections can be created after the student is transferred to another batch. </p>
			</div><br>
			<div class="radio disabled">
			  <label><input type="radio" name="optradio"><b>Do not create fees collections form now on</b></label><br>
			  <p style="font-size: 13px;">Fee collections cannot be created for this student anymore, even if the student is transferred to another batch, or registers for a new course.</p>
			</div><br>
			<div>
				<button type="button" class="btn btn-primary btn-sm">Update</button>
			</div>
		 </form>
        </div>
    </div>
      
    </div>
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
  


   