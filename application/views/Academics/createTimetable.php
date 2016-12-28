	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Create Timetable</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">Academics | Configurations</h1>
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
			    </div>
			    <h4 class="panel-title">Create Timetable</h4>
			</div>
			<div class="panel-body">
			  <legend>Create Timetable</legend>
			    <div class="row">
<!--				<div class="row">
				    <div class="col-md-6"></div>
				    <div class="col-md-6">
					<div class="row">
					    <div class="col-md-9">
						<a href="<?php echo base_url('AcademicsC/manageBatches')?>" style="float: right" class="btn btn-info btn-sm">Manage Batches</a>
					    </div>
					    <div class="col-md-3">
						<a href="" style="float: right" class="btn btn-info btn-sm">Manage Allocation</a>	
					    </div>
					</div>
				 </div>
				</div>				 
-->				<form class="form-horizontal">
				    <div class="col-md-8"></div>
				    <div class="col-md-2">
				    
				    </div>
				    <div class="col-md-2">
				   
				    </div>
				    <div class="form-group">
					<div class="col-md-2">
					<label class="control-label input-sm">Start Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b></label>
					</div>
					<div class="col-md-3">
					    <span class="input-group">
						<input type="text" class="form-control dateSet input-sm" size="30" id="from_date" value="<?php if($Mode=="Edit"){echo "14 December 2016";}else{ echo "";}?>">
						<span class="input-group-addon" >
						    <span class="glyphicon glyphicon-calendar"></span>
						</span>
					    </span>
					</div>
				    </div>
				    <div class="form-group">
					<div class="col-md-2">
					<label class="control-label input-sm">End Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b></label>
					</div>
					<div class="col-md-3">
					    <span class="input-group">
						<input type="text" class="form-control dateSet input-sm" size="30" id="from_date" value="<?php if($Mode=="Edit"){echo "14 December 2017";}else{ echo "";}?>">
						<span class="input-group-addon" >
						    <span class="glyphicon glyphicon-calendar"></span>
						</span>
					    </span>
					</div>
				    </div>
				    <div class="form-group">
					<div class="col-md-2"></div>
					<div class="col-md-3">
					<input type="button" class="btn btn-primary btn-sm save" value="<?php if($Mode=="Edit"){echo "Update";}else{ echo "Create";}?>">
					</div>
				    </div>
				</form>
			    </div>
			    <p><br></p>
			</div>
		    </div>
		  </div>
		<!-- end panel -->
	    </div>
	<!-- end col-12-->
	  </div>
	
<script>
    $(document).ready(function(){
       $('.dateSet').datepicker({
	    format: 'd MM yyyy',
    });
    });
    $('.save').on('click',function(){
	window.history.back();
    })
</script>