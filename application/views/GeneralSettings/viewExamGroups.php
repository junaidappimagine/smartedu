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
                    <li><a href="javascript:;">B</a></li>
                    <li><a href="javascript:;">Sem 1</a></li>
                    
                </ol>
                 <h1 class="page-header">Exams | View Exam Groups</h1>
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
                                             <button class="btn btn-warning btn-xs" type="button" onclick="addSubject()">Add Subject Exams</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <hr>
                                </div>
                                <div class="col-md-12 row hidden" id="addSub">
                                    <div style="background-color: rgb(195,217,255);">
                                       <p style="text-align: center;padding: 10px;"><b>No subjects to add to this exam group </b></p>
                                    </div>
                                </div>
                              
				<div class="col-md-12 row">
				    <br>
				     <div class="form-group">
					<div class="col-sm-3">
					    <label class="control-label"><b>Exam Group</b></label>
					</div>
					<div class="col-sm-3">
					    <label class="control-label"><b><a href="<?php echo base_url('GrSettingsC/semExam'); ?>"></i>Sem 1</a></b></label>
					</div>
                                        <div class="col-sm-3">
					    <label class="control-label"><b>Class</b></label>
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
					    <label class="control-label">Exam Type</label>
					</div>
					<div class="col-sm-3">
					    <label class="control-label">Marks and Grades</label>
					</div>
                                        <div class="col-sm-3">
					    <label class="control-label">Batch</label><br><br>
                                            <label class="control-label">Students</label><br><br>
                                            <label class="control-label">Students</label>
					</div>
                                        <legend style="padding-bottom: 130px;font-size: 12px;">
					<div class="col-sm-3">
					    <label class="control-label">B</label><br><br>
                                            <label class="control-label">2</label>
					</div>
                                        </legend>
				     </div>
				</div>
                                <div class="col-md-12 row" id="">
                                    <div style="background-color: rgb(195,217,255);">
                                       <p style="text-align: center;padding: 10px;"><b>No subject exams added </b></p>
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
            function addSubject() {
                  $("#addSub").removeClass('hidden');
            }
	
		
	    
	    
        </script>
     </html>

    