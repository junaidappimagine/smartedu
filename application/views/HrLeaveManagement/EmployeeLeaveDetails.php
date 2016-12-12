<!-- begin #content -->
<style type="text/css">
	a { color: inherit; }
	.dataTables_info{
	    display: none;
	}
	.dataTables_paginate{
	    display: none;
	}
</style>
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Home</a></li>
		<li><a href="javascript:;">Employee Leave Management</a></li>
		<li><a href="javascript:;">Attendance Report</a></li>
		<li class="active">Employee Leave Details</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Employee Leave Details<small></small></h1>
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
				<h4 class="panel-title">Employee Leave Details</h4>
			    </div>
			    <div class="panel-body" id="crop-avatar">
				<div class="col-md-12">
				    <legend>Employee Leave Details</legend>
				    <!--<h4>Employee Leave Details</h4>-->
				    <div class="row">
					<div class="form-group col-md-4">
					    <label>Employee Name</label>
					     <br>
					    <label><b>Rafeeq</b></label>
					</div>
					<div class="form-group col-md-4">
					    <label>Recent Leave Reset</label>
					     <br>
					    <label><b>09/12/2016</b></label>
					</div>
					<div class="form-group col-md-4">
					    <label>Employee Department</label>
					     <br>
					    <label><b>English</b></label>
					</div>
				    </div>
				    <hr>
				    <div class="row filter hidden">
					<label style="margin-top: 11px" class="col-md-2 control-label">Filter by date</label>
					<label style="margin-top: 11px" class="col-md-1 control-label">From</label>
					<div class="col-md-2">
					    	<span class="input-group">
						    <input class="form-control dateSet dateval_From input-sm" id="from_date" value="" type="text">
						    <span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						    </span>
						</span>
					</div>
					<label style="margin-top: 11px" class="col-md-1 control-label">To </label>
					<div class="col-md-2">
					    	<span class="input-group">
						    <input class="form-control dateSet dateval_To input-sm" id="from_date" value="" type="text">
						    <span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						    </span>
						</span>
					</div>
					<div class="col-md-2">
					    <input type="button" class="btn btn-primary btn-sm view" value="View">
					     <input type="button" class="btn btn-danger btn-sm Cancel_filter" value="Cancel">
					</div>
				    </div>
				    <hr class="filter hidden">
					
				<div class="row ">
				    <div class="form-group col-md-1 Filters">
					 <p><br></p>
					<label>Filters</label>
				    </div>
				    <div class="form-group col-md-2 Filters">
					<label >Leave Type</label>
					<select class="form-control selectpicker" data-style="btn-white btn-sm">
					    <option value="Casual">Casual</option>
					    <option value="Sick leave">Sick leave</option>
					</select>
				    </div>
				    <div class="form-group col-md-2 Filters">
					<label >Leave Criteria</label>
					<select class="form-control selectpicker" data-style="btn-white btn-sm">
					    <option value="additional_leaves">Additional leaves</option>
					    <option value="lop_deducted">LOP deducted</option>
					    <option value="lop_not_deducted">LOP not deducted</option>
					</select>
				    </div>
				    <div class="form-group col-md-1 Filters Filters_btn">
					<label><br></label>
					<div class="col-md-12">
					    <button type="button" id="Filter_btn" class="btn btn-info btn-sm">
						<span class="glyphicon glyphicon-filter"></span> Filter with dates 
					    </button>
					</div>
				    </div>
				    <div class="form-group col-md-2 hidden Date_filter">
				     <p><br></p>
				    <label id="From_date" style="margin-top: 5px" class="">Date <b>:</b> 07/12/2016</label>
				    </div>
				    <div class="form-group col-md-2 hidden Date_filter">
					<p><br></p>
				    	<label id="To_date" style="margin-top: 5px" class="">To <b>:</b> 09/12/2016</label>
				    </div>
				    <div class="form-group col-md-3 hidden Date_filter">
				   <p><br></p>
				    <div class="form-group col-md-12">
				    <button type="button" id="Change_date" class="btn btn-primary btn-sm">
					    <span class="glyphicon glyphicon-edit"></span> Change
				    </button>
				    <button type="button" id="reset_page" class="btn btn-danger btn-sm">
					<span class="glyphicon glyphicon-refresh"></span> Reset
				    </button>
				    </div>
				    </div>					

				</div>
				<div class="table-responsive  col-md-12">
					<br>
				    <table class="table table-bordered table table-striped" id="data-table">
					<thead>
					    <tr>
						<th></th>
						<th>Total</th>
						<th>Casual</th>
						<th>Sick leave</th>
					    </tr>
					</thead>
					<tbody>
					    <tr>
						<td>Available leave credits</td>
						<td>15/15</td>
						<td>5/5</td>
						<td>10/10</td>
					    </tr>
					    <tr>
						<td>Total leaves</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					    </tr>
					    <tr>
						<td>Additional leaves</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					    </tr>
					    <tr>
						<td>Loss of pay</td>
						<td>-</td>
						<td>-</td>
						<td>-</td>
					    </tr>
					</tbody>
				    </table>
				</div>
				<div class="table-responsive  col-md-12">
					<br>
				    <table class="table table-bordered table table-striped" id="data-table">
					<thead>
					    <tr>
						<th>Leave date</th>
						<th>Leave type</th>
						<th>Leave criteria</th>
						<th>Reason</th>
						<th>Approver</th>
						<th>Remarks</th>
					    </tr>
					</thead>
					<tbody>
					    <tr>
						<td colspan="6"><center>No leaves taken</center></td>
					    </tr>
					    
					</tbody>
				    </table>
				</div>

			    </div>
				    <!-- Modal -->
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
	$('.dateSet').datepicker({
	    format: 'd/m/yyyy',
	    //minDate: date
	});
    });
    $('#Filter_btn').on('click',function(){
	$('.filter').removeClass('hidden');
	$('#Filters_btn').addClass('hidden');
	$('.Filters').addClass('hidden');
    });
    $('.Cancel_filter').on('click',function(){
	$('.filter').addClass('hidden');
	$('#Filter_btn').removeClass('hidden');
	$('.Filters').removeClass('hidden');
    });
    $('.view').on('click',function(){
	var form=$(".dateval_From").val();
	var to=$(".dateval_To").val();
	$('.filter').addClass('hidden');
	$('.Filters').removeClass('hidden');
	$('.Filters_btn').addClass('hidden');
	$('.Date_filter').removeClass('hidden');
        $("#From_date").empty().append("Date <b>: </b>"+form);
	$("#To_date").empty().append("To <b>: </b>"+to);
    });
    $('#Change_date').on('click',function(){
	$('.filter').removeClass('hidden');
	$('.Filters').addClass('hidden');
	$('.Date_filter').addClass('hidden');
    });
       $('#reset_page').click(function() {
	window.location.href=window.location.href;
    });
</script>
