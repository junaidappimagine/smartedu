<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">HR</a></li>
				<li><a href="javascript:;">Configurations</a></li>
				<li class="active">Employee Grade</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">HR Configurations | Employee Grade</h1>
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
                              <!--  <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                            </div>
                            <h4 class="panel-title">Employee Grade</h4>
                        </div>
                        <div class="panel-body">
							<div class="well">
								<div class="row">
									<div class="col-md-4"><button type="button" class="btn btn-primary btn-sm" id="Add" value="Add" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i><span class="f-s-14 f-w-500"> Add </span></a></div>
								</div><br>
								<div class="panel-body">
								  <div class="table-responsive">
									   <table id="data-table" class="table table-striped table-bordered">
										  <thead>
											 <tr>
											 <th>Employee Grade</th>
											 <th>Active</th>
											 <th>Action</th>
											 </tr>
										  </thead>
										  <tbody>
											 <tr>
												 <td> <span class="badge badge-success">-</span> &nbsp;&nbsp;Grade 1(3)</td>
																		  <td>Y</td>
												 <td><button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
												 <button type="button"  name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
											 </tr>
											 <tr>
												 <td><span class="badge badge-danger">-</span>&nbsp;&nbsp;Grade 2(1)</td>
																		  <td>N</td>
												 <td><button type="button" name="edit"  id="edit2" value="edit2" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
												 <button onclick="" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
												 </tr>
										  </tbody>
									   </table>
								   </div>
							  </div>
							</div>
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
    <div class="modal-dialog modal-md">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                 <button aria-hidden="true" data-dismiss="modal" class="close" type="button">
				<i class="fa  fa-times-circle "></i>
				</button>
                <h4 class="modal-title" id="header"></h4>
            </div>
            <div class="modal-body">
               <div class="panel-body">
                    <div class="col-md-offset-2">
                       <form method="" action="" class="form-horizontal">
                           <div class="form-group">
                               <label class="col-md-4 control-label">Grade Name</label>
                               <div class="col-md-5">
                                   <input type="text" class="form-control input-sm" id="name" placeholder="" />
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="col-md-4 control-label">Priority</label>
                               <div class="col-md-5">
                                   <input type="text" class="form-control input-sm" id="priority" placeholder="" />
                               </div>
                           </div>
                            <div class="form-group">
                               <label class="col-md-4 control-label">MAx Periods per Day</label>
                               <div class="col-md-5">
                                   <input type="text" class="form-control input-sm" id="day" placeholder="" />
                               </div>
                            </div>
                            <div class="form-group">
                               <label class="col-md-4 control-label">MAx Periods per Week</label>
                               <div class="col-md-5">
                                   <input type="text" class="form-control input-sm" id="week" placeholder="" />
                               </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-6">
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" id="radio_1">Active
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optradio" id="radio_2">Inactive
                                    </label>
                               </div>
                             </div><br>
                            <div class="form-group">
								<label class="col-md-4 control-label"></label>
								<div class="col-md-2">
									<button type="button" class="btn btn-primary btn-sm" id="action" >Create</button>
								</div>
								<div class="col-md-2">
									 <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
								</div>
							</div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
	$('button').click(function(){
		console.log($(this).val());
		if($(this).val()=='Add')
		{
            //alert();
            $('.modal-title').text('Create Employee Grade');
            $('#action').text('Create');
            $("#radio_1").prop("checked", true);
            $("#radio_2").prop("checked", false);
            $('#name').val('');
            $('#day').val('');
            $('#week').val('');
            $('#priority').val('');
		}
		else if($(this).val()=='edit')
		{
            //alert();
            $('.modal-title').text('Edit Employee Garde');
            $('#action').text('Update');
            $("#radio_1").prop("checked", true);
            $('#name').val('Grade 1');
            $('#day').val('4');
            $('#week').val('24');
            $('#priority').val('3');
		}
		else if($(this).val()=='edit2')
		{
            //alert();
            $('.modal-title').text('Edit Employee Category');
            $('#action').text('Update');
            $("#radio_2").prop("checked", true);
            $("#radio_1").prop("checked", false);
            $('#name').val('Grade 2');
            $('#day').val('6');
            $('#week').val('20');
            $('#priority').val('1');
		}
	});
});
</script>	
	
	
  
		