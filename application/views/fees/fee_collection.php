<style>
	hr.hrdesign{
	display: block;
    margin-left: auto;
    margin-right: auto;
    border-style:inset;
    border-width: 1px;
	}
	td{
		background-color: white!important;
	}
	 th{
		background-color: white!important;
	}
	tbody:before {
    content: "-";
    display: block;
    line-height: 1em;
    color: transparent;
    }
	.design
	{
	text-align: right;
	font-weight: bold;
   }
</style>

<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Fees</a></li>
				<li><a href="javascript:;">Fee collection</a></li>
				<li class="active">View</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Fees | Fee collection</h1>
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
                            <h4 class="panel-title">Fee collection</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<form class="form-horizontal">
									<fieldset>
										<div class="row">
											<div class="col-md-offset-2 col-md-3">
												<div class="form-group">
													<label><h4>Select a batch:</h4></label>
														<div>
															<select  class="form-control selectpicker"  data-style="btn-white btn-sm" id="batch">
																<option value="">Select a batch:</option>
																<option value="B.Tech">B.Tech</option>
															</select>
														</div>
												</div>
											</div>
											<div class="col-md-offset-1 col-md-3">
												<div class="form-group">
													<div class="col-md-">
														<label><h4>Select a student:</h4></label>
															<div>
																<select id="dropdown1" class="form-control selectpicker" data-style="btn-white btn-sm" data-live-search="true">
																	<option value="">Select a student:</option>
																	<option value="kate">Kate</option>
																</select>
															</div>
													</div>
												</div>
											</div>
											</div>
										<hr>
										<div class="row hidden sub-content">
											<div class="col-md-offset-3 col-md-4">
												<div class="form-group">
													<label class="control-label col-md-4">Fee Collection:</label>
													<div class="col-md-8">
														<select id="dropdown2" class="form-control selectpicker" data-style="btn-white btn-sm">
															<option value="">Select a fee collection:</option>
															<option value="Term 2 fee collection" class="hidden show">Term 2 fee collection</option>
															<option value="Fee Str" class="hidden show">Fee Str</option>
															<option value="pay" class="hidden show">Pay All Fees</option>
														</select>
													</div>
												</div>
											</div>
											<hr>
										</div>
										<div class="row sub_content3 hidden">
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label col-md-5">Admission no:</label>
													<div class="col-md-7">
														<h6>STD004</h6>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label col-md-5">Roll Number:</label>
													<div class="col-md-7">
														<h6>ROLL01</h6>
													</div>
												</div>
											</div>
											<div class="col-md-offset-1 col-md-2 sub_content2 hidden">
												<label>Fee Category name:</label><br>
												<span>Term 1 Fee</span>
											</div>
											<hr>
										</div><br>
										<div class="panel-body tpanel hidden" style="background-color: #C3D9FF">
											<div class="main-content" style="">
												<div class="table-responsive">
													<center>
													<table class="table table-bordered" style="width:90%">
														<thead>
															<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
																<th width="10%">Sl.No</th>
																<th width="60%">Particulars</th>
																<th width="20%">Amount (Rs.)</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1.</td>
																<td>Tution fees</td>
																<td class="design">40,000</td>
															</tr>
															<tr>
																<td>2.</td>
																<td>Admission fees</td>
																<td class="design">12,0000</td>
															</tr>
														</tbody>
													</table>
													</center>
													<div class="col-md-offset-9 col-md-3" style="text-align: center;">
														<a  class="add"  data-toggle="modal" data-target="#myModal">+ Add Particular</a>
													</div>
												</div>
												<br>
												<div class="table-responsive">
													<center>
													<table class="table table-bordered" style="width:90%">
														<thead>
															<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
																<th width="10%">Sl.No</th>
																<th width="60%">Discount</th>
																<th width="20%">Discount amount</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1.</td>
																<td>Discount 1</td>
																<td class="design">15.00(%)</td>
															</tr>
														</tbody>
													</table>
													</center>
													<div class="col-md-offset-9 col-md-3" style="text-align: center;">
														<a  class="add"  data-toggle="modal" data-target="#myModal1">+ Add Discount</a>
													</div>
												</div><br>
												<div class="table-responsive">
													<center>
													<table class="table table-bordered" style="width:90%">
														<thead>
															<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
																<th width="10%">Sl.No</th>
																<th width="60%">Fine</th>
																<th width="20%">Fine amount</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1.</td>
																<td>fine 1</td>
																<td class="design">150(%)</td>
															</tr>
														</tbody>
													</table>
													</center>
													<div class="col-md-offset-4 col-md-5">
														Due date has been exceeded. Please collect the fine amount:
													</div>
													<div class="col-md-3" style="text-align: center;">
														<a  class="add"  data-toggle="modal" data-target="#myModal2">+ Add Fine</a>
													</div>
												</div>
												<br>
												<div class="table-responsive">
													<center>
													<table class="table table-bordered" style="width:90%">
														<thead>
															<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
																<th width="10%">Sl.No</th>
																<th width="60%">Summary</th>
																<th width="20%"></th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1.</td>
																<td>Total fees</td>
																<td  class="design">9000.00</td>
															</tr>
															<tr>
																<td>2.</td>
																<td>Total Discount</td>
																<td  class="design">1350.00</td>
															</tr>
															<tr>
																<td>3.</td>
																<td>Total fine</td>
																<td  class="design">150.00</td>
															</tr>
															<tr class="design">
																<td colspan="2"  class="design">Total Amount to pay</td>
																<td  class="design">150.00</td>
															</tr>
															<tr class="design">
																<td colspan="2"  class="design">Total Amount Paid</td>
																<td  class="design">150.00</td>
															</tr>
															<tr>
																<td colspan="2"  class="design">Total Due Amount</td>
																<td  class="design">150.00</td>
															</tr>
														</tbody>
													</table>
													</center>
												</div>
												<div class="row">
													<div class="col-md-offset-1 col-md-3">
														<div class="form-group">
															<label>Pyament Mode :</label>
																<select id="dropdown1" class="form-control selectpicker btn-sm" data-style="btn-white">
																	<option value="">Cash</option>
																	<option value=""></option>
																</select>
														</div>
													</div>
													<div class="col-md-3">
														<label>Reference Number :&nbsp;</label>
																<input type="text" class="form-control input-sm" placeholder="">
													</div>
													<div class="col-md-offset-1 col-md-3">
														<label>Amount:</label>
														<input type="text" class="form-control input-sm" placeholder="To Date">
													</div>
												</div>
												<div class="row">
													<div class="col-md-offset-1 col-md-3">
														<div class="form-group">
															 <label>Payment Date:</label>
															 <span class='input-group'>
                                                                <input type='text' id="datePicker" name="dailyDate" class="form-control input-sm input-group datetimepicker defaultdate" value="" />
																	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
																</span>  
														</div>
													</div>
													<div class="col-md-3">
														<label>Payment notes :</label>
														<textarea class="form-control input-sm" placeholder="" rows="1"></textarea>
													</div>
												</div><br>
												<div class="row">
													<div class="col-md-offset-7 col-md-4" style="text-align:right;">
														<div class="form-group">
															<button type="button" class="btn btn-primary btn-sm">Print Summary</button>
															<button type="button" class="btn btn-primary btn-sm">Pay Fees</button>
														</div>
													</div>
													<!--div class="col-md-3">
														<div class="form-group">
															<buton type="button" class="btn btn-primary">Pay Fees</buton>
														</div>
													</div>-->
												</div>
											</div>
										</div>
										<div class="panel-body tpanel2 hidden" style="background-color: #C3D9FF">
											<div class="main-content">
												<div class="table-responsive">
													<center>
													<table class="table table-bordered" style="width:90%">
														<thead>
															<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
																<th width="10%">Sl.No</th>
																<th width="30%">Fee collection</th>
																<th width="20%">Actual amount&nbsp;&nbsp;&nbsp;&nbsp;(Rs. ) </th>
																<th width="20%">Amount to pay with fine (Rs. )</th>
																<th width="20%">Pay fees (Rs. )</th>
															</tr>
															<tr></tr>
														</thead>
														<tbody>
															<tr>
																<td>1.</td>
																<td>Term 2 fee collection</td>
																<td class="design">7650.00</td>
																<td class="design">7800.00</td>
																<td><input type="text" value=""></td>
															</tr>
															<tr>
																<td>2.</td>
																<td>Fee str</td>
																<td class="design">8000.00</td>
																<td class="design">78150.00 </td>
																<td><input type="text" value=""></td>
															</tr>
															<tr class="design">
																<td colspan="4"  class="design">Total Amount to pay</td>
																<td  class="design">150.00</td>
															</tr>
															<tr class="design">
																<td colspan="4"  class="design">Total Amount Paid</td>
																<td  class="design">150.00</td>
															</tr>
															<tr>
																<td colspan="4"  class="design">Total Due Amount</td>
																<td  class="design">150.00</td>
															</tr>
														</tbody>
													</table>
													</center>
												</div>
												<br>
												<div class="row">
													<div class="col-md-offset-1 col-md-3">
														<div class="form-group">
															<label>Pyament Mode :</label>
																<select id="dropdown1" class="form-control selectpicker btn-sm" data-style="btn-white">
																	<option value="">Cash</option>
																	<option value=""></option>
																</select>
														</div>
													</div>
													<div class="col-md-3">
														<label>Reference Number :&nbsp;</label>
																<input type="text" class="form-control input-sm" placeholder="">
													</div>
													<div class="col-md-offset-1 col-md-3">
														<label>Amount:</label>
														<input type="text" class="form-control input-sm" placeholder="To Date">
													</div>
												</div>
												<div class="row">
													<div class="col-md-offset-1 col-md-3">
														<div class="form-group">
															<label>Payment Date:</label>
															 <span class='input-group'>
                                                                <input type='text' id="datePicker" name="dailyDate" class="form-control input-sm input-group datetimepicker defaultdate" value="" />
																	<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
															</span>  
														</div>
													</div>
													<div class="col-md-3">
														<label>Payment notes :</label>
														<textarea class="form-control input-sm" placeholder="" rows="1"></textarea>
													</div>
												</div><br>
												<div class="row">
													<div class="col-md-offset-7 col-md-4" style="text-align: right;">
														<div class="form-group">
															<button type="button" class="btn btn-primary btn-sm">Print Summary</button>
															<button type="button" class="btn btn-primary btn-sm">Pay Fees</button>
														</div>
													</div>
													<!--div class="col-md-3">
														<div class="form-group">
															<buton type="button" class="btn btn-primary">Pay Fees</buton>
														</div>
													</div>-->
												</div>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12-->
			<div>
            <!-- end row -->
      </div>
		<!-- end #content -->
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Particular</h4>
        </div>
        <div class="modal-body">
         <form class="form-horizontal">
				<div class="form-group">
					<label class="col-md-4 control-label">Name :</label>
					<div class="col-md-4">
						<input type="text" class="form-control input-sm" placeholder="" value=""/>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">Amount :</label>
					<div class="col-md-4">
						<input type="text" class="form-control input-sm" placeholder="" value=""/>
					</div>
				</div>
		</form>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Discount</h4>
        </div>
        <div class="modal-body">
           <form class="form-horizontal">
				<div class="form-group">
					<label class="col-md-4 control-label">Mode :</label>
					<div class="col-md-4">
						 <label class="radio-inline"> <input type="radio" name="mode" value="percentage">Percentage</label><br>
						 <label class="radio-inline"> <input type="radio" name="mode"  value="amount">Amount</label><br>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label">Discount:</label>
					<div class="col-md-4">
						<div class="input-group" id="percentage">
							<span class="input-group-addon"><i>%</i></span>
								<input type="text" class="form-control input-sm" name="" id="" placeholder="0.00" value="">
						</div><br>
					</div>
				</div>
		   </form>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Fine</h4>
        </div>
        <div class="modal-body">
			<form class="form-horizontal">
				<div class="form-group">
					<label class="col-md-4 control-label">Amount</label>
					<div class="col-md-4">
						<input type="text" class="form-control input-sm" placeholder="" value=""/>
					</div>
				</div>
			</form>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<script>
		
		$(document).ready(function(){
			 $('#datePicker').datepicker({
                            format: 'dd-mm-yyyy'
                        });
			$('#batch').change(function(){
				console.log($(this).val());
				$('.sub-content').removeClass('hidden');
			});
			$('#dropdown1').change(function(){
				console.log($(this).val());
				if($(this).val()=='kate')
				{
				$('.show').removeClass('hidden');
				}
			});
			$('#dropdown2').change(function(){
				console.log($(this).val());
				if($(this).val()=='pay')
				{
					$('.tpanel2').removeClass('hidden');
					$('.sub_content3').removeClass('hidden');
					$('.sub_content2').removeClass('hidden');
					$('.tpanel').addClass('hidden');
				}
				else
				{
					$('.tpanel2').addClass('hidden');
					$('.tpanel').removeClass('hidden');
					$('.sub_content3').removeClass('hidden');
					$('.sub_content2').removeClass('hidden');
				}
			});
		});
		
	</script>

		