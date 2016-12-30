<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">HR</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Leave Types</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    
		<h1 class="page-header"> <?php if($Mode=="Add"){echo "Add Leave Types Here...";}else {echo "Edit Leave Types Here...";}?></h1>
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
				 <h4 class="panel-title"><?php if($Mode=="Add"){echo "Add Leave Types";}else {echo "Edit Leave Types...";}?></h4>
			</div>
			<div class="panel-body">
				<legend><?php if($Mode=="Add"){echo "Add Leave Types";}else {echo "Edit Leave Types";}?></legend>
				<form class="form-horizontal" action="" method="post">
				    <div class="col-md-12">
					<div class="form-group">
					    <label class="col-md-2 control-label">Leave Name &nbsp; :</label>
					    <div class="col-md-3">
						<input class="form-control input-sm" name="EMP_L_NAME" type="text" value="<?php if($Mode=="Edit"){ echo $Type ;}?>">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-2 control-label">Leave Code &nbsp; :</label>
					    <div class="col-md-3">
						<input class="form-control input-sm" name="EMP_L_CODE" type="text" value="<?php if($Mode=="Edit"){ echo $Code ;}?>">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-2 control-label">Leave Count &nbsp; :</label>
					    <div class="col-md-3">
						<input class="form-control input-sm" name="EMP_L_COUNT" type="text"  value="<?php if($Mode=="Edit"){ echo $Date ;}?>">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-2 control-label">Valid From &nbsp; :</label>
					    <div class="col-md-3">
						<span class="input-group">
						<input class="form-control dateSet input-sm" name="EMP_L_VALID_FROM" size="30" id="from_date" type="text">
						<span class="input-group-addon">
						    <span class="glyphicon glyphicon-calendar"></span>
						</span>
					    </div>
					</div>

					<div class="form-group">
						<label class="col-md-2 control-label">Leave Balance &nbsp; :</label>
						<div class="col-md-9">
	    					    <div class="radio">
							<div class="col-md-12 row">
							<p></p>
							<p>Mange how to reset employee leave balance</p>
							</div>
							<div class="col-md-3 row">
							<label class="radio-inline">
							    <input name="EMP_L_ALLOW_LEAVE_BAL" id="checkval" class="checkallow" value="option1" type="radio">
							    Allow leave carry forward
							</label>
							</div>
							<div class="col-md-3">
							<label class="radio-inline">
							    <input name="EMP_L_ALLOW_LEAVE_BAL" id="" checked class="checkallow"  value="option2" type="radio">
							    Discard leave balance
							</label>
							</div>
						    </div>
			
						    <div class="radio hidden" id="allowdive">
							<div class="col-md-12 row">
							<p></p>
							<p >Minimum number of leave that can be carry forward</p>
							</div>
							<div class="col-md-3 row">
							<label class="radio-inline">
							    <input name="EMP_L_ALLOW_BAL_COUNT" class="checkVal" value="option1" type="radio">
							    All leave balance
							</label>
							</div>
							<div class="col-md-3">
							<label class="radio-inline">
							    <input name="EMP_L_ALLOW_BAL_COUNT" class="checkVal" <?php if($Mode=="Add"){echo "";}else{echo "checked='checked'";}?> id="specialCount" value="option2" type="radio">
							    Special count
							</label>
							</div>
							<div class="col-md-2">
							    <input type="text" name="EMP_L_COUNT_1" class="form-control input-sm hidden" id="countfiled" name="" value='<?php if($Mode=="Add"){echo "";}else{echo "4";}?>'>
							</div>
						    </div>
						</div>
					    </div>
					    <div class="form-group" id=''>
						<label class="col-md-2 control-label">Additional Leaves &nbsp; :</label>
						<div class="col-md-9">
						    <div class="radio">
							<div class="col-md-12 row" >
							    <p>Set how to manage employee additional leaves</p>
							</div>
							<div class="col-md-3 row">
							    <label class="radio-inline">
								<input name="EMP_L_ADDI_LEAVE_DED_YN" <?php if($Mode=="Add"){echo "";}else{echo "checked='checked'";}?> value="option1" type="radio">
								Liable for salary deduction(LOP)
							    </label>
							</div>
							<div class="col-md-3">
							    <label class="radio-inline">
								<input name="EMP_L_ADDI_LEAVE_DED_YN" value="option2" type="radio">
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
							    <label class="radio-inline">
								<input name="EMP_L_STATUS" value="option1" <?php if($Mode=="Add"){echo "";}else{echo "checked='checked'";}?>  type="radio">
								Active
							    </label>
							</div>
							<div class="col-md-3">
							    <label class="radio-inline">
								<input name="EMP_L_STATUS" value="option2" type="radio">
								In active
							    </label><br>
							</div>
						    </div>
						    </div>
					    </div>
					    <p></p>
					    <div class="form-group">
						<p></p>
						&nbsp;&nbsp;<input type="submit" class="btn btn-primary btn-sm col-md-offset-3" name="insert" value='<?php if($Mode=="Add"){echo "Save";}else{echo "Update";}?>'>
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
	<?php if (isset($_POST["insert"])) {	    
	    echo "<pre>";
	    print_r($_POST);exit;
	    
	    }?>

<script>
    $(document).ready(function(){
    $('.dateSet').datepicker({
	format: 'd MM yyyy',
    });
    });
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
	
	if($("#checkval").is(':checked')){
	    $("#allowdive").removeClass('hidden');  // checked
	}
	$('.checkallow').on("click",function(){
	    if($("#checkval").is(':checked'))
	     //console.log($(this).is(':checked'));
		$("#allowdive").removeClass('hidden');
	     else
	    $("#allowdive").addClass('hidden');
	})
</script>