<!-- begin #content -->
<style type="text/css">
	a { color: inherit; }
	.dataTables_paginate{
	    display: block;
	}
	.dataTables_info{
	    display: none;
	}
</style>
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">HR</a></li>
		<li><a href="javascript:;">Employee Leave Management</a></li>
		<li><a href="javascript:;">Reset leaves</a></li>
		<li class="active">Reset Employee Leaves</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Reset Employee Leaves<small></small></h1>
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
			    <h4 class="panel-title">Reset Employee Leaves</h4>
			</div>
			<div class="panel-body" id="crop-avatar">
			    <div class="col-md-12">
			    <div class="col-md-12 row" style="">
				<legend>Reset leaves</legend>
				<h5 class="">All leaves for this employee will be updated.</h5>
				<br>
				<form class="form-horizontal" action="" method="post">
					<div class="form-group">
					    <label class="col-md-2 ">Employee Name <!--&nbsp;&nbsp; <b>:</b>--></label>
					    <label class="col-md-1 ">&nbsp;&nbsp; <b>:</b></label>
					    <label class="col-md-2 ">Rafeeq - EMP002 <!--&nbsp;&nbsp; <b>:</b>--></label>
					</div>
				    	<div class="form-group">
					    <label class="col-md-2">Employee department <!--&nbsp;&nbsp; <b>:</b>--></label>
					    <label class="col-md-1">&nbsp;&nbsp; <b>:</b></label>
					    <label class="col-md-2">English  <!--&nbsp;&nbsp; <b>:</b>--></label>
					</div>
					<div class="form-group">
					    <label class="col-md-2 ">Employee position <!--&nbsp;&nbsp; <b>:</b>--></label>
					    <label class="col-md-1 ">&nbsp;&nbsp; <b>:</b></label>
					    <label class="col-md-2 ">Junior<!--&nbsp;&nbsp; <b>:</b>--></label>
					</div>
				</form>
			    </div>
				<div class="table-responsive col-md-12 row">
					<table id="data-table" class="table table-bordered table table-striped">
					    <thead>
						<tr>
						    <th>Leave Type</th>
						    <th>Leave Count</th>
						    <th>Leaves Taken</th>
						    <th>Last Reset Date</th>
						</tr>
					    </thead>
					    <tbody>
						<tr>
						    <td>Casual</td>
						    <td>9</td>
						    <td>0</td>
						    <td>28/11/2016</td>
						</tr>
						<tr>
						    <td>Sick leave</td>
						    <td>20</td>
						    <td>0</td>
						    <td>28/11/2016</td>
						</tr>
					    </tbody>
					</table>
				</div>
				<div class="col-md-12 row">
				    <p></p>
				    <form class="form-horizontal" action="" method="post">
					<div class="form-group ">
					    <label class="col-md-2 ">Reset remarks</label>
					    <label class="col-md-1 ">&nbsp;&nbsp; <b>:</b></label>
					    <label class="col-md-3 "><textarea class="input-sm form-control"  style="width: 100%;" cols="15" rows="3"></textarea></label>
					</div>
					<div class="form-group ">
					    <label class="col-md-2 ">Reset Date</label>
					    <label class="col-md-1 ">&nbsp;&nbsp; <b>:</b></label>
					    <label class="col-md-3 ">
						<span class="input-group">
						    <input class="form-control dateSet input-sm" id="from_date" value="<?php echo date('d F Y');?> " type="text">
						    <span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						    </span>
						</span>
					    </label>
					</div>
					<div class="form-group col-md-2">
					    <a href="<?php echo base_url('HrLeaveMgmntCtrl/resetLogs');?>"><input type="button" class="btn btn-primary btn-sm" name="" value="Reset Leaves"></a>
					</div>
				    </form>
				</div>
			</div>	<!-- Modal -->
		    </div>
		</div>
		    <!-- end panel -->
		</div>
		<!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<script>
    $(document).ready(function(){
	//var date=new Date();
	//date.setDate(date.getDate());
	//$('.dateSet').datepicker({
	//    format: 'd MM yyyy',
	//    minDate: date,
	//});
	
		var date = new Date();
		    date.setDate(date.getDate());
		    $('.dateSet').datepicker({
				format: 'd MM yyyy',
				minDate: date
		    });
    });
</script>