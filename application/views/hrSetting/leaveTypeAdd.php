<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Home</a></li>
		    <li><a href="javascript:;">Form Stuff</a></li>
		    <li class="active">Form Elements</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <?php if($Mode=="Add"){?>
		<h1 class="page-header">Add Leave Types Here...</h1>
	    <?php }else{?>
		<h1 class="page-header">Edit Leave Types Here...</h1>
	    <?php }?>
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
			    <?php if($Mode=="Add"){?>
				 <h4 class="panel-title">Add Leave Types</h4>
			    <?php }else{?>
				 <h4 class="panel-title">Edit Leave Types</h4>
			    <?php }?>
			</div>
			<div class="panel-body">
			    <?php if($Mode=="Add"){?>
				 <legend>Add Leave Types</legend>
			    <?php }else{?>
				 <legend>Edit Leave Types</legend>
			    <?php }?>
				<form class="form-horizontal">
				    <div class="col-md-12">
					<div class="form-group">
					    <label class="col-sm-2 control-label">Leave Name &nbsp; :</label>
					    <div class="col-sm-3">
						<input class="form-control input-sm" type="text" value="<?php if($Mode=="Edit"){ echo $Type ;}?>">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label">Leave Code &nbsp; :</label>
					    <div class="col-sm-3">
						<input class="form-control input-sm" type="text" value="<?php if($Mode=="Edit"){ echo $Code ;}?>">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label">Leave Count &nbsp; :</label>
					    <div class="col-sm-3">
						<input class="form-control input-sm" type="text" value="<?php if($Mode=="Edit"){ echo $Date ;}?>">
					    </div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Leave Balance &nbsp; :</label>
						<div class="col-md-9">
						<!--     <div class="radio">-->
						<!--	<p></p>-->
						<!--	<div class="col-md-12 row" >-->
						<!--	    <p>Mange how to reset employee leave balance</p>-->
						<!--	</div>-->
						<!--	<div class="col-md-3 row">-->
						<!--	    <label class="radio-inline">-->
						<!--		<input name="optionsRadios" value="option1" type="radio">-->
						<!--		Allow leave carry forward-->
						<!--	    </label>-->
						<!--	</div>-->
						<!--	<div class="col-md-3">-->
						<!--	    <label class="radio-inline">-->
						<!--		<input name="optionsRadios" value="option2" type="radio">-->
						<!--		Discard leave balance-->
						<!--	    </label>-->
						<!--	</div>-->
						<!--    </div>-->
	    					    <div class="radio">
							<div class="col-md-12 row">
							<p></p>
							<p>Mange how to reset employee leave balance</p>
							</div>
							<div class="col-md-3 row">
							<label class="radio-inline">
							    <input name="optionsRadios" class="checkVal" value="option1" type="radio">
							    Allow leave carry forward
							</label>
							</div>
							<div class="col-md-3">
							<label class="radio-inline">
							    <input name="optionsRadios" id="" class="checkVal" value="option2" type="radio">
							    Discard leave balance
							</label>
							</div>
						    </div>
			
						    <div class="radio">
							<p></p>
							<div class="col-md-12 row">
							<p></p>
							<p>Minimum number of leave that can be carry forward</p>
							</div>
							<div class="col-md-3 row">
							<label class="radio-inline">
							    <input name="optionsRadios" class="checkVal" value="option1" type="radio">
							    All leave balance
							</label>
							</div>
							<div class="col-md-3">
							    
							<?php if($Mode=="Add"){?>
							<label class="radio-inline">
							    <input name="optionsRadios" class="checkVal" id="specialCount" value="option2" type="radio">
							    Special count
							</label>
							<?php }else{?>
							<label class="radio-inline">
							    <input name="optionsRadios" class="checkVal" checked=""  id="specialCount" value="option2" type="radio">
							    Special count
							</label>
							<?php }?>
							</div>
							<div class="col-md-2">
							    <?php if($Mode=="Add"){?>
								<input type="text" class="form-control input-sm hidden" id="countfiled" name="">
							    <?php }else{?>
								<input type="text" class="form-control input-sm hidden" id="countfiled" name="" value="4">
							    <?php }?>
							
							</div>
						    </div>
						</div>
					    </div>
					    <div class="form-group">
						<label class="col-md-2 control-label">Additional Leaves &nbsp; :</label>
						<div class="col-md-9">
						    <div class="radio">
							<div class="col-md-12 row" >
							    <p>Set how to manage employee additional leaves</p>
							</div>
							<div class="col-md-3 row">
							    <?php if($Mode=="Add"){?>
							    <label class="radio-inline">
								<input name="optionsRadio" value="option1" type="radio">
								Liable for salary deduction(LOP)
							    </label>
							    <?php }else{?>
							    <label class="radio-inline">
								<input name="optionsRadio" value="option1" checked=""  type="radio">
								Liable for salary deduction(LOP)
							    </label>
							    <?php }?>
							</div>
							<div class="col-md-3">
							    <label class="radio-inline">
								<input name="optionsRadio" value="option2" type="radio">
								No salary deduction
							    </label><br>
							</div>
						    </div>
						    </div>
					    </div>
					    <div class="form-group">
						<label class="col-md-2 control-label">Status &nbsp; :</label>
						<div class="col-md-9">
						    <div class="radio">
							<div class="col-md-3 row">
							    <?php if($Mode=="Add"){?>
							    <label class="radio-inline">
								<input name="Active" value="option1"  type="radio">
								Active
							    </label>
							    <?php } else{?>
							     <label class="radio-inline">
								<input name="Active" value="option1" checked="" type="radio">
								Active
							    </label>
							    <?php }?>
							</div>
							<div class="col-md-3">
							    <label class="radio-inline">
								<input name="Active" value="option2" type="radio">
								In active
							    </label><br>
							</div>
						    </div>
						    </div>
					    </div>
					    <p></p>
					    <div class="form-group">
						<p></p>
						<?php if($Mode=="Add"){?>
						&nbsp;&nbsp;<input type="button" class="btn btn-primary btn-sm col-md-offset-3" value="Save">
						<?php }else{?>
						&nbsp;&nbsp;<input type="button" class="btn btn-warning btn-sm col-md-offset-3" value="Update">
						<?php }?>
						<input type="button" class="btn btn-danger btn-sm" onclick="window.history.back();" value="Cancel">
					    </div>
				    </div>
				</form>
				
			</div>
		    <!-- end panel -->
		    </div>
	<!-- end col-12-->
		</div>
	    </div>
	</div>

<script>
    //$("#countfiled").hide();
    $('.checkVal').on("click",function(){
	if($("#specialCount").is(':checked'))
	    $("#countfiled").removeClass('hidden');  // checked
	else
	    $("#countfiled").addClass('hidden');
	});
    if($("#specialCount").is(':checked')){
	$("#countfiled").removeClass('hidden');  // checked
    }
</script>