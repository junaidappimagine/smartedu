<style>
	
input
{
    outline: 0 none;
	 border: transparent!important;
	 color: royalblue!important;
}

</style>
<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Fees</a></li>
				<li><a href="javascript:;">Schedule Fee Collection</a></li>
				<li class="active">View</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Schedule Fee Collection | View</h1>
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
                            <h4 class="panel-title"> <?php echo $result; ?></h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<form class="form-horizontal">
									<fieldset>
										<legend>
										<div class="col-sm-10">
											<h1 class="page-header" style="font-size:21px;"> <?php echo $result; ?></h1>
										</div>
										</legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Fee Collection Name :</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-sm" placeholder="" id="name" value=" <?php echo $result; ?> " />
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Fee Category Name :</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-sm" placeholder="" id="code"  value=" <?php { echo "Term 1 Fee "; } ?> " />
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Fine Name :</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-sm" placeholder="" id="code"  value=" <?php { echo "fine"; } ?> " />
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Start Date :</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-sm" placeholder="" id="code"  value=" <?php { echo $result1; } ?> " />
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Due Date :</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-sm" placeholder="" id="code"  value=" <?php { echo $result1; } ?> " />
											</div>
										</div>
									</fieldset>
								</form>
								<br>
								<h4>List of Particulars</h4>
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
													<th>Sl.No</th>
													<th>Particulars</th>
													<th>Student category</th>
													<th>Admission Number</th>
													<th>Amount (Rs.)</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1.</td>
													<td>Tution fees</td>
													<td>-</td>
													<td>-</td>
													<td>40,000</td>
												</tr>
												<tr>
													<td>2.</td>
													<td>Admission fees</td>
													<td>-</td>
													<td>-</td>
													<td>12,0000</td>
												</tr>
										   </tbody>
										</table>
									</div>
								<h4>List of Discount</h4>
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
													<th>Name</th>
													<th>Student Category</th>
													<th>Student Name</th>
													<th>Discount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Discount 1</td>
													<td>-</td>
													<td>-</td>
													<td>15.00(%)</td>
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
			<div>
            <!-- end row -->
      </div>
		<!-- end #content -->
	

		