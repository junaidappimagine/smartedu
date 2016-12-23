<style>
     .panel-body h1{
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
		background-color: #E2E7EB!important;
	}
	td{
		background-color: white!important;
	}

</style>
<link href="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
<script src="<?php echo base_url(); ?>assets/plugins/fullcalendar/fullcalendar/fullcalendar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/calendar.demo.min.js"></script>

            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Attendance </a></li>
                        <li><a href="javascript:;">Attendance Register</a></li>
                    </ol>
                    <h1 class="page-header">Attendance Register | Attendance Register</h1>
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
                            <h4 class="panel-title">SMS Student </h4>
                    </div>
                    <div class="panel-body">
			 <br>
			 <div class="well">
                                  <!--<div class="panel-body tpanel">-->
                                        <fieldset>
                                            <div class="row">
                                                 <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label"> <h1 class="page-header"><b>Select a Batch :</b></h1></label>
                                                            <div class="col-md-3">
                                                                <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm" >
                                                                    <option value="">Select a Batch</option>
                                                                    <option value="bscb">BSc - B</option>
                                                                    <option value="bscb1">BSc - B1</option>
                                                                    <option value="C1A">C1A - A</option>
                                                                    <option value="C2A">C2A - A</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                            </div><br>
                                            </div>
                                            
                                              <div class="row hidden" id="emptyData">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label"> <h1 class="page-header"><b>Select a Subject :</b></h1></label>
                                                            <div class="col-md-3">
                                                                <select id="selectSub" class="form-control selectpicker"  data-style="btn-white btn-sm" >
                                                                   <option value="">Select a Subject</option>
                                                                   <option value="All">All Subjects</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                            <br>
                                            </div>
                                            <div class="row hidden" id="subjects">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label"> <h1 class="page-header"><b>Select a Subject :</b></h1></label>
                                                            <div class="col-md-3">
                                                                <select id="selectsubjects" class="form-control selectpicker"  data-style="btn-white btn-sm" >
                                                                    <option value="">Select a Subject</option>
                                                                     <option value="All">All Subjects</option>
                                                                    <option value="English">English</option>
                                                                    <option value="Hindi">Hindi</option>
                                                                    <option value="Maths">Maths</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                            <br>
                                            </div>
                                             <div class="row hidden" id="mode">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label"> <h1 class="page-header"><b>Select a Mode :</b></h1></label>
                                                            <div class="col-md-3">
                                                                <select id="selectmode" class="form-control selectpicker"  data-style="btn-white btn-sm" >
                                                                    <option value="">Select a Mode</option>
                                                                    <option value="Monthly">Monthly</option>
                                                                    <option value="Overall">Overall</option>
                                                                    <option value="Custom">Custom date</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                            <br>
                                            </div>
                                            <div class="row hidden" id="sortby">
                                                <div class="form-group">
                                                    <p class="col-md-1 "> Sort by</p>
                                                    <label class="radio-inline">
                                                      <input type="radio" value="" name="sort" checked>Name
                                                    </label>
                                                    <label class="radio-inline">
                                                      <input type="radio" value="" name="sort">Roll Number
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="row hidden" id="monthly">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label"> <h1 class="page-header"><b>Select a Month & Year :</b></h1></label>
                                                            <div class="col-md-2">
                                                                <select id="selectmonth" class="form-control selectpicker"  data-style="btn-white btn-sm" >
                                                                    <option value="">Select a Month</option>
                                                                    <option value="jan">jan</option>
                                                                    <option value="feb">feb</option>
                                                                    <option value="mar">mar</option>
                                                                    <option value="april">apr</option>
                                                                    <option value="may">may</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2 hidden" id="year">
                                                                <select id="selectYear" class="form-control selectpicker"  data-style="btn-white btn-sm" >
                                                                    <option value="">Select a Year</option>
                                                                    <option value="2014">2014</option>
                                                                    <option value="2015">2015</option>
                                                                    <option value="2016">2016</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                            <br>
                                            </div>
                                            <div class="row hidden selectDate" id="">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label"> <h1 class="page-header"><b>Select Start Date :</b></h1></label>
                                                            <div class="col-md-3">
                                                                <span class='input-group'>
                                                                    <input type='text' id="datePicker" name="dailyDate" class="form-control input-sm input-group datetimepicker defaultdate" value="Jan-04-2016" />
                                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                                    </span>
                                                                </span>  
                                                            </div>
                                                    </div>
                                            <br>
                                            </div>
                                            <div class="row hidden selectDate" id="">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label"> <h1 class="page-header"><b>Select End Date :</b></h1></label>
                                                            <div class="col-md-3">
                                                                <span class='input-group'>
                                                                    <input type='text' id="datePicker1" name="dailyDate" class="form-control input-sm input-group datetimepicker defaultdate" value="Feb-22-2016" />
                                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                                    </span>
                                                                </span>  
                                                            </div>
                                                    </div>
                                            <br>
                                            </div>
                                            <div class="col-md-12 hidden"  id="noData"  style="background-color: rgb(195,217,255);"><p></p>
                                                <p style="margin-left: 369px;"><b>No Report</b></p>
                                            </div>
                                             </div>
                                            <div class="panel-body hidden" id="panel" style="background-color: rgb(195,217,255);">
                                                <div class="form-group col-sm-12">
                                                    <div class="table-responsive">
                                                        <table id="data-table" class="table table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Admn No.</th>
                                                                <th>Roll number</th>
                                                                <th>Total</th>
                                                                <th>Percentage(%)</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Rafeeq</td>
                                                                    <td>STD003</td>
                                                                    <td>Cls1A</td>
                                                                    <td>22</td>
                                                                    <td>100.0</td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Deena</td>
                                                                    <td>STD011</td>
                                                                    <td>Cls1A01</td>
                                                                    <td>22</td>
                                                                    <td>100.0</td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Arun</td>
                                                                    <td>STD014</td>
                                                                    <td>Cls1A02</td>
                                                                    <td>22</td>
                                                                    <td>100.0</td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Faizer</td>
                                                                    <td>STD008</td>
                                                                    <td>Cls1A</td>
                                                                    <td>22</td>
                                                                    <td>100.0</td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>Ahamed</td>
                                                                    <td>STD016</td>
                                                                    <td>Cls1A03</td>
                                                                    <td>22</td>
                                                                    <td>100.0</td>
                                                                    
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                     </div>
                                                    </div>
                                                    <div class="col-sm-2 col-sm-offset-5">
                                                        <a class="form-control btn btn-primary btn-sm" href="<?php echo base_url('academicsCtrl/addReport_pdf_generate');?>">View PDF report</a>
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
              
                function selectGrade(){
		$(".check").attr('checked',true);
		}
		function noneGrade(){
		$(".check").prop('checked', false); 
		}
		 $('#selectClass').change(function(){
                        console.log($(this).val());
                        if ($(this).val()=='bscb' || $(this).val()=='bscb1' ) {
                            $('#emptyData').removeClass('hidden');
                            $('#subjects').addClass('hidden');
                            $('#mode').addClass('hidden');
                            $('#panel').addClass('hidden');
                        }
                        else if ($(this).val()=='C1A') {
                            $('#subjects').removeClass('hidden');
                            $('#emptyData').addClass('hidden');
                            $('#mode').addClass('hidden');
                            $('#panel').addClass('hidden');
                        }
                        else if ($(this).val()=='C2A') {
                            $('#subjects').removeClass('hidden');
                            $('#emptyData').addClass('hidden');
                            $('#mode').addClass('hidden');
                            $('#panel').addClass('hidden');
                        }
                        else{
                            $('#subjects').addClass('hidden');
                            $('#emptyData').addClass('hidden');
                            $('#mode').addClass('hidden');
                            $('#year').addClass('hidden');
                            $('#monthly').addClass('hidden');
                            $('#panel').addClass('hidden');
                        }
                });
                  $('#selectSub').change(function(){
              
                    if ($(this).val() == 'All') {
                        $('#mode').removeClass('hidden');
                       
                    }else{
                        $('#mode').addClass('hidden');
                        $('#year').addClass('hidden');
                        $('#monthly').addClass('hidden');
                        $('#panel').addClass('hidden');
                        
                    }
                  });
                 $('#selectsubjects').change(function(){
              
                    if ($(this).val() == 'All'||$(this).val() == 'English'||$(this).val() == 'Hindi'||$(this).val() == 'Maths') {
                        $('#mode').removeClass('hidden');
                       
                    }else{
                        $('#mode').addClass('hidden');
                        $('#year').addClass('hidden');
                        $('#monthly').addClass('hidden');
                        $('#panel').addClass('hidden');
                    }
                  });
                  $('#selectmode').change(function(){
                    if ($(this).val() == 'Monthly') {
                        $('#monthly').removeClass('hidden');
                        $('#noData').addClass('hidden');
                        $('.selectDate').addClass('hidden');
                         $('#panel').addClass('hidden');
                       
                    }else if ($(this).val() == 'Overall') {
                        $('#panel').removeClass('hidden');
                        $('#monthly').addClass('hidden');
                        $('.selectDate').addClass('hidden');
                       
                    }
                    else if ($(this).val() == 'Custom') {
                        $('.selectDate').removeClass('hidden');
                        $('#monthly').addClass('hidden');
                        $('#noData').addClass('hidden');
                         $('#panel').addClass('hidden');
                       
                    }
                    else{
                        $('#monthly').addClass('hidden');
                        $('#noData').addClass('hidden');
                        $('.selectDate').addClass('hidden');
                        $('#year').addClass('hidden');
                        $('#monthly').addClass('hidden');
                         $('#panel').addClass('hidden');
                    }
                  });
                  $('#selectmonth').change(function(){
                    if ($(this).val() == 'jan'||$(this).val() == 'feb'||$(this).val() == 'mar'||$(this).val() == 'apr'||$(this).val() == 'may') {
                        $('#year').removeClass('hidden');
                    }
                    else{
                        $('#year').addClass('hidden');
                    }
                  });
                  $('#selectYear').change(function(){
                    if ($(this).val() == '2016') {
                        $('#panel').removeClass('hidden');
                    }
                    else{
                        $('#panel').addClass('hidden');
                    }
                  });
                  
		$(document).ready(function(){
                    $('#datePicker').datepicker({
                        format: 'M-dd-yyyy'
                    });
                    $('#datePicker1').datepicker({
                        format: 'M-dd-yyyy'
                    });
    
                    });
                      $('#calendar').fullCalendar(
                {
                 header: {
                        left: 'prev',
                        center: 'title',
                        right: 'next'
                        },
             }); 
		
	</script>
        

		