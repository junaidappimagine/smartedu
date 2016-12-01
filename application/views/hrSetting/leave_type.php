<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Form Stuff</a></li>
				<li class="active">Form Elements</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Form Elements </h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Employee Category</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
                                <fieldset>
                                    <legend>Employee Category</legend>
                                 <!-- <div class="panel-body">-->
                                     <table class="table table-bordered table-responsive" >
                                         <thead>
                                             <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                 <th width="600px">Categories</th>
                                                 <th width="300px">Action</th>
                                                 
                                            </tr>
                                        </thead>
                                         <tbody>
                                             <tr>
                                                 <td> <input type="radio" value="" name="status"> &nbsp;&nbsp;Category 1(C1)</td>
                                                 <td><a onclick="" name="edit" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></a>
                                                 <a onclick="" name="edelete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
                                                
                                            </tr>
                                            <tr>
                                                 <td> <input type="radio" value="" name="status">&nbsp;&nbsp;Category 2(C2)</td>
                                                 <td><a onclick="" name="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                                 <a onclick="" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
                                                
                                            </tr>
                                        </tbody>
                                     </table>
                                   <!-- </div>-->
                            </fieldset>
                        </div>
                        <!--end well-->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12-->
				
                <!-- begin col-6 -->
               
			   <!-- <div class="col-md-6">-->
			        <!-- begin panel -->
                   <!-- <div class="panel panel-inverse" data-sortable-id="form-stuff-3">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Default Style</h4>
                        </div>
                        <div class="panel-body">
                            <form action="http://seantheme.com/" method="POST">
                                <fieldset>
                                    <legend>Legend</legend>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" /> Check me out
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary m-r-5">Login</button>
                                    <button type="submit" class="btn btn-sm btn-default">Cancel</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>-->
                    <!-- end panel -->
               <!-- </div>-->
                <!-- end col-6 -->
			  <div>
            <!-- end row -->
            </div>
		<!-- end #content -->
        
        
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Employee Category</h4>
        </div>
        <div class="modal-body">
           <!-- <div class="panel-group">
                <div class="panel panel-primary">
                   <div class="panel-heading">Edit Employee category</div>-->
                       <div class="panel-body">
						<div class="col-md-offset-3">
                           <form method="" action="" class="form-horizontal">
                               <div class="form-group">
                                   <label class="col-md-2 control-label">Name</label>
                                   <div class="col-md-4">
                                       <input type="text" class="form-control input-sm" placeholder="" />
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label class="col-md-2 control-label">Prefix</label>
                                   <div class="col-md-4">
                                       <input type="text" class="form-control input-sm" placeholder="" d/>
                                   </div>
                               </div>
                               <div class="form-group">
                                   <label class="col-md-2 control-label">Status</label>
                                   <div class="col-md-4">
                                      <label class="radio-inline">
                                             <input type="radio" class="" name="optradio">Active
                                      </label>
                                     <label class="radio-inline">
                                              <input type="radio" class="" name="optradio">Inactive
                                      </label>
                                   </div>
                               </div><br>
                               <div class="form-group">
                                       <label class="col-md-2 control-label"></label>
                                       <div class="col-md-5">
                                           <button type="button" class="btn btn-primary btn-sm">Update</button>
                                       </div>
                               </div>
                           </form>
						</div>
                       </div>
                <!--</div>
            </div>-->
        </div>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>-->
      
    </div>
  </div>
  
		