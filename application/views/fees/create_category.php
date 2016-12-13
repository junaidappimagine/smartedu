<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Configuration</a></li>
				<li><a href="javascript:;">Fees</a></li>
				<li class="active">Category</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Fees | Category</h1>
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
                            <h4 class="panel-title">Create Category</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<form class="form-horizontal">
									<fieldset>
										<?php if($mode=='add'){?>
										<legend>
										<div class="col-sm-10">
											<h1 class="page-header" style="font-size:21px;">Create Category</h1>
										</div>
										</legend>
										<?php }?>
										<?php if($mode=='edit'){?>
										<legend>
										<div class="col-sm-10">
											<h1 class="page-header" style="font-size:21px;">Update Category</h1>
										</div>
										</legend>
										<?php }?>
										<div class="form-group">
											<label class="col-md-2 control-label">Name :</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-sm" placeholder="" id="name" value=" <?php if($mode=='edit') { echo $result; } ?> " />
											</div>
			
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Description :</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-sm" placeholder="" id="code"  value=" <?php if($mode=='edit') { echo "term"; } ?> " />
											</div>
										</div>
										<!--<div class="form-group">
											<div class="col-md-4 col-md-offset-2">
												Select : <a href="#"  onclick="show();">All</a> <a href="#"  onclick="show();">None</a>
											</div>
										</div>-->
										<div class="form-group">
											<label class="col-md-2 control-label">Select a batch :</label>
											<!--<div class="col-md-2" style="text-align:center">-->
												<!--<h6>Select : <a onclick="show();">All</a> &nbsp;<a  onclick="none();">None</a> <br></h6></div>-->
												
											<div class="col-md-4 checkbox">
												 <label> <input type="checkbox" id="all" class="case">checked All</label>&nbsp; <label> <input type="checkbox" id="none">none</label><br>
												<label> <input type="checkbox"  class="case" value="" <?php if($mode=='edit') { echo 'checked=checked'; } ?> >B.Tech</label><br>
												 <label> <input type="checkbox" class="case">M.Tech</label>
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

		