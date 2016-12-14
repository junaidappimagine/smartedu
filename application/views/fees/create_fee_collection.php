<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Fees</a></li>
				<li><a href="javascript:;">Schedule Fee Collection</a></li>
				<li class="active">Cretae</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Schedule Fee Collection | Cretae</h1>
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
                            <h4 class="panel-title">Create Fee Collection</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<form class="form-horizontal">
									<fieldset>
										<?php if($mode=='add'){?>
										<legend>
										<div class="col-sm-10">
											<h1 class="page-header" style="font-size:21px;">Create Fee Collection</h1>
										</div>
										</legend>
										<?php }?>
										<?php if($mode=='edit'){?>
										<legend>
										<div class="col-sm-10">
											<h1 class="page-header" style="font-size:21px;">Update Fee Collection</h1>
										</div>
										</legend>
										<?php }?>
											<div class="form-group">
												<label class="col-md-2 control-label">Fees Category:</label>
												<div class="col-md-4">
													<select  class="form-control selectpicker"  data-style="btn-white btn-sm">
														<option value="">select category</option>
														<option value="Term 1 Fee" <?php if($mode=='edit') { echo 'selected=selected'; }?> >Term 1 Fee</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Name :</label>
												<div class="col-md-4">
													<input type="text" class="form-control input-sm" placeholder="" id="name" value="<?php if($mode=='edit') { echo $result ;}?>"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Fine:</label>
												<div class="col-md-4">
													<select  class="form-control selectpicker"  data-style="btn-white btn-sm">
														<option value="">select fine</option>
														<option value="fine 1" <?php if($mode=='edit') { echo 'selected=selected'; }?> >fine 1</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Start Date:</label>
												<div class="col-md-4">
													<span class="input-group">
													<input type="text" class="form-control dateSet input-sm"  value="<?php if($mode=='edit') { echo $result1 ;}?>" size="30" id="from_date">
													<span class="input-group-addon" >
														<span class="glyphicon glyphicon-calendar"></span>
													</span>
													</span>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">End Date:</label>
												<div class="col-md-4">
													<span class="input-group">
													<input type="text" class="form-control dateSet input-sm" value="<?php if($mode=='edit') { echo $result1 ;}?>" size="30" id="from_date">
													<span class="input-group-addon" >
														<span class="glyphicon glyphicon-calendar"></span>
													</span>
													</span>
												</div>
											</div>
											<div class="form-group">        
												<div class="col-sm-offset-2 col-sm-10">
													<div class="checkbox">
													  <label><input type="checkbox">Active</label>
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="col-md-4 col-md-offset-2">
													<?php if($mode=='add') {?>
													<button type="button" class="btn btn-primary btn-sm col-md-3">Create</button>
													<?php }?>
													<?php if($mode=='edit') {?>
													<button type="button" class="btn btn-primary btn-sm col-md-3">Update</button>
													<?php }?>
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
		$(document).ready(function()
		{
			$('.dateSet').datepicker({
				format: 'd MM yyyy',
			});
		});
		
	</script>

		