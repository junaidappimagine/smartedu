<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Home</a></li>
		<li><a href="javascript:;">Employee Leave Management</a></li>
		<li class="active">Leave Rest Records</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Leave Rest Records<small></small></h1>
    <!-- end page-header -->
    <!-- begin row -->
    <div class="row">
		<!-- begin col-12 -->
		<div class="col-md-12">
		    <!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
			    <div class="panel-heading">
				<div class="panel-heading-btn">
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				</div>
				<h4 class="panel-title">Leave Rest Records</h4>
			    </div>
			    <div class="panel-body" id="crop-avatar">
				    <div class="container" style="width: 100% !important">
					    <div class="row">
					    	<div class="col-md-offset-8">
					    		<a href="<?php echo site_url('HrLeaveMgmntCtrl/ResetLeaves'); ?>" class=btn btn-inverse btn-sm" style="background-color: #E8AF00;color:white;">Reset Leaves</a>
					    		<a href="<?php echo site_url('HrLeaveMgmntCtrl/LeaveResetSetting'); ?>" class=btn btn-inverse btn-sm" style="background-color: #E8AF00;color:white;">Leave Reset Settings</a>
					    	</div>
				    	</div>
				    	<hr>
					    <div class="">
					    	<span><h6>List of all your recent leave reset details</h6></span>
					    </div>
				    	<table style="" border="1" class="table">
				    		<thead>
				    			<tr style="background-color: #F0F0F0;">
				    				<th colspan="2">Reset date</th>
				    				<th colspan="2">Employee</th>
				    				<th colspan="2">Remarks</th>
				    				<th colspan="2">Reset by</th>
				    			</tr>
				    			<tbody>
				    				<tr>
					    				<td colspan="2">28/11/2016 </td>
					    				<td colspan="2">1 of English</td>
					    				<td colspan="2">yyy</td>
					    				<td colspan="2">Admin User</td>
				    				</tr>
				    			</tbody>
				    		</thead>
				    	</table>
				    </div>
			    </div>
			</div>
		    <!-- end panel -->
		</div>
		<!-- end col-12 -->
    </div>
    <!-- end row -->
</div>

<style type="text/css">
	a { color: inherit; } 
</style>