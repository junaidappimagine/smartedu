<!-- begin #content -->
<style type="text/css">
	a { color: inherit; } 
</style>
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Home</a></li>
		<li><a href="javascript:;">Employee Leave Management</a></li>
		<li class="active">Reset leaves </li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Reset leaves <small></small></h1>
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
				<h4 class="panel-title">Reset leaves </h4>
			    </div>
			    <div class="panel-body" id="crop-avatar">
				    <div class="container" style="width: 100% !important">
					    <div class="row">
					    	<div class="col-md-offset-9">
					    		<a href="<?php echo site_url('HrLeaveMgmntCtrl/ResetAllEmployees'); ?>" class=btn btn-inverse btn-sm" style="background-color: #E8AF00;color:white;">Reset Leaves of All Employees</a>
					    	</div>
				    	</div>
					    <!-- <div class="row"> -->
					    	<h4>Reset Leaves</h4>
					    	<h6 style="padding: 7px;">Leave Reset updates the employee's leave balance for all leave types. You can perform a Leave Reset for an individual employee, for all employees of a department, or for all employees in the institution.</h6>
					    <!-- </div> -->
				    	<div class="row">
					    	<div class="col-md-3 form-group">
					    		<input type="text" id="searchEmp" class="form-control input-sm" placeholder="Search Employee Name/Number">
					    	</div>
					    	<div class="col-md-3 form-group">
					    		<select class="form-control selectpicker" id="selectEmp" data-live-search="true" data-style="btn-white btn-sm" onchange="getEmployeeList()">
					    			<option value="all">Select All Department</option>
					    			<option value="english">English</option>
					    			<option value="hindi">Hindi</option>
					    			<option value="maths">Maths</option>
					    			<option value="other">Other Languages</option>
					    			<option value="science">Science</option>
					    			<option>Social Studies</option>
					    			<option>System Admin</option>
					    		</select>
					    	</div>
				    	</div>
				    	<table border="1" class="table hide" id="employeeTable">
				    		<thead style="background-color: #F0F0F0;">
				    			<th>Name</th>
				    			<th>Employee number</th>
				    			<th>Department</th>
				    			<th>Last reset date</th>
				    		</thead>
				    		<tbody>

				    		</tbody>
				    	</table>
				    	<button class="btn btn-inverse hide" id="resetButton" data-toggle="modal" data-target="#myModal">Reset</button>
				    </div>
				    <!-- Modal -->
				  	<div class="modal fade" id="myModal" role="dialog">
				    	<div class="modal-dialog">
				      	<!-- Modal content-->
				      		<div class="modal-content">
				        		<div class="modal-header">
				          			<button type="button" class="close" data-dismiss="modal">&times;</button>
				          			<h4 class="modal-title">Reset leaves</h4>
				        		</div>
				        		<div class="modal-body">
				        			<h6 style="line-height: 20px;">All leaves of the employee(s) will be updated.</h6>
				          			<div class="row">
				          				<div class="col-md-3">
				          					<label>No. of employees</label>
				          				</div>
				          				<div class="col-md-3">
				          					<label>3</label>
				          				</div>
				        			</div>
				        			<div class="row" style="line-height: 50px;">
				          				<div class="col-md-3">
				          					<label>Reset remarks</label>
				          				</div>
				          				<div class="col-md-3" style="line-height: 50px;">
				          					<textarea cols="27"></textarea>
				          				</div>
				        			</div>
				        			<div class="row" style="line-height: 50px;">
				          				<div class="col-md-3">
				          					<label>Reset date</label>
				          				</div>
				          				<div class="col-md-4" style="line-height: 50px;">
				          					<input type="text" name="" class="form-control input-sm">
				          				</div>
				        			</div>
				        			<div class="col-md-offset-4"><a href="<?php echo base_url('HrLeaveMgmntCtrl/resetLogs');?>"><button class="btn btn-inverse input-sm">Reset Leaves</button></a></div>
				        			<!-- <div class="modal-footer">
				          				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        			</div> -->
				      			</div>
				    		</div>
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
<script type="text/javascript">
	table_body='<tr><td colspan="10" align="center">No Employee Found</td></tr>';
	var employeeList=[{'name':'Vijay','number':'A001','dept':'hindi','lastDate':'01/11/16'},{'name':'Rafeeq','number':'A002','dept':'english','lastDate':'12/07/16'},{'name':'Mani','number':'A003','dept':'english','lastDate':'11/11/16'},{'name':'Senthil','number':'A004','dept':'english','lastDate':'10/12/16'}];
	$('#searchEmp').keyup(function(){
		$('#employeeTable').removeClass('hide');
		$('tbody').html(table_body);
	});
	var totallength=employeeList.length;;
	var tableData;
	function getEmployeeList(){
		tableData='';
		var dept=$('#selectEmp').val();
		console.log(dept);
		for(i=0;i<totallength;i++)
		{
			console.log(employeeList[i].dept,'employeeList[i].dept');
			if(employeeList[i].dept==dept){
				getAllEmployeeList(employeeList[i]);
				$('#resetButton').removeClass('hide');
			}
		}
		if(!tableData){
			tableData='<tr><td colspan="8"><center>No Data Found</center></td></tr>';
			$('#resetButton').addClass('hide');
		}
		$('#employeeTable').removeClass('hide');
		$('tbody').html(tableData);
	}
	function getAllEmployeeList(CurrentValue){
		// console.log(CurrentValue,'CurrentValue');
		//return tableData+='<tr><td class="emp_names" style="cursor:pointer">'+CurrentValue.name+'</td><td>'+CurrentValue.number+'</td><td>'+CurrentValue.dept+'</td><td>'+CurrentValue.lastDate+'</td></tr>';
		return tableData+='<tr><td class="emp_names" style="cursor:pointer;"><a style="text-decoration: none;" href="<?php echo base_url('HrLeaveMgmntCtrl/Resetemployeeleaves'); ?>">'+CurrentValue.name+'</a></td><td>'+CurrentValue.number+'</td><td>'+CurrentValue.dept+'</td><td>'+CurrentValue.lastDate+'</td></tr>';
	}
	//$('.emp_names').on('click',function(){
	//	alert();
	//    });
</script>
