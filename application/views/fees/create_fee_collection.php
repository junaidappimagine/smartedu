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
				<form class="form-horizontal" id="saveData">
				    <fieldset>
					<legend>
					<div class="col-sm-10">
						<h1 class="page-header" style="font-size:21px;"><?php if($mode=="add"){ echo 'Create Fee Collection'; }elseif($mode=="edit"){ echo 'Update Fee Collection'; } ?></h1>
					</div>
					</legend>
					<div class="form-group">
						<label class="col-md-2 control-label">Fees Category:</label>
						<div class="col-md-4">
							<select  class="form-control selectpicker"  data-style="btn-white btn-sm" name="FINC_SCH_FEE_CA_ID" id="FINC_SCH_FEE_CA_ID">
								<option value="">select category</option>
								<option value="Term 1 Fee">Term 1 Fee</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Name :</label>
						<div class="col-md-4">
							<input type="text" class="form-control input-sm" placeholder="" id="FINC_SCH_NAME" name="FINC_SCH_NAME" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Fine:</label>
						<div class="col-md-4">
							<select  class="form-control selectpicker"  data-style="btn-white btn-sm" name="FINC_SCH_FI_ID" id="FINC_SCH_FI_ID">
								<option value="">select fine</option>
								<option value="fine 1">fine 1</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-2 control-label">Start Date:</label>
						<div class="col-md-4">
							<span class="input-group">
							<input type="text" class="form-control dateSet input-sm" name="FINC_SCH_START_DT" size="30" id="FINC_SCH_START_DT">
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
							<input type="text" class="form-control dateSet input-sm" name="FINC_SCH_END_DT" size="30" id="FINC_SCH_END_DT">
							<span class="input-group-addon" >
								<span class="glyphicon glyphicon-calendar"></span>
							</span>
							</span>
						</div>
					</div>
					<div class="form-group">        
						<div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
							  <label><input type="checkbox" name="FINC_SCH_ACTIVE_YN" id="FINC_SCH_ACTIVE_YN">Active</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-4 col-md-offset-2">
							
							<button type="submit" class="btn btn-primary btn-sm col-md-3"><?php if($mode=='add') { echo 'Create';} elseif ($mode=='edit') { echo 'Update';}?></button>
							
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
		    $('#saveData').submit(function(e){
			e.preventDefault();
			var url_data="<?php echo base_url('FinanceFeesAPI/feesSchedule');?>";
			var url1="<?php echo base_url('FeesCntrl/create_fee_collection');?>";
			$.ajax({
			    type:'post',
			    url:url_data,
			    data:$('#saveData').serialize(),
			    success:function(res){
				console.log(res);
				window.location.href = url1; 
			    }
			});
			
		    });
		});
		<?php if($mode=='edit') {?>
		    $(document).ready(function(){
			var id="<?php echo $row_id;?>";
			$.ajax({
			    type:'get',
			    url:"<?php echo base_url('FinanceFeesAPI/feesSchedule');?>",
			    data:{FINC_SCH_ID:id},
			    dataType: "json",
			    success:function(res){
				console.log(res[0].FINC_SCH_ID);
				$('#FINC_SCH_FEE_CA_ID').val(res[0].FINC_SCH_FEE_CA_ID);
				$('#FINC_SCH_NAME').val(res[0].FINC_SCH_NAME);
				$('#FINC_SCH_FI_ID').val(res[0].FINC_SCH_FI_ID);
				$('#FINC_SCH_START_DT').val(res[0].FINC_SCH_START_DT);
				$('#FINC_SCH_END_DT').val(res[0].FINC_SCH_END_DT);
				$('#FINC_SCH_ACTIVE_YN').val(res[0].FINC_SCH_ACTIVE_YN);
			    }
			});
		    })
		<?php } ?>
		
	</script>

		