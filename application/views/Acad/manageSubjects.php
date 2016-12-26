<style>
     .panel-body h1
     {
	  font-size: 14px;
     }
     hr.hrdesign{
	  display: block;
	  margin-left: auto;
	  margin-right: auto;
	  border-style:inset;
	  border-width: 1px;
	}
        th{
		background-color: white!important;
	}
	td{
		background-color: white!important;
	}
	tbody:before {
	  content: "-";
	  display: block;
	  line-height: 1em;
	  color: transparent;
	  }

</style>
            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Configuration</a></li>
			<li><a href="javascript:;">Subjects</a></li>
                    </ol>
                    <h1 class="page-header">Subject | Manage Subjects</h1>
                    <div class="row">
                        <div class="col-md-12">
                <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                           <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                        </div>
                            <h4 class="panel-title">Manage Subjects </h4>
                    </div>
                    <div class="panel-body">
			 <br>
			 <div class="well">
                                  <!--<div class="panel-body tpanel">-->
                                        <fieldset>
					     <legend>
						  <div class="col-sm-10">
						      <h1 class="page-header" style="font-size:21px;">Manage Subjects</h1>
						  </div>
                                             <div class="row col-md-12">
                                                    <div class="form-group col-md-4">
                                                        <label class="col-md-4 control-label"> <h1 class="page-header"><b>Class:</b></h1></label>
                                                            <div class="col-md-8">
                                                                <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm" >
								    <option value="">Select a Class</option>
                                                                    <option value="Class1">Class 1</option>
								    <option value="Bachelor">Bachelor of Commerce</option>
`								    <option value="Class2">Class 2</option>
                                                                </select>
                                                            </div>
                                                    </div>
						     <div class="form-group col-md-4 hidden" id="bach">
                                                        <label class="col-md-4 control-label"> <h1 class="page-header"><b> Batch :</b></h1></label>
                                                            <div class="col-md-8">
                                                                <select id="selectBatch" class="form-control selectpicker"  data-style="btn-white btn-sm" >
								    <option value="">Select a Batch</option>
                                                                    <option value="BScB">BSc - B</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="form-group col-md-4 hidden show">
                                                        <label class="col-md-4 control-label"> <h1 class="page-header"><b> Batch :</b></h1></label>
                                                            <div class="col-md-8">
                                                                <select id="selectC1A" class="form-control selectpicker"  data-style="btn-white btn-sm" >
								    <option value="">Select a Batch</option>
                                                                    <option value="C1A">C1 - A</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                                  <br>
                                             </div>
			                </legend>
					      <div class="hidden" id="selectBsc">
						   <div class="row">
						       <div class="form-group">
							    <div class="col-md-10">
								List of all subjects of this batch. You can add new subjects and manage their preferences here. 
							    </div>
							    <div class="col-md-2">
								No. of weekly classes 10
							    </div>
						       </div>
						  </div><br>
						   <div class="row">
						       <div class="form-group">
							   <div class="col-md-10">
								<label style="font-size: 15px;"><b>Major Subjects </b></label>
							   </div>
						       </div>
						  </div>
						  <div class="row">
						       <div class="form-group">
							   <div class="col-md-8">
							       Compulsory subjects that are applicable for all the students in this batch. 
							   </div>
							    <div class="col-md-2">
							      <a href="#" data-toggle="modal" data-target="#myModal1" style="font-size: 14px;" id="addBatch">+ Add Subject</a>
							   </div>
							    <div class="col-md-2">
								<a style="font-size: 14px;" href="<?php echo base_url('academicsCtrl/importSubject');?>" >Import Subjects</a>
							   </div>
						       </div>
						  </div><br>
						  <div class="row">
						       <div class="form-group">
							   <div class="col-md-10">
								&nbsp;&nbsp;<label style="font-size: 15px;">No subjects present</label>
							   </div>
						       </div>
						  </div><br><br>
						  <div class="row">
						       <div class="form-group">
							   <div class="col-md-10">
								<label style="font-size: 15px;"><b>Elective Groups</b>  </label>
							   </div>
						       </div>
						  </div>
						  <div class="row">
						       <div class="form-group">
							   <div class="col-md-10">
							       Subjects chosen by students according to their study plan.
							   </div>
							    <div class="col-md-2">
							       <a style="font-size: 14px;" href="<?php echo base_url('academicsCtrl/newElective');?>">+ New Elective Group</a>
							   </div>
						       </div>
						  </div>
						  <div class="row">
						       <div class="form-group">
							   <div class="col-md-10">
								&nbsp;&nbsp;<label style="font-size: 15px;">No subjects present</label>
							   </div>
						       </div>
						  </div><br>
						  <div class="row">
						       <div class="form-group">
							   <div class="col-md-10">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 14px;"><a href="<?php echo base_url('academicsCtrl/assingnedElective');?>" >Assigned Elective Subjects</a></label>
							   </div>
						       </div>
						 </div>
					      </div>
					      
					      	            <div class="modal fade myModal" id="myModal1" role="dialog" >
								 <div class="modal-dialog modal-md">
								     <div class="modal-content">
									 <div class="modal-header">
									     <button aria-hidden="true" data-dismiss="modal" class="close" type="button">
										 <i class="fa  fa-times-circle "></i>
									     </button>
									     <h4 class="modal-title" id="header"></h4>
									 </div>
									 <div class="modal-body">
									    <!-- <div class="panel-body">-->
									    
										 <div class="col-md-offset-1">
										     <form method="" action="" class="form-horizontal">
										      <div class="form-group">
											   <label class="col-md-4 control-label"><b>BSc - B</b></label>
											    
										      </div>
											   <div class="form-group">
											     <label class="col-md-4 control-label">Name</label>
											     <div class="col-md-4">
												 <input type="text" class="form-control input-sm" id="" />
											     </div>
											   </div>
											   <div class="form-group">
											     <label class="col-md-4 control-label">Code</label>
											     <div class="col-md-4">
												 <input type="text" class="form-control input-sm" id="" />
											     </div>
											   </div>
											    <div class="form-group">
											     <label class="col-md-4 control-label">Max Weekly Classes</label>
											     <div class="col-md-4">
												 <input type="text" class="form-control input-sm" id="" />
											     </div>
											   </div>
											   <div class="form-group">
											     <label class="col-md-4 control-label">No Exam</label>
											     <div class="col-md-2">
												 <input type="checkbox" class="form-control input-sm" id="" placeholder="" />
											     </div>
											   </div>
											   <div class="form-group">
												<label class="col-md-4 control-label"></label>
												<div class="col-md-2 hidden" id="addshow">
												    <button type="button" class="btn btn-primary btn-sm" id="">Add</button>
												</div>
												<!--<div class="col-md-2 hidden" id="updateBtn">
												    <button type="button" class="btn btn-primary btn-sm" id="action">Update</button>
												</div>-->
												<div class="col-md-2" id="cancel">
												    <button type="button" class=" btn btn-danger btn-sm" data-dismiss="modal" aria-hidden="true">Cancel</button>
												</div>
											   </div>
										 </form>
									     </div>
									 <!--</div>-->
								     </div>
								  </div>
							     </div>
							</div>

					      
					      
					     <div class="hidden" id="showC1A">
						   <div class="row">
						       <div class="form-group">
							   <div class="col-md-10">
								List of all subjects of this batch. You can add new subjects and manage their preferences here. 
							   </div>
							    <div class="col-md-2">
								No. of weekly classes 10
							   </div>
						       </div>
						  </div><br>
						   <div class="row">
						       <div class="form-group">
							   <div class="col-md-10">
								<label style="font-size: 15px;"><b>Major Subjects </b></label>
							   </div>
						       </div>
						  </div>
						   <div class="row">
						       <div class="form-group">
							   <div class="col-md-8">
							       Compulsory subjects that are applicable for all the students in this batch. 
							   </div>
							    <div class="col-md-2">
							       <a href="#" data-toggle="modal" data-target="#myModal" style="font-size: 14px;"  value="Add" id="addSub">+ Add Subject</a>
							   </div>
							    <div class="col-md-2">
								<a style="font-size: 14px;" href="<?php echo base_url('academicsCtrl/importsubject1');?>">Import Subjects</a>
							   </div>
						       </div>
						  </div><br>
						 
						 
						  <div class="panel-body tpanel" style="background-color: #C3D9FF">
							    
								   <table class="table table-bordered" style="width:100%">
								      <thead>
									   <tr>
										<th>Subject</th>
										<th>Code</th>
										<th>Weekly Classes</th>
										<th>Action</th>
									   </tr>
								      </thead>
								      <tbody>
									   <tr>
										<td>English</td>
										<td>Eng</td>
										<td>5</td>
										 <td><button type="button" name="edit" id="" value="edit3" class="btn btn-xs btn-primary editData" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
										     <button onclick="" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
										
									   </tr>
									   <tr>
										<td>Maths</td>
										<td>Mat</td>
										<td>5</td>
										 <td><button type="button" name="edit" id="" value="edit3" class="btn btn-xs btn-primary editData" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
										     <button onclick="" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
									   </tr>
									   <tr>
									       <td>Science</td>
										<td>Sci</td>
										<td>5</td>
										 <td><button type="button" name="edit" id="" value="edit3" class="btn btn-xs btn-primary editData" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
										     <button onclick="" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
									   </tr>
									  
								      </tbody>
								 </table>
					                    </div>
							    <br>
							    <br>
						  
						            <div class="row">
								 <div class="form-group">
								     <div class="col-md-10">
									  <label style="font-size: 15px;"><b>Elective Groups</b>  </label>
								     </div>
								 </div>
							    </div>
							    <div class="row">
								 <div class="form-group">
								     <div class="col-md-10">
									 Subjects chosen by students according to their study plan.
								     </div>
								      <div class="col-md-2">
									 <a style="font-size: 14px;" href="<?php echo base_url('academicsCtrl/newElective');?>">+ New Elective Group</a>
								     </div>
								 </div>
							    </div>
							    <div class="row">
								 <div class="form-group">
								     <div class="col-md-10">
									  &nbsp;&nbsp;<label style="font-size: 15px;">No subjects present</label>
								     </div>
								 </div>
							    </div><br>
							    <div class="row">
								 <div class="form-group">
								     <div class="col-md-10">
									  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="font-size: 14px;"><a href="<?php echo base_url('academicsCtrl/assingnedElective');?>" >Assigned Elective Subjects</a></label>
								     </div>
								 </div>
							   </div>
							    <div class="modal fade myModal" id="myModal" role="dialog" >
								 <div class="modal-dialog modal-md">
								     <div class="modal-content">
									 <div class="modal-header">
									     <button aria-hidden="true" data-dismiss="modal" class="close" type="button">
										 <i class="fa  fa-times-circle "></i>
									     </button>
									     <h4 class="modal-title" id="header"></h4>
									 </div>
									 <div class="modal-body">
									    <!-- <div class="panel-body">-->
									    
										 <div class="col-md-offset-1">
										     <form method="" action="" class="form-horizontal">
										      <div class="form-group">
											   <label class="col-md-4 control-label"><b>C1 - A</b></label>
											    
										      </div>
											   <div class="form-group">
											     <label class="col-md-4 control-label">Name</label>
											     <div class="col-md-4">
												 <input type="text" class="form-control input-sm" id="name" />
											     </div>
											   </div>
											   <div class="form-group">
											     <label class="col-md-4 control-label">Code</label>
											     <div class="col-md-4">
												 <input type="text" class="form-control input-sm" id="code" />
											     </div>
											   </div>
											    <div class="form-group">
											     <label class="col-md-4 control-label">Max Weekly Classes</label>
											     <div class="col-md-4">
												 <input type="text" class="form-control input-sm" id="max" />
											     </div>
											   </div>
											   <div class="form-group">
											     <label class="col-md-4 control-label">No Exam</label>
											     <div class="col-md-2">
												 <input type="checkbox" class="form-control input-sm" id="" placeholder="" />
											     </div>
											   </div>
											   <div class="form-group">
											     <label class="col-md-4 control-label">6th Subject</label>
											     <div class="col-md-2">
												 <input type="checkbox" class="form-control input-sm" id="" placeholder="" />
											     </div>
											   </div>
											   <div class="form-group">
												<label class="col-md-4 control-label">ASL Subject</label>
												<div class="col-md-2">
												    <input type="checkbox" class="form-control input-sm" id="" placeholder="" />
												</div>
											   </div>
											   <div class="form-group">
												<label class="col-md-4 control-label"></label>
												<div class="col-md-2 hidden" id="addData">
												    <button type="button" class="btn btn-primary btn-sm" id="action">Add</button>
												</div>
												<div class="col-md-2 hidden" id="updateBtn">
												    <button type="button" class="btn btn-primary btn-sm" id="">Update</button>
												</div>
												<div class="col-md-2" id="cancel">
												    <button type="button" class=" btn btn-danger btn-sm" data-dismiss="modal" aria-hidden="true">Cancel</button>
												</div>
											   </div>
										 </form>
									     </div>
									 <!--</div>-->
								     </div>
								  </div>
							     </div>
							</div>
					               </div>

					     
                                        </fieldset>
                                <!--</div>-->
                            </div>
                    </div>
		    
		    
                </div>
            </div>
        <div>
    </div>
		<!-- end #content -->
	<script>
		 $('#selectClass').change(function(){
                        console.log($(this).val());
                        if ($(this).val()=='Class1'||$(this).val()=='Class2') {
                            $('.show').removeClass('hidden');
                            $('#bach').addClass('hidden');
			    $('#showC1A').addClass('hidden');
			    $('#selectBsc').addClass('hidden');
                        }
			 else if ($(this).val()=='Bachelor') {
                            $('#bach').removeClass('hidden');
			    $('.show').addClass('hidden');
			    $('#showC1A').addClass('hidden');
			    $('#selectBsc').addClass('hidden');
                        }
                        else{
                              $('#bach').addClass('hidden');
			      $('.show').addClass('hidden');
			      $('#showC1A').addClass('hidden');
			      $('#selectBsc').addClass('hidden');
                        }
                });
		 $('#selectBatch').change(function(){
                        console.log($(this).val());
                        if ($(this).val()=='BScB') {
                            $('#selectBsc').removeClass('hidden');
			    $('#showC1A').addClass('hidden');
                        }
                        else{
                              $('#selectBsc').addClass('hidden');
			      $('#showC1A').addClass('hidden');
                        }
                });
               $('#selectC1A').change(function(){
                        console.log($(this).val());
                        if ($(this).val()=='C1A') {
                            $('#showC1A').removeClass('hidden');
			    $('#selectBsc').addClass('hidden');
                        }
                        else{
                              $('#showC1A').addClass('hidden');
			      $('#selectBsc').addClass('hidden');
                        }
                });
	        $('#addBatch').click(function() {
		    
		    $('.modal-title').text('Add New Subject');
		    $('#addshow').removeClass('hidden');
		    $('#updateBtn').addClass('hidden');
		});
	        $('#addSub').click(function() {
		   
		    $('.modal-title').text('Add New Subject');
		    $('#addData').removeClass('hidden');
		    $('#updateBtn').addClass('hidden');
		});
		 $('.editData').click(function() {
		   
		    $('.modal-title').text('Edit Subject');
		    $('#name').val('English');
		    $('#code').val('Eng');
		    $('#max').val('5');
		    $('#updateBtn').removeClass('hidden');
		    $('#addData').addClass('hidden');
		});
	       
	       
	       
		
	</script>

		