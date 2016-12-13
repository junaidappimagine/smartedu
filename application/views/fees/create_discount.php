<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Configuration</a></li>
				<li><a href="javascript:;">Fees</a></li>
				<li class="active">discount</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Fees | Discount</h1>
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
                            <h4 class="panel-title">Create Discount</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<form class="form-horizontal">
									<fieldset>
										<?php if($mode=='add'){?>
										<legend>
										<div class="col-sm-10">
											<h1 class="page-header" style="font-size:21px;">Create Discount</h1>
										</div>
										</legend>
										<?php }?>
										<?php if($mode=='edit'){?>
										<legend>
										<div class="col-sm-10">
											<h1 class="page-header" style="font-size:21px;">Update Discount</h1>
										</div>
										</legend>
										<?php }?>
										<div class="form-group">
											<label class="col-md-2 control-label">Discount Type:</label>
											<div class="col-md-4">
												<select  class="form-control selectpicker"  data-style="btn-white btn-sm" id="disc_batch">
													<option value="">select discount type</option>
													<option value="batch" <?php if($mode=='edit') { echo 'selected=selected'; }?> >Batch</option>
													<option value="student category">Studnet category</option>
													<option value="student">Student</option>
												</select>
											</div>
										</div>
										<div class="form_content hidden">
											<div class="form-group">
												<label class="col-md-2 control-label">Name :</label>
												<div class="col-md-4">
													<input type="text" class="form-control input-sm" placeholder="" id="name" value="<?php if($mode=='edit') { echo $result ;}?>"/>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Fees Category:</label>
												<div class="col-md-4">
													<select  class="form-control selectpicker"  data-style="btn-white btn-sm">
														<option value="">select category</option>
														<option value="Term 1 Fee" <?php if($mode=='edit') { echo 'selected=selected'; }?> >Term 1 Fee</option>
													</select>
												</div>
											</div>
											<div class="form-group hidden" id="stu_category">
												<label class="col-md-2 control-label">Student Category :</label>
												<div class="col-md-4">
													<select  class="form-control selectpicker"  data-style="btn-white btn-sm">
														<option value="">select student category</option>
														<option value="Siblings">Siblings</option>
														<option value="Staff Student">Staff Student</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Mode :</label>
												<div class="col-md-4">
													 <label class="radio-inline"> <input type="radio" name="mode" value="percentage" <?php if($mode=='edit') { echo 'checked=checked'; } else if($mode=='add') { echo 'checked=checked' ;}?> >Percentage</label><br>
													 <label class="radio-inline"> <input type="radio" name="mode"  value="amount">Amount</label><br>
												</div>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label">Discount:</label>
												<div class="col-md-4">
													<div class="input-group" id="percentage">
														<span class="input-group-addon"><i>%</i></span>
															<input type="text" class="form-control input-sm" name="" id="" placeholder="0.00" value="<?php if($mode=='edit') { echo $result1 ;}?>">
													</div><br>
													<div class="input-group" id="amount">
														<span class="input-group-addon"><i class="fa fa-inr"></i></span>
															<input type="text" class="form-control input-sm" name="" id="" placeholder="0.00">
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
			 
			 var $readData=$('#disc_batch').val();
			 if($readData=='batch')
			 {
				$('.form_content').removeClass('hidden');
				$('#stu_category').addClass('hidden');
			 }
			 $('#disc_batch').change(function()
			{
				console.log($(this).val());
				if($(this).val()=='batch' || $(this).val()=='student')
				{
				   $('.form_content').removeClass('hidden');
				   $('#stu_category').addClass('hidden');
				}
				else if($(this).val()=='student category')
				{
					$('#stu_category').removeClass('hidden');
					$('.form_content').removeClass('hidden');
				}
				else{
					
					$('.form_content').addClass('hidden');
				}
			});
			$('#amount').hide();
			$('input[type="radio"]').click(function()
            {
				if($(this).attr("value")=="percentage")
				{
					$('#percentage').show();
		            $('#amount').hide();
				}
				else if($(this).attr("value")=="amount")
				{
					$('#percentage').hide();
		            $('#amount').show();
				}
			});
		});
		
	</script>

		