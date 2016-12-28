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
	    background-color: #DDDDDD;
	    
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
       background-color: #DDDDDD;
	border: medium none;
    }
    .period:hover{
	background-color: #FFFFCC;
    }
    
    .col-md-6.well.welltwo {
    float: right;
    width: 49%;
}
.col-md-6.well.wellone {
    float: left;
    width: 49%;
}

</style>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Manage Allocation</li>
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
			    <h4 class="panel-title">Manage Allocation</h4>
			</div>
			<div class="panel-body">
			  <legend>Manage Allocation</legend>
			  <form class="vertical">
			    <div class="form-group">
				<label class="col-md-1 input-sm">Class :</label>
				<div class="col-md-3">
				<select class="selectpicker Classdata form-control input-sm" data-style="btn-white">
				    <option value="">Select a class</option>
				    <option value="">Grade 1 </option>
				    <option value="">Grade 2 </option>
				    <option value="">Grade 3 </option>
				    <option value="">Grade 4 </option>
				    <option value="">Class 1 </option>
				    <option value="">Class 2 </option>
				    <option value="">Standard 1  </option>
				    <option value="">Class 5 - CCE </option>
				    <option value="">Standard 3 </option>
				    <option value="">Class 3 </option>
				    <option value="">Class 6 </option>
				    <option value="">Class 7 </option>
				</select>
				</div>
			    </div>
			    <div class="form-group Batchdata hidden">
				<label class="col-md-1 input-sm">Batch :</label>
				<div class="col-md-3">
				<select class="selectpicker form-control  input-sm" data-style="btn-white">
				<option>Select a Batch</option>
				<option>G2 - A</option>
			      </select>
				</div>
			    </div>
			    
			    <a href="<?php echo base_url('HR_EmployeeMgmnt/EmployeeSubjectAssociation');?>" class="btn btn-primary asso hidden btn-sm">Subject Asso</a> 
			  </form>
			<div class="col-md-12">
			<p><br></p>
			<div class="table-responsive">
					     <table  class="table table-striped table-bordered hidden timetable " style="width: 100%" <!--id="data-table" >
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
								<input type="checkbox" class="checkval"  value="N">
								<div class="period">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th  class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="break" id="break1" rowspan="6">
								<p class="breaktext">Break (10:50 AM - 11:00 AM)</p>
							    </th>
							    <th  class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th  class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="break" id="break1" rowspan="6">
								<p  class="breaktext" style="margin-bottom: 162px;">Lunch Break (12:40 PM - 01:20 PM)</p>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="break" id="break1" rowspan="6">
								<p class="breaktext">Break (03:00 PM - 03:10 PM)</p>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							</tr>
							<tr>
							    <th class="days">Tuesday</th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName">Raj</p>
								    <p class="subName">English</p>
								</div>
							    </th>
							     <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName">Kumar</p>
								    <p class="subName">Tamil</p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							     <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							     <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName">Murgan</p>
								    <p class="subName">Hindi</p>
								</div>
							    </th>
							     <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							</tr>
							<tr>
							    <th class="days">Wednesday</th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							<th class="period">
							    <input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							</tr>
							<tr>
							    <th class="days">Thursday</th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							</tr>
							<tr>
							<th class="days">Friday</th>
							     <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							</tr>
							<tr>
							    <th class="days">Saturday</th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							    <th class="period">
								<input type="checkbox" class="checkval"  value="N">
								<div class="">
								    <p class="staffName"></p>
								    <p class="subName"></p>
								</div>
							    </th>
							</tr>
							</tr>
						    </thead>
					     </table>
					    <input type="hidden" id="staffname">
					    <input type="hidden" id="subname"> 
					 </div>
			<div class="col-md-6 well wellone hidden">
			     <legend><h4>Select subject and add employee</h4></legend>
			     <div class="col-md-6">
				<select class="form-control selectpicker subject" data-style="btn-white">
				    <option value="SelectSubject">Select Subject</option>
				    <option value="English">English</option>
				    <option value="Maths">Maths</option>
				    <option value="Science">Science</option>
				</select>
				<p></p>
			     </div>
			     <p class="col-md-12">Assign any of the following employees into the respective slot in the timetable</p>
			     <div class="col-md-12">
				<div class="English hidden">
				    <label class="btn btn-info btn-xs gettext">Seenu</label>
				    <label class="btn btn-info btn-xs gettext">ram</label>
				    <label class="btn btn-info btn-xs gettext">siva</label>
				</div>
				<div class="Maths hidden">
				    <label class="btn btn-info btn-xs gettext">vijay</label>
				    <label class="btn btn-info btn-xs gettext">sekar</label>
				    <label class="btn btn-info btn-xs gettext">mani</label>
				</div>
				<div class="Science hidden">
				    <label class="btn btn-info btn-xs gettext">senthil</label>
				    <label class="btn btn-info btn-xs gettext">guna</label>
				    <label class="btn btn-info btn-xs gettext">vicky</label>
				</div>
			     </div>
			</div>
			<div class="col-md-6 well welltwo hidden" >
			    <legend><h4>Weekly classes </h4></legend>
			    <label><b>Recuried : 15</b></label>
			    <label  style="float: right" ><b>Allocated : 15</b></label>
			    <table class="table table-bordered table table-striped">
				<thead>
				    <tr>
					<th>Subject </th>
					<th>Allocated classes</th>
				    </tr>
				</thead>
				<tbody>
				    <tr>
					<td>English </td>
					<td>0 / 6</td>
				    </tr>
				    <tr>
					<td>Maths </td>
					<td>2 / 6</td>
				    </tr>
				    <tr>
					<td>Science </td>
					<td>1 / 6</td>
				    </tr>
				</tbody>
			    </table>
			</div>

			</div>
    

			</div>
		    </div>
		  </div>
		    <!-- end panel -->
	    </div>
	<!-- end col-12-->
	  </div>
<script>
    
    $('.subject').on('change',function(){
	    var data=$('.subject').val();
	    var nnn=$('#subname').val(data);
	    console.log(nnn);
	    if (data=="SelectSubject") {
		$('.English').addClass('hidden');
		$('.Maths').addClass('hidden');
		$('.Science').addClass('hidden');
	    }else if (data=="English")  {
		$('.English').removeClass('hidden');
		$('.Maths').addClass('hidden');
		$('.Science').addClass('hidden');
	    }else if (data=="Maths")  {
		$('.English').addClass('hidden');
		$('.Maths').removeClass('hidden');
		$('.Science').addClass('hidden');
	    }else if (data=="Science")  {
		$('.English').addClass('hidden');
		$('.Maths').addClass('hidden');
		$('.Science').removeClass('hidden');
	    }
    })
    
    $('.gettext').on('click',function(){
     var data = $(this).text();
      testdemo(data)
    })
    
    function testdemo(data){
      var sttName = data;
    $('#staffname').val(sttName);
    }
    
    $(".period").on('click',function () {
	var valu=$(this).find('.checkval').val();
	if(valu=='N'){
	    $(this).find('.checkval').val('Y');
	    $(this).find('input').attr('checked',true);	
	}else {
	    $(this).find('.checkval').val('N');
	    $(this).find('input').prop('checked',false);
	}
	if ($(this).find('.checkval').is(':checked')){
	    //console.log("checked");
	    var STAFFNAME=$('#staffname').val();
	    var SUBNAME=$('#subname').val();
	    //console.log(dddd,'newdate');
	    $(this).find('p.staffName').empty().append(STAFFNAME);
	    $(this).find('p.subName').empty().append(SUBNAME);
	}else {
	    //console.log("unchecked");
	    $(this).find('p.staffName').empty();
	    $(this).find('p.subName').empty();
	} 
    });
    $('.Classdata').on('change',function(){
	$('.Batchdata').removeClass('hidden')
    })
    $('.Batchdata').on('change',function(){
	$('.timetable').removeClass('hidden')
	$('.wellone').removeClass('hidden')
	$('.welltwo').removeClass('hidden')
	$('.asso').removeClass('hidden')
    })


</script>