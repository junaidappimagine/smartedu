<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Academics</a></li>
				<li><a href="javascript:;">Manage Course & Batch</a></li>
				<li class="active">Manage Course</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Manage Course & Batch | Manage Course</h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                            </div>
                            <h4 class="panel-title"> Reports </h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								 <form class="form-horizontal">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label col-md-6">Select a report for Academics</label>
                                            <div class="col-md-6">
                                                <select class="selectpicker form-control" id="academics" data-style="btn-sm btn-white">
                                                    <option value="">Select a report</option>
                                                    <option value="exams">Recent Exams</option>
                                                    <option value="detail">Detailed report</option>
                                                    <option value="subject">Subject-wise report</option>
                                                    <option value="archives">Archives</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label col-md-6">Select a report for Attendance</label>
                                            <div class="col-md-6">
                                                <select class="selectpicker form-control" id="attendance" data-style="btn-sm btn-white">
                                                    <option value="">Select a report</option>
                                                    <option value="detailed">Detailed report</option>
                                                    <option value="archives_att">Archives</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div><br><br>
                                    <div class="row">
                                       <div class="col-md-offset-2 col-md-6">
                                            <div class="report_aca hidden">
                                                <label class="control-label col-md-6">Academics Report</label>
                                                <div class="col-md-6">
                                                    <select class="selectpicker form-control choose"  data-style="btn-sm btn-white">
                                                        <option value="">Select a report</option>
                                                        <option class="exams hidden" value="exams">Sixth Semester Examination</option>
                                                        <option class="detail hidden" value="detail">Final Report</option>
                                                        <option class="subject hidden" value="subject">English</option>
                                                        <option class="archives hidden" value="archives">A 2015-G</option>
                                                    </select>
                                                </div>
                                             </div>
                                             <div class="report_att hidden">
                                                <label class="control-label col-md-6">Attendance Report</label>
                                                <div class="col-md-6">
                                                    <select class="selectpicker form-control choose"  data-style="btn-sm btn-white">
                                                        <option value="">Select a report</option>
                                                        <option class="detailed hidden" value="detailed">Current Year Project</option>
                                                        <option class="archives_att hidden" value="archives_A">A 2015</option>
                                                    </select>
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </form><br>
							         <div class="panel-body  sixth_semester hidden">
                                        <div class=" col-md-offset-8">
                                            <button type="button" class="btn btn-primary btn-sm">Consolidated Report</button>
                                            <button type="button" class="btn btn-primary btn-sm">Consolidated PDF Report</button>
                                        </div>
                                        <h5>A 2015 - Diploma in Theatre Semester - Sixth Semester Examination </h5><br>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                        <th width="10%">Subject code</th>
                                                        <th width="10%">Subject Title</th>
                                                        <th width="10%">Credits</th>
                                                        <th width="10%">Marks</th>
                                                        <th width="10%">Remarks</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="5" style="text-align:center"><h5>Jack&nbsp;&nbsp; Admission no. - S51 &nbsp; Roll Number - DT01</h5></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Eng</td>
                                                        <td>English</td>
                                                        <td>5.0</td>
                                                        <td>D[6.0]</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sc</td>
                                                        <td>Science</td>
                                                        <td>5.0</td>
                                                        <td>D[6.0]</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Maths</td>
                                                        <td>Mathematics</td>
                                                        <td>5.0</td>
                                                        <td>B[6.0]</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>SS</td>
                                                        <td>Socail Science</td>
                                                        <td>5.0</td>
                                                        <td>E[6.0]</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Span</td>
                                                        <td>Spanish</td>
                                                        <td>5.0</td>
                                                        <td>A[6.0]</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td  colspan="5" style="text-align:center"><h5>Total &nbsp; 25.0</h5></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                         <h5>Grade Point Average (GPA) = 6.80 </h5><br>
                                         <div class="col-md-offset-10">
                                            <button type="button" class="btn btn-primary btn-sm">PDf Report</button>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="panel-body  Final_report hidden">
                                            <div class="col-md-offset-9">
                                                <button type="button" class="btn btn-primary btn-sm">Consolidated Report</button>
                                                <button type="button" class="btn btn-primary btn-sm">CSV Report</button>
                                            </div>
                                            <h5>A 2015 - Diploma in Theatre Semester 6(GPA) </h5><br>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                            <th width="60px">Subject</th>
                                                            <th width="10px">Credits</th>
                                                            <th width="10px">Sixth Semester Examination</th>
                                                            <th width="10px">Combined</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="4" style="text-align:center"><h5>Jack&nbsp;&nbsp; Admission no. - S51 &nbsp; Roll Number - DT01</h5></td>
                                                        </tr>
                                                        <tr>
                                                            <td>English</td>
                                                            <td>5.0</td>
                                                            <td>D[6.0]</td>
                                                            <td>6.0</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Science</td>
                                                            <td>5.0</td>
                                                            <td>D[6.0]</td>
                                                            <td>6.0</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mathematics</td>
                                                            <td>5.0</td>
                                                            <td>B[6.0]</td>
                                                            <td>6.0</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Socail Science</td>
                                                            <td>5.0</td>
                                                            <td>E[6.0]</td>
                                                            <td>6.0</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Spanish</td>
                                                            <td>5.0</td>
                                                            <td>A[6.0]</td>
                                                            <td>6.0</td>
                                                        </tr>
                                                        <tr>
                                                            <td  colspan="2" style="text-align:right"><h5>GPA</h5></td>
                                                            <td>6.8</td>
                                                            <td>6.8</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-offset-10">
                                                <button type="button" class="btn btn-primary btn-sm">PDf Report</button>
                                            </div>
                                    </div>
                                    <div class="panel-body english hidden">
                                        <h5>A 2015 | Diploma in Theatre Semester 6(GPA) | Jack | English | DT01 </h5><br>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                        <th width="10%">Exam</th>
                                                        <th width="10%">Marks</th>
                                                        <th width="10%">Max Marks</th>
                                                        <th width="10%">Grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Sixth Semester Examination</td>
                                                        <td>66.0</td>
                                                        <td>100.0</td>
                                                        <td>D</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                   <div class="panel-body archives_1 hidden">
                                        <h5>A 2015 - Diploma in Theatre Semester 6(GPA) </h5><br>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                        <th width="60px">Subject</th>
                                                        <th width="10px">Credits</th>
                                                        <th width="10px">First Semester Examination</th>
                                                        <th width="10px">Combined</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="4" style="text-align:center"><h5>Jack&nbsp;&nbsp; Admission no. - S51 &nbsp; Roll Number - DT01</h5></td>
                                                    </tr>
                                                    <tr>
                                                        <td>English</td>
                                                        <td>5.0</td>
                                                        <td>F[4.0]</td>
                                                        <td>4.0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Science</td>
                                                        <td>5.0</td>
                                                        <td>D[9.0]</td>
                                                        <td>9.0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mathematics</td>
                                                        <td>5.0</td>
                                                        <td>B[6.0]</td>
                                                        <td>6.0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Socail Science</td>
                                                        <td>5.0</td>
                                                        <td>E[9.0]</td>
                                                        <td>9.0</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Spanish</td>
                                                        <td>5.0</td>
                                                        <td>A[7.0]</td>
                                                        <td>7.0</td>
                                                    </tr>
                                                    <tr>
                                                        <td  colspan="2" style="text-align:right"><h5>GPA</h5></td>
                                                        <td>7.0</td>
                                                        <td>7.0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><br>
                                          <b style="border-bottom: 1px solid">Remarks</b><br><hr>
                                          No remarks added yet
                                          <div class="col-md-offset-10">
                                                <button type="button" class="btn btn-primary btn-sm">PDf Report</button>
                                            </div>
                                    </div>
                                   
                                   <div class="panel-body current_attendance hidden">
                                        <h5>A 2015 - Diploma in Theatre Semester 6(GPA) </h5><br>
                                        <div class="">
                                             <form class="form-horizontal">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Student Name</label>
                                                        <div class="col-md-3" >
                                                            <input type="text" class="form-control input-sm" placeholder="" value="" style="border-radius: 6px;"/>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label">Admission No.</label>
                                                        <div class="col-md-3" >
                                                            <input type="text" class="form-control input-sm" placeholder="" value="" style="border-radius: 6px;"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Roll Number</label>
                                                        <div class="col-md-3" >
                                                            <input type="text" class="form-control input-sm" placeholder="" value="" style="border-radius: 6px;"/>
                                                        </div>
                                                     </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Mode</label>
                                                        <div class="col-md-3">
                                                            <select class="selectpicker form-control" id="mode" data-style="btn-sm btn-white">
                                                                <option value="">Select a mode</option>
                                                                <option value="monthly">Monthly</option>
                                                                <option value="overall">Overall</option>
                                                            </select>
                                                        </div>
                                                     </div>
                                                    <div class="form-group monthly hidden">
                                                        <label class="col-md-3 control-label">Select Month and Year</label>
                                                        <div class="col-md-2">
                                                            <select class="selectpicker form-control" id="" data-style="btn-sm btn-white">
                                                                <option value="">month</option>
                                                                <option value="jan">Jan</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <select class="selectpicker form-control" id="" data-style="btn-sm btn-white">
                                                                <option value="">Year</option>
                                                                <option value="">2015</option>
                                                            </select>
                                                        </div>
                                                     </div>
                                                    <div class="form-group monthly hidden">
                                                        <label class="col-md-3 control-label"></label>
                                                        <div class="col-md-4">
                                                            <button class="btn btn-primary btn-sm ok_monthly" type="button" >&nbsp;&nbsp;&nbsp;OK&nbsp;&nbsp;</button>
                                                        </div>
                                                     </div>
                                                     <div class="form-group overall">
                                                        <label class="col-md-3 control-label"></label>
                                                        <div class="col-md-4">
                                                            <button class="btn btn-primary btn-sm ok_overall" type="button">&nbsp;&nbsp;&nbsp;OK&nbsp;&nbsp;</button>
                                                        </div>
                                                     </div>
                                                </div><br>
                                             </form>
                                             <div class="hidden mode1">
                                                <h5>Total working days : 0 |Total present : 0.0 | Percentage: 0.00 </h5>  
                                             </div>
                                              <div class="hidden mode2">
                                                <h5>Total working days : 111 |Total present : 111.0 | Percentage: 100.00 </h5>  
                                             </div><br>
                                          <b style="border-bottom: 1px solid">Remarks</b><br><hr>
                                          No remarks added yet
                                         </div>
                                    </div>
                                   
                                     <div class="attendance2 hidden">
                                        <h5>A 2015 - Diploma in Theatre Semester 6(GPA) </h5><br>
                                        <div class="">
                                             <form class="form-horizontal">
                                                <div class="row">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Student Name</label>
                                                        <div class="col-md-3" >
                                                            <input type="text" class="form-control input-sm" placeholder="" value="jack" style="border-radius: 6px;"/>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label">Admission No.</label>
                                                        <div class="col-md-3" >
                                                            <input type="text" class="form-control input-sm" placeholder="" value="S51" style="border-radius: 6px;"/>
                                                        </div>
                                                    </div>
                                                </form><br>
                                               <h5 style="text-align:center"><b>Total working days : 111 |Total present : 111.0 | Percentage: 100.00 </b></h5> 
                                          </div>
                                        </div>
						  </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12-->
			<div>
            <!-- end row -->
      </div>
		<!-- end #content -->
    <script>
    $(document).ready(function(){
        $('#academics').change(function(){
            //alert($(this).val());
            $('.report_att').addClass('hidden');
            if($(this).val()=='exams')
            {
              $('.report_aca').removeClass('hidden');
              $('.exams').removeClass('hidden');
              $('.detail').addClass('hidden');
              $('.subject').addClass('hidden');
              $('.archives').addClass('hidden');
            }
            if($(this).val()=='detail')
            {
              $('.report_aca').removeClass('hidden');
              $('.detail').removeClass('hidden');
              $('.exams').addClass('hidden');
              $('.subject').addClass('hidden');
              $('.archives').addClass('hidden');
            }
            if($(this).val()=='subject')
            {
                $('.report_aca').removeClass('hidden');
                $('.exams').addClass('hidden');
                $('.detail').addClass('hidden');
                $('.archives').addClass('hidden');
                $('.subject').removeClass('hidden');
            }
            if($(this).val()=='archives')
            {
              $('.report_aca').removeClass('hidden');
              $('.archives').removeClass('hidden');
              $('.exams').addClass('hidden');
              $('.detail').addClass('hidden');
              $('.subject').addClass('hidden');
            }
        });
        
        $('#attendance').change(function(){
           // alert();
            $('.report_aca').addClass('hidden');
            if($(this).val()=='detailed')
            {
              $('.report_att').removeClass('hidden');
              $('.detailed').removeClass('hidden');
              $('.archives_att').addClass('hidden');
            }
            if($(this).val()=='archives_att')
            {
              $('.report_att').removeClass('hidden');
              $('.detailed').addClass('hidden');
              $('.archives_att').removeClass('hidden');
            }
        });
        
         $('.choose').change(function(){
            //alert($(this).val());
             if($(this).val()=='exams')
            {
                $('.sixth_semester').removeClass('hidden');
                $('.english').addClass('hidden');
                $('.archives_1').addClass('hidden');
                $('.Final_report').addClass('hidden');
                $('.current_attendance').addClass('hidden');
                $('.attendance2').addClass('hidden');
             }
            if($(this).val()=='detail')
            {
                $('.sixth_semester').addClass('hidden');
                $('.english').addClass('hidden');
                $('.archives_1').addClass('hidden');
                $('.current_attendance').addClass('hidden');
                $('.attendance2').addClass('hidden');
                 $('.Final_report').removeClass('hidden');
            }
            if($(this).val()=='subject')
            {
               $('.sixth_semester').addClass('hidden');
                $('.english').removeClass('hidden');
                $('.archives_1').addClass('hidden');
                $('.current_attendance').addClass('hidden');
                $('.attendance2').addClass('hidden');
                $('.Final_report').addClass('hidden');
            }
            if($(this).val()=='archives')
            {
                $('.sixth_semester').addClass('hidden');
                $('.english').addClass('hidden');
                $('.archives_1').removeClass('hidden');
                $('.current_attendance').addClass('hidden');
                $('.attendance2').addClass('hidden');
                $('.Final_report').addClass('hidden');
            }
            if($(this).val()=='archives_A')
            {
               $('.sixth_semester').addClass('hidden');
                $('.english').addClass('hidden');
                $('.archives_1').addClass('hidden');
                $('.current_attendance').addClass('hidden');
                $('.attendance2').removeClass('hidden');
                $('.Final_report').addClass('hidden');
            }
            if($(this).val()=='detailed')
            {
               $('.sixth_semester').addClass('hidden');
                $('.english').addClass('hidden');
                $('.archives_1').addClass('hidden');
                $('.current_attendance').removeClass('hidden');
                $('.attendance2').addClass('hidden');
                $('.Final_report').addClass('hidden');
            }
        });
         
         $('#mode').change(function(){
            
            if($(this).val()=='monthly')
            {
              $('.monthly').removeClass('hidden');
              $('.overall').addClass('hidden');
             }
            if($(this).val()=='overall')
            {
                $('.monthly').addClass('hidden');
                $('.overall').removeClass('hidden');
            }
            if($(this).val()=='subject')
            {
                $('.monthly').addClass('hidden');
                $('.overall').removeClass('hidden');
            }
            if($(this).val()=='archives')
            {
                $('.monthly').addClass('hidden');
                $('.overall').removeClass('hidden');
            }
            
        });
          
          $('.ok_monthly').click(function()
          {
            $('.mode1').removeClass('hidden');
            $('.mode2').addClass('hidden');
           });
          $('.ok_overall').click(function()
            {
            $('.mode1').addClass('hidden');
            $('.mode2').removeClass('hidden');
            });
    });
    </script>
