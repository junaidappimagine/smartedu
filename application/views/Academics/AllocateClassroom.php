	<style>
	    /*.nav_title{
		background-color: #3A92AB;
		/*background-color: #CC4946;*/
	    }*/
	   /* nav_title active.textcolor{
		color: white;
	    }*/
	</style>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Manage Buildings</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">Academics | Configurations</h1>
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
			    </div>
			    <h4 class="panel-title">Allocate Classroom</h4>
			</div>
			<div class="panel-body">
			  <legend>Allocate Classroom</legend>
			  <form class="form">
				    <div class="form-group">
                                    <label class="col-md-2 control-label input-sm">Allocation  Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>:</b></label>
                                    <div class="col-md-3">
                                        <label class="radio-inline">
                                            <input name="optionsRadios" class="week_date"  value="Week" type="radio">  Weekly 
                                        </label>
                                        <label class="radio-inline">
                                            <input name="optionsRadios" class="week_date" value="Date"  type="radio"> Date specific
                                        </label>
                                    </div>
				    </div>
				    <div class="form-group date hidden">
				    <label class="col-md-2  control-label input-sm">Timetable &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b></label>
				    <div class="col-md-4">
					<select class="form-control selectpicker input-sm bs-select-hidden" data-live-search="true" data-style="btn-white btn-sm" name="" id="day_month">
					    <option value="select">Select Date</option>
					    <option value="feb16_feb24">February 16, 2016  -  February 24, 2016</option>
					    <option value="feb29_mar07">February 29, 2016  -  March 07, 2016</option>
					    <option value="mar08_mar15">March 08, 2016  -  March 15, 2016</option>
					    <option value="mar16_mar23">March 16, 2016  -  March 23, 2016</option>
					    <option value="mar29_apr04">March 29, 2016  -  April 04, 2016</option>
					    <option value="nov25_nov30">November 25, 2016  -  November 30, 2016</option>
					    <option value="dec01_dec30">December 01, 2016  -  November 30, 2017</option>
					</select>
				    </div>
				    </div>
				    <div class="form-group month_date hidden">
				    <label class="col-md-1 control-label input-sm">Month &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b></label>
				    <div class="col-md-2">
					<select class="form-control selectpicker input-sm bs-select-hidden" data-live-search="true" data-style="btn-white btn-sm" name="" id="month" >
					    <option value="Jan">Jan</option>
					    <option value="Feb">Feb</option>
					    <option value="Mar">Mar</option>
					    <option value="Apr">Apr</option>
					    <option value="May">May</option>
					    <option value="Jun">Jun</option>
					    <option value="Jul">Jul</option>
					    <option value="Aug">Aug</option>
					    <option value="Sep">Sep</option>
					    <option value="Oct">Oct</option>
					    <option value="Nov">Nov</option>
					    <option value="Dec">Dec</option>
					</select>
				    </div>
				    </div>
				    <div class="form-group month_date hidden">
				    <label class="col-md-1 control-label input-sm">Year &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b></label>
				    <div class="col-md-2">
					<select class="form-control selectpicker input-sm bs-select-hidden" data-live-search="true" data-style="btn-white btn-sm" name="" id="year" >
					    <option value="2016">2016</option>
					    <option value="2015">2015</option>
					    <option value="2014">2014</option>
					    <option value="2013">2013</option>
					</select>
				    </div>
				    </div>
				    <input type="button" id="view" class="btn btn-info btn-sm hidden" value="View">
				    <input type="button" id="view1" class="btn btn-info btn-sm hidden" value="View">
			  </form>
			  
			  <div class="col-md-12 row hidden tabledata">
			    <br>
			    <div class="panel panel-default panel-with-tabs" data-sortable-id="ui-widget-9">
				<div class="panel-heading" style="height: 40px">
  				    <h4 class="panel-title pull-left">Search</h4>
				    <div class="form-group pull-left form-group" style="margin-left: 26px">
					 <input class="form-control input-sm" style="margin-top: -5px;" type="text">
				     </div>
				    <ul id="myTab" class="nav nav-tabs pull-right">
					<li class="active nav_title"><a class="textcolor" href="#Mon" data-toggle="tab" aria-expanded="true"><i class="fa fa-calendar"></i> <span class="hidden-xs">Mon</span></a></li>
					<li class="nav_title"><a class="textcolor" href="#Tus" data-toggle="tab" aria-expanded="false"><i class="fa fa-calendar"></i> <span class="hidden-xs">Tus</span></a></li>
					<li class="nav_title"><a class="textcolor" href="#Wed" data-toggle="tab" aria-expanded="false"><i class="fa fa-calendar"></i> <span class="hidden-xs">Wed</span></a></li>
					<li class="nav_title"><a class="textcolor" href="#Thu" data-toggle="tab" aria-expanded="false"><i class="fa fa-calendar"></i> <span class="hidden-xs">Thu</span></a></li>
					<li class="nav_title"><a class="textcolor" href="#Fri" data-toggle="tab" aria-expanded="false"><i class="fa fa-calendar"></i> <span class="hidden-xs">Fri</span></a></li>
					<li class="nav_title"><a class="textcolor" href="#Sat" data-toggle="tab" aria-expanded="false"><i class="fa fa-calendar"></i> <span class="hidden-xs">Sat</span></a></li>
				    </ul>
				</div>
				<div id="myTabContent" class="tab-content" style="">
				    <div class="tab-pane fade active in" id="Mon">
					<table class="table table-bordered row" style="width: 1006px">
					    <tr>
						<th colspan="8">C1 - A</th>
					    </tr>
					    <tr>
						<td style="width: 140px">
						    <div class="one">
							<p>Maths</p>
							<p>Keerthi + 2</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Science</p>
							<p>Kunal</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>English</p>
							<p>Sheena</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Maths</p>
							<p>Keerthi</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Maths</p>
							<p>Keerthi + 2</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Science</p>
							<p>Kunal</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>English</p>
							<p>Sheena</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Maths</p>
							<p>Keerthi</p>
						    </div>
						</td>
					    </tr>
					</table>
				    </div>
				    <div class="tab-pane fade" id="Tus">
					<table class="table table-bordered row" style="width: 1006px">
					    <tr>
						<th colspan="8">C1 - A</th>
					    </tr>
					    <tr>
						<td style="width: 140px">
						    <div class="one">
							<p>Maths</p>
							<p>Keerthi + 2</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Science</p>
							<p>Kunal</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>English</p>
							<p>Sheena</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>English</p>
							<p>Sheena</p>
						    </div>
						</td>
					    </tr>
					</table>
				    </div>
				    <div class="tab-pane fade" id="Wed">
					<table class="table table-bordered row" style="width: 1006px">
					    <tr>
						<th colspan="8">C1 - A</th>
					    </tr>
					    <tr>
						<td style="width: 140px">
						    <div class="one">
							<p>Maths</p>
							<p>Keerthi + 2</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Science</p>
							<p>Kunal</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>English</p>
							<p>Sheena</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Maths</p>
							<p>Keerthi</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Maths</p>
							<p>Keerthi + 2</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Science</p>
							<p>Kunal</p>
						    </div>
						</td>
					    </tr>
					</table>
				    </div>
				    <div class="tab-pane fade" id="Thu">
					<table class="table table-bordered row" style="width: 1006px">
					    <tr>
						<th colspan="8"><center>No Data</center></th>
					    </tr>
					</table>
				    </div>
				    <div class="tab-pane fade" id="Fri">
					<table class="table table-bordered row" style="width: 1006px">
					    <tr>
						<th colspan="8">C1 - A</th>
					    </tr>
					    <tr>
						<td style="width: 140px">
						    <div class="one">
							<p>Maths</p>
							<p>Keerthi + 2</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Science</p>
							<p>Kunal</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>English</p>
							<p>Sheena</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Maths</p>
							<p>Keerthi</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Maths</p>
							<p>Keerthi + 2</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Science</p>
							<p>Kunal</p>
						    </div>
						</td>
					    </tr>
					</table>
				    </div>
				    <div class="tab-pane fade" id="Sat">
					<table class="table table-bordered row" style="width: 1006px">
					    <tr>
						<th colspan="8"><center>No Data</center></th>
					    </tr>
					</table>
				    </div>
				</div>
				<br>
				<div class="col-md-12">
				</div>
			     </div>
			  </div>
			  <br>
			  <div class="nodata hidden">
				<table class="table table-bordered" style="">
				    <tr>
					<th class="bg-nodata" style="background-color: #FFF1AB;" colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
			  </div>
			  <br>
			 <div class="panel hidden dayday panel-default panel-with-tabs" data-sortable-id="ui-unlimited-tabs-2">
				<div class="panel-heading" style="height: 40px">
  				    <h4 class="panel-title pull-left">Search</h4>
				    <div class="form-group pull-left form-group" style="margin-left: 26px">
					 <input class="form-control input-sm" style="margin-top: -5px;" type="text">
				     </div>
				    <div class="tab-overflow overflow-right" style="height: 40px;margin-top: -10px">
                                <ul class="nav nav-tabs" style="margin-left: 0px;">
                                    <li class="prev-button" style=""><a href="javascript:;" data-click="prev-tab" class="text-inverse"><i class="fa fa-arrow-left"></i></a></li>
                                    <li class="active"><a href="#nav-tab2-1" data-toggle="tab" aria-expanded="true">01 - Mon</a></li>
                                    <li class=""><a href="#nav-tab2-2" data-toggle="tab" aria-expanded="false">02 - Tue</a></li>
                                    <li class=""><a href="#nav-tab2-3" data-toggle="tab" aria-expanded="false">03 - Wed</a></li>
                                    <li class=""><a href="#nav-tab2-4" data-toggle="tab" aria-expanded="false">04 - Thu</a></li>
                                    <li class=""><a href="#nav-tab2-5" data-toggle="tab" aria-expanded="false">05 - Fri</a></li>
                                    <li class=""><a href="#nav-tab2-6" data-toggle="tab">06 - Sat</a></li>
                                    <li class=""><a href="#nav-tab2-7" data-toggle="tab" >07 - Sun</a></li>
                                    <li class=""><a href="#nav-tab2-8" data-toggle="tab">08 - Mon</a></li>
                                    <li class=""><a href="#nav-tab2-9" data-toggle="tab">09 - Tue</a></li>
                                    <li class=""><a href="#nav-tab2-10" data-toggle="tab" aria-expanded="false">10 - Wed</a></li>
                                    <li class=""><a href="#nav-tab2-11" data-toggle="tab">11 - Thu</a></li>
                                    <li class=""><a href="#nav-tab2-12" data-toggle="tab">12 - Fri</a></li>
                                    <li class=""><a href="#nav-tab2-13" data-toggle="tab">13 - Sat</a></li>
                                    <li class=""><a href="#nav-tab2-14" data-toggle="tab" >14 - Sun</a></li>
                                    <li class=""><a href="#nav-tab2-15" data-toggle="tab">15 - Mon</a></li>
                                    <li class=""><a href="#nav-tab2-11" data-toggle="tab">16 - Tue</a></li>
                                    <li class=""><a href="#nav-tab2-17" data-toggle="tab">17 - Wed</a></li>
                                    <li class=""><a href="#nav-tab2-18" data-toggle="tab">18 - Thu</a></li>
                                    <li class=""><a href="#nav-tab2-19" data-toggle="tab">19 - Fri</a></li>
                                    <li class=""><a href="#nav-tab2-20" data-toggle="tab" aria-expanded="false">20 - Sat</a></li>
				    <li class=""><a href="#nav-tab2-21" data-toggle="tab" >21 - Sun</a></li>
				    <li class=""><a href="#nav-tab2-22" data-toggle="tab">22 - Mon</a></li>
                                    <li class=""><a href="#nav-tab2-23" data-toggle="tab">23 - Tue</a></li>
                                    <li class=""><a href="#nav-tab2-24" data-toggle="tab">24 - Wed</a></li>
                                    <li class=""><a href="#nav-tab2-25" data-toggle="tab">25 - Thu</a></li>
                                    <li class=""><a href="#nav-tab2-26" data-toggle="tab">26 - Fri</a></li>
                                    <li class=""><a href="#nav-tab2-27" data-toggle="tab">27 - Sat</a></li>
				    <li class=""><a href="#nav-tab2-28" data-toggle="tab" >28 - Sun</a></li>
				    <li class=""><a href="#nav-tab2-29" data-toggle="tab">29 - Mon</a></li>
                                    <li class=""><a href="#nav-tab2-30" data-toggle="tab" aria-expanded="false">30 - Tue</a></li>
				    <li class="next-button" style=""><a href="javascript:;" data-click="next-tab" class="text-inverse"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </div>
				</div>
			    <div class="tab-content">
                            <div class="tab-pane fade" id="nav-tab2-1">
                                					<table class="table table-bordered row" style="width: 1006px">
					    <tr>
						<th colspan="8">C1 - A</th>
					    </tr>
					    <tr>
						<td style="width: 140px">
						    <div class="one">
							<p>Maths</p>
							<p>Keerthi + 2</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Science</p>
							<p>Kunal</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>English</p>
							<p>Sheena</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Maths</p>
							<p>Keerthi</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Maths</p>
							<p>Keerthi + 2</p>
						    </div>
						</td>
						<td style="width: 140px">
						    <div class="one">
							<p>Science</p>
							<p>Kunal</p>
						    </div>
						</td>
					    </tr>
					</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-2">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-3">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-4">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-5">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-6">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-7">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-8">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-9">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-10">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-11">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade active in" id="nav-tab2-12">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-13">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-14">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-15">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-16">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-17">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-18">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-19">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
                            <div class="tab-pane fade" id="nav-tab2-20">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
			    <div class="tab-pane fade" id="nav-tab2-21">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
			    <div class="tab-pane fade" id="nav-tab2-22">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
			    <div class="tab-pane fade" id="nav-tab2-23">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
			    <div class="tab-pane fade" id="nav-tab2-24">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
			    <div class="tab-pane fade" id="nav-tab2-25">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
			    <div class="tab-pane fade" id="nav-tab2-26">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
			    <div class="tab-pane fade" id="nav-tab2-27">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
			    <div class="tab-pane fade" id="nav-tab2-28">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
			    <div class="tab-pane fade" id="nav-tab2-29">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>
			    <div class="tab-pane fade" id="nav-tab2-30">
		    		<table class="table table-bordered row" style="width: 1006px">
				    <tr>
					<th colspan="8"><center>No Data</center></th>
				    </tr>
				</table>
                            </div>

			    
                        </div>
                    </div>

			</div>
		    </div>
		  </div>
		    <!-- end panel -->
	    </div>
	<!-- end col-12-->
	  </div>
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-1.9.1.min.js"></script> 
<script>
    $('.week_date').on('change',function(){
	var data=$('input[name=optionsRadios]:checked').val();
	if (data=="Week") {
	    $('.date').removeClass('hidden');
	    $('.btn').removeClass('hidden');
	    $('.month_date').addClass('hidden');
	    $('#view').removeClass('hidden');
	    $('#view1').addClass('hidden');
	    $('.nodata').addClass('hidden');
	}else if(data=="Date"){
	    $('.month_date').removeClass('hidden');
	    $('.date').addClass('hidden');
	    $('.btn').removeClass('hidden');
	    $('.tabledata').addClass('hidden');
	    $('#view1').removeClass('hidden');
	    $('#view').addClass('hidden');
	}
    });
    $('#view').on('click',function(){
    var data=$('#day_month').val();
    if (data=="feb29_mar07") {
	$('.tabledata').removeClass('hidden');
	$('.nodata').addClass('hidden');
	$('.dayday').addClass('hidden')
    }else{
	$('.tabledata').addClass('hidden');
    }
    });
    $('#view1').on('click',function(){
    var Month=$('#month').val();
    var Year=$('#year').val();
    console.log(Month);
    console.log(Year);
    if (Month=="Feb" & Year=="2015" ) {
	//$('.tabledata').removeClass('hidden');
	$('.nodata').addClass('hidden');
	$('.dayday').removeClass('hidden')

    }else{
	$('.nodata').removeClass('hidden');
	$('.dayday').addClass('hidden')
    }
    });
</script>