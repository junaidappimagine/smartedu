
<link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet" />
<style>
    tr.group,
tr.group:hover {
    background-color: #ddd !important;
}
</style>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Home</a></li>
		<li><a href="javascript:;">Employee Payslip</a></li>
		<li class="active">Payslip Report</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Payslip Report<small></small></h1>
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
				<h4 class="panel-title">Payslip Report</h4>
			    </div>
			    <div class="panel-body" id="crop-avatar">
                     <div class="row">
				    	<div class="col-md-3">
                            <div class="form-group">
                                <label>Departments</label>
                                    <select id="dropdown1" class="form-control selectpicker" data-style="btn-white btn-sm">
										<option value="">All</option>
										<option value="English">English</option>
										<option value="Maths">Maths</option>
										<option value="Science">Science</option>
									</select>
                            </div>
				    	</div>
				    	<div class="col-md-2">
                            <label>From &nbsp;</label>
									<input type="text" class="form-control" placeholder="From Date">
                        </div>
                        <div class="col-md-2">
                            <label>To &nbsp;</label>
                            <input type="text" class="form-control" placeholder="To Date">
					    </div>
                        <div class="col-md-2">
                            <label>&nbsp;</label>
                            <div></div>
                                <button class="btn btn-primary btn-sm" onclick="showData();">View Payslip</button>
					    </div>
					</div>
					<div class="data">
					<table id="example" class="display" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Employee</th>
								<th>Employee No</th>
								<th>Subject</th>
								<th>Payment Frequency</th>
								<th>Payslip Period</th>
								<th>Amount(Rs.)</th>
								<th>Payslip Status</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Priya</td>
								<td>emp001</td>
								<td>English</td>
								<td>Monthly</td>
								<td>Dec-2016</td>
								<td>5000</td>
								<td>Pending</td>
								<td><a href="<?php echo base_url('payslip/ViewEmployee?var1=Priya&var2=English');?>" >view</a></td>
							</tr>
					
							 <tr>
								<td>shreeja</td>
								<td>emp002</td>
								<td>English</td>
								<td>Monthly</td>
								<td>Jan-2016</td>
								<td>5000</td>
								<td>Pending</td>
								<td><a href="<?php echo base_url('payslip/ViewEmployee?var1=shreeja&var2=English');?>">view</a></td>
							</tr>
							
							 <tr>
								<td>hari</td>
								<td>emp003</td>
								<td>Maths</td>
								<td>Monthly</td>
								<td>Feb-2016</td>
								<td>5000</td>
								<td>Pending</td>
								<td><a href="<?php echo base_url('payslip/ViewEmployee?var1=hari&&var2=Maths');?>">view</a></td>
							</tr>
							  <tr>
								<td>dhivya</td>
								<td>emp004</td>
								<td>Science</td>
								<td>Monthly</td>
								<td>Aug-2016</td>
								<td>5000</td>
								<td>Pending</td>
								<td><a href="<?php echo base_url('payslip/ViewEmployee?var1=dhivya&var2=Science');?>">view</a></td>
							</tr>
							  <tr>
								<td>shiva</td>
								<td>emp005</td>
								<td>Maths</td>
								<td>Monthly</td>
								<td>Sep-2016</td>
								<td>5000</td>
								<td>Pending</td>
								<td><a href="<?php echo base_url('payslip/ViewEmployee?var1=shiva&var2=Maths');?>">view</a></td>
							</tr>
							  <tr>
								<td>krishna</td>
								<td>emp006</td>
								<td>Science</td>
								<td>Monthly</td>
								<td>Jan-2016</td>
								<td>5000</td>
								<td>Pending</td>
								<td><a href="<?php echo base_url('payslip/ViewEmployee?var1=krishna&var2=Science');?>">view</a></td>
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

<script>
$('.data').addClass('hide');

function showData() {
      $('.data').removeClass('hide');
}

$(document).ready(function() {
    var table = $('#example').DataTable({
        "columnDefs": [
            { "visible": false, "targets": 2 }
        ],
        "order": [[ 2, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="7">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    $('#example tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 2 && currentOrder[1] === 'asc' ) {
            table.order( [ 2, 'desc' ] ).draw();
        }
        else {
            table.order( [ 2, 'asc' ] ).draw();
        }
    } );
	$('#dropdown1').on('change', function () {
        table.rows(1).search( this.value ).draw();
   });
} );






</script>
