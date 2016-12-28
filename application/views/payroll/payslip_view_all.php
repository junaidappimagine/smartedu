    <html>
        <head>
            <style>
                .panel-body h1{
                 font-size: 15px;
                }
                .table {
                    margin-bottom: 20px;
                    max-width: 100%;
                    width: 200% !important;
                    border-collapse:separate !important;
                }
                .headcol{
                    position : absolute;
                    width:4em; 
                    left:0;
                    top:auto;
                }
                .headcol1{
                    position : absolute;
                    left:47px;
                    width:14em; 
                    /*border-collapse: collapse;
                    padding: 10px;*/
                }
                /*.headcol2{
                    position : absolute;
                    left:214px;
                    width:8em;
                }*/
                .table-responsive{
                    margin-left: 209px !important;
                }
            </style>
        </head>     
        <body>
            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="javascript:;">HR</a></li>
                    <li><a href="javascript:;">Payroll and Payslip Management</a></li>
                    <li class="active">Payslips for Payroll Groups</li>
                    <li class="active">Generate Payslips</li>
                    <!--<li class="active">Employees with Outdated Payroll </li>-->
                </ol>
                 <h1 class="page-header">HR Management | View Payslips </h1>
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
                               <h4 class="panel-title">Payroll group - Current Payslip</h4>
                            </div>
                            <div class="panel-body" >
                                <div class="col-md-10 row">
                                    <h1 class="page-header"><b>Payroll group - Current Payslip</<b></h1>
                                    <div class="form-group">
                                        <span class="col-md-4">Payroll group</span>
                                        <span class="col-md-4">Payment frequency</span>
                                        <span class="col-md-4">Payslips generated</span>
                                         <!--<label class="col-md-10">
                                             : &nbsp; Current Payslip
                                         </label><br>-->
                                    </div>
                                </div>
                                <div class="col-md-10 row">
                                    <div class="form-group">
                                        <p></p>
                                        <label class="col-md-4 control-label"><b>January 2017</b></label>
                                        <label class="col-md-4 control-label"><b>Salaried - Monthly</b></label>
                                        <label class="col-md-4 control-label"><b>2 of 8 Employees</b></label>
                                    </div><br>
                                    <p></p>
                                    <hr>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="col-md-10">
                                        <div class="col-md-1" style="margin:25px">
                                            <label>Filters</label>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-md-2 control-label">Employees</label>
                                            <select class="form-control selectpicker input-sm"  data-style="btn-white btn-sm" name="" id="dropdown1" onchange="filterData()">
                                                <option value="" selected="selected">All</option>
                                                <option value="With LOB">With LOB</option>
                                                <option value="Without LOB">Without LOB</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="col-md-12 control-label">Payslip status</label>
                                            <select class="form-control selectpicker input-sm"  data-style="btn-white btn-sm" name="" id="dropdown2" onchange="filterData()">
                                                <option value="Pending" selected="selected">Pending</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2" style="margin:20px">
                                            <button type="button" class="btn btn-inverse btn btn-sm" style="float: right">Delete All Payslips</button>
                                        </div>
                                    </div>
                                    <div class="col-md-2" style="margin-top:15px">
                                        <p></p>
                                        <label>Total net pay <b>Rs. 56800.00</b></label>
                                    </div> 
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2"></th>
                                                        <th colspan="6" class="earning header-col">
                                                            <div class="cat_header">Earnings</div>
                                                            <!--<div class="add_link themed_text" id="earning" onclick="showModalBox();">Add</div>-->
                                                        </th>
                                                        <th colspan="3" class="deduction header-col">
                                                            <div class="cat_header">Deductions</div>
                                                            <!--<div class="add_link themed_text" id="deduction" onclick="showModalBox();">Add</div>-->
                                                        </th>
                                                    </tr>
                                                    <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                        <th class="headcol" style="background-color: #d9edf7; border-color: #b6e2ef;">Status</th>
                                                        <th class="headcol1" style="background-color: #d9edf7; border-color: #b6e2ef;">Employee name</th>
                                                        <th>Department</th>
                                                        <th>
                                                            <div>Basic</div>
                                                        </th>
                                                        <th>
                                                            <div>Housing Allowance</div>
                                                        </th>
                                                        <th>
                                                            <div>Human Resource Allowance</div>
                                                        </th>
                                                        <th>
                                                            <div>Transport Allowance</div>
                                                        </th>
                                                        <th class="category_name">
                                                            <div>Basic1</div>
                                                        </th>
                                                        <th>Total Earnings</th>
                                                        <th>
                                                            <div>Income Tax</div>
                                                        </th>
                                                        <th>
                                                            <div>Provident Fund</div>
                                                        </th>
                                                        <th>Total Deductions</th>
                                                        <th>Net Pay</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="check_box headcol">
                                                            <div class="pending symbol"></div>
                                                        <th class="headcol1">
                                                            <div class="e_name" tooltip="fsfsfgsdgsdg   (EMP010)">fsfsfgsdgsdg   (EMP010)</div>
                                                        </th>
                                                        <td>Science</td>
                                                        <td>
                                                            <span onclick="makeTdEditable(this)">5.00</span>
                                                        </td>
                                                        <td>
                                                            <span onclick="makeTdEditable(this)">2.50</span>
                                                        </td>
                                                        <td>
                                                            <span onclick="makeTdEditable(this)">1.25</span>
                                                        </td>
                                                        <td>
                                                            <span onclick="makeTdEditable(this)">1.25</span>
                                                        </td>
                                                        <td>
                                                            <span onclick="makeTdEditable(this)">10.00</span>
                                                        </td>
                                                        <td>20.00</td>
                                                        <td>
                                                            <span onclick="makeTdEditable(this)">1.00</span>
                                                        </td>
                                                        <td>
                                                            <span onclick="makeTdEditable(this)">1.25</span>
                                                        </td>
                                                        <td>2.25</td>
                                                        <td>17.75</td>
                                                        <td><a>View Payslip</a> &nbsp;&nbsp;&nbsp;&nbsp;<a  id="Add" class="btnDelete"><i class="fa fa-trash"></i><span>&nbsp; Delete payslip</span></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('Payslip/pdf_generate');?>">PDF report</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="check_box headcol">
                                                            <div class="pending symbol"></div>
                                                        </th>
                                                        <th class="headcol1">
                                                            <div class="e_name" tooltip="Kunal   (EMP001)">Kunal   (EMP001)</div>
                                                        </th>
                                                        <td>Science</td>
                                                        <td>
                                                            <span onclick="makeTdEditable(this)">15000.00</span>
                                                        </td>
                                                        <td>
                                                            <span onclick="makeTdEditable(this)">7500.00</span>
                                                        </td>
                                                        <td>
                                                            <span onclick="makeTdEditable(this)">3750.00</span>
                                                        </td>
                                                        <td>
                                                            <span onclick="makeTdEditable(this)">3750.00</span>
                                                        </td>
                                                        <td>
                                                            <span onclick="makeTdEditable(this)">30000.00</span>
                                                        </td>
                                                        <td>60000.00</td>
                                                        <td>
                                                            <span onclick="makeTdEditable(this)">3000.00</span>
                                                        </td>
                                                        <td>
                                                            <span onclick="makeTdEditable(this)">3750.00</span>
                                                        </td>
                                                        <td>6750.00</td>
                                                        <td>53250.00</td>
                                                        <td><a>View Payslip</a> &nbsp;&nbsp;&nbsp;&nbsp;<a  id="Add" class="btnDelete"><i class="fa fa-trash"></i><span>&nbsp; Delete payslip</span></a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('Payslip/pdf_generate');?>">PDF report</a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </body>
        <script>
		$(function () {
		    $('.datepicker-dob').datepicker({format:'MM yyyy'});
		});
		
		$(".btnDelete").click(function(){
			var $row = $(this).parents('tr');
			bootbox.confirm("Are you sure you want to delete?", function(confirmed) {   
			if (confirmed) {
                            $row.remove();
			}    
		    });
                });
                
                $('#dropdown1').on('change', function () {
                    var table =  $('#data-table').DataTable();
                    table.columns(1).search( this.value ).draw();
                } );
                $('#dropdown2').on('change', function () {
                    var table =  $('#data-table').DataTable();
                    table.columns(4).search( this.value ).draw();
                } );
		
        </script>
     </html>

    