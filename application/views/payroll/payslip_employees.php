    <html>
        <head>
            <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
            <style>
                .panel-body h1{
                 font-size: 15px;
                }
                tr.group,
                tr.group:hover {
                    background-color: #ddd !important;
                }
              /*  btn-group-sm > .btn, .btn-sm {
                    border-radius: 3px;
                    font-size: 12px;
                    line-height: 0.5;
                    padding: 4px 3px;
                }*/
            </style>
        </head>     
        <body>
            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="javascript:;">HR</a></li>
                    <li><a href="javascript:;">Payroll and Payslip Management</a></li>
                    <li class="active"> Payslips Employees </li>
                </ol>
                 <h1 class="page-header">HR Management|  Payslips for Employees</h1>
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
                               <h4 class="panel-title">Employees</h4>
                            </div>
                            <div class="panel-body" >
                                <div class="form-group col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-10">
                                              <h1 class="page-header"><b>Payslips for Employees</b></h1>
                                        </div>
                                         <div class="col-sm-2">
                                             <a href="<?php echo base_url('payslip/rejected_payslip'); ?>"> <button class="btn btn-warning btn-xs">Rejected payslip</button> </a>
                                         </div>
                                    </div>
                                </div>  <hr>
                                 <div class="form-group col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <p></p>
                                            <label>Department</label>
                                        </div>
                                         <div class="col-sm-3">
                                            <select class="form-control selectpicker" id="dropdown1" data-style="btn-white btn-sm">
                                                <option value="Maths">Maths</option>
                                                <option value="English">English</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="Social">Social</option>
                                                <option value="Social Studies">Social Studies</option>
                                            </select><br><br>
                                         </div>
                                    </div>
                                </div>  
                               <div class="form-group col-sm-12">
                                     <table id="example" class="display" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Employee name</th>
                                                    <th>Payroll group</th>
                                                    <th class="">department </th>
                                                    <th>Payment frequency</th>
                                                    <th>Recent payslip</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tfoot>
                                               <!-- <tr>
                                                    <th class="hidden">Employee name </th>
                                                    <th class="hidden">Emp ID </th>
                                                    <th class="">department </th>
                                                    <th class="hidden">Category</th>
                                                    <th class="hidden">Position</th>
                                                   
                                                </tr>-->
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    
                                                    <td>Keerthi (EMP003)</td>
                                                    <td>Current Payslip</td>
                                                    <td>Maths</td>
                                                    <td>Salaried - Monthly</td>
                                                    <td>May 2017</td>
                                                    <td>
                                                        <div class="col-sm-5">
                                                            <a href="<?php echo base_url('payslip/generate_payslip'); ?>"> <button class="btn btn-warning btn-xs">Generate payslip</button> </a>
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <a href="<?php echo base_url('payslip/generatedPayslips_view'); ?>"> <button class="btn btn-primary btn-xs">View Payslips</button></a>
                                                        </div>
                                                        
                                                        
                                                    </td>
                                                  
                                                </tr>
                                                <tr>
                                                    <td>Senthil (EMP007)</td>
                                                    <td>Current Payslip</td>
                                                    <td>English</td>
                                                    <td>Salaried - Monthly</td>
                                                    <td>April 2017</td>
                                                    <td>
                                                        <div class="col-sm-5">
                                                            <a href="<?php echo base_url('payslip/generate_payslip'); ?>"> <button class="btn btn-warning btn-xs">Generate payslip</button> </a>
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <a href="<?php echo base_url('payslip/generatedPayslips_view'); ?>"> <button class="btn btn-primary btn-xs">View Payslips</button></a>
                                                        </div>
                                                        
                                                        
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>Rafeeq (EMP002)</td>
                                                    <td>-</td>
                                                    <td>Hindi</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                   <td>
                                                    <div class="col-sm-5">
                                                        <a href="<?php echo base_url(''); ?>"> <button class="btn btn-warning btn-xs">Update Payroll</button> </a>
                                                    </div>
                                                    <div class="col-sm-4">
                                                         <a href="<?php echo base_url('payslip/generatedPayslips_view'); ?>"> <button class="btn btn-primary btn-xs">View Payslips</button></a>
                                                    </div>
                                                    
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>Manikandan (EMP013)</td>
                                                    <td>Current Payslip</td>
                                                    <td>Social</td>
                                                    <td>Salaried - Monthly</td>
                                                    <td>January 2017</td>
                                                    <td>
                                                         <div class="col-sm-5">
                                                            <a href="<?php echo base_url('payslip/generate_payslip'); ?>"> <button class="btn btn-warning btn-xs">Generate payslip</button> </a>
                                                         </div>
                                                         <div class="col-sm-4">
                                                            <a href="<?php echo base_url('payslip/generatedPayslips_view'); ?>"> <button class="btn btn-primary btn-xs">View Payslips</button></a>
                                                         </div>
                                                        
                                                        
                                                    </td>
                                                   
                                                </tr>
                                                <tr>
                                                    <td>vijay (EMP010)</td>
                                                    <td>-</td>
                                                    <td>Social Studies</td>

                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>
                                                        <div class="col-sm-5">
                                                            <a href="<?php echo base_url(''); ?>"> <button class="btn btn-warning btn-xs">Update Payroll</button> </a>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <a href="<?php echo base_url('payslip/generatedPayslips_view'); ?>"> <button class="btn btn-primary btn-xs">View Payslips</button></a>
                                                        </div>
                                                        
                                                        
                                                    </td>
                                                   
                                                </tr>
                                                
                                            </tbody>
                                        </table>

                               </div>
                                  <!--  </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
            <script>
                
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
                                    '<tr class="group"><td colspan="5">'+group+'</td></tr>'
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
                    table.rows().search( this.value ).draw();
                } );
                
                
                
            } );
            </script>
            
            
            
            
        </body>
    </html>

    