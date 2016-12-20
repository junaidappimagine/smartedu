<style>
     .panel-body h1{
                    font-size: 15px;
                }
</style>
            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Configuration</a></li>
			<li><a href="javascript:;">Settings </a></li>
                    </ol>
                    <h1 class="page-header">Configuration | General settings</h1>
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
                            <h4 class="panel-title">General settings</h4>
                    </div>
                    <div class="panel-body">
                        <div class="well">
                                <form class="form-horizontal">
                                        <fieldset>
                                                <legend>
                                                <div class="col-sm-10">
                                                    <h1 class="page-header" style="font-size:21px;">Update settings</h1>
                                                </div>
                                                </legend>
						<div class="col-sm-offset-2">
						    <div class="form-group">
                                                        <label class="col-md-2 control-label">School/College Name :</label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm" placeholder=""  />
					                </div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">School/College Address :</label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">School/College Phone :</label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
								</div>
							</div>
							 <div class="form-group">
								<label class="col-md-2 control-label">School/College Email :</label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">School/College Website :</label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"> Institution type :</label>
								   <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
										   <option value="">K-12</option>
										   <option value="">Higher Education</option>
									   </select>
								   </div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Student Attendance Type :</label>
								   <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
										   <option value="">Subject-Wise</option>
										   <option value="">Daily</option>
									   </select>
								   </div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Start day of the week :</label>
								   <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
										   <option value="">Sunday</option>
										   <option value="">Monday</option>
										    <option value="">Tuesday</option>
										    <option value="">Wednesday</option>
										    <option value="">Thursday</option>
										    <option value="">Friday</option>
										    <option value="">Saturday</option>
									   </select>
								   </div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Date format :</label>
								   <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
										   <option value="">DMY</option>
										   <option value="">MDY</option>
									   </select>
								   </div>
							</div>
							
							<div class="form-group">
								<label class="col-md-2 control-label">Date separator :</label>
								   <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
										   <option value="">-</option>
										   <option value="">/</option>
									   </select>
								   </div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Financial year start date :</label>
								   <div class="col-md-3">
									<span class='input-group'>
										<input type='text' id="datePicker" name="dailyDate" class="form-control input-sm input-group datetimepicker defaultdate" value="Feb 05,2016" />
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
										</span>
									</span> 
								   </div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Financial year end date :</label>
								<div class="col-md-3">
									<span class='input-group'>
										<input type='text' id="datePicker1" name="dailyDate" class="form-control input-sm input-group datetimepicker defaultdate" value="Feb 05,2017" />
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
										</span>
									</span> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Starting receipt number :</label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" value="KR001" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Language  :</label>
								   <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
										   <option value="">English</option>
										   <option value="">Tamil</option>
										    <option value="">Hindi</option>
									   </select>
								   </div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Time zone  :</label>
								   <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
										   <option value="">Indian Standard Time(IST)-GMT-05.00</option>
										    <option value="">European Central Time(IST)-GMT-05.00</option>
									   </select>
								   </div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Country  :</label>
								   <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
										   <option value="">India</option>
										   <option value="">Oman</option>
										    <option value="">UK</option>
										     <option value="">US</option>
										   <option value="">Singapore</option>
										   <option value="">Sri Lanka</option>
									   </select>
								   </div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Currency Type :</label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" value="Rs." />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Precision Count:</label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" value="2" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Upload Logo (500KB max, 150x110):</label>
								<div class="col-md-3">
								    <input type="file" class="form-control input-sm" placeholder="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Include Grading Systems:</label>
								<div class="col-md-3">
									<div class="">
									    <p>SELECT : &nbsp;&nbsp;&nbsp;<a onclick="selectGrade()"><b>All</b></a> ,&nbsp;&nbsp;&nbsp;<a onclick="noneGrade()"><b>None</b></a> </p>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" class="check">ICSE</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox" class="check">CCE</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox"  class="check">CWA</label>
									</div>
									<div class="checkbox">
										<label><input type="checkbox"  class="check">GPA</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Moodle URL (eg: http://domain.com/moodle) :</label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Select theme :</label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Select font :</label>
								   <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
										   <option value="">Arial</option>
										    <option value="">Garamond</option>
										   <option value="">Times new Roman</option>
									   </select>
								   </div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Enable auto increment of Student Admission No. :</label>
								<div class="col-md-3 col-md-offset-1">
									<div class="checkbox">
										<label><input type="checkbox"  class="check" checked></label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Enable auto increment of Employee No. :</label>
								<div class="col-md-3 col-md-offset-1">
									<div class="checkbox">
										<label><input type="checkbox"  class="check" checked></label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Enable news comment moderation :</label>
								<div class="col-md-3 col-md-offset-1">
									<div class="checkbox">
										<label><input type="checkbox"  class="check" checked></label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Enable sibling :</label>
								<div class="col-md-3 col-md-offset-1">
									<div class="checkbox">
										<label><input type="checkbox"  class="check" checked></label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Enable password change at first time login :</label>
								<div class="col-md-3 col-md-offset-1">
									<div class="checkbox">
										<label><input type="checkbox"  class="check" checked></label>
									</div>
								</div>
							</div>
	
							<div class="form-group">
								<label class="col-md-2 control-label">Enable roll number for students :</label>
								<div class="col-md-3 col-md-offset-1">
									<div class="checkbox">
										<label><input type="checkbox"  class="check" checked></label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label">Enable Google SSO:</label>
								<div class="col-md-3 col-md-offset-1">
									<div class="checkbox">
										<label><input type="checkbox"  class="check" ></label>
									</div>
								</div>
							</div>
	
							<div class="form-group">
								<label class="col-md-2 control-label">Enable auto-logout :</label>
								<div class="col-md-3 col-md-offset-1">
									<div class="checkbox">
										<label><input type="checkbox"  class="check" ></label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-3">
								    
								</div>
								<div class="col-md-3 col-md-offset-0">
									<button class="btn btn-primary btn-sm">Update</button>
								</div>
							</div>
						</div>
                                                
                                                
                                        </fieldset>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        <div>
    </div>
		<!-- end #content -->
	<script>
		function selectGrade(){
		$(".check").attr('checked',true);
		}
		function noneGrade(){
		$(".check").prop('checked', false); 
		}
		$(document).ready(function(){
                    
                    $('#datePicker').datepicker({
		    format: 'dd/mm/yyyy'
                    });
		    $('#datePicker1').datepicker({
		    format: 'dd/mm/yyyy'
                    });
		});
		
	</script>

		