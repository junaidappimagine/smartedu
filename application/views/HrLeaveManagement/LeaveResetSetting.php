<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Home</a></li>
		<li><a href="javascript:;">Employee Leave Management</a></li>
		<li class="active">Leave Reset Settings</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Leave Reset Settings<small></small></h1>
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
				<h4 class="panel-title">Leave Reset Settings</h4>
			    </div>
			    <div class="panel-body" id="crop-avatar">
				    <div class="container" style="width: 100% !important">
				    	<h4>Leave Reset Settings</h4>
					   	<h6 style="line-height: 20px;">Configure how employees with non-deducted LOP leaves will be managed when resetting their leaves.</h6>
	          			<!-- <div class="row"> -->
	          				<label class="radio-inline">
					          <input name="radioGroup" type="radio" checked=""> <b>Do not reset leaves for employees with non-deducted LOP leaves.</b>
					        </label>
	        			<!-- </div> -->
	        			<h6 style="margin-left: 20px;">Employees with non-deducted LOP leaves will be left out during Leave Reset. Option to force Leave Reset available if required.</h6><br>
	          				 <label class="radio-inline">
					          <input name="radioGroup" type="radio"><b>Reset leaves for employees even if non-deducted LOP leaves are present.</b>
					        </label>
					        <h6 style="margin-left: 20px;">Employees with non-deducted LOP leaves will be included when performing a Leave Reset. All LOP leaves taken before the leave reset date will be removed and will not be available when generating the payslip.</h6>
	        			<div class="col-md-3">&nbsp;<button class="btn btn-inverse input-sm">Save Setting</button></div>
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
<style type="text/css">
	a { color: inherit; } 
</style>