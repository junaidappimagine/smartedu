<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;"></a>Manage Course & Batch</li>
				<li><a href="javascript:;"></a>Manage Batch</li>
				<li class="active">Batch Transfer</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Manage Course & Batch | Manage Batch</h1>
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
                                <!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                            </div>
                            <h4 class="panel-title">Batch Transfer</h4>
                        </div>
                        <div class="panel-body">
							     <div>
									<table width="100%;">
									   <tr>
									   <td style="text-align: center;background-color: #c3d9ff!important;padding:5px">Highlighted students in this batch have unpaid fees!</td>
									   </tr>
								   </table>
								</div><hr>
								<form class="form-horizontal">
									<div class="form-group">
										<label class="col-md-2 control-label">Transferring Batch</label>
										<div class="col-md-3">
											<input type="text" class="form-control input-sm" placeholder="" value="C1-A"/>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Transfer to batch</label>
										<div class="col-md-3">
											<select name="value"  class="form-control input-sm selectpicker" data-style="btn-sm btn-white" id="batch">
												<option>select a batch</option>
												<!--<option value="c1">C1-A</option>-->
												<option value="dip">Diploma in Theatre Semester 6(GPA)</option>
											</select>
										</div>
									</div>
								</form><br>
								
								<div class="row">
									<div class="col-md-offset-2 col-md-7">
										<div class="table-responsive">
											<h5>Uncheck the students not eligible for batch transfer.</h5><br>
											<table class="table table-bordered" id="myTable">
												<thead id="sub">
													<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
														<th width="30%">Admission no.</th>
														<th width="30%">Name</th>
														<th width="30%">All, None</th>
													</tr>
												</thead>
												<tbody>
													<tr id="first_course">
														<td>STD003</td>
														<td><a href="<?php echo base_url('AcademicsC/student_fees?var1=ishan');?>">Ishan</a></td>
														<td><label><input type="checkbox" value="" class="checkbox" checked></label></td>
													</tr>
													<!--<tr  id="second_course">
														<td>STD004</td>
														<td> <a href="<?php echo base_url('AcademicsC/student_fees?var1=jeena');?>">Jeena</a></td>
														<td><label><input type="checkbox" value="" class="checkbox" checked></label></td>
													</tr>-->
												</tbody>
											</table>
										</div>
									</div>
							  </div><br>
								<div class="col-md-offset-4 col-md-3">
									<button type="button" class="btn btn-sm btn-success">Save</button>
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
