<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Fees</a></li>
				<li><a href="javascript:;">Configuration</a></li>
				<li class="active">particular</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Configuration | Particular</h1>
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
                            <h4 class="panel-title">Fees Particular List</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<h4>Select a Category</h4>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-md-4 control-label"></label>
											<div class="col-md-6">
												<select id="dropdown1" class="form-control selectpicker"  data-style="btn-white btn-sm">
													<option value="">select a Category</option>
													<option value="Term">Term 1 Fee</option>
												</select>
											</div>
										</div>
									</div>
									<div class="col-md-2 col-md-offset-4"><a href="<?php echo base_url('feesCntrl/create_particular'); ?>" class="btn btn-primary btn-sm" role="button">Create Particular</a></div>
								</div>
								<br>
								<div class="hidden" id="view">
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
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1.</td>
													<td>Tution fees</td>
													<td>-</td>
													<td>-</td>
													<td>40,000</td>
													<td><a  href="<?php echo base_url('feesCntrl/edit_particular?var1=Tution fees&var2=40,000');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
													<a href="" role="button" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
												</tr>
												<tr>
													<td>2.</td>
													<td>Admission fees</td>
													<td>-</td>
													<td>-</td>
													<td>12,0000</td>
													<td><a  href="<?php echo base_url('feesCntrl/edit_particular?var1=Admission fees');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
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
			if($(this).val()=='Term')
			{
				$('#view').removeClass('hidden');
			}
			else
			{
				$('#view').addClass('hidden');
			}
		});
	});
</script>
