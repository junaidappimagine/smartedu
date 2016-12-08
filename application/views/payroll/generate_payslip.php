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
                   <!-- <li class="active">Payslips for Payroll Groups</li>-->
                    <li class="active">Generate Employee Payslips</li>
                </ol>
                 <h1 class="page-header">HR Management | Generate Employee Payslip </h1>
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
                               <h4 class="panel-title">Generate Payslips</h4>
                            </div>
                            <div class="panel-body" >
				<div class="col-md-12 row">
				    <div class="col-md-12 row">
					  <h1 class="page-header"><b> Generate Employee Payslip: Keerthi (EMP003)</<b></h1>
					<div class="form-group">
						<section class="col-sm-3 form-group">
						    <span class='input-group'>
							<input type='text' id="datePicker" name="dailyDate" class="form-control input-sm input-group datetimepicker defaultdate" value="<?php echo date('M-Y'); ?>" />
							<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
						        </span>
						    </span>                                 					    
					     </section>
					</div><br>
				    </div>
                                </div>
				
				<div class="col-md-12" style="border-bottom: 1px solid gray" >
				   
				    <div class="form-group">
					<label class="col-sm-2" style="text-align: left;">Name</label>
					<label class="col-sm-1" style="text-align: left;">:</label>
					<label class="col-sm-9">Keerthi</label>
				    </div>
				    <div class="form-group">
					<label class="col-sm-2" style="text-align: left;">Department</label>
					<label class="col-sm-1" style="text-align: left;">:</label>
					<label class="col-sm-9">Hindi</label>
				    </div>
				    <div class="form-group">
					<label class="col-sm-2" style="text-align: left;">Position</label>
					<label class="col-sm-1" style="text-align: left;">:</label>
					<label class="col-sm-9">System Admin</label>
				    </div>
				</div>
				 <hr>
				    
				<div class="col-md-12">
				     <h1 class="page-header"><b> Payroll Details </b></h1>
				     <div class="form-group">
					 
					<label class="col-sm-2" style="text-align: left;">Payroll group</label>
					<label class="col-sm-1" style="text-align: left;">:</label>
					<label class="col-sm-9">Current Payslip</label>
				    </div>
				      <div class="form-group">
					<label class="col-sm-2" style="text-align: left;">Payment frequency</label>
					<label class="col-sm-1" style="text-align: left;">:</label>
					<label class="col-sm-9">Salaried - Monthly</label>
				    </div>
				 </div>
				 <!--   <div class="col-md-12 row">-->
				       
				        <div class="col-md-12" >
					    <h1 class="page-header"><b> Payroll categories of this payroll group </<b></h1>
				       <p>The payroll amounts are calculated based on how each payroll category is set up. You can edit the amounts if needed.</p>
					    <h1 class="page-header"><b> Earnings </b></h1>
					   
					    <div class="form-group col-sm-12">
						<label class="col-sm-2" style="text-align: left;">Basic Pay</label>
						<label class="col-sm-1" style="text-align: left;">:</label>
						<div class="col-sm-2">
						<input type="text" class="form-control input-sm" name="" value="13277">
						<p></p>
						</div>
						<div class="col-sm-5"></div>
					    </div>
					    <div class="form-group col-sm-12">
						<label class="col-sm-2" style="text-align: left;">Bonus</label>
						<label class="col-sm-1" style="text-align: left;">:</label>
						<div class="col-sm-2">
						<input type="text" class="form-control input-sm" name="" value="8500">
						<p></p>
						</div>
						<div class="col-sm-5"></div>
					    </div>
					     <div class="form-group col-sm-12 hidden" id="add">
						<label class="col-sm-2" style="text-align: left;">keerthi</label>
						<label class="col-sm-1" style="text-align: left;">:</label>
						<div class="col-sm-2">
						<input type="text" class="form-control input-sm" name="" value="2000">
						<p></p>
						</div>
						<div class="col-sm-1" >
						    <button aria-hidden="true" data-dismiss="modal" class="close" type="button" onclick="removeData()">
							<i class="fa  fa-times-circle "></i>
						    </button>
						</div>
					    </div>
					    
				            <div class="form-group col-sm-12">
						<div class="">
						    <div class="optionBox col-sm-6">
							<div class="col-sm-6">
							    
							</div>
							<div class="block col-sm-2"> 
							   <a data-toggle="modal" data-target="#myModal"><i class="fa fa-plus fa-1x"></i><span class="f-s-14 f-w-500"> Add</span> </a>
							</div>
							<div class="col-sm-2">
							           <div class="modal fade" id="myModal" role="dialog">
									<div class="modal-dialog modal-md">
									    <div class="modal-content">
										<div class="modal-header">
										    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">
											<i class="fa  fa-times-circle "></i>
										    </button>
										    <h4 class="modal-title" id="header">Add an earning</h4>
										</div>
										<div class="modal-body">
										    <div class="panel-body">
											<div class="col-md-offset-3">
											    <form method="" action="" class="form-horizontal">
												<div class="form-group">
												    <label class="col-md-2 control-label">Name</label>
												    <div class="col-md-4">
													<input type="text" class="form-control input-sm" id="name" placeholder="" />
												    </div>
												</div>
												<div class="form-group">
												    <label class="col-md-2 control-label">Amopunt</label>
												    <div class="col-md-4">
													<input type="text" class="form-control input-sm" id="name" placeholder="" />Rs.
												    </div>
												</div>
												
												<div class="form-group">
												    <label class="col-md-2 control-label"></label>
												    <div class="col-md-2">
													<button type="button" class="btn btn-primary btn-sm" id="action" onclick="addEarning()" data-dismiss="modal" aria-hidden="true">Add</button>
												    </div>
												    <div class="col-md-2" id="cancel">
													<button type="button" class=" btn btn-danger btn-sm" data-dismiss="modal" aria-hidden="true">Cancel</button>
												    </div>
												</div>
											    </form>
											</div>
										    </div>
										</div>
									    </div>
									</div>
								   </div>
							</div>
						    </div>
						</div>
						 
					    </div>
					    <div class="form-group col-sm-12">
						<label class="col-sm-2" style="text-align: left;">Totall Earnings</label>
						<label class="col-sm-1" style="text-align: left;">:</label>
						<label class="col-sm-9"><b>2200 INR</b></label>
					    </div>
					</div>
				  <!-- </div>-->
				    <div class="col-md-12">
					 <h1 class="page-header"><b> Deduction </b></h1>
					
					<div class="form-group col-sm-12">
					    <label class="col-sm-2" style="text-align: left;">Insurance</label>
					    <label class="col-sm-1" style="text-align: left;">:</label>
					    <div class="col-sm-2">
						<input type="text" class="form-control input-sm" name="" value="2000">
						<p></p>
					    </div>
					</div>
					<div class="form-group col-sm-12 hidden" id="ded">
					    <label class="col-sm-2" style="text-align: left;">Arun</label>
					    <label class="col-sm-1" style="text-align: left;">:</label>
					    <div class="col-sm-2">
					    <input type="text" class="form-control input-sm" name="" value="300">
					    <p></p>
					    </div>
					    <div class="col-sm-1" >
						<button aria-hidden="true" data-dismiss="modal" class="close" type="button" onclick="removeDD()">
						    <i class="fa  fa-times-circle "></i>
						</button>
					    </div>
					</div>
					
					
					
					    <div class="form-group col-sm-12">
						<div class="">
						    <div class="optionBox col-sm-6">
							<div class="col-sm-6">
							    
							</div>
							<div class="block col-sm-2"> 
							   <a data-toggle="modal" data-target="#myModal1"><i class="fa fa-plus fa-1x"></i><span class="f-s-14 f-w-500"> Add</span> </a>
							</div>
							<div class="col-sm-2">
							           <div class="modal fade" id="myModal1" role="dialog">
									<div class="modal-dialog modal-md">
									    <div class="modal-content">
										<div class="modal-header">
										    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">
											<i class="fa  fa-times-circle "></i>
										    </button>
										    <h4 class="modal-title" id="header">Add an deduction</h4>
										</div>
										<div class="modal-body">
										    <div class="panel-body">
											<div class="col-md-offset-3">
											    <form method="" action="" class="form-horizontal">
												<div class="form-group">
												    <label class="col-md-2 control-label">Name</label>
												    <div class="col-md-4">
													<input type="text" class="form-control input-sm" id="name" placeholder="" />
												    </div>
												</div>
												<div class="form-group">
												    <label class="col-md-2 control-label">Amopunt</label>
												    <div class="col-md-4">
													<input type="text" class="form-control input-sm" id="name" placeholder="" />Rs.
												    </div>
												</div>
												
												<div class="form-group">
												    <label class="col-md-2 control-label"></label>
												    <div class="col-md-2">
													<button type="button" class="btn btn-primary btn-sm" id="action" onclick="dedData()" data-dismiss="modal" aria-hidden="true">Add</button>
												    </div>
												    <div class="col-md-2" id="cancel">
													<button type="button" class=" btn btn-danger btn-sm" data-dismiss="modal" aria-hidden="true">Cancel</button>
												    </div>
												</div>
											    </form>
											</div>
										    </div>
										</div>
									    </div>
									</div>
								   </div>
							</div>
						    </div>
						</div>
						 
					    </div>

					
					
					
					
					<div class="form-group col-sm-12">
					    <label class="col-sm-2" style="text-align: left;">Total Deduction</label>
					    <label class="col-sm-1" style="text-align: left;">:</label>
					    <label class="col-sm-9">2000 INR</label>
					</div>
					<br>
					<div class="form-group col-sm-12">
					    <br>
					    <label class="col-sm-2" style="text-align: left;"><h5><b>Net Pay</b></h5></label>
					    <label class="col-sm-1" style="text-align: left;">:</label>
					    <label class="col-sm-9"><h5><b>2000 INR</b></h5></label>
					</div>
				    </div>
				    <div class="form-group">
					<div class="col-md-8 col-sm-offset-2">
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
	   
            $(document).ready(function(){
                         
	    $('#datePicker').datepicker({
		    format: 'M-yyyy'
		});
	   
		
            });
	    function addEarning() {
		$("#add").removeClass('hidden');
	    }
	    function removeData() {
		$("#add").addClass('hidden');
	    }
	    function dedData() {
		//alert();
		$("#ded").removeClass('hidden');
	    }
	    function removeDD() {
		$("#ded").addClass('hidden');
	    }
        </script>
     </html>

    