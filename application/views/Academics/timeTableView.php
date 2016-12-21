<!-- begin #content -->

<style>
  .table{
    background-color: #ffffff;
  }
    .days{
	    height: 90px !important;
	    line-height: 5.1 !important;
	    padding: 0 !important;
	    text-align: center;
	    writing-mode: sideways-lr;
	    background-color: #99CCFF;
	    
	}
    .break{
	    /*background-color: #ffff99;*/
	    background-color: #5AB465;
	}
    .breaktext {
	    margin-bottom: 180px;
	    width: 100% !important;
	    color: white;
	    writing-mode: sideways-lr;
	    line-height: 0.1px;
	}
    .time{
       /*background-color: #5ab465;*/
       background-color: #99CCFF;
	border: medium none;
    }
    .period:hover{
	background-color: #FFFFCC;
    }

</style>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Time Table</a></li>
		    <li class="active">Time Table View</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">Academics | Timetable</h1>
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
			    <h4 class="panel-title">Timetable</h4>
			</div>
			 <div class="panel-body">
			    <legend>Time Table</legend>
			    <div class="row">
				<form>
				<div class="form-group">
                                    <label class="col-md-2 control-label input-sm" >Timetable <b>:</b></label>
                                    <div class="col-md-3">
                                        <select class="form-control selectpicker" id="week" data-style="btn-white">
                                            <option>week-1</option>
						<option>week-2</option>
						<option>week-3</option>
						<option>week-4</option>
                                        </select>
                                    </div>
                                </div>
				<div class="form group">
					<label class="col-md-2 control-label input-sm">Select a batch <b>:</b></label>
					<div class="col-md-3">
					<select name="duration" id="batch" class="selectpicker form-control" data-style="btn-white">
						<option>A-1</option>
						<option>B-2</option>
						<option>C-3</option>
						<option>A-4</option>
					</select>
					</div>
				</div>
				</form>
			    </div>
			<p><br></p>
			
<!--			    	<div class="panel-body">
-->					<div class="table-responsive">
					     <table  class="table table-striped table-bordered hidden " style="width: 100%" <!--id="data-table" >
					     <!--<table  class="table1 hidden" style="width: 100%;border: 1px solid">-->
						<thead>
						    <tr class="">
							<th class="time">Time</th>
							<th class="time">09:10 AM - 10:00 AM</th>				    
							<th class="time">10:00 AM - 10:50 AM</th>
							<th class="time"><!--10:50 AM - 11:00 AM--></th>
							<th class="time">11:00 AM - 11:50 AM</th>
							<th class="time">11:50 PM - 12:40 PM</th>
							<th class="time"><!--12:40 PM - 01:20 PM--></th>
							<th class="time">01:20 PM - 02:10 PM</th>
							<th class="time">02:10 PM - 03:00 PM</th>
							<th class="time"><!--03:00 PM - 03:10 PM--></th>
							<th class="time">03:10 PM - 04:00 PM</th>
							<th class="time">04:00 PM - 04:40 PM</th>
						    </tr>
							<tr>
							    <th class="days">Monday</th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th  class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="break" id="break1" rowspan="6">
								<p class="breaktext">Break (10:50 AM - 11:00 AM)</p>
							    </th>
							    <th  class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th  class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="break" id="break1" rowspan="6">
								<p  class="breaktext" style="margin-bottom: 162px;">Lunch Break (12:40 PM - 01:20 PM)</p>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="break" id="break1" rowspan="6">
								<p class="breaktext">Break (03:00 PM - 03:10 PM)</p>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							</tr>
							<tr>
							    <th class="days">Tuesday</th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							     <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							     <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							     <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							     <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							</tr>
							<tr>
							    <th class="days">Wednesday</th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							<th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							</tr>
							<tr>
							    <th class="days">Thursday</th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							</tr>
							<tr>
							<th class="days">Friday</th>
							     <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							</tr>
							<tr>
							    <th class="days">Saturday</th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							    <th class="period">
								<div class="">
								    <p>English</p>
								    <p>Saran</p>
								</div>
							    </th>
							</tr>

							</tr>
							

						    </thead>
					     </table>
					 </div>
				</div>

			   
			</div>
		    <!-- end panel -->
		    </div>
	<!-- end col-12-->
		</div>
	    </div>
	</div>

<script>
    $('#week').on('change',function(){
	$('.table').removeClass('hidden');
    });
     $('#batch').on('change',function(){
    })
</script>