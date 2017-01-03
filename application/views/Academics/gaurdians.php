<style>
	.left{
		 font-weight: bold;
		 font-size: 15px;
	}
	.right{
		font-size: 14px;
	}
</style>
<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Students</a></li>
				<li><a href="javascript:;">Students Details</a></li>
				<li class="active">Advanced Search</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Students | Advanced Search</h1>
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
                            <h4 class="panel-title"></h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<fieldset>
								    <div class="row">
										<div class="col-md-offset-4 col-md-6" style="text-align:right;">
											<a type="button" href="<?php echo base_url('AcademicsC/student_view');?>" class="btn btn-primary btn-sm">Profile</a>
											<a type="button" href="<?php echo base_url('AcademicsC/add_guardians');?>" class="btn btn-primary btn-sm" id="add_gaurdians">Add Guardian</a>
											<a type="button" href="<?php echo base_url('AcademicsC/configure_sibling');?>"class="btn btn-primary btn-sm">Configure sibling</a>
										</div>
									</div><hr>
									<div>
										<table width="100%;">
										  <tr>
											 <td style="text-align: center;background-color: #c3d9ff;!important;padding:4px" class="left">Student name: <span style="color:#ab0000"><?php $result1; ?></span> Admn no : <span style="color:#ab0000"></span></td>
										  </tr>
									  </table>
									</div>
									<div class="row show_gaurdians">
										<div class="col-md-offset-2">
											<h4 style="color:#ab0000;"><u>Parents/Gaurdian</u></h4>
											<h4><?php $result; ?></h4>
										</div>
									</div><br><br>
										<div class="row show_gaurdians">
											<div class="col-md-offset-2 col-md-8">
												<div class="table-responsive">
													<table class="table table-bordered" width="700px">
															<tbody>
															<tr  style="background-color: #c3d9ff;; border-color: #b6e2ef;">
																<td class="left">Name</td>
																<td class="right"><?php $result; ?></td>
															</tr>
															<tr>
																<td class="left">Relation</td>
																<td class="right">Father</td>
															</tr>
															<tr  style="background-color: #c3d9ff;; border-color: #b6e2ef;">
																<td class="left">Date of Birth</td>
																<td class="right">21 March 2005</td>
															</tr>
															<tr>
																<td class="left">E-mail</td>
																<td class="right"></td>
															</tr>
															<tr  style="background-color: #c3d9ff;; border-color: #b6e2ef;">
																<td class="left">Office Phone 1</td>
																<td class="right"></td>
															</tr>
															<tr>
																<td class="left">Office Phone 2</td>
																<td class="right"></td>
															</tr>
															<tr style="background-color: #c3d9ff;; border-color: #b6e2ef;">
																<td class="left">Mobile Phone No.</td>
																<td class="right"></td>
															</tr>
															<tr>
																<td class="left">Address</td>
																<td class="right"></td>
															</tr>
															<tr  style="background-color: #c3d9ff;; border-color: #b6e2ef;">
																<td class="left">City</td>
																<td class="right"></td>
															</tr>
															<tr>
																<td class="left">State</td>
																<td class="right"></td>
															</tr>
															<tr  style="background-color: #c3d9ff;; border-color: #b6e2ef;">
																<td class="left">Country</td>
																<td class="right">India</td>
															</tr>
															<tr>
																<td class="left">Income</td>
																<td class="right"></td>
															</tr>
															<tr  style="background-color:#c3d9ff;; border-color: #b6e2ef;">
															<td class="left">Occupation</td>
															<td class="right"></td>
														</tr>
														</tbody>
													</table>
												</div>
												<button type="button" class="btn btn-primary btn-sm">Edit</button>
											</div>
										</div><br>
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
	
