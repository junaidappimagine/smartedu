	<
	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">HR</a></li>
		<li><a href="javascript:;">Configurations</a></li>
		<li class="active">Employee Subject Association</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">Employee Subject Association</h1>
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
			    <h4 class="panel-title">Employee Subject Association </h4>
			</div>
			<div class="panel-body">
			    <legend>Employee Subject Association</legend>
				<form class="form-horizontal">
				    <div class="col-md-12">
                                        <div class="form-group">
					    <label class="col-sm-2 control-label">Class &nbsp; :</label>
					    <div class="col-sm-3">
					    <select name="" class="form-control input-sm" id="Class">
                                                <option selected value="Select_Class">Select Class</option>
                                                <option value="Grade1">Grade 1</option>
                                                <option value="Grade2">Grade 2</option>
                                                <option value="Grade3">Grade 3</option>
                                            </select>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label"> Batch &nbsp; :</label>
					    <div class="col-sm-3">
                                            <select name="" class="form-control input-sm" id="Batch">
                                                <option selected value="Select_Batch">Select  Batch</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                            </select>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label">Subject &nbsp; :</label>
					    <div class="col-sm-3">
					    <select name="" class="form-control input-sm" id="Subject">
                                                <option disabled selected>Select  Subject</option>
                                            </select>
					    </div>
					</div>
					   <div class="hidedata currentassign_hide">
					    <div class="" id="Current_assgin"></div>
					    <table class="table table-striped table-bordered" style="width: 50%" id="Current_assgin_table" >
						<thead></thead>
					    </table>
					    </div>
					    <div class="form-group hidden hidedata" id="department_select">
						<label class="col-sm-2 control-label">Department &nbsp; :</label>
						<div class="col-sm-3">
						<select name="" class="form-control input-sm" id="Department">
						    <option selected value="Select_Department">Select  Department</option>
						    <option value="English">English</option>
						    <option value="Hindi">Hindi</option>
						    <option value="Maths">Maths</option>
						    <option value="Other Languages">Other Languages</option>
						    <option value="Science">Science</option>
						    <option value="Social Studies">Social Studies</option>
						    <option value="System Admin">System Admin</option>
						</select>
						</div>
					    </div>
					<div class="hidedata">
					    <div class="" id="assign_new">
					    </div>
					    <table class="table table-striped table-bordered" style="width: 50%" id="assign_new_table" >
						<thead></thead>
					    </table>
					</div>
					<!--&nbsp;&nbsp;<input type="button" class="btn btn-primary btn-sm col-md-offset-2" value="Save">-->
				    </div>
				</form>
                                
			</div>
		    <!-- end panel -->
		    </div>
	<!-- end col-12-->
		</div>
	    </div>
	</div>
<script src="<?php echo base_url(); ?>assets/js/controls/employeesubjectasso.js"></script>