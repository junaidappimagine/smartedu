	<style>
	    .odd1{
		background-color: #F0F3F5;
	    }
	    .even1{
		background-color:#FFFFFF; 
	    }
	</style>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Manage Batches</li>
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
			    <h4 class="panel-title">Manage Batches</h4>
			</div>
			<div class="panel-body">
			  <legend>Manage Batches</legend>
			  <p><b>Timetable  :  December 01, 2016 - November 30, 2017</b></p>
			<p><br></p>
			<div class="row">
			  
			    <div class="col-md-6">
				<legend><h4>Assigned Batches</h4></legend>
				<table class="table table-bordered table table-striped" id="table-draggable1">
				    <tbody class="connectedSortable">
					<tr class="">
					    <th>Batches without timetable entries</th>
					</tr>
					<tr class="">
					    <th>C2 - A</th>
					</tr>
					<tr class="">
					    <th>C3 - A</th>
					</tr>
					<tr class="">
					    <th>C4 - B</th>
					</tr>
					<tr class="">
					    <th>C5 - A</th>
					</tr>
					<tr class="">
					    <th>C6 - A</th>
					</tr>
					<tr class="">
					    <th>C7 - A</th>
					</tr>

				    </tbody>
				</table>
			    </div>
			    <div class="col-md-6">
				<legend><h4>Available Batches</h4></legend>
				<table class="table table-bordered table table-striped" id="table-draggable2">
				    <tbody class="connectedSortable">
					<tr class="">
					    <th>Batches without timetable entries</th>
					</tr>
				    </tbody>
				</table>

			    </div>
			</div>

			</div>
		    </div>
		  </div>
		    <!-- end panel -->
	    </div>
	<!-- end col-12-->
	  </div>
	
<script>
    $(document).ready(function() {
	var $tabs=$('#table-draggable2')
	$( "tbody.connectedSortable" )
	    .sortable({
		connectWith: ".connectedSortable",
		items: "> tr:not(:first)",
		appendTo: $tabs,
		helper:"clone",
		zIndex: 999990
	    })
	.disableSelection();
	var $tab_items = $( ".nav-tabs > li", $tabs ).droppable({
	  accept: ".connectedSortable tr",
	  hoverClass: "ui-state-hover",      
	  drop: function( event, ui ) {
	    return false;
	  }
	});
    });
	</script>
