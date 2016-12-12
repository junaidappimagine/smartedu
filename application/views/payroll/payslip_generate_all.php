    <html>
        <head>
            <style>
                .panel-body h1{
                 font-size: 15px;
                }
                .table {
                    margin-bottom: 20px;
                    max-width: 100%;
                    width: 165% !important;
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
                
                input[type="checkbox"], input[type="radio"] {
                    line-height: normal;
                    margin: 0 !important;
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
                    <li class="active">Employees with Outdated Payroll </li>
                </ol>
                 <h1 class="page-header">HR Management | Generate All Payslips </h1>
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
                               <h4 class="panel-title">Generate Payslips </h4>
                            </div>
                            <div class="panel-body" >
                                <div class="col-md-12 row">
                                    <h1 class="page-header"><b>Generate Payslips</<b></h1>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Payroll group</label>
                                         <label class="col-md-10">
                                             : &nbsp; Current Payslip
                                         </label><br>
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Pay period</label>
                                         <label class="col-md-10">
                                             : &nbsp; December 2016 
                                         </label>
                                    </div><br>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Payment frequency</label>
                                         <label class="col-md-10">
                                             : &nbsp; Salaried - Monthly
                                         </label>
                                    </div><br>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <span>0 of 2 employees selected</span>
                                        </div>
                                        <div class="col-md-2">
                                            <label style="cursor:pointer" id="clearAll"><u>Clear All</u></label>
                                            <label style="cursor:pointer; display:none;" id="selectAll"><u>Select All</u></label>
                                        </div>
                                        <div class="col-md-8">
                                            <label style="float:right">Total net pay <b>Rs 53267.75</b></label>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                    <hr>
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
                                                        <th class="headcol" style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                            <input class="check_box" id="select_all" checked="checked" type="checkbox">
                                                        </th>
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
                                                        <!--<th onclick="resetEntireTable();">Reset all</th>-->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="check_box headcol">
                                                            <input id="3476" checked="checked" type="checkbox"></th>
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
                                                        <!--<td></td>-->
                                                    </tr>
                                                    <tr>
                                                        <th class="check_box headcol">
                                                            <input id="3240" checked="checked" type="checkbox">
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
                                                        <!--<td></td>-->
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
					<div class="col-md-8 col-sm-offset-4">
                                            <hr>
                                            <p></p>
                                            <p></p>
					    <div class="col-md-3">
						 <button type="submit" class="btn btn-sm btn-success">Generate Payslip</button>
					    </div>
					    <div class="col-md-4">
						<input type="button" class="btn btn-sm btn-danger" onclick="window.history.back();" value="Cancel" >
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
		
		$('#payslipDetails').on('click', function(){
		    var datevalue = $('#pay_period').val();
		    //alert(ss);
		    $('.showDiv').css('display','block');
		    $('.datePick').css('display','none');
		    $('.dateValChange').text(datevalue).css('display','block');
		    $('#payslipDetails').css('display','none');
		    $('#dateChange').css('display','block');
		});
		
		$('#dateChange').on('click', function(){
		    $('#payslipDetails').css('display','block');
		    $('.datePick').css('display','block');
		    $('#pay_period').val('');
		    $('.dateValChange').css('display','none');
		    $('#dateChange').css('display','none');
		    $('#cancelbut').css('display','block');
		});
		
		$('#cancelbut').on('click', function(){
		    $('.datePick').css('display','none');
		    $('.dateValChange').css('display','block');
		    $('#payslipDetails').css('display','none');
		    $('#dateChange').css('display','block');
		    $('#cancelbut').css('display','none');
		});
                
                $('#goBack').on('click', function(){
                    window.history.back();
                });
                
                $('#clearAll').on('click', function(){
                    //$('input:checkbox').removeAttr('checked');
                    $('input:checkbox').prop('checked', false);
                    $('#clearAll').css('display', 'none');
                    $('#selectAll').css('display', 'block');
                });
                
                $('#selectAll').on('click', function(){
                    $('input:checkbox').prop('checked', true);
                    $('#clearAll').css('display', 'block');
                    $('#selectAll').css('display', 'none');
                });
		
        </script>
     </html>

    