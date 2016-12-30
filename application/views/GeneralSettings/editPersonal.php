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
                                                    <h1 class="page-header" style="font-size:21px;">Personal details</h1>
                                                </div>
                                                </legend>
						<div class="col-sm-offset-2">
						   
							<div class="form-group">
								<label class="col-md-2 control-label"><b>Date of Birth</b></label>
								<div class="col-md-3">
									<span class='input-group'>
										<input type='text' id="datePicker1" name="dailyDate" class="form-control input-sm input-group datetimepicker defaultdate" value="February 05, 2015" />
										<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
										</span>
									</span> 
								</div>
							</div>
							 <div class="form-group">
								<label class="col-md-2 control-label"><b>Marital status</b></label>
								 <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
										   <option value="">Single</option>
										   <option value="">Married</option>
                                                                                   <option value="">Divorced</option>
									   </select>
								   </div>
							</div>
							 <div class="form-group">
								<label class="col-md-2 control-label"><b>No. of children</b></label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><b>Father's Name</b></label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label"><b>Mother's Name</b></label>
								<div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
								</div>
							</div>
                                                        <div class="form-group">
								<label class="col-md-2 control-label"><b>Spouse's Name</b></label>
								 <div class="col-md-3">
								    <input type="text" class="form-control input-sm" placeholder="" />
								</div>
							</div>
                                                        <div class="form-group">
								<label class="col-md-2 control-label"><b>Blood group</b></label>
								 <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
										   <option value="">Unknown</option>
										   <option value="">A+</option>
                                                                                   <option value="">A-</option>
                                                                                   <option value="">B+</option>
                                                                                   <option value="">B-</option>
									   </select>
								   </div>
							</div>
                                                         <div class="form-group">
								<label class="col-md-2 control-label"><b>Nationality</b></label>
								 <div class="col-md-3">
									   <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
                                                                                    <option value="">India</option>
                                                                                    <option value="">UK</option>
                                                                                    <option value="">US</option>
									   </select>
								   </div>
							</div>
                                                        <div class="form-group">
								<label class="col-md-2 control-label"><b>Upload user's photo(500KB max)</b></label>
								 <div class="col-md-3">
								    <input type="file" class="form-control input-sm" placeholder="" />
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

		