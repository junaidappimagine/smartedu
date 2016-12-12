<style type="text/css">
	.table1 {
		margin-bottom: 20px;
	    max-width: 100%;
	    width: 90%;
	    border-color: #e2e7eb;
    	border-radius: 3px;
    	border-collapse: collapse;
    	border-spacing: 0;
	}
	a { 
		color: inherit;
	} 
</style>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Home</a></li>
		<li><a href="javascript:;">Employee Leave Management</a></li>
		<li class="active">Attendance Report</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Attandance Report<small></small></h1>
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
				<h4 class="panel-title">Attandance Report</h4>
			    </div>
			    <div class="panel-body" id="crop-avatar">
				    <div class="container">
				    	<form class="form-inline" id="showDateWise">
				    	<div class="row">
				    		<section class="col-sm-2 form-group">
				    		<p></p>
				    			<label>Filter by Date</label>
				    		</section>
			    			<section class="col-sm-3 form-group">
				    			<label class="control-label">From &nbsp;</label>
							    <span class="input-group">
								<input type="text" class="form-control dateSet input-sm" id="from_date">
								<span class="input-group-addon" >
								    <span class="glyphicon glyphicon-calendar"></span>
								</span>
							    </span>
							</section>
							<section class="col-sm-3 form-group">
								<label class="control-label">To &nbsp;</label>
							    <span class="input-group">
								<input type="text" class="form-control dateSet input-sm" id="upto_date">
								<span class="input-group-addon" >
								    <span class="glyphicon glyphicon-calendar"></span>
								</span>
							    </span>
							</section>
						   <section class="col-sm-3 form-group">
						      <button class="btn btn-inverse" type="button" id="displayBothDate">View</button>
						      <span style="margin-left: 20px;cursor:pointer" id="removeDateForm"><u>Cancel</u></span>
						    </section>
						    <hr>
						    <br>
						   </div>
						 </form>
				    	

					    <div class="row">
				    		<div class="col-md-3">
				    			<div class="form-group">
				    				<label>Select the department</label>
					    			<select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white btn-sm" id="department" onchange="filterTable()">
					    				<option value="selectAll">All Department</option>
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
				    		<div class="col-md-3">
				    			<div class="form-group">
				    				<label>Employees with leave criteria</label>
					    			<select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white btn-sm" name="" id="leave_criteriya" onchange="filterCriteriya()">
					    				<option value="All" selected="selected">All</option>
					    				<option value="English">Additional Leave</option>
					    				<option value="Hindi">LOP Deducted</option>
					    				<option value="Maths">LOP Not Deducted</option>
					    			</select>
				    			</div>
				    		</div>
				    		<div class="col-md-3" id="filterDate">
					    		<div class="form-group">
					    			<label>&nbsp;</label>
					    			<div ><span style="cursor:pointer"><u>Filter with dates</u></span></div>
					    		</div>
					    	</div>
					    	<div class="col-md-6 hide" id="bothDate">
					    		<div class="form-group" style="margin-top: 27px;">
					    			<label id="fr_date"></label>
					    			<label style="margin-left: 25px;" id="to_date"></label>
					    			<span style="cursor:pointer;margin-left: 25px;" id="changeDate"><u>Change Date</u></span> &nbsp;&nbsp;
					    			<span style="cursor:pointer" id="resetPage"><u>Reset</u></span>
					    		</div>
					    	</div>
				    	</div>
				    	<div class=""></div>
				    	<div class="row" >
				    		<table border="1" class="table" style="width: 90% !important; overflow: scroll;">
				    			<thead>
				    			<tr>
				    				<th colspan="1"></th>
				    				<th colspan="3">Leave Summary</th>
				    				<th colspan="3">Casual ( Cas )‎</th>
				    				<th colspan="3">Sick leave ( SCL )‎</th>
				    			</tr>
				    			<tr>
				    				<th colspan="">Employee</th>
				    				<th colspan="">Total leaves</th>
				    				<th colspan="">Additional leaves</th>
				    				<th colspan="">Loss of pay</th>
				    				<th colspan="">Total leaves</th>
				    				<th colspan="">Additional leaves</th>
				    				<th colspan="">Loss of pay</th>
				    				<th colspan="">Total leaves</th>
				    				<th colspan="">Additional leaves</th>
				    				<th colspan="">Loss of pay</th>
				    			</tr>
				    			</thead>
				    			<tbody>
				    			</tbody>
				    		</table>
				    	</div>
				    	<div class="" style="background-color: black;width: 100px;color: white" >
				    		<a href="<?php echo site_url('HrLeaveMgmntCtrl/CSVReports'); ?>" target="_blank" class=btn btn-inverse btn-sm">CSV Report</a>
				    	</div>
				    </div>
			    </div>
			</div>
		    <!-- end panel -->
		</div>
		<!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<script>

	$(document).ready(function() {
		filterTable();
		$('#showDateWise').hide();
		var date = new Date();
		    date.setDate(date.getDate());
		    $('.dateSet').datepicker({
				format: 'd MM yyyy',
				minDate: date
		    });
	});
	var attandance_report=[
		{'employee':'vijay','ls_total_leaves':'10','ls_additional_leaves':'5','ls_loss_of_pay':'5000','cl_total_leaves':'10','cl_additional_leaves':'5','cl_loss_of_pay':'5000','subject':'English'},
		{'employee':'Manikandan','ls_total_leaves':'10','ls_additional_leaves':'5','ls_loss_of_pay':'5000','cl_total_leaves':'10','cl_additional_leaves':'5','cl_loss_of_pay':'5000','subject':'English'},
		{'employee':'senthil','ls_total_leaves':'10','ls_additional_leaves':'5','ls_loss_of_pay':'5000','cl_total_leaves':'10','cl_additional_leaves':'5','cl_loss_of_pay':'5000','subject':'English'},
		{'employee':'manivannan','ls_total_leaves':'10','ls_additional_leaves':'5','ls_loss_of_pay':'5000','cl_total_leaves':'10','cl_additional_leaves':'5','cl_loss_of_pay':'5000','subject':'English'},
		{'employee':'gnanamani','ls_total_leaves':'10','ls_additional_leaves':'5','ls_loss_of_pay':'5000','cl_total_leaves':'10','cl_additional_leaves':'5','cl_loss_of_pay':'5000','subject':'Maths'},
		{'employee':'karthik','ls_total_leaves':'10','ls_additional_leaves':'5','ls_loss_of_pay':'5000','cl_total_leaves':'10','cl_additional_leaves':'5','cl_loss_of_pay':'5000','subject':'Maths'},
		{'employee':'selva','ls_total_leaves':'10','ls_additional_leaves':'5','ls_loss_of_pay':'5000','cl_total_leaves':'10','cl_additional_leaves':'5','cl_loss_of_pay':'5000','subject':'Maths'},
		{'employee':'rafeeq','ls_total_leaves':'10','ls_additional_leaves':'5','ls_loss_of_pay':'5000','cl_total_leaves':'10','cl_additional_leaves':'5','cl_loss_of_pay':'5000','subject':'Hindi'},
		{'employee':'gopi_white','ls_total_leaves':'10','ls_additional_leaves':'5','ls_loss_of_pay':'5000','cl_total_leaves':'10','cl_additional_leaves':'5','cl_loss_of_pay':'5000','subject':'Hindi'},
		{'employee':'gopi_black','ls_total_leaves':'10','ls_additional_leaves':'5','ls_loss_of_pay':'5000','cl_total_leaves':'10','cl_additional_leaves':'5','cl_loss_of_pay':'5000','subject':'Hindi'},
		{'employee':'elango','ls_total_leaves':'10','ls_additional_leaves':'5','ls_loss_of_pay':'5000','cl_total_leaves':'10','cl_additional_leaves':'5','cl_loss_of_pay':'5000','subject':'Hindi'},
		{'employee':'saravanan','ls_total_leaves':'10','ls_additional_leaves':'5','ls_loss_of_pay':'5000','cl_total_leaves':'10','cl_additional_leaves':'5','cl_loss_of_pay':'5000','subject':'Science'},
		{'employee':'bharani','ls_total_leaves':'10','ls_additional_leaves':'5','ls_loss_of_pay':'5000','cl_total_leaves':'10','cl_additional_leaves':'5','cl_loss_of_pay':'5000','subject':'Science'}];
		var attandance_reportlength=attandance_report.length;
		var table_body;
		function filterTable(){
			table_body='';
			var department=$('#department').val();
			// var leave_criteriya=$('#leave_criteriya').val();
			console.log(department);
			// console.log(leave_criteriya);
			var subjectCount=0;
			var EnglisSubject=0;
			var HindiSubject=0;
			var MathsSubject=0;
			var ScienceSubject=0;
			for (var i=0;i< attandance_reportlength; i++) {
				if(attandance_report[i].subject==department){
					if(subjectCount==0){
						subjectHeadingAdding(attandance_report[i]);
					}
					dataAdding(attandance_report[i]);
					subjectCount++;
				}else if(department=="selectAll"){
					if(attandance_report[i].subject=="English"){
						if(EnglisSubject==0){
							subjectHeadingAdding(attandance_report[i]);
							EnglisSubject=1;
						}
						dataAdding(attandance_report[i]);

					}else if(attandance_report[i].subject=="Hindi"){
						if(HindiSubject==0){
							subjectHeadingAdding(attandance_report[i]);
							HindiSubject=1;
						}
						dataAdding(attandance_report[i]);
					}else if(attandance_report[i].subject=="Maths"){
						if(MathsSubject==0){
							subjectHeadingAdding(attandance_report[i]);
							MathsSubject=1;
						}
						dataAdding(attandance_report[i]);
					}else if(attandance_report[i].subject=="Science"){
						if(ScienceSubject==0){
							subjectHeadingAdding(attandance_report[i]);
							ScienceSubject=1;
						}
						dataAdding(attandance_report[i]);
					}
				}
		}
		if(!table_body){
			// table_body='<tr><td>No Data Available</td></tr>';
			table_body='<tr><td colspan="10" align="center">No Data Available</td></tr>';
		}
		$('tbody').html(table_body);
		}
		function dataAdding(current_data){
			return table_body+='<tr><td><a style="text-decoration: none;" href="<?php echo base_url('HrLeaveMgmntCtrl/employeeLeaveDetails');?>">'+current_data.employee+'</a></td><td>'+current_data.ls_total_leaves+'</td><td>'+current_data.ls_additional_leaves+'</td><td>'+current_data.ls_loss_of_pay+'</td><td>'+current_data.cl_total_leaves+'</td><td>'+current_data.cl_additional_leaves+'</td><td>'+current_data.cl_loss_of_pay+'</td><td>'+current_data.cl_total_leaves+'</td><td>'+current_data.cl_additional_leaves+'</td><td>'+current_data.cl_loss_of_pay+'</td></tr>';
		}
		function subjectHeadingAdding(current_subject){
			return table_body+='<tr style="background-color: #e2e7eb !important;color:Black;"><td>'+current_subject.subject+'</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
		}
		
		function filterCriteriya(){
			table_body='<tr><td colspan="10" align="center">No Data Available</td></tr>';
			$('tbody').html(table_body);
		}
		$('#filterDate').click(function(){
			$('#showDateWise').show();
			$('#filterDate').hide();
		})
		$('#removeDateForm').click(function(){
			$('#showDateWise').hide();
			$('#filterDate').show();
		})
		$('#displayBothDate').click(function(){
			$('#bothDate').removeClass('hide');
			$('#showDateWise').hide();
			var fromdate=$('#from_date').val();
			var uptodate=$('#upto_date').val();
			$('#fr_date').text('Date -'+fromdate);
			$('#to_date').text('To -'+uptodate);
		})
		$('#changeDate').click(function(){
			$('#showDateWise').show();
			$('#bothDate').addClass('hide');
		})
		$('#resetPage').click(function() {
		    window.location.href=window.location.href;
		});
</script>
