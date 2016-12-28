<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Fees</a></li>
				<li><a href="javascript:;">Configuration</a></li>
				<li class="active">Fine</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Configuration | Fine</h1>
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
                            <h4 class="panel-title">Fine List</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<div class="row">
									<div class="col-md-2 col-md-offset-10" style="text-align: right;"><a href="<?php echo base_url('FeesCntrl/create_fine'); ?>" class="btn btn-primary btn-sm" role="button">Create Fine</a></div>
								</div>
							    <h4>List of Fine</h4>
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
													<th>Name</th>
													<th>Days after due date</th>
													<th>Fine amount</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>fine 1</td>
													<td>1</td>
													<td>150(%)</td>
													<td><a  href="<?php echo base_url('FeesCntrl/edit_fine?var1=fine 1&var2=1&var3=150');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
													<a href="" role="button" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
												</tr>
											</tbody>
										</table>
									</div>
								
							</div>
                        <!--end well-->
						</div>
                    <!-- end panel -->
					</div>
                <!-- end col-12-->
				<div>
            <!-- end row -->
      </div>
		<!-- end #content -->

