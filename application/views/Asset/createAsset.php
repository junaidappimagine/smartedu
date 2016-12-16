
            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
                            <li><a href="javascript:;">Finance</a></li>
                            <li><a href="javascript:;">Asset Liability Management </a></li>
                             <li><a href="javascript:;">Asset</a></li>
                    </ol>
                    <h1 class="page-header">Asset Liability Management | Assets</h1>
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
                        <?php if($mode=='add'){?>
                            <h4 class="panel-title">Create Assets View</h4>
                        <?php }?>
                        <?php if($mode=='edit'){?>
                            <h4 class="panel-title">Update Assets View</h4>
                        <?php }?>
                    </div>
                    <div class="panel-body">
                        <div class="well">
                                <form class="form-horizontal">
                                        <fieldset>
                                                <?php if($mode=='add'){?>
                                                <legend>
                                                <div class="col-sm-10">
                                                        <h1 class="page-header" style="font-size:21px;">Create Asset</h1>
                                                </div>
                                                </legend>
                                                <?php }?>
                                                <?php if($mode=='edit'){?>
                                                <legend>
                                                <div class="col-sm-10">
                                                        <h1 class="page-header" style="font-size:21px;">Update Asset</h1>
                                                </div>
                                                </legend>
                                                <?php }?>
                                                <div class="form-group">
                                                        <label class="col-md-2 control-label">Title :</label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm" placeholder="" id="code"  value=" <?php if($mode=='edit') { echo "Asset"; } ?> " />
					                </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-md-2 control-label">Description :</label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm" placeholder="" id="code"  value=" <?php if($mode=='edit') { echo ""; } ?> " />
					                </div>
                                                </div>
                                                <div class="form-group">
                                                        <label class="col-md-2 control-label">Amount :</label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm" placeholder="" id="code"  value=" <?php if($mode=='edit') { echo "5000.00"; } ?> " />
					                </div>
                                                </div>
                                                <div class="form-group">
                                                        <!--<div class="col-md-8 col-md-offset-2">-->
                                                                <?php if($mode=='add') {?>
                                                                 <div class="col-md-8 col-md-offset-3">
                                                                    <button type="button" class="btn btn-primary btn-sm col-md-1 ccol-md-offset-2">Create</button>
                                                                 </div>
                                                                        
                                                                        <?php }?>
                                                                        <?php if($mode=='edit') {?>
                                                                        <div class="col-md-8 col-md-offset-2">
                                                                            <div class="col-md-2">
                                                                                <button type="button" class="btn btn-primary btn-sm">Update</button>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <button type="button" class="btn btn-danger btn-sm " onclick="window.history.back();">Cancel</button>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                         
                                                                <?php }?>
                                                       
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

		