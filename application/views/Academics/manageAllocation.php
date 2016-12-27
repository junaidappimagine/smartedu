	<style>
	 .one {
	    background-color: #F4F4F4;
	    border: 1px  gray;
	    padding-bottom: 7px;
	    padding-top: 13px;
	}
	.contentdata{
	    background-color: white;
	     border: 1px solid #f4f4f4;
	    padding-bottom: 7px;
	    padding-top: 13px;
	}
	.bg {
    background-color: lightsteelblue;
}
	</style>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Manage Allocation</li>
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
			    <h4 class="panel-title">Manage Allocation</h4>
			</div>
			<div class="panel-body">
			<legend>Manage Allocation</legend>
			<div class="form-group row">
			  <div class="col-md-3">
			  <label>December 01, 2016 - November 30, 2017</label>
			  </div>
			  <div class="col-md-3">
			  <a href="" style="cursor: pointer">Edit Timetable</a>
			  </div>
			  <div class="col-md-3"></div>
			  <div class="col-md-3">
			     <a class="btn btn-info btn-sm" href="<?php echo base_url('AcademicsC/timetableSummary');?>">Table Summary</a>
			  <a class="btn btn-warning btn-sm" href="<?php echo base_url('AcademicsC/timetableSummary');?>">Manage Batches</a>
			  </div>
			</div>
			<hr>
			
			<div class="form-group row">
			  <div class="col-md-4"><label>Classes </label></div>
			  <div class="col-md-3"><label>Batches </label></div>
			  <div class="col-md-5">Allocation status </div>
			</div>
			<div class="form-group row one ">
			  <div class="col-md-4"><label>Bachelor of Commerce</label></div>
			  <div class="col-md-3"><label>1</label></div>
			  <div class="col-md-5">Not eligible
			    <span style="float: right;cursor: pointer" class="glyphicon glyphicon-chevron-up hidden  up"></span>
			    <span style="float: right;cursor: pointer" class="glyphicon glyphicon-chevron-down  down"></span>
			  </div>
			</div>
			<div class="row contentdata dataone hidden">
			    <div class="col-md-7 "><label>Batches   </label></div>
			    <div class="col-md-2 "><label>Allocation status  </label></div>
			    <div class="col-md-3 "><label></label></div>
			</div>
			<div class="row contentdata dataone hidden">
			    <div class="col-md-7 "><label>B   </label></div>
			    <div class="col-md-2 "><label>Not eligible   </label></div>
			    <div class="col-md-3 "><label>No subjects or elective groups found </label></div>
			</div>
			<p></p>
			
			<div class="form-group row one">
			  <div class="col-md-4"><label>Class 1  </label></div>
			  <div class="col-md-3"><label>1</label></div>
			  <div class="col-md-5"> Not allocated
			    <span style="float: right;cursor: pointer" class="glyphicon glyphicon-chevron-up hidden  up"></span>
			    <span style="float: right;cursor: pointer" class="glyphicon glyphicon-chevron-down  down"></span>
			  </div>
			</div>
			<div class="row contentdata dataone hidden">
			    <div class="col-md-7 "><label>Batches  </label></div>
			    <div class="col-md-2 "><label>Allocation status</label></div>
			    <div class="col-md-3 "><label></label></div>
			</div>
			<div class="row contentdata dataone hidden">
			    <div class="col-md-7 "><label>A</label></div>
			    <div class="col-md-2 "><label>Not allocated</label></div>
			    <div class="col-md-3 "><label>Manage allocations</label></div>
			</div>
			<p></p>
			<div class="form-group row one">
			  <div class="col-md-4"><label>Class 2  </label></div>
			  <div class="col-md-3"><label>1</label></div>
			  <div class="col-md-5"> Not allocated
			    <span style="float: right;cursor: pointer" class="glyphicon glyphicon-chevron-up hidden  up"></span>
			    <span style="float: right;cursor: pointer" class="glyphicon glyphicon-chevron-down  down"></span>
			  </div>
			</div>
			<div class="row contentdata dataone hidden">
			    <div class="col-md-7 "><label>Batches  </label></div>
			    <div class="col-md-2 "><label>Allocation status</label></div>
			    <div class="col-md-3 "><label></label></div>
			</div>
			<div class="row contentdata dataone hidden">
			    <div class="col-md-7 "><label>A</label></div>
			    <div class="col-md-2 "><label>Not allocated</label></div>
			    <div class="col-md-3 "><label>Manage allocations</label></div>
			</div>
			<p></p>
			<div class="form-group row one">
			  <div class="col-md-4"><label>Class 3  </label></div>
			  <div class="col-md-3"><label>2</label></div>
			  <div class="col-md-5"> Not allocated
			    <span style="float: right;cursor: pointer" class="glyphicon glyphicon-chevron-up hidden  up"></span>
			    <span style="float: right;cursor: pointer" class="glyphicon glyphicon-chevron-down  down"></span>
			  </div>
			</div>
			<div class="row contentdata dataone hidden">
			    <div class="col-md-7 "><label>Batches  </label></div>
			    <div class="col-md-2 "><label>Allocation status</label></div>
			    <div class="col-md-3 "><label></label></div>
			</div>
			<div class="row contentdata dataone hidden">
			    <div class="col-md-7 "><label>A</label></div>
			    <div class="col-md-2 "><label>Not allocated</label></div>
			    <div class="col-md-3 "><label>Manage allocations</label></div>
			</div>
			<div class="row contentdata dataone hidden">
			    <div class="col-md-7 "><label>B</label></div>
			    <div class="col-md-2 "><label> Not eligible </label></div>
			    <div class="col-md-3 "><label>No subjects or elective groups found </label></div>
			</div>
			<p></p>
			
			<div class="form-group row one">
			  <div class="col-md-4"><label>Class 5 - CCE   </label></div>
			  <div class="col-md-3"><label>1</label></div>
			  <div class="col-md-5">  Not eligible
			    <span style="float: right;cursor: pointer" class="glyphicon glyphicon-chevron-up hidden  up"></span>
			    <span style="float: right;cursor: pointer" class="glyphicon glyphicon-chevron-down  down"></span>
			  </div>
			</div>
			<div class="row contentdata dataone hidden">
			    <div class="col-md-7 "><label>Batches  </label></div>
			    <div class="col-md-2 "><label>Allocation status</label></div>
			    <div class="col-md-3 "><label></label></div>
			</div>
			<div class="row contentdata dataone hidden">
			    <div class="col-md-7 "><label>A</label></div>
			    <div class="col-md-2 "><label>Not eligible</label></div>
			    <div class="col-md-3 "><label>Employee-subject association not complete </label></div>
			</div>
			<p></p>
			</div>
		    </div>
		  </div>
		    <!-- end panel -->
	    </div>
	<!-- end col-12-->
	  </div>
<script>
    $('.down').on('click',function(){
	$('.dataone').removeClass('hidden');
	$('.up').removeClass('hidden');
	$('.down').addClass('hidden');
    })
    $('.up').on('click',function(){
	$('.down').removeClass('hidden');
	$('.up').addClass('hidden');
	$('.dataone').addClass('hidden');
    })
    
</script>