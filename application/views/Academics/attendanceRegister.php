<style>
     .panel-body h1{
                    font-size: 14px;
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
                                                                <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm" >
                                                                   <option value="">Select a Subject</option>
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
                                                                    <option value="English">English</option>
                                                                    <option value="Hindi">Hindi</option>
                                                                    <option value="Maths">Maths</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                            <br>
                                            </div>
                                             <div class="row hidden" id="subjects1">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label"> <h1 class="page-header"><b>Select a Subject :</b></h1></label>
                                                            <div class="col-md-3">
                                                                <select id="selectsubjects1" class="form-control selectpicker"  data-style="btn-white btn-sm" >
                                                                    <option value="">Select a Subject</option>
                                                                    <option value="English">English</option>
                                                                    <option value="Hindi">Hindi</option>
                                                                    <option value="Maths">Maths</option>
                                                                    <option value="French">French</option>
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
                                             <div class="col-md-12 hidden"  id="calender"  style="background-color: rgb(195,217,255);"><p></p>
                                                
                                                <p style="margin-left: 369px;"><b>No timetable entries found</b></p>
                                            </div>
                                            <div class="col-md-12 hidden"  id="noData"  style="background-color: rgb(195,217,255);"><p></p>
                                                <p style="margin-left: 369px;"><b>No timetable entries present  </b></p>
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
                            $('#subjects1').addClass('hidden');
                        }
                        else if ($(this).val()=='C1A') {
                            $('#subjects').removeClass('hidden');
                            $('#emptyData').addClass('hidden');
                            $('#subjects1').addClass('hidden');
                        }
                        else if ($(this).val()=='C2A') {
                            $('#subjects1').removeClass('hidden');
                            $('#emptyData').addClass('hidden');
                            $('#subjects').addClass('hidden');
                        }
                        else{
                            $('#subjects').addClass('hidden');
                            $('#emptyData').addClass('hidden');
                            $('#subjects1').addClass('hidden');
                        }
                });
                 $('#selectsubjects').change(function(){
              
                    if ($(this).val() == 'English'||$(this).val() == 'Hindi'||$(this).val() == 'Maths') {
                        $('#sortby').removeClass('hidden');
                        $('#calender').removeClass('hidden');
                    }else{
                        $('#sortby').addClass('hidden');
                        $('#calender').addClass('hidden');
                    }
                  });
                  $('#selectsubjects1').change(function(){
                    if ($(this).val() == 'English'||$(this).val() == 'Hindi'||$(this).val() == 'Maths'||$(this).val() == 'French') {
                        $('#sortby').removeClass('hidden');
                        $('#noData').removeClass('hidden');
                    }else{
                        $('#sortby').addClass('hidden');
                        $('#noData').addClass('hidden');
                    }
                  });
                  
		$(document).ready(function(){
                
    
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
        

		