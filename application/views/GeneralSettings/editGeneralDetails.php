<style>
     .panel-body h1{
                    font-size: 15px;
                }
</style>
            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
			<li><a href="javascript:;">HR</a></li>
                        <li><a href="javascript:;">Employees</a></li>
                        <li><a href="javascript:;">Keerthi</a></li>
                        <li><a href="javascript:;">Edit General Details</a></li>
                    </ol>
                    <h1 class="page-header">Edit employee information | General</h1>
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
                            <h4 class="panel-title">General Details</h4>
                    </div>
                    <div class="panel-body">
                        <div class="well">
                                <form class="form-horizontal">
                                        <fieldset>
                                                <legend>
                                                <div class="col-sm-10">
                                                    <h1 class="page-header" style="font-size:21px;">Fields marked with *must be filled.</h1>
                                                    <h1 class="page-header" style="font-size:21px;">General Details</h1>
                                                </div>
                                                </legend>
						<div class="col-sm-offset-2">
						    <div class="form-group">
                                                        <label class="col-md-2 control-label"><b>Employee number *</b></label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm" value="EMP003"  />
					                </div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><b>Joining date</b></label>
								<div class="col-md-3">
									<span class='input-group'>
										<input type='text' id="datePicker1" name="dailyDate" class="form-control input-sm input-group datetimepicker defaultdate" value="Feb 19, 2016" />
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
										</span>
									</span> 
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><b>First Name *</b></label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" value="Keerthi" />
								</div>
							</div>
							 <div class="form-group">
								<label class="col-md-2 control-label"><b>Middle Name</b></label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><b>Last Name</b></label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><b>E-mail</b></label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
								</div>
							</div>
                                                        <div class="form-group">
								<label class="col-md-2 control-label"><b>Department *</b></label>
								 <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
										   <option value="">Maths</option>
										   <option value="">English</option>
                                                                                   <option value="">Hindi</option>
									   </select>
								   </div>
							</div>
                                                        <div class="form-group">
								<label class="col-md-2 control-label"><b>Category *</b></label>
								 <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
										   <option value="">Teacher</option>
										   <option value="">Human Resource</option>
                                                                                   <option value="">Finance</option>
                                                                                   <option value="">System Admin</option>
									   </select>
								   </div>
							</div>
                                                         <div class="form-group">
								<label class="col-md-2 control-label"><b>Position *</b></label>
								 <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
                                                                                    <option value="">Senior</option>
                                                                                    <option value="">Junior</option>
                                                                                    <option value="">System Admin</option>
									   </select>
								   </div>
							</div>
                                                          <div class="form-group">
								<label class="col-md-2 control-label"><b>Grade </b></label>
								 <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
                                                                                    <option value="">Grade 1</option>
                                                                                    <option value="">Grade 2</option>
                                                                                    <option value="">System Admin</option>
									   </select>
								   </div>
							</div>
                                                        <div class="form-group">
								<label class="col-md-2 control-label"><b>Job Title </b></label>
								 <div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
								</div>
							</div>
                                                         <div class="form-group">
								<label class="col-md-2 control-label"><b>Qualification</b></label>
								 <div class="col-md-3">
								    <input type="textarea" class="form-control input-sm" placeholder="" />
								</div>
							</div>
                                                          <div class="form-group">
								<label class="col-md-2 control-label"><b>Experience Info</b></label>
								 <div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><b>Total Experience</b></label>
								   <div class="col-md-4">
                                                                        <div class="col-md-4">
                                                                               <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
                                                                                        <option value="">Year</option>
                                                                                        <option value="">0</option>
                                                                                        <option value="">1</option>
                                                                                        <option value="">2</option>
                                                                                        <option value="">3</option>
                                                                                        <option value="">4</option>
                                                                                        <option value="">5</option>
                                                                                        <option value="">6</option>
                                                                               </select>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                               <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
                                                                                        <option value="">Month</option>
                                                                                        <option value="">0</option>
                                                                                        <option value="">1</option>
                                                                                        <option value="">2</option>
                                                                                        <option value="">3</option>
                                                                                        <option value="">4</option>
                                                                                        <option value="">5</option>
                                                                                        <option value="">6</option>
                                                                               </select>
                                                                        </div>
								   </div>
							</div>
							
							
							
							<div class="form-group">
								<label class="col-md-2 control-label"><b>Gender</b></label>
								<div class="col-md-3">
									<form>
                                                                    <label class="radio-inline">
                                                                      <input type="radio" name="optradio">Male
                                                                    </label>
                                                                    <label class="radio-inline">
                                                                      <input type="radio" name="optradio">Female
                                                                    </label>
                                                                </form>
								</div>
                                                                 
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><b>Biometric ID</b></label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
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

		