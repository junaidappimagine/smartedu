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
                            <h4 class="panel-title">Schedule Fee Collection</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-md-4 control-label">Select a batch :</label>
											<div class="col-md-6">
												<select id="dropdown1" class="form-control selectpicker"  data-style="btn-white btn-sm">
													<option value="">select a batch</option>
													<option value="B.Tech">B.Tech</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-2 col-md-offset-4"><a href="<?php echo base_url('feesCntrl/create_fee_collection'); ?>" class="btn btn-primary btn-sm" role="button">Create</a></div>
								</div>
								<br>
								<div class="hidden" id="view">
									<h4>List of Fee Collection</h4>
									<div class="table-responsive">
										<table class="table table-bordered">
											<thead>
												<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
													<th>Name</th>
													<th>Start Date</th>
													<th>Due Date</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><a href="<?php echo base_url('feesCntrl/fee_collection_list?var1=Term 1 fee for class1&var2=14 December 2016');?>">Term 1 fee for class1</a></td>
													<td>14 December 2016</td>
													<td>14 December 2016</td>
													<td><a href="<?php echo base_url('feesCntrl/edit_fee_collection?var1=Term 1 fee for class1&var2=14 December 2016');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
													<a href="" role="button" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
												</tr>
												<tr>
													<td><a href="<?php echo base_url('feesCntrl/fee_collection_list?var1=Term 2 fee collection&var2=15 September 20166');?>">Term 2 fee collection</a></td>
													<td>15 September 2016</td>
													<td>15 September 2016</td>
													<td><a  href="<?php echo base_url('feesCntrl/edit_fee_collection?var1=Term 2 fee collection&var2=15 September 2016');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
													<a href="" role="button" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
												</tr>
												<tr>
													<td><a href="<?php echo base_url('feesCntrl/fee_collection_list?var1=Fee str&var2=26 August 2016');?>">Fee str</a></td>
													<td>26 August 2016</td>
													<td>26 August 2016</td>
													<td><a  href="<?php echo base_url('feesCntrl/edit_fee_collection?var1=Fee str&var2=26 August 2016');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
													<a href="" role="button" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
												</tr>
											</tbody>
										</table>
									</div>
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
<script>
	$(document).ready(function(){
		$('#dropdown1').change(function(){
			console.log($(this).val());
			if($(this).val()=='B.Tech')
			{
				$('#view').removeClass('hidden');
			}
			else{
				
				$('#view').addClass('hidden');
			}
		});
	});
</script>
