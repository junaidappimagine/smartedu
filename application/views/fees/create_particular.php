<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Configuration</a></li>
				<li><a href="javascript:;">Fees</a></li>
				<li class="active">particular</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Fees | particular</h1>
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
                            <h4 class="panel-title">Create particular</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<form class="form-horizontal">
									<fieldset>
										<?php if($mode=='add'){?>
										<legend>
										<div class="col-sm-10">
											<h1 class="page-header" style="font-size:21px;">Create particular</h1>
										</div>
										</legend>
										<?php }?>
										<?php if($mode=='edit'){?>
										<legend>
										<div class="col-sm-10">
											<h1 class="page-header" style="font-size:21px;">Update particular</h1>
										</div>
										</legend>
										<?php }?>
										<div class="row">
											<div class="col-md-6">
												<div class="row">
													<div class="form-group">
														<label class="col-md-4 control-label">Name :</label>
														<div class="col-md-8">
															<input type="text" class="form-control input-sm" placeholder="" id="name" value=" <?php if($mode=='edit') { echo $result; } ?> " />
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label">Description :</label>
														<div class="col-md-8">
															<input type="text" class="form-control input-sm" placeholder="" id="code"  value=" <?php if($mode=='edit') { echo ""; } ?> " />
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label">Create Using :</label>
														<div class="col-md-8 radio">
															 <label> <input type="radio" name="create_type" value="all" <?php if($mode=='edit') { echo 'checked=checked'; } else if($mode=='add') { echo 'checked=checked' ;}?> >All</label><br>
															 <label> <input type="radio" name="create_type"  value="admission">Admission no.</label><br>
															 <label> <input type="radio" name="create_type" value="category" >Student Category</label>
														</div>
													</div>
													<div class="form-group" id="adm_num">
														<label class="col-md-4 control-label">Admission number :</label>
														<div class="col-md-8">
															<input type="text" class="form-control input-sm" placeholder="" id="code"  value=" <?php if($mode=='edit') { echo $result2; } ?> " />
														</div>
													</div>
													<div class="form-group" id="stu_category">
														<label class="col-md-4 control-label">Student Category :</label>
														<div class="col-md-8">
															<select  class="form-control selectpicker"  data-style="btn-white btn-sm">
																<option value="">select category</option>
																<option value="Siblings">Siblings</option>
																<option value="Staff Student">Staff Student</option>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-4 control-label">Amount :</label>
														<div class="col-md-8">
															<input type="text" class="form-control input-sm" placeholder="" id="code"  value=" <?php if($mode=='edit') { echo $result2; } ?> " />
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6">
											<div class="row">
												<div class="form-group">
													<label class="col-md-4 control-label">Select Category :</label>
													<div class="col-md-8">
														<select id="select_category" class="form-control selectpicker"  data-style="btn-white btn-sm" >
															<option value="">select category</option>
															<option value="Term 1 fee" <?php if($mode=='edit') { echo 'selected=selected'; }?> >Term 1 fee </option>
														</select>
													</div>
												</div>
												<?php if($mode=='add') {  ?>
												<div class="form-group" id="batch">
													<label class="col-md-4 control-label">Select a batch :</label>
													<div class="col-md-8 checkbox">
														<label> <input type="checkbox" id="all" class="case">checked All</label>&nbsp; <label> <input type="checkbox" id="none">none</label><br>
													    <label> <input type="checkbox"  class="case" value="" >B.Tech</label><br>
														<label> <input type="checkbox" class="case">M.Tech</label>
													</div>
											    </div>
												<?php } ?>
												<?php if($mode=='edit') {  ?>
												<div class="form-group" id="batch">
													<label class="col-md-4 control-label">Select a batch :</label>
													<div class="col-md-8 checkbox">
														<label> <input type="checkbox" id="all" class="case">checked All</label>&nbsp; <label> <input type="checkbox" id="none">none</label><br>
													    <label> <input type="checkbox"  class="case" value="" >B.Tech</label><br>
													</div>
											    </div>
												<?php } ?>
											</div>
										 </div>
										</div>
										<div class="row">
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
		$('#adm_num').hide();
		$('#stu_category').hide();
		$('#batch').hide();
		$(document).ready(function(){
			
			var readData=$('#select_category').val();
			if(readData=='Term 1 fee')
			{
				$('#batch').show();
			}
			
			$('#select_category').change(function(){
				$('#batch').show();
			});
			
			$('input[type="radio"]').click(function(){
				if($(this).attr("value")=="admission")
				{
					$('#adm_num').show();
		            $('#stu_category').hide();
				}
				else if($(this).attr("value")=="category")
				{
					$('#adm_num').hide();
		            $('#stu_category').show();
				}
				if($(this).attr("value")=="all")
				{
					$('#adm_num').hide();
		            $('#stu_category').hide();
				}
			});
		});
	</script>

		