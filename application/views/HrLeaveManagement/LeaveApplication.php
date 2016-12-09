<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Home</a></li>
		<li><a href="javascript:;">Employee Leave Management</a></li>
		<li class="active">Leave Applications</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Leave Applications<small></small></h1>
    <!-- end page-header -->
    <!-- begin row -->
    <div class="row">
		<!-- begin col-12 -->
		<div class="col-md-12">
		    <!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
			    <div class="panel-heading">
				<div class="panel-heading-btn">
				</div>
				<h4 class="panel-title">Leave Applications</h4>
			    </div>
			    <div class="panel-body" id="crop-avatar">
				    <div class="container" style="width: 100% !important">
				    	<h4>Leave Applications</h4>
					   	<h6 style="line-height: 20px;">List of employee leave applications and their status. Use the various filters to find specific leave applications.</h6>
					   	<div></div><br>
	          			<div class="row">
	          				<div class="col-md-3">
		          				<div class="form-group">
		          					<input type="text" name="" id="empName" placeholder="Employee Name or Number" class="form-control input-sm">
		          				</div>
	          				</div>
	          				<div class="col-md-3">
		          				<div class="form-group">
		          					<select class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm">
		          						<option value="All">All Department</option>
		          						<option value="English">English</option>
					    				<option value="Hindi">Hindi</option>
					    				<option value="Maths">Maths</option>
					    				<option value="">Other Languages</option>
					    				<option value="Science">Science</option>
					    				<option value="">Social Studies</option>
					    				<option value="">System Admin</option>
		          					</select>
		          				</div>
	          				</div>
	          				&nbsp;<button class="btn btn-inverse btn-sm">View Applications</button>
	        			</div>
	        			<hr>
	        			<div class="row">
	        				<div class="col-md-2">
		        				<div class="form-group">
			        				<select class="form-control selectpicker" data-live-search="true" data-style="btn-white btn-sm">
			        					<option>All</option>
			        					<option>Approved</option>
			        					<option>Pending</option>
			        					<option>Denied</option>
			        				</select>
			        			</div>
	        				</div>
	        				<div class="col-md-3" id="filterDate">
		        				<label>&nbsp;</label>
		        				<span style="cursor: pointer;"><u>Filter By Date</u></span>	
	        				</div>
	        				<div class="col-md-6 hide" id="bothDate">
		        				<div class="col-md-3"></div>
						    	<div class="form-group col-md-12">
					    			<label id="fr_date"></label>
					    			<label style="margin-left: 25px;" id="up_date"></label>
					    			&nbsp;&nbsp;<button  id="changeDate" class="btn btn-inverse btn-sm">Change Date</button>&nbsp;&nbsp;
					    			<span style="cursor:pointer" id="cancelPage"><u>Reset</u></span>
					    		</div>
						    </div>
						    <div class="initDateValue hide">
							    <section class="col-sm-3 form-group">
					    			<!-- <label class="control-label">From &nbsp;</label> -->
								    <span class="input-group">
									<input type="text" class="form-control dateSet input-sm" size="30" id="from_date">
									<span class="input-group-addon" >
									    <span class="glyphicon glyphicon-calendar"></span>
									</span>
								    </span>
								</section>
								<section class="col-sm-3 form-group">
									<!-- <label class="control-label">To &nbsp;</label> -->
								    <span class="input-group">
									<input type="text" class="form-control dateSet input-sm" id="upto_date">
									<span class="input-group-addon" >
									    <span class="glyphicon glyphicon-calendar"></span>
									</span>
								    </span>
								</section>
							   <section class="col-sm-3 form-group">
							      <button class="btn btn-inverse input-sm" type="button" id="displayBothDate">View</button>
							      <span style="margin-left: 20px;cursor:pointer" id="removeDateForm"><u>Cancel</u></span>
							    </section>
							</div>
	        			</div>
	        			<br>
	        			<table border="1" class="table">
	        				<thead style="background-color: rgb(240,240,240);">
	        					<th>Employee</th>
	        					<th>Start date</th>
	        					<th>Start date</th>
	        					<th>No. of days</th>
	        					<th>Leave type</th>
	        					<th>Leave status</th>
	        					<th>Reason</th>
	        				</thead>
	        				<tbody>
	        					<tr>
	        						<td colspan="8"><center>No Result Found</center></td>
	        					</tr>
	        				</tbody>
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
<script type="text/javascript">
	var date = new Date();
    date.setDate(date.getDate());
    $('.dateSet').datepicker({
		format: 'd MM yyyy',
		minDate: date
    });
	$('#filterDate').click(function(){
			$('#filterDate').addClass('hide');
			$('.initDateValue').removeClass('hide');
		})
	$('#changeDate').click(function(){
			$('#bothDate').addClass('hide');
			$('.initDateValue').removeClass('hide');
		})
	$('#cancelPage').click(function() {
	    window.location.href=window.location.href;
	});
	$('#displayBothDate').click(function(){
		var fromdate=$('#from_date').val();
		var uptodate=$('#upto_date').val();
		$('#fr_date').text('Date -'+fromdate);
		$('#up_date').text('To -'+uptodate);
		$('#bothDate').removeClass('hide');
		$('#filterDate').addClass('hide');
		$('.initDateValue').addClass('hide');
	})
	$('#removeDateForm').click(function(){
		$('#bothDate').addClass('hide');
		$('#filterDate').removeClass('hide');
		$('.initDateValue').addClass('hide');
	})
</script>