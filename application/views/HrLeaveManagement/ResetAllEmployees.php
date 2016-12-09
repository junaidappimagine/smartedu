<style type="text/css">
	a { color: inherit; } 
</style>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Home</a></li>
		<li><a href="javascript:;">Employee Leave Management</a></li>
		<li class="active">Reset Leaves of All Employees </li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Reset Leaves of All Employees <small></small></h1>
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
				<h4 class="panel-title">Reset Leaves of All Employees </h4>
			    </div>
			    <div class="panel-body" id="crop-avatar">
				    <div class="container" style="width: 100% !important">
				    	<h4>Reset Leaves of All Employees</h4>
					   	<h6 style="line-height: 20px;">Leaves for all employees in the institution will be updated.</h6>
	          			<div class="row">
	          				<div class="col-md-3">
	          					<label>No. of employees</label>
	          				</div>
	          				<div class="col-md-3">
	          					<label>10</label>
	          				</div>
	        			</div>
	        			<div class="row" style="line-height: 50px;">
	          				<div class="col-md-3">
	          					<label>Reset remarks</label>
	          				</div>
	          				<div class="col-md-3" style="line-height: 50px;">
	          					<textarea cols="39"></textarea>
	          				</div>
	        			</div>
	        			<div class="row" style="line-height: 50px;">
	          				<div class="col-md-3">
	          					<label>Reset date</label>
	          				</div>
	          				<div class="col-md-3" style="line-height: 50px;">
	          					<!-- <input type="text" name="" class="form-control input-sm" placeholder="03/December/2016"> -->
	          					<span class="input-group">
								<input type="text" class="form-control dateSet input-sm" id="from_date" value="<?php echo date('d F Y');?>">
								<span class="input-group-addon" >
								    <span class="glyphicon glyphicon-calendar"></span>
								</span>
							    </span>
	          				</div>
	        			</div>
	        			<div class="col-md-offset-3">&nbsp;<button class="btn btn-inverse input-sm">Reset Leaves</button></div>
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
	$(document).ready(function(){
	    $('.dateSet').datepicker({
			format: 'd MM yyyy',
	    });
	})
	table_body='<tr><td colspan="10" align="center">No Employee Found</td></tr>';
	var employeeList=[{'name':'vijay','number':'A001','dept':'hindi','lastDate':'01/11/16'},{'name':'rafeeq','number':'A002','dept':'english','lastDate':'12/07/16'},{'name':'mani','number':'A003','dept':'english','lastDate':'11/11/16'},{'name':'senthil','number':'A004','dept':'english','lastDate':'10/12/16'}];
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
		return tableData+='<tr><td>'+CurrentValue.name+'</td><td>'+CurrentValue.name+'</td><td>'+CurrentValue.name+'</td><td>'+CurrentValue.name+'</td></tr>';
	}


</script>