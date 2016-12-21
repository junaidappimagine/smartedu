	<style>

	</style>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Add Building</li>
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
			    <h4 class="panel-title">Add Building</h4>
			</div>
			<div class="panel-body">
			  <legend>Add Building</legend>
			  <div class="row">
				<form class="form-horizontal">
				    <div class="form-group EditBulinding">
					<label class="control-label col-md-2">Building Name &nbsp;&nbsp;<b>:</b></label>
					<div class="col-md-3">
					    <input type="text" name="" class="form-control input-sm" value="<?php if($mode=="Edit") {echo "Tower A";}else{ echo "";}?>">
					</div>
				    </div>
				    <div class="form-group editmode">
					<label class="control-label col-md-2"><h5>Adding rooms  &nbsp;</h5></label>
				    </div> 
				    <div class="form-group duplicate editmode"   id="clone_div">
					<label class="control-label col-md-2">Room Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b></label>
					<div class="col-md-3">
					    <input type="text" name="" class="form-control input-sm">
					</div>
					<label class="control-label col-md-2">Capacity  &nbsp;&nbsp;<b>:</b></label>
					<div class="col-md-3">
					    <input type="text" name="" class="form-control input-sm">
					</div>
					<div class="col-md-1">
					    <label><a class="remove"><img style="margin-top:8px"src="http://aarthi.implsupport.fedena.org/images/buttons/delete_2.png"></a></label>
					</div>
				    </div>
				    <div class="form-group  hidden duplicate" id="clone_div">
					<label class="control-label col-md-2">Room Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b></label>
					<div class="col-md-3">
					    <input type="text" name="" class="form-control input-sm">
					</div>
					<label class="control-label col-md-2">Capacity  &nbsp;&nbsp;<b>:</b></label>
					<div class="col-md-3">
					    <input type="text" name="" class="form-control input-sm">
					</div>
					<div class="col-md-1">
					    <label class="remove"><a><img style="margin-top:8px"src="http://aarthi.implsupport.fedena.org/images/buttons/delete_2.png"></a></label>
					</div>
				    </div>
				    <div class="clone_data"></div>
				    <hr>
				    <div class="col-md-12 col-md-offset-0">
					<center>
					<a class="btn btn-primary btn-sm editmode" id="addclone"><span class="glyphicon glyphicon-plus"></span> Add</a>
					<input type="submit" name="" class="EditBulinding btn btn-success btn-sm" value="Save">
					</center>
				    </div>
				</form>
				
			  </div>
		      
			</div>
		    </div>
		  </div>
		    <!-- end panel -->
	    </div>
	<!-- end col-12-->
	  </div>
<script>
    $("#addclone").click(function(){
	 $("#clone_div").clone(true).appendTo(".clone_data").removeClass('hidden');
    });
    $('.remove').click(function(e){
	//console.log(e.preventDefault());
	$(this).closest(".duplicate").remove();
	e.preventDefault();
    });
<?php if($mode=='Edit'){?>
	 $(".editmode").addClass("hidden");
<?php }?>
</script>