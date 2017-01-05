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
                    <li><a href="javascript:;">News</a></li>
                    <li><a href="javascript:;">View All</a></li>
                </ol>
                 <h1 class="page-header">School News | Latest announcements</h1>
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
                               <h4 class="panel-title">News</h4>
                            </div>
                            <div class="panel-body" >
                                        <div class="row">
                                            <div style="float: right;">
                                                
                                                <div class="col-md-2 col-md-offset-1">
                                                     <a href="<?php echo base_url('NewsCtrl/addNews'); ?>" class="btn btn-primary btn-xs" role="button"><i class="fa fa-plus fa-1x"></i> Add New</a>
                                                </div>
                                           </div>
                                        </div>
                                       <div class="row">
                                            <hr>
                                       </div>
                                       
                                    <div class="form-group col-sm-12">
                                              <div class="table-responsive">
                                                  <table id="data-table" class="table table-striped table-bordered">
                                                      <thead>
                                                      <tr>
                                                          <th>Sl. no.</th>
                                                          <th>Title</th>
                                                          <th>Author </th>
                                                          <th>Comments</th>
                                                          <th>Posted </th>
                                                      </tr>
                                                      </thead>
                                                      <tbody>
                                                         
                                                      </tbody>
                                                  </table>
                                               </div>
                                          </div>
                                  <!--  </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <script>
                
                $(document).ready(function() {
                   
                } );
            </script>
            
            
            
            
        </body>
    </html>

    