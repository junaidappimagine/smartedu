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
				<li><a href="javascript:;">Manage Course & Batch</a></li>
				<li><a href="javascript:;">Manage Batch </a></li>
				<li class="active">Batch Transfer</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Batch Transfer | Student fees</h1>
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
                            <h4 class="panel-title">Student fees</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<?php if($result=='fee') { ?>
								<div>
									<table width="100%;">
									   <tr>
									   <td style="text-align: center;background-color: #c3d9ff!important;padding:5px">Highlighted students in this batch have unpaid fees!</td>
									   </tr>
								   </table>
								</div><hr>
								<form class="form-horizontal">
									<div class="row">
										<div class="col-md-4">
											<b>Ishan</b>
										</div>
									</div><br>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<div class="col-md-5">Class & batch :</div>
												<div class="col-md-7">
													<b>C1-A</b>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<div class="col-md-5">Admission Number :</div>
												<div class="col-md-7">
													<b>STD004</b>
												</div>
											</div>
										</div>
									</div><br>
									<div class="panel-body" style="background-color: #C3D9FF">
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
															<tr><td colspan="3" style="text-align:center;"><b>Batch Wise</b></td></tr>
															<tr>
																<td>1.</td>
																<td>Tution fees</td>
																<td class="design">5000</td>
															</tr>
															<tr>
																<td>2.</td>
																<td>Admission fees</td>
																<td class="design">4000</td>
															</tr>
														</tbody>
													</table>
													</center>
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
															<tr><td colspan="3" style="text-align:center;"><b>Batch Wise</b></td></tr>
															<tr>
																<td>1.</td>
																<td>Discount-15.0%</td>
																<td class="design">1350</td>
															</tr>
														</tbody>
													</table>
													</center>
												</div><br>
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
																<tr><td colspan="3" style="text-align:center;"><b>Batch Wise</b></td></tr>
																<td>1.</td>
																<td>Total fees</td>
																<td  class="design">9000.00</td>
															</tr>
															<tr>
																<td>2.</td>
																<td>Total Discount</td>
																<td  class="design">1350.00</td>
															</tr>
															<tr class="design">
																<td colspan="2"  class="design">Total Amount to pay</td>
																<td  class="design">7650.0</td>
															</tr>
															<tr class="design">
																<td colspan="2"  class="design">Total Amount Paid</td>
																<td  class="design">0</td>
															</tr>
															<tr>
																<td colspan="2"  class="design">Total Due Amount</td>
																<td  class="design">7650.0</td>
															</tr>
														</tbody>
													</table>
													</center>
												</div>

											</div>
									</div>
								</form><br>
								<?php } ?>
								<?php if($result=='term') { ?>
								<div class="row">
									<div class="col-md-offset-11">
										<a href="<?php echo base_url('AcademicsC/new_payee');?>" type="button" class="btn btn-primary btn-sm">New</a>
									</div>
								</div>
								<form class="form-horizontal">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<div class="col-md-5">Payee Name :</div>
												<div class="col-md-7">
													<b>Ishan</b>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<div class="col-md-5">Class & batch :</div>
												<div class="col-md-7">
													<b>C1-A</b>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<div class="col-md-5">Admission Number :</div>
												<div class="col-md-7">
													<b>STD004</b>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<div class="col-md-5">Category name :</div>
												<div class="col-md-7">
													<b>term fee</b>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<div class="col-md-5">category description :</div>
												<div class="col-md-7">
													<b>term fee</b>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<div class="col-md-5">Receipt Number :</div>
												<div class="col-md-7">
													<b>KR09</b>
												</div>
											</div>
										</div>
									</div>
									<div class="panel-body" style="background-color: #C3D9FF">
											<div class="main-content" style="">
												<div class="table-responsive">
													<center>
													<table class="table table-bordered" style="width:90%">
														<thead>
															<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
																<th width="20%">Sl.No</th>
																<th width="20%">Particulars</th>
																<th width="20%">Amount</th>
																<th width="20%">Discount</th>
																<th width="20%">Total Amount</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1.</td>
																<td>Tution fees</td>
																<td>3000.0</td>
																<td>0</td>
																<td>3000.0</td>
															</tr>
															<tr>
																<td>2.</td>
																<td>Admission fees</td>
																<td>5000.0</td>
																<td>0</td>
																<td>5000.0</td>
															</tr>
															<tr>
																<td colspan="2">Total</td>
																<td colspan="2">8000.0</td>
																<td>8000.0</td>
															</tr>
														</tbody>
													</table>
													</center>
												</div>
												<div class="form-group">
													<div class="col-md-offset-9">
														<button type="button" class="btn btn-primary btn-sm">Download PDF</button>
														<button type="button" class="btn btn-primary btn-sm">Print Receipt</button>
													</div>
												</div>
											</div>
										</div>
								</form>
								<?php } ?>
							</div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12-->
			<div>
            <!-- end row -->
      </div>
		<!-- end #content -->



		