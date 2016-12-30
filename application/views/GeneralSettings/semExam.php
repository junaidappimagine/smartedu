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
                    <li><a href="javascript:;">Exam</a></li>
                    <li><a href="javascript:;">Exam Management</a></li>
                    <li class="active">Bachelor of Commerce</li>
                    <li><a href="javascript:;">Sem 1</a></li>
                    
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
                                             <button type="button"  name="edit" id="edit" value="edit" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i> Edit Exam Group</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <hr>
                                </div>
				<div class="col-md-12 row">
				    <br>
				     <div class="form-group">
					<div class="col-sm-3">
					    <label class="control-label"><b>Exam Group:</b></label>
					</div>
					<div class="col-sm-3">
					    <label class="control-label"><b>Sem 1</b></label>
					</div>
                                        <div class="col-sm-3">
					    <label class="control-label"><b>Class :</b></label>
					</div>
					<div class="col-sm-3">
					    <label class="control-label"><b>Bachelor of Commerce</b></label>
					</div>
				     </div>
				</div>
                                <div class="col-md-12 row">
				    <br>
				     <div class="form-group">
					<div class="col-sm-3">
					    <label class="control-label">Exam type:</label>
					</div>
					<div class="col-sm-3">
					    <label class="control-label">Marks and Grades</label>
					</div>
                                        <div class="col-sm-3">
					    <label class="control-label">Associated Batches:</label>
					</div>
                                        <legend style="padding-bottom: 43px;font-size: 12px;">
					<div class="col-sm-3">
					    <label class="control-label">1 of 1</label>
					</div>
                                        </legend>
				     </div>
				</div>
                                <div class="col-md-12 row">
				   
				     <div class="form-group">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-3">
					</div>
                                         <label class="radio-inline col-sm-2">
                                            <input type="radio" name="optradio" checked><b>Active exam groups</b>
                                        </label>
                                        <label class="radio-inline col-sm-2">
                                            <input type="radio" name="optradio"><b>Inactive exam groups</b>
                                        </label>
                                       
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
                                                        <td>SB</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>No exams created </td>
                                                        <td><a href="<?php echo base_url('GrSettingsC/viewExamGroups');?>">Manage Exams</a></td>
                                                    </tr>
                                                </tbody>
                                             </table>
                                         </div>
				</div>
                                <div class="modal fade" id="myModal" role="dialog" >
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content" style="width: 80%;">
                                            <div class="modal-header">
                                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">
                                                    <i class="fa  fa-times-circle "></i>
                                                </button>
                                                <h4 class="modal-title" id="header">Edit Class Exam Group</h4>
                                            </div>
                                            <div class="modal-body">
                                                    <div class="col-md-offset-1">
                                                        <form method="" action="" class="form-horizontal">
                                                            <div class="form-group">
                                                                <label class="col-md-5 control-label">Exam name</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control input-sm" id="name" value="Sem 1" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-5 control-label"></label>
                                                                <div class="col-md-2">
                                                                    <button type="button" class="btn btn-primary btn-sm" id="action">Save</button>
                                                                </div>
                                                                <div class="col-md-2 hidden" id="cancel">
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
            </body>
        <script>
	   
            $(document).ready(function(){
            });
	$('#selectRoll').change(function(){
            
            if ($(this).val() == 'Admin') {
                $("#tableData2").removeClass('hidden');
                $(".admin").removeClass('hidden');
                $("#hindi").addClass('hidden');
                $("#eng").addClass('hidden');
                $(".maths").addClass('hidden');
                $("#department").addClass('hidden');
            }else if ($(this).val() == 'Employee'||$(this).val() == 'Student'||$(this).val() == 'Parent') {
                $("#department").removeClass('hidden');
                $("#tableData2").addClass('hidden');
            }
            else{
                  $("#tableData2").addClass('hidden');
                  $("#department").addClass('hidden');
            }
           
            });
        $('#selectDept').change(function(){
            
            if ($(this).val() == 'English') {
                $("#tableData2").removeClass('hidden');
                $("#eng").removeClass('hidden');
                $(".hindi").addClass('hidden');
                $(".admin").addClass('hidden');
            }else if ($(this).val() == 'Hindi') {
                $(".hindi").removeClass('hidden');
                $("#tableData2").removeClass('hidden');
                $("#eng").addClass('hidden');
                $(".maths").addClass('hidden');
                $(".admin").addClass('hidden');
            }
            else if ($(this).val() == 'Maths') {
                $(".maths").removeClass('hidden');
                $("#tableData2").removeClass('hidden');
                $("#eng").addClass('hidden');
                $(".hindi").addClass('hidden');
                $(".admin").addClass('hidden');
            }
            else{
                $("#tableData2").addClass('hidden');
                $("#hindi").addClass('hidden');
                $("#eng").addClass('hidden');
                $(".maths").addClass('hidden');
                $(".admin").addClass('hidden');
            }
           
            });
		
	    
	    
        </script>
     </html>

    