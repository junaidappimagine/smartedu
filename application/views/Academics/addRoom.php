	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Classromm allocation</li>
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
			    <h4 class="panel-title"><?php if($Mode=="Edit"){ echo "Edit"; }else{ echo "Add";}?> Class Room</h4>
			</div>
			<div class="panel-body">
			    <legend><?php if($Mode=="Edit"){ echo "Edit"; }else{ echo "Add";}?> Class Room</legend>
			    <form class="form-horizontal">
				<div class="form-group">
				    <label class="control-label col-md-2"> Room Name <b>:</b></label>
				    <div class="col-md-3">
					<input type="text" name="" class="form-control input-sm" value='<?php if($Mode=="Edit"){ echo "A1"; }else{ echo "";}?>'>
				    </div>
				</div>
				<div class="form-group">
				    <label class="control-label col-md-2"> Capacity  <b>:</b></label>
				    <div class="col-md-3">
					<input type="text" name="" class="form-control input-sm" value='<?php if($Mode=="Edit"){ echo "30"; }else{ echo "";}?>'>
				    </div>
				</div>
				<div class="form-group">
				    <label class="control-label col-md-2"></label>
				    <div class="col-md-3">
					<a class="btn btn-success btn-sm" href="<?php echo base_url('AcademicsC/viewRoom');?>" ><?php if($Mode=="Edit"){ echo "Update"; }else{ echo "Save";}?></a>
				    </div>
				</div>
			    </form>
			</div>
		    </div>
		  </div>
		    <!-- end panel -->
	    </div>
	<!-- end col-12-->
	  </div>
