	<?php/* echo "<pre>";print_r($Editdata);exit;*/?>

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
				<form class="form-horizontal" id="form" action="" method="post">
				    <div class="col-md-12">
					<div class="form-group">
					    <label class="col-md-2 control-label">Leave Name &nbsp; :</label>
					    <div class="col-md-3">
						<input type="hidden" class="userid" value="<?php if($Mode=='Edit'){echo $Editdata[0]['EMP_L_ID'];}else{ echo '';}?>">
						<input class="form-control input-sm" name="EMP_L_NAME" id="EMP_L_NAME" type="text" value="<?php if($Mode=='Edit'){echo $Editdata[0]['EMP_L_NAME'];}else{ echo '';}?>">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-2 control-label">Leave Code &nbsp; :</label>
					    <div class="col-md-3">
						<input class="form-control input-sm" name="EMP_L_CODE" id="EMP_L_CODE" type="text" value="<?php if($Mode=='Edit'){echo $Editdata[0]['EMP_L_CODE'];}else{ echo '';}?>">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-2 control-label">Leave Count &nbsp; :</label>
					    <div class="col-md-3">
						<input class="form-control input-sm" name="EMP_L_COUNT" id="EMP_L_COUNT" type="text"  value="<?php if($Mode=='Edit'){echo $Editdata[0]['EMP_L_COUNT'];}else{ echo '';}?>">
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-md-2 control-label">Valid From &nbsp; :</label>
					    <div class="col-md-3">
						<span class="input-group">
						<input class="form-control dateSet input-sm" name="EMP_L_VALID_FROM" size="30" id="EMP_L_VALID_FROM" type="text" value="<?php if($Mode=='Edit'){echo $Editdata[0]['EMP_L_VALID_FROM'];}else{ echo '';}?>">
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
							    <input name="EMP_L_ALLOW_LEAVE" id="allow" class="checkallow" value="Y" type="radio" <?php if($Mode=='Edit'){if ($Editdata[0]['EMP_L_ALLOW_LEAVE_BAL']=="Y")echo 'checked=""';}?> >
							    Allow leave carry forward
							</label>
							</div>
							<div class="col-md-3">
							<label class="radio-inline">
							    <input name="EMP_L_ALLOW_LEAVE" id="discard"  class="checkallow"  value="N" type="radio" <?php if($Mode=='Edit'){if ($Editdata[0]['EMP_L_ALLOW_LEAVE_BAL']=="N")echo 'checked=""';}?>>
							    Discard leave balance
							    <input type="hidden" name="EMP_L_ALLOW_LEAVE_BAL" id="EMP_L_ALLOW_LEAVE_BAL">
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
							    <input name="A_L_BAL_SPE" class="checkVal" id="allowC" value="allow" <?php if($Mode=='Edit'){if ($Editdata[0]['EMP_L_ALLOW_BAL_COUNT']=="Y")echo 'checked=""';}?> type="radio">
							    All leave balance
							</label>
							</div>
							<div class="col-md-3">
							<label class="radio-inline">
							    <input name="A_L_BAL_SPE" class="checkVal" id="speicalC"  value="speical" type="radio" <?php if($Mode=='Edit'){if ($Editdata[0]['EMP_L_ALLOW_BAL_COUNT']!="Y")echo 'checked=""';}?>>
							    Special count
							    <input type="hidden" name="EMP_L_ALLOW_BAL_COUNT" id="EMP_L_ALLOW_BAL_COUNT" value="" >
							</label>
							</div>
							<div class="col-md-2">
							    <input type="text" name="" class="form-control input-sm hidden" id="countfiled" name="" value='<?php if($Mode=='Edit'){echo $Editdata[0]['EMP_L_ALLOW_BAL_COUNT'];}?>'>
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
								<input name="EMP_L_ADDI_LEAVE_YN" class="cleardata" value="Y" type="radio" <?php if($Mode=='Edit'){if ($Editdata[0]['EMP_L_ADDI_LEAVE_DED_YN']=="Y")echo 'checked=""';}?>>
								Liable for salary deduction(LOP)
							    </label>
							</div>
							<div class="col-md-3">
							    <label class="radio-inline">
								<input name="EMP_L_ADDI_LEAVE_YN" class="cleardata"  value="N" type="radio" <?php if($Mode=='Edit'){if ($Editdata[0]['EMP_L_ADDI_LEAVE_DED_YN']=="N")echo 'checked=""';}?>>
								No salary deduction
							    </label><br>
							    <input name="EMP_L_ADDI_LEAVE_DED_YN"  id="EMP_L_ADDI_LEAVE_DED_YN"  type="hidden">
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
								<input name="EMP_STATUS" class="cleardata" value="Y" <?php if($Mode=='Edit'){if ($Editdata[0]['EMP_L_STATUS']=="Y")echo 'checked=""';}?> type="radio">
								Active
							    </label>
							</div>
							<div class="col-md-3">
							    <label class="radio-inline">
								<input name="EMP_STATUS" class="cleardata" value="N" <?php if($Mode=='Edit'){if ($Editdata[0]['EMP_L_STATUS']=="N")echo 'checked=""';}?> type="radio">
								In active
								<input type="hidden" name="EMP_L_STATUS" id="EMP_L_STATUS">
							    </label><br>
							</div>
						    </div>
						    </div>
					    </div>
					    <p></p>
					    <div class="form-group">
						<p></p>
						<?php if($Mode=="Edit"){?>
						&nbsp;&nbsp;<input type="button" class="btn btn-warning btn-sm col-md-offset-3" name="update" id="update" value='update'>
						<?php }else{?>
						&nbsp;&nbsp;<input type="button" class="btn btn-primary btn-sm col-md-offset-3" name="insert" id="save" value='save'>						
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
    
    
    if($('#allow').is(':checked')){
    $('#allowdive').removeClass('hidden');
	if($('#speicalC').is(':checked')){
	$('#countfiled').removeClass('hidden');
    }
    }
    $('.form-horizontal input').on('change', function() {
	if($('#allow').is(':checked')){
    $('#allowdive').removeClass('hidden');
	if($('#speicalC').is(':checked')){
	$('#countfiled').removeClass('hidden');
    }
    }
    })
    
    $(document).ready(function(){
	
    $('.dateSet').datepicker({
	format: 'd MM yyyy',
    });
    });
    //$("#countfiled").hide();
    //checkbox and radio button//
    //Leave Balance//
    
    $('.form-horizontal input').on('change', function() {
    var valu=$('input[name="EMP_L_ALLOW_LEAVE"]:checked', '.form-horizontal').val();
    //console.log(valu);
    $('input[name="EMP_L_ALLOW_LEAVE_BAL"]').val(valu);
    var check=$('#EMP_L_ALLOW_LEAVE_BAL').val();
    if (check=="Y") {
	$('#allowdive').removeClass('hidden');
    }else{
	$('#allowdive').addClass('hidden');
    }
    });
    //Leave count carry//
    $('.form-horizontal input').on('change', function() {
    var datas=$('input[name="A_L_BAL_SPE"]:checked', '.form-horizontal').val();
    console.log(datas,'test');
    if (datas=="speical") {
       $('#countfiled').removeClass('hidden');
       $('#countfiled').on('keyup',function(){
       var count=$('#countfiled').val();
       $('#EMP_L_ALLOW_BAL_COUNT').val(count);
       console.log($('#EMP_L_ALLOW_BAL_COUNT').val())
       });
    }else if (datas=="allow") {
	var count='Y';
	$('#EMP_L_ALLOW_BAL_COUNT').val(count);
	$('#countfiled').addClass('hidden');
    }
    });
    //additional//
    $('.form-horizontal input').on('change', function() {
    var valu=$('input[name="EMP_L_ADDI_LEAVE_YN"]:checked', '.form-horizontal').val();
    //console.log(valu);
    $('input[name="EMP_L_ADDI_LEAVE_DED_YN"]').val(valu);
    console.log($('input[name="EMP_L_ADDI_LEAVE_DED_YN"]').val(valu));
    });
    //staus//    
    $('.form-horizontal input').on('change', function() {
    var valu=$('input[name="EMP_STATUS"]:checked', '.form-horizontal').val();
    //console.log(valu);
    $('input[name="EMP_L_STATUS"]').val(valu);
    });
    //insert//
    //$(document).on('submit','form.remember',function(){
    $('#save').on('click',function(){
    
	var EMP_L_NAME=$('#EMP_L_NAME').val();
	var EMP_L_CODE=$('#EMP_L_CODE').val();
	var EMP_L_COUNT=$('#EMP_L_COUNT').val();
	var EMP_L_VALID_FROM=$('#EMP_L_VALID_FROM').val();
	var EMP_L_ALLOW_LEAVE_BAL=$('#EMP_L_ALLOW_LEAVE_BAL').val();
	var EMP_L_ALLOW_BAL_COUNT=$('#EMP_L_ALLOW_BAL_COUNT').val();
	var EMP_L_ADDI_LEAVE_DED_YN=$('#EMP_L_ADDI_LEAVE_DED_YN').val();
	var EMP_L_STATUS=$('#EMP_L_STATUS').val();    
	//alert();
	$.ajax({
	type:"post",
	url:"<?php echo base_url('HrconfigCtrl/employeeLeaveType');?>",
	data:{EMP_L_NAME:EMP_L_NAME,EMP_L_CODE:EMP_L_CODE,EMP_L_COUNT:EMP_L_COUNT,EMP_L_VALID_FROM:EMP_L_VALID_FROM,EMP_L_ALLOW_LEAVE_BAL:EMP_L_ALLOW_LEAVE_BAL,EMP_L_ALLOW_BAL_COUNT:EMP_L_ALLOW_BAL_COUNT,EMP_L_ADDI_LEAVE_DED_YN:EMP_L_ADDI_LEAVE_DED_YN,EMP_L_STATUS:EMP_L_STATUS},
	success:function(result){
	    window.location.href="<?php echo base_url('HrSettingsC/leave_Types');?>";
	}
	});
    });
    //});
    //update//
    $('#update').on('click',function(){
	var EMP_L_ID=$('.userid').val();
	//console.log(EMP_L_ID);
	var EMP_L_NAME=$('#EMP_L_NAME').val();
	var EMP_L_CODE=$('#EMP_L_CODE').val();
	var EMP_L_COUNT=$('#EMP_L_COUNT').val();
	var EMP_L_VALID_FROM=$('#EMP_L_VALID_FROM').val();
	var EMP_L_ALLOW_LEAVE_BAL=$('#EMP_L_ALLOW_LEAVE_BAL').val();
	var EMP_L_ALLOW_BAL_COUNT=$('#EMP_L_ALLOW_BAL_COUNT').val();
	var EMP_L_ADDI_LEAVE_DED_YN=$('#EMP_L_ADDI_LEAVE_DED_YN').val();
	var EMP_L_STATUS=$('#EMP_L_STATUS').val();
	$.ajax({
	type:"post",
	url:"<?php echo base_url('HrconfigCtrl/employeeLeaveType');?>",
	data:{EMP_L_ID:EMP_L_ID,EMP_L_NAME:EMP_L_NAME,EMP_L_CODE:EMP_L_CODE,EMP_L_COUNT:EMP_L_COUNT,EMP_L_VALID_FROM:EMP_L_VALID_FROM,EMP_L_ALLOW_LEAVE_BAL:EMP_L_ALLOW_LEAVE_BAL,EMP_L_ALLOW_BAL_COUNT:EMP_L_ALLOW_BAL_COUNT,EMP_L_ADDI_LEAVE_DED_YN:EMP_L_ADDI_LEAVE_DED_YN,EMP_L_STATUS:EMP_L_STATUS},
	success:function(result){
	    window.location.href="<?php echo base_url('HrSettingsC/leave_Types');?>";
	}
	})
    });    
</script>