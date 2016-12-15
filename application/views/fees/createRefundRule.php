
            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
                            <li><a href="javascript:;">Finance</a></li>
                            <li><a href="javascript:;">Fees</a></li>
                             <li><a href="javascript:;">Fees refund </a></li>
                            <li class="active">Create refund rule </li>
                    </ol>
                    <h1 class="page-header">Fees refund | Create fee refund</h1>
                    <div class="row">
                        <div class="col-md-12">
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                           <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                        </div>
                        <h4 class="panel-title">Create refund rule</h4>
                    </div>
                    <div class="panel-body">
                        <div class="well">
                                <form class="form-horizontal">
                                        <fieldset>
                                                <?php if($mode=='add'){?>
                                                <legend>
                                                <div class="col-sm-10">
                                                        <h1 class="page-header" style="font-size:21px;">Create refund rule</h1>
                                                </div>
                                                </legend>
                                                <?php }?>
                                                <?php if($mode=='edit'){?>
                                                <legend>
                                                <div class="col-sm-10">
                                                        <h1 class="page-header" style="font-size:21px;">Update refund</h1>
                                                </div>
                                                </legend>
                                                <?php }?>
                                                <?php if($mode=='add') {?>
                                                <div class="form-group">
                                                        <label class="col-md-2 control-label">Fee collection*:</label>
                                                        <div class="col-md-3">
                                                            <select id="dropdown1" class="form-control selectpicker"  data-style="btn-white btn-sm">
                                                                    <option value="">Select Fee collection</option>
                                                                    <option value="Term1">Term1 for class1:24/02/2016To</option>
                                                                    <option value="feeStd1">Fee for std_c1-g4:23/03/2016To</option>
                                                                    <option value="Term2">Term2 fee collection:25/03/2016To</option>
                                                                    <option value="str">Fee str:06/04/2016To</option>
                                                            </select>
					                </div>
                                                </div>
                                                 <?php }?>
                                                 <?php if($mode=='edit') {?>
                                                <div class="form-group">
                                                        <label class="col-md-2 control-label">Fee collection*:</label>
                                                        <div class="col-md-3">
                                                            <select id="dropdown1" class="form-control selectpicker"  data-style="btn-white btn-sm">
                                                                    <option value="">Select Fee collection</option>
                                                                    <option selected value="Term1">Term1 for class1:24/02/2016To</option>
                                                                    <option value="feeStd1">Fee for std_c1-g4:23/03/2016To</option>
                                                                    <option value="Term2">Term2 fee collection:25/03/2016To</option>
                                                                    <option value="str">Fee str:06/04/2016To</option>
                                                            </select>
					                </div>
                                                </div>
                                                 <?php }?>
                                                 
                                                <div class="form-group">
                                                        <label class="col-md-2 control-label">Refund Name*:</label>
                                                        <div class="col-md-3">
                                                                <input type="text" class="form-control input-sm" placeholder="" id="code"  value=" <?php if($mode=='edit') { echo "Refund"; } ?> " />
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Refund Validity*:</label>
                                                        <section class="col-sm-3">
                                                            <span class='input-group'>
                                                                <input type='text' id="datePicker" name="dailyDate" class="form-control input-sm input-group datetimepicker defaultdate" value="<?php if($mode=='edit'){echo "24/02/2016";} ?>" />
                                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                                </span>
                                                            </span>                                 					    
                                                        </section>
                                                </div>
                                                <?php if($mode=='add') {?>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Type</label>
                                                    <div class="col-md-7">
                                                        <label class="radio-inline">
                                                            Percentage <input type="radio" name="optradio" id="radio_1" style="margin-left: 9px;">
                                                        </label>
                                                        <label class="radio-inline">
                                                            Amount <input type="radio" name="optradio" id="radio_2" style="margin-left: 9px;">
                                                        </label>
                                                    </div>
                                                </div>
                                                <?php }?>
                                                <?php if($mode=='edit') {?>
                                                 <div class="form-group">
                                                    <label class="col-md-2 control-label">Type</label>
                                                    <div class="col-md-7">
                                                        <label class="radio-inline">
                                                            Percentage <input type="radio" name="optradio" id="radio_1" style="margin-left: 9px;">
                                                        </label>
                                                        <label class="radio-inline">
                                                            Amount <input type="radio" checked name="optradio" id="radio_2" style="margin-left: 9px;">
                                                        </label>
                                                    </div>
                                                </div>
                                                <?php }?>
                                                 <div class="form-group">
                                                        <label class="col-md-2 control-label">Value*:</label>
                                                        <div class="col-md-3">
                                                                <input type="text" class="form-control input-sm" placeholder="" id="code"  value=" <?php if($mode=='edit') { echo "2000.00"; } ?> " />
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <div class="col-md-8 col-md-offset-2">
                                                                <?php if($mode=='add') {?>
                                                                        <button type="button" class="btn btn-primary btn-sm col-md-3">Create</button>
                                                                        <?php }?>
                                                                        <?php if($mode=='edit') {?>
                                                                        <div class="col-md-2">
                                                                            <button type="button" class="btn btn-primary btn-sm col-md-12">Update</button>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <button type="button" class="btn btn-danger btn-sm col-md-12" onclick="window.history.back();">Cancel</button>
                                                                        </div>
                                                                         
                                                                <?php }?>
                                                        </div>
                                                </div>
                                        </fieldset>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        <div>
    </div>
		<!-- end #content -->
	<script>
		
		$(document).ready(function(){
                    
                    $('#datePicker').datepicker({
		    format: 'dd/mm/yyyy'
                    });
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

		