    <html>
        <head>
            <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
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
                    <li><a href="javascript:;">Configuration</a></li>
                    <li class="active">Employee Search </li>
                </ol>
                 <h1 class="page-header">Employee Search | Employee details</h1>
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
                                            <h1 class="page-header"><b>Employee details</b></h1>
                                        
                                        <!--<div class="col-sm-2">
                                            <center><a href="<?php echo base_url('hrSettingsC/employeeSearchView');?>" name="view" class="btn btn-xs btn-primary">View all</a>  <a href="<?php echo base_url('hrSettingsC/advancedSearch');?>" name="advanced" class="btn btn-xs btn-warning">Advanced</a></center>
                                            
                                        </div>-->
                                        <hr>
                                        <table id="example" class="display" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Employee name </th>
                                                    <th>Emp ID </th>
                                                    <th>department </th>
                                                    <th>Category</th>
                                                    <th>Position</th>
                                                    <th>Grade</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Employee name </th>
                                                    <th>Emp ID </th>
                                                    <th>department </th>
                                                    <th>Category</th>
                                                    <th>Position</th>
                                                    <th>Grade</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <tr>
                                                    <td>Keerthi</td>
                                                    <td>EMP003</td>
                                                    <td>Maths</td>
                                                    <td>Finance</td>
                                                    <td>junior</td>
                                                    <td>Grade 1</td>
                                                </tr>
                                                <tr>
                                                    <td>Senthil</td>
                                                    <td>EMP007</td>
                                                    <td>English</td>
                                                    <td>Human Resource</td>
                                                    <td>junior emp</td>
                                                    <td>Grade 3</td>
                                                </tr>
                                                <tr>
                                                    <td>Rafeeq</td>
                                                    <td>EMP002</td>
                                                    <td>Hindi</td>
                                                    <td>System Admin</td>
                                                    <td>Senior</td>
                                                    <td>Grade 4</td>
                                                </tr>
                                                <tr>
                                                    <td>Manikandan</td>
                                                    <td>EMP013</td>
                                                    <td>social</td>
                                                    <td>Librarian</td>
                                                    <td>Junior</td>
                                                    <td>Grade 2</td>
                                                </tr>
                                                <tr>
                                                    <td>vijay</td>
                                                    <td>EMP010</td>
                                                    <td>social Studies</td>
                                                    <td>Teacher</td>
                                                    <td>System Admin</td>
                                                    <td>System Admin</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                  <!--  </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
            <script>
                
                $(document).ready(function() {
                    $('#example').DataTable( {
                        initComplete: function () {
                            this.api().columns().every( function () {
                                var column = this;
                                var select = $('<select class="form-control input-sm"><option value="">Select</option></select>')
                                    .appendTo( $(column.footer()).empty() )
                                    .on( 'change', function () {
                                        var val = $.fn.dataTable.util.escapeRegex(
                                            $(this).val()
                                        );
                 
                                        column
                                            .search( val ? '^'+val+'$' : '', true, false )
                                            .draw();
                                    } );
                 
                                column.data().unique().sort().each( function ( d, j ) {
                                    select.append( '<option value="'+d+'">'+d+'</option>' )
                                } );
                            } );
                        }
                    } );
                } );
            </script>
            
            
            
            
        </body>
    </html>

    