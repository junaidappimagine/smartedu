<style>
     .panel-body h1{
                    font-size: 15px;
                }
</style>
    <div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Event</a></li>
	    </ol>
	    <h1 class="page-header">Event | Step 1 - Event creation</h1>
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
		<h4 class="panel-title">Event</h4>
	    </div>
	    <div class="panel-body">
		<div class="well">
		   
		    <div class="row">
			 <div class="form-group">
			      <label class="col-md-2 col-md-offset-1 control-label"> <h1 class="page-header"><b style="margin-left: 34px;">Start date :</b></h1></label>
				 <div class="col-md-3">
                                        <span class='input-group'>
                                            <input type='text' id="datePicker" name="dailyDate" class="form-control input-sm input-group datetimepicker defaultdate" value="January 04, 2017 03:13 PM" />
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </span>
				 </div>
			 </div>
		    </div>
		    <div class="row">
			 <div class="form-group">
			     <label class="col-md-2 col-md-offset-1 control-label"> <h1 class="page-header"><b style="margin-left: 39px;">End date :</b></h1></label>
				   <div class="col-md-3">
					<span class='input-group'>
					    <input type='text' id="datePicker1" name="dailyDate" class="form-control input-sm input-group datetimepicker defaultdate" value="January 04, 2017 03:13 PM" />
					    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					    </span>
					</span>  
				   </div>
			 </div>
		    </div>
		    <div class="row">
			 <div class="form-group">
			       <label class="col-md-2 col-md-offset-1 control-label"> <h1 class="page-header"><b style="margin-left: 69px;">Title :</b></h1></label>
				 <div class="col-md-3">
				    <input type='text' id="" name="" class="form-control input-sm input-group" value="" />
				 </div>
			 </div>
		    </div>
                      <div class="row">
			 <div class="form-group">
			       <label class="col-md-2 col-md-offset-1 control-label"> <h1 class="page-header"><b style="margin-left: 18px;">Description :</b></h1></label>
				 <div class="col-md-3">
				    <textarea  id="" name="" class="form-control input-sm input-group" value=""></textarea>
				 </div>
			 </div>
		    </div><br>
                      <div class="row">
			 <div class="form-group">
			       <label class="col-md-3 col-md-offset-1 control-label"> <h1 class="page-header"><b style="margin-left: 25px;">Is holiday? :</b></h1></label>
				 <div class="col-md-3">
				      <label><input type="checkbox" name="checkbox"></label>
				 </div>
			 </div>
		    </div>
                      <div class="row">
			 <div class="form-group">
			       <label class="col-md-4 control-label"> <h1 class="page-header"><b style="margin-left: 42px;">Event common to all :</b></h1></label>
				 <div class="col-md-3">
				      <label><input type="checkbox"  name="checkbox"></label>
				 </div>
			 </div>
		    </div>
                    <div class="row" id="addHide">
			 <div class="form-group">
			        <label class="col-md-4 control-label"> <h1 class="page-header"><b style="margin-left: 42px;"><a onclick="remainder()">+ Show reminder settings</a></b></h1></label>
				<div class="col-md-3">
				</div>
			 </div>
		    </div>
                    <div class="hidden" id="r_show">
                         <div class="row" id="">
                            <div class="form-group">
                                   <label class="col-md-4 control-label"> <h1 class="page-header"><b style="margin-left: 42px;"><a onclick="remainderHide()">- Hide reminder settings</a></b></h1></label>
                                   <div class="col-md-3">
                                   </div>
                            </div>
                       </div>
                        <div class="row">
                           <div class="form-group ">
                                  <label class="col-md-4 control-label"> <h1 class="page-header"><b style="margin-left: 42px;">Reminders for Event</b></h1></label>
                              
                           </div>
                       </div>
                    <div class="row">
			 <div class="form-group col-md-offset-1">
			        <label class="col-md-2 radio-inline">
                                    <input type="radio" name="optradio"> Enable reminders
                                  </label>
                                  <label class="col-md-2 radio-inline">
                                    <input type="radio" name="optradio" checked> Disable reminders
                                </label>
			 </div>
		    </div>
                    </div>
                    <hr>
                    <div class="col-sm-2 col-sm-offset-3">
			 <button type="button" class="form-control btn btn-primary btn-sm">Create Event</button>
		    </div>
                    <br><br>
		</div>
		  
                   
                   
                  
	       </div>
           
	    </div>
	 </div>
	 <div>
    </div>
 
    <script>
    function remainder(){
        $('#addHide').hide();
        $('#r_show').removeClass('hidden');
     }
     function remainderHide(){
        $('#addHide').show();
        $('#r_show').addClass('hidden');
     }
    $(document).ready(function(){
        $('#datePicker').datepicker({
            format: 'dd-mm-yyyy'
        });
        $('#datePicker1').datepicker({
            format: 'dd-mm-yyyy'
        });
   
    });
    </script>
