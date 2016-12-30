    <html>
        <head>
            <style>
                .panel-body h1{
                 font-size: 15px;
                }
            
	tbody:before {
	  content: "-";
	  display: block;
	  line-height: 1em;
	  color: transparent;
	  }
		
            </style>
        </head>     
        <body>
            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="javascript:;">Exam</a></li>
                    <li><a href="javascript:;">Exam Management</a></li>
                    <li class="active">Bachelor of Commerce</li>
                    <li><a href="javascript:;">B</a></li>
                    
                </ol>
                 <h1 class="page-header">Exams | Exam Groups</h1>
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
                               <h4 class="panel-title">Exam Groups</h4>
                            </div>
                            <div class="panel-body" >
                                <div class="row">
                                    <div style="float: right;">
                                    <div class="col-md-4 col-md-offset-0">
                                         <a href="<?php echo base_url('GrSettingsC/createExamGroups'); ?>" class="btn btn-warning btn-xs" role="button">Create Exam Group</a>
                                    </div>
                                    <div class="col-md-4 col-md-offset-3">
                                         <select id="selectExams" class="form-control selectpicker"  data-style="btn-warning btn-xs">
                                            <option selected disabled>More</option>
                                            <option value="Connect">Connect Exams</option>
                                        </select>
                                    </div>
                                </div>
                                </div>
                                <div class="row">
                                    <hr>
                                </div>
                                <div class="hidden" id="panel1">
                                    
                                    <div class="col-md-12 row">
				    <br>
				     <div class="form-group">
					<div class="col-sm-3">
					    <label class="control-label">Class</label>
					</div>
					<div class="col-sm-3">
					    <label class="control-label">Batch</label>
					</div>
                                        <div class="col-sm-3">
					    <label class="control-label">Batch Tutor</label>
					</div>
					<div class="col-sm-3">
					    <label class="control-label">Students</label>
					</div>
				     </div>
				</div>
                                <div class="col-md-12 row">
				    <br>
				     <div class="form-group">
					<div class="col-sm-3">
					    <label class="control-label"><b>Bachelor of Commerce</b></label>
					</div>
					<div class="col-sm-3">
					    <label class="control-label"><b>B</b></label>
					</div>
                                        <div class="col-sm-3">
					    <label class="control-label"></label>
					</div>
                                        <legend style="padding-bottom: 43px;font-size: 12px;">
					<div class="col-sm-3">
					    <label class="control-label"><b>2</b></label>
					</div>
                                        </legend>
				     </div>
				</div>
                              
				
                                <div class="col-md-12 row" id="tableData2"><br><br>
				     <div class="table-responsive">
                                             <table id="data-table" class="table table-striped table-bordered">
                                                <thead style="background-color: rgb(195,217,255);">
                                                    <tr>
                                                        <th>Exam Groups</th>
                                                        <th>Exams </th>
                                                        <th>Subjects </th>
							<th>Status </th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <tr>
                                                        <td>Sem 1 </td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>No exams created </td>
                                                        <td><a href="<?php echo base_url('GrSettingsC/viewExamGroups');?>">Manage Exams</a>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;<a  id="Add" class="btnDelete"><i class="fa fa-trash"></i><span>&nbsp; Delete   `</span></a></td>
                                                    </tr>
                                                </tbody>
                                             </table>
                                         </div>
				</div>
                            </div>
                                    
                                    
                                
				
                            
                            
                        <div class="hidden" id="panel2">
			 <br>
			 <div class="well">
                                  <!--<div class="panel-body tpanel">-->
                                        <fieldset>
					     <legend>
						  <div class="col-sm-10">
						      <h1 class="page-header" style="font-size:18px;text-align: center;">Manage Subjects</h1>
						  </div>
			                    </legend>
					     <div class="">
						  <div class="panel-body tpanel" style="background-color: #C3D9FF">
							    
								   <table class="table table-bordered" style="width:100%">
								      <thead>
									   <tr>
										 <th style="background-color: white!important;" width="10%">
                                                                                    <div class="">
                                                                                         <label style="margin-bottom: 0;"><input type="checkbox" value="" class="toggle"></label>
                                                                                    </div>
                                                                                </th>
                                                                                <th style="background-color: white!important;"  width="30%"> Exam Group  </th>
                                                                                <th style="background-color: white!important;" width="10%">Weightage(%) </th>
									   </tr>
								      </thead>
								      <tbody>
									   <tr>
										<td style="background-color: white!important;" >
                                                                                    <div class="">
                                                                                         <label style="margin-bottom: 0;"><input type="checkbox" value="" class="toggle"></label>
                                                                                    </div>
                                                                                </td>
										<td style="background-color: white!important;" >Sem 1</td>
										<td style="background-color: white!important;" ><input type="text" class="form-control" value="0"></td>
										 
									   </tr>
									   <tr>
										<td style="background-color: white!important;" >
                                                                                
                                                                                </td>
										<td style="background-color: white!important;text-align: right;" >Total Weightage</td>
										<td style="background-color: white!important;" >0</td>
									   </tr>
									  
								      </tbody>
								 </table>
					                    </div>
							    <br>
                                                             <div class="form-group">
                                                                <label class="col-md-5 control-label"></label>
                                                                <div class="col-md-2">
                                                                    <button type="button" class="btn btn-primary btn-sm" id="action">Save</button>
                                                                </div>
                                                            </div>   
							   
					               </div>

					     
                                        </fieldset>
                                <!--</div>-->
                            </div>
                    </div>
                    </div>

                            
                            
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </body>
        <script>
	   
            $(document).ready(function(){
                $('#panel1').removeClass('hidden');
                
            });
             $('#selectExams').change(function(){
                        console.log($(this).val());
                        if ($(this).val()=='Connect') {
                            $('#panel2').removeClass('hidden');
                            $('#panel1').addClass('hidden');
                        }
                        else{
                              $('#panel2').addClass('hidden');
                        }
                });
	
           $(".btnDelete").click(function(){
                var $row = $(this).parents('tr');
            
                    bootbox.confirm("Are you sure you want to delete?", function(confirmed) {   
                if (confirmed) {
                 
                 $row.remove();
                }    
            });
           });
		
	    
	    
        </script>
     </html>

    