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
					<select class="form-control selectpicker   input-sm bs-select-hidden" data-live-search="true" data-style="btn-white btn-sm" name="" id="day_month">
					    <option value="">Select</option>
					    <option value="">Class1</option>
					    <option value="">Class2</option>
					    <option value="">Class3</option>
					</select>
				    </div>
				    </div>
				    <div class="form-group month_date ">
				    <label class="col-md-1 control-label input-sm">Batch &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b></label>
				    <div class="col-md-3">
					<select class="form-control selectpicker  input-sm bs-select-hidden" data-live-search="true" data-style="btn-white btn-sm" name="" id="month" >
					    <option value="">Select</option>
					    <option value="">Batch 1</option>
					    <option value="">Batch 2</option>
					    <option value="">Batch 3</option>
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
					<th><input type="checkbox" name="days" class="checkmon check">  &nbsp;&nbsp;Monday</th>
					<th>Default</th>
					<th>
					  <a class="Cancel hidden">Cancel</a>
					  <a class="change">Change</a>
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
					<th><input type="checkbox" class="checktue check" name="days">  &nbsp;&nbsp;Tuesday</th>
					<th>Default</th>
					<th>
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
					<th><input type="checkbox" class="checktwed check" name="days">  &nbsp;&nbsp;Wednesday</th>
					<th class="checkval ">Default</th>
					<th class="checkval ">
					  <a class="Cancel hidden"  >Cancel</a>					  
					  <a  class="change" >Change</a>
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
					<th><input type="checkbox" class="checkthu check" value="Thursday" name="days">  &nbsp;&nbsp;Thursday</th>
					<th>Default</th>
					<th>
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
					<th><input type="checkbox" class="checkfri check" name="days" value="firday">  &nbsp;&nbsp;Friday</th>
					<th>Default</th>
					<th>
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
					<th><input type="checkbox" name="days" class="checksat check">  &nbsp;&nbsp;Saturday</th>
					<th>Default</th>
					<th>
					  <a class="Cancel hidden"  >Cancel</a>
					  <a  class="change"  >Change</a>
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
					<th><input type="checkbox" name="days" class="checksun check">  &nbsp;&nbsp;Sunday</th>
					<th>Default</th>
					<th>
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
				       
				    </tbody>
					    </table>
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
  $('.check').on('change',function(){
    console.log($(this).attr('checked'));
    console.log($(this).val());
    $('.checkval').removeClass('hidden');
  })
$('.change').on('click',function(){
  $(this).next('div').find('.change').removeClass('hidden')
  $(this).addClass('hidden');
  $(this).prev('a').removeClass('hidden');
})
//$('.Cancel').on('click',function(){ 
//  console.log($(this));
//  $(this).next('div').find('.Cancel').addClass('hidden')
//  $(this).removeClass('hidden');
//  $(this).prev('a').addClass('hidden');
//})
</script>