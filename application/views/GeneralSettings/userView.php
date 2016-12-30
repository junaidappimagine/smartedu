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
                    <li class="active">Rejected Payslips</li>
                    
                </ol>
                 <h1 class="page-header">HR Management | Rejected payslips </h1>
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
                               <h4 class="panel-title">Rejected payslips</h4>
                            </div>
                            <div class="panel-body" >
				<div class="col-md-12 row">
					  <h1 class="page-header"><b> Rejected payslips </<b></h1>
					  
				</div>
				<div class="col-md-12 row">
				    <br>
				     <div class="form-group">
					<div class="col-sm-2 col-md-offset-1">
                                            
					    <label class="control-label"> <h1 class="page-header"><b style="margin-left:19px;"> Select a Role : </<b></h1></label>
					</div>
					<div class="col-sm-3">
					    <select class="form-control selectpicker" data-style="btn-white btn-sm" id="selectRoll">
						<option>Select a Role</option>
                                                <option value="Admin">Admin</option>
                                                <option value="Employee">Employee</option>
                                                <option value="Student">Student</option>
                                                <option value="Parent">Parent</option>
					    </select>
					</div>
                                        <div class="col-sm-3 hidden" id="department">
					    <select class="form-control selectpicker" data-style="btn-white btn-sm" id="selectDept">
						<option>Select a Department</option>
                                                <option value="English">English</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="Maths">Maths</option>
					    </select>
					</div>
					
				     </div>
				</div>
				
                                <div class="col-md-12 row hidden" id="tableData2"><br><br>
				     <div class="table-responsive">
                                             <table id="data-table" class="table table-striped table-bordered">
                                                <thead style="background-color: rgb(195,217,255);">
                                                    <tr>
                                                        <th>Sl. no. </th>
                                                        <th>Name </th>
                                                        <th>Username </th>
							<th>Profile</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <tr class="hidden admin">
                                                        <td>1</td>
                                                        <td>Admin User </td>
                                                        <td>admin </td>
                                                        <td><a href="<?php echo base_url('GrSettingsC/userProfile');?>">View profile</a></td>
                                                    </tr>
                                                    <tr class="hidden admin">
                                                        <td>2</td>
                                                        <td>Duplicate admin </td>
                                                        <td>admin1 </td>
                                                        <td><a href="<?php echo base_url('GrSettingsC/userProfile');?>">View profile</a></td>
                                                    </tr>
                                                    <tr class="hidden" id="eng">
                                                        <td>1</td>
                                                        <td>Senthil</td>
                                                        <td>EMP002 </td>
                                                        <td><a href="<?php echo base_url('GrSettingsC/userProfile');?>">View profile</a></td>
                                                    </tr>
                                                    <tr  class="hidden hindi" >
                                                        <td>1</td>
                                                        <td>Duplicate admin </td>
                                                        <td>EMP006</td>
                                                        <td><a href="<?php echo base_url('GrSettingsC/userProfile');?>">View profile</a></td>
                                                    </tr>
                                                    <tr  class="hidden hindi" >
                                                        <td>2</td>
                                                        <td>Duplicate admin </td>
                                                        <td>EMP009</td>
                                                        <td><a href="<?php echo base_url('GrSettingsC/userProfile');?>">View profile</a></td>
                                                    </tr>
                                                     <tr  class="hidden maths" >
                                                        <td>1</td>
                                                        <td>Keerthi</td>
                                                        <td>EMP003</td>
                                                        <td><a href="<?php echo base_url('GrSettingsC/userProfile');?>">View profile</a></td>
                                                    </tr>
                                                   
                                                </tbody>
                                             </table>
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

    