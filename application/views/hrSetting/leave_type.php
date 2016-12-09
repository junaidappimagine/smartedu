<!-- begin #content -->
	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">HR</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Leave Types</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">HR Configurations | Leave Types</h1>
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
			    <h4 class="panel-title">Leave Type</h4>
			</div>
			 <div class="panel-body">
			    <legend>Leave Types</legend>
			    <div class="row">
				<div class="col-md-10">
				    <h5>Setup leave types that employees are allowed such as causal leaves,sick leaves.</h5>
				    <p></p>
				    <br>
				</div>
				<div class="col-md-2">
				    <a type="button" class="btn btn-success btn-sm col-md-offset-7" href="<?php echo base_url('hrSettingsC/leaveTypesAdd'); ?>"><i class="fa fa-plus fa-1x"></i><span class="f-s-14 f-w-500"> Add</span></a>
				</div>
			    </div>
			    	<div class="panel-body">
					<div class="table-responsive">
					     <table id="data-table" class="table table-striped table-bordered">
						<thead>
							<tr>
							    <th>Leave Type</th>
							    <th>Code</th>
							    <th>Valid from</th>
							    <th>Action</th>
							</tr>
							<tr>
							    <th colspan="4">Active leave Type</th>
							</tr>
						    </thead>
						    <tbody>
							<tr>
							    <td>Sick leave</td>
							    <td>SL</td>
							    <td>01-sep-2016</td>
							    <td><a href="<?php echo base_url('hrSettingsC/leaveTypeEdit/Sickleave/SL/01-sep-2016');?>" name="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i>Edit</a></td>
							</tr>
							<tr>
							    <td>Causal leave</td>
							    <td>CL</td>
							    <td>01-sep-2016</td>
							    <td><a href="<?php echo base_url('hrSettingsC/leaveTypeEdit/Causalleave/CL/01-sep-2016');?>" name="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i>Edit</a></td>
							</tr>
							<tr>
							    <td>Maternity leave</td>
							    <td>ML</td>
							    <td>01-sep-2016</td>
							    <td><a href="<?php echo base_url('hrSettingsC/leaveTypeEdit/Maternityleave/MsL/01-sep-2016');?>" name="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i>Edit</a></td>
							</tr>
						    </tbody>
					     </table>
					 </div>
				</div>

			   
			</div>
		    <!-- end panel -->
		    </div>
	<!-- end col-12-->
		</div>
	    </div>
	</div>

