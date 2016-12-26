
<style>
	.line{
		border-style:inset;
	}
</style>
<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Academics</a></li>
				<li><a href="javascript:;">Manage Course & Batch</a></li>
				<li class="active">Manage Course</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Manage Course & Batch | Manage Course</h1>
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
                            <h4 class="panel-title"> Grouped Batches</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								   <form class="form-horizontal">
										<div class="row">
											<div class="form-group">
												<label class="col-md-3 control-label">Name</label>
												<div class="col-md-3" >
													<input type="text" class="form-control input-sm" placeholder="" value="" style="border-radius: 6px;"/>
												</div>
											</div><hr>
											<?php if($result1=='Course 1') { ?>
											<div class="form-group" >
												<label class="col-md-3 control-label">Select a batch</label>
												<div class="col-md-3 checkbox" style="border:1px solid #ccd0d4;height:90px;width:237px;border-radius: 6px;margin-left:15px">
													<label> <input type="checkbox" id="all" class="case">checked All</label>&nbsp; <label> <input type="checkbox" id="none">none</label><br>
													<label> <input type="checkbox"  class="case" value="" >A</label><br>
													<!--<label> <input type="checkbox" class="case">M.Tech</label>-->
												</div>
											</div><br>
											<?php } ?>
											<?php if($result1=='Diploma in Theatre Semester 6(GPA)') { ?>
											<div class="form-group">
												<label class="col-md-3 control-label">Select a batch</label>
												<div class="col-md-3 checkbox"  style="border:1px solid #ccd0d4;height:90px;width:237px;border-radius: 6px;margin-left:15px">
													<label> <input type="checkbox" id="all" class="case">checked All</label>&nbsp; <label> <input type="checkbox" id="none">none</label><br>
													<label> <input type="checkbox"  class="case" value="" >A2015</label><br>
													<!--<label> <input type="checkbox" class="case">M.Tech</label>-->
												</div>
											</div><br>
											<?php } ?>
											<div class="form-group">
												<label class="col-md-3 control-label"></label>
												<div class="col-md-3">
													<button type="button" class="btn btn-sm btn-success">Create</button>
												</div>
											 </div><br>
											<div style="background-color: #EFDC86;width:500px;margin-left: 100px;">
												<h6 style="text-align: center;">No Grouped batches found</h6>
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
$(document).ready(function(){
		
$('.dateSet').datepicker({format: 'd MM yyyy'}).datepicker('setDate', '22 December 2016');
$('.dateSet1').datepicker({format: 'd MM yyyy'}).datepicker('setDate', '22 December 2017');

});

</script>