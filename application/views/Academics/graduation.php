<style>
	.imp{
		color:red;
	}
	.tips{
		background-color: #3F729B;
		color:white;
	}
	
	.tabs{
		border: 1px solid;
		width:300px;
		padding:0px;
	}
	.nav-pills > li > a {
    
   border-radius: 0 0 0 0  !important;
}
.section_header{
	border-bottom: 1px solid;
}
.conditional{
	
	border:1px solid;
}
	.hidden{ display: none; }
	
</style>

<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
				<ol class="breadcrumb pull-right">
					<li><a href="javascript:;">Academics</a></li>
					<li><a href="javascript:;">Manage Course & Batch</a></li>
					<li class="active">Manage Batch </li>
				</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Manage Batch | Batch Transfer</h1>
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
                            <h4 class="panel-title">Gradutaion</h4>
                        </div>
                        <div class="panel-body">
						   <form class="form-horizontal">
								<div class="row">
									<div class="form-group">
										<div class="col-md-offset-1 col-md-12">
											<h4>Graduating Batch: C1-A</h4>
										</div>
									</div>
								 </div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-offset-1 col-md-12">
											<h6>These studets will now be transferred to former student database. Add the status description for the students like, for example, 'Graduated 10th grade,2010'.</h6>
										</div>
									</div>
								 </div>
								<div class="form-group">
									<div class="col-md-offset-1 col-md-3">
										<label>Status Description</label>
										<input type="text" class="form-control input-sm" placeholder="" value=""/>
									</div>
									<div class="col-md-offset-1 col-md-3">
										<label>Leaving Date</label>
										<span class="input-group">
											<input type="text" class="form-control dateSet input-sm"  id="from_date">
											<span class="input-group-addon" >
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
										</span>
									</div>
								</div>
							</form><br>
								<div class="row">
									<div class="col-md-offset-1 col-md-7">
										<h6>Uncheck the students not eligible for gradution </h6>
										<div class="table-responsive">
											<table class="table table-bordered" id="myTable">
												<thead id="sub">
													<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
														<th width="30%">Admission no.</th>
														<th width="30%">Name</th>
														<th width="30%">All, None</th>
													</tr>
												</thead>
												<tbody>
													<tr id="first_course">
														<td>STD003</td>
														<td><a href="<?php echo base_url('AcademicsC/student_fees?var1=ishan');?>">Ishan</a></td>
														<td><label><input type="checkbox" value="" class="checkbox" checked></label></td>
													</tr>
													<!--<tr  id="second_course">
														<td>STD004</td>
														<td> <a href="<?php echo base_url('AcademicsC/student_fees?var1=jeena');?>">Jeena</a></td>
														<td><label><input type="checkbox" value="" class="checkbox" checked></label></td>
													</tr>-->
												</tbody>
											</table>
										</div>
									</div>
							  </div>
								<div class="col-md-offset-1 col-md-4">
									<button type="button" class="btn btn-sm btn-success">Save</button>
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
});
</script>