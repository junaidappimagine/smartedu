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
										<div class="form-group">
											<div class="col-md-3">
												<label>Select a batch:</label>
												<div>
													<select  class="form-control selectpicker"  data-style="btn-white btn-sm" id="disc_batch">
														<option value="">Select a batch:</option>
														<option value="B.Tech">B.Tech</option>
													</select>
												</div>
											</div>
											<div class="col-md-3">
												<label>Select a Fee collection:</label>
												<div>
													<select  class="form-control selectpicker"  data-style="btn-white btn-sm" id="disc_batch">
														<option value="">Select a Fee collection:</option>
														<option value="Term1">Term 1 fee for class1</option>
														<option value="Term2">Term 2 fee collection</option>
														<option value="Fee">Fee str</option>
													</select>
												</div>
											</div>
										</div>
										<hr>
										<div class="form-group">
											<div class="col-md-offset-3">
												<label class="col-md-2 control-label">Select a student:</label>
												<div class="col-md-4">
													<select  class="form-control selectpicker"  data-style="btn-white btn-sm" id="disc_batch">
														<option value="">Select a student:</option>
														<option value="Kate">Kate</option>
													</select>
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
	<script>
		
		$(document).ready(function(){
			$('#all').click(function(){
				console.log($(this).val());
				$('.case').prop('checked',true);
				$('#none').prop('checked',false);
			});
			$('#none').click(function(){
				console.log($(this).val());
				$('.case').prop('checked',false);
			});
			$('.case').click(function(){
				console.log($(this).val());
				$('#none').prop('checked',false);
				
			});
		});
		
	</script>

		