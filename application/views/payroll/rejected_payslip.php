    <html>
        <head>
            <style>
                .panel-body h1{
                 font-size: 15px;
                }
		
            </style>
        </head>     
        <body>
            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="javascript:;">HR</a></li>
                    <li><a href="javascript:;">Payroll and Payslip Management</a></li>
                    <li class="active">Rejected Payslips</li>
                    
                </ol>
                 <h1 class="page-header">HR Management | Rejected payslips </h1>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                            <div class="panel-heading">
                                <div class="panel-heading-btn">
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                   <!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                                </div>
                               <h4 class="panel-title">Rejected payslips</h4>
                            </div>
                            <div class="panel-body" >
				<div class="col-md-12 row">
					  <h1 class="page-header"><b> Rejected payslips </<b></h1>
					  <p>List of rejected employee payslips. You can edit the payslip details and generate it again, or delete the payslip</p>
				</div>
				<div class="col-md-12 row">
				    <br>
				     <div class="form-group">
					<div class="col-sm-4">
					    
					</div>
					<div class="col-sm-1">
					    <br><br>
				    		<p>Filters</p>
					    
					</div>
					<div class="col-sm-3">
					    <label class="label-control">Payroll group </label>
					    <select class="form-control input-sm">
						<option>All Payroll Groups</option>
						
					    </select>
						
					</div>
					<div class="col-sm-3">
					    <label class="label-control ">Employee department </label>
					    <select class="form-control input-sm">
						<option>All Departments</option>
						
					    </select>
					</div>
				     </div>
				</div>
				
				<div class="col-md-12 row"><br><br>
				     <div class="table-responsive">
                                             <table id="data-table" class="table table-striped table-bordered">
                                                 <thead>
                                                    <tr>
                                                        <th>Employee</th>
                                                        <th>Pay period</th>
                                                        <th>Payroll group</th>
							<th>Department</th>
							<th>Remarks</th>
							<th></th>
                                                    </tr>
                                                 </thead>
                                                 <tbody>
                                                   
                                                   
                                                 </tbody>
                                             </table>
                                         </div>
				</div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
        <script>
	   
            $(document).ready(function(){
		$('#datePicker')
		    .datepicker({
			format: 'M-Y'
		    });
            });
	    function filterData() {
		$("#add").removeClass('hidden');
	    }
	    
        </script>
     </html>

    