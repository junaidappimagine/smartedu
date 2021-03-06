<style>
	hr { 
    display: block;
    /*margin-top: 0.5em;
    margin-bottom: 0.5em;*/
    margin-left: 40px;
    margin-right: 530px;
    border-style:inset;
    border-width: 1px;
} 
</style>

<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Configuration</a></li>
				<li><a href="javascript:;">Fees</a></li>
				<li class="active">Fine</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Fees | Fine</h1>
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
                            <h4 class="panel-title">Create Fine</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<form class="form-horizontal">
									<fieldset>
										<?php if($mode=='add'){?>
										<legend>
										<div class="col-sm-10">
											<h1 class="page-header" style="font-size:21px;">Create Fine</h1>
										</div>
										</legend>
										<?php }?>
										<?php if($mode=='edit'){?>
										<legend>
										<div class="col-sm-10">
											<h1 class="page-header" style="font-size:21px;">Update Fine</h1>
										</div>
										</legend>
										<?php }?>
										<div class="form_content">
											<div class="form-group ">
												<label class="col-md-2 control-label">Name :</label>
												<div class="col-md-3">
													<input type="text" class="form-control input-sm" placeholder="" id="name" value="<?php if($mode=='edit') { echo $result ;}?>"/>
												</div>
											</div>
											<div class="adding">
												<hr>
												<div class="form-group">
													<label class="col-md-2 control-label">Days after due date:</label>
													<div class="col-md-3">
														<input type="text" class="form-control input-sm" placeholder="" id="" value="<?php if($mode=='edit') { echo $result1 ;}?>"/>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Fine amount :</label>
													<div class="col-md-3">
														<input type="text" class="form-control input-sm" placeholder="0.00" id="" value="<?php if($mode=='edit') { echo $result2;}?>"/>
													</div>
												</div>
												<div class="form-group" >
													<label class="col-md-2 control-label">Mode :</label>
													<div class="col-md-4">
														 <label class="radio-inline"> <input type="radio" name="mode[0]" value="percentage" <?php if($mode=='edit') { echo 'checked=checked'; } else if($mode=='add') { echo 'checked=checked' ;}?> >Percentage</label>
														 <label class="radio-inline"> <input type="radio" name="mode[0]"  value="amount">Amount</label><br>
													</div>
												</div>
												<hr>
											</div>
											 <div class="hidden" id="template">
												<hr id="reference">
												<div class="form-group">
													<label class="col-md-2 control-label">Days after due date:</label>
													<div class="col-md-3">
														<input type="text" class="form-control input-sm" placeholder="" id="" value="<?php if($mode=='edit') { echo $result1 ;}?>"/>
													</div>
													<div class="col-md-1">
														<a  class="cancel">[X]</a>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Fine amount :</label>
													<div class="col-md-3">
														<input type="text" class="form-control input-sm" placeholder="0.00" id="" value="<?php if($mode=='edit') { echo $result2;}?>"/>
													</div>
												</div>
												<div class="form-group" >
													<label class="col-md-2 control-label">Mode :</label>
													<div class="col-md-4">
														 <label class="radio-inline"> <input type="radio" name="mode[1]" value="percentage" <?php if($mode=='edit') { echo 'checked=checked'; } else if($mode=='add') { echo 'checked=checked' ;}?> >Percentage</label>
														 <label class="radio-inline"> <input type="radio" name="mode[1]"  value="amount">Amount</label><br>
													</div>
												</div>
												<hr>
											</div>
											<div class="form-group">
												<label class="col-md-2 control-label"><a id="add">Add fine slab</a></label>
												<div class="col-md-4">
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
		$('#add').click(function(){
			//alert('kjl');
			var newIndex=0;
			var newEle= $('#template').clone(true).insertBefore('#template').addClass('clonediv').removeClass('hidden');
			$(newEle).find('input[type="radio"]').prop('name', 'mode['+newIndex+']');
			//$(newEle).attr('name', 'mode' + modeIndex);
			console.log(newEle);
			$(newEle).find("hr#reference").remove();
		});
		$('.cancel').click(function(){
			console.log($(this).val());
			var ele=$(this).parents('.clonediv').remove();
			console.log(ele);
		});
		
		
	});
	</script>

		