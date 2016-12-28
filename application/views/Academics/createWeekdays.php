	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Classromm allocation</li>
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
			    <h4 class="panel-title">Create Weekday</h4>
			</div>
			<div class="panel-body">
			  <legend>Create Weekday</legend>
			    <form class="form">
			      	    <div class="form-group date ">
				    <label class="col-md-1  control-label input-sm"> &nbsp;&nbsp;  Class  &nbsp;&nbsp;&nbsp;&nbsp;<b>:</b></label>
				    <div class="col-md-3">
					<select class="form-control selectpicker slectclass  input-sm bs-select-hidden" data-live-search="true" data-style="btn-white btn-sm" name="" id="day_month">
					    <option value="">Select</option>
					    <option value="">Class1</option>
					    <option value="">Class2</option>
					    <option value="">Class3</option>
					</select>
				    </div>
				    </div>
				    <div class="form-group month_date hidden slectbatch">
				    <label class="col-md-1 control-label input-sm">Batch &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b></label>
				    <div class="col-md-3">
					<select class="form-control selectpicker batch  input-sm bs-select-hidden" data-live-search="true" data-style="btn-white btn-sm" name="" id="month" >
					    <option value="select">Select</option>
					    <option value="Batch1">Batch 1</option>
					    <option value="Batch2">Batch 2</option>
					    <option value="Batch3">Batch 3</option>
					</select>
				    </div>
				    </div>
			      <div class="table-responsive col-md-12">
				<br>
				  <table class="table table-bordered table table-striped" style="width: 66%">
				      <thead>
				      <tr>
					<th>Weekday</th>
					<th>Class timing set</th>
					<th>Action</th>
				      </tr>
				    </thead>
				    <tbody>
				       <tr>
					<th><input type="checkbox" name="days"  class="checkmon check">  &nbsp;&nbsp;Monday</th>
					<th class="checkval"><p class="text">Default</p></th>
					<th class="checkval">
					  <a class="Cancel hidden">Cancel</a>
					  <a class="change">Change</a>
					  <div class="form-group col-md-6 " >
					    <select class="form-control selectpicker hidden change Cancel input-sm bs-select-hidden" data-live-search="true" data-style="btn-white btn-sm">
					      <option value="" selected="selected">Default</option>
					      <option value="">Timing set</option>
					      <option value="">New</option>
					      <option value="">CLASS TIMINGS</option>
					    </select>
					  </div>
					</th>
				      </tr>
				       <tr>
					<th><input type="checkbox" class="checktue check"  name="days">  &nbsp;&nbsp;Tuesday</th>
					<th class="checkval"><p class="text">Default</p></th>
					<th class="checkval">
					 <a class="Cancel hidden"  >Cancel</a>
					  <a  class="change">Change</a>
					  <div class="form-group col-md-6 test">
					    <select class="form-control selectpicker hidden change Cancel input-sm bs-select-hidden" data-live-search="true" data-style="btn-white btn-sm">
					      <option value="" selected="selected">Default</option>
					      <option value="">Timing set</option>
					      <option value="">New</option>
					      <option value="">CLASS TIMINGS</option>
					    </select>
					  </div>
					</th>
				      </tr>
				       <tr>
					<th><input type="checkbox" class="checkwed check"  name="days">  &nbsp;&nbsp;Wednesday</th>
					<th class="checkval"><p class="text wed">Default</p></th>
					<th class="checkval">
					  <a class="Cancel hidden  ">Cancel</a>					  
					  <a  class="change wed" >Change</a>
					  <div class="form-group col-md-6">
					    <select class="form-control  selectpicker hidden change Cancel input-sm bs-select-hidden" data-live-search="true" data-style="btn-white btn-sm">
					      <option value="" selected="selected">Default</option>
					      <option value="">Timing set</option>
					      <option value="">New</option>
					      <option value="">CLASS TIMINGS</option>
					    </select>
					  </div>
					</th>

				      </tr>
				       <tr>
					<th><input type="checkbox" class="checkthu check"  value="Thursday" name="days">  &nbsp;&nbsp;Thursday</th>
					<th class="checkval"><p class="text">Default</p></th>
					<th class="checkval">
					  <a class="Cancel hidden"  >Cancel</a>					  
					  <a  class="change">Change</a>
					  <div class="form-group col-md-6">
					    <select class="form-control selectpicker hidden change Cancel input-sm bs-select-hidden" data-live-search="true" data-style="btn-white btn-sm">
					      <option value="" selected="selected">Default</option>
					      <option value="">Timing set</option>
					      <option value="">New</option>
					      <option value="">CLASS TIMINGS</option>
					    </select>
					  </div>
					</th>
				      </tr>
				       <tr>
					<th><input type="checkbox" class="checkfri check"  name="days" value="firday">  &nbsp;&nbsp;Friday</th>
					<th class="checkval"><p class="text">Default</p></th>
					<th class="checkval">
					  <a class="Cancel hidden"  >Cancel</a>
					  <a  class="change">Change</a>
					  <div class="form-group col-md-6">
					    <select class="form-control selectpicker hidden change Cancel input-sm bs-select-hidden" data-live-search="true" data-style="btn-white btn-sm">
					      <option value="" selected="selected">Default</option>
					      <option value="">Timing set</option>
					      <option value="">New</option>
					      <option value="">CLASS TIMINGS</option>
					    </select>
					  </div>
					</th>
				      </tr>
				       <tr>
					<th><input type="checkbox" name="days" checked class="checksat check">  &nbsp;&nbsp;Saturday</th>
					<th class="checkval"><p class="text sat">Default</p></th>
					<th class="checkval">
					  <a class="Cancel hidden">Cancel</a>
					  <a  class="change sat">Change</a>
					  <div class="form-group col-md-6">
					    <select class="form-control selectpicker hidden change Cancel input-sm bs-select-hidden" data-live-search="true" data-style="btn-white btn-sm">
					      <option value="" selected="selected">Default</option>
					      <option value="">Timing set</option>
					      <option value="">New</option>
					      <option value="">CLASS TIMINGS</option>
					    </select>
					  </div>
					</th>
				      </tr>
				       <tr>
					<th><input type="checkbox" name="days" checked class="checksun check">  &nbsp;&nbsp;Sunday</th>
					<th class="checkval"><p class="text sun">Default</p></th>
					<th class="checkval">
					  <a class="Cancel hidden"  >Cancel</a>
					  <a  class="change sun">Change</a>
					  <div class="form-group col-md-6">
					    <select class="form-control selectpicker hidden change Cancel input-sm bs-select-hidden" data-live-search="true" data-style="btn-white btn-sm">
					      <option value="" selected="selected">Default</option>
					      <option value="">Timing set</option>
					      <option value="">New</option>
					      <option value="">CLASS TIMINGS</option>
					    </select>
					  </div>
					</th>
				      </tr>				       
				    </tbody>
				</table>
				  <input type="button" id="save" class="btn btn-success btn-sm" value="Save">
				</div>
			  </form>
			</div>
		    </div>
		  </div>
		    <!-- end panel -->
	    </div>
	<!-- end col-12-->
	  </div>
<script>
  $(document).ready(function(){
	$('.check').trigger('click');
  }); 
	$('.slectclass').on('change',function(){
	$('.slectbatch').removeClass('hidden');
  });
    
  $('.check').click(function() { 
    if ($(this).is(':checked')) {
	 console.log(" checked");
	$(this).parents('tr').find('th.checkval').find('p.text').removeClass('hidden');
	$(this).parents('tr').find('th.checkval').find('a.change').removeClass('hidden');
      } else {
	  console.log("not checked");
	  $(this).parents('tr').find('th.checkval').find('p.text').addClass('hidden');
	  $(this).parents('tr').find('th.checkval').find('a.change').addClass('hidden');
      }
      });
      $('.change').on('click',function(){
	$(this).next('div').find('.change').removeClass('hidden')
	$(this).addClass('hidden');
	$(this).prev('a').removeClass('hidden');
      })
      $('.Cancel').on('click',function(){ 
	console.log($(this));
	$(this).parents('th').find('.change').addClass('hidden');
	$(this).addClass('hidden');
	$(this).next('a').removeClass('hidden');
      })
  $('.batch').on('change',function(){
    var data=$('.batch').val();
     console.log(data);
     if (data=="Batch1") {
      $('.checkwed').attr('checked', true);
      $('.wed').removeClass('hidden');
      $('.checksun').prop('checked', false);
      $('.checksat').prop('checked', false);
      $('.sun').addClass('hidden');
      $('.sat').addClass('hidden');
     }else{
      $('.checksat').attr('checked', 'true');
      $('.checksun').attr('checked', 'true');
      $('.checkwed').prop('checked', false);
      $('.wed').addClass('hidden');
      $('.sun').removeClass('hidden');
      $('.sat').removeClass('hidden');
      }
  });
  $('#save').on('click',function(){
   location.reload();
  })
</script>