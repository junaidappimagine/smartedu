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
					<select class="selectpicker form-control input-sm" data-style="btn-white" name="">
					    <option value="">February 16, 2016  -  February 24, 2016</option>
					    <option value="">February 29, 2016  -  March 07, 2016</option>
					    <option value="">March 08, 2016  -  March 15, 2016</option>
					    <option value="">March 16, 2016  -  March 23, 2016</option>
					    <option value="">March 29, 2016  -  April 04, 2016</option>
					    <option value="">November 25, 2016  -  November 30, 2016</option>
					    <option value="">December 01, 2016  -  November 30, 2017</option>
					</select>
				    </div>
				    </div>
				    <div class="form-group month_date hidden">
				    <label class="col-md-1 control-label input-sm">Month &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b></label>
				    <div class="col-md-2">
					<select class="selectpicker form-control input-sm" data-style="btn-white" name="">
					    <option value="">2016</option>
					    <option value="">2015</option>
					    <option value="">2014</option>
					    <option value="">2013</option>
					</select>
				    </div>
				    </div>
				    <div class="form-group month_date hidden">
				    <label class="col-md-1 control-label input-sm">Month &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b></label>
				    <div class="col-md-2">
					<select class="selectpicker form-control input-sm" data-style="btn-white" name="">
					    <option value="">Jan</option>
					    <option value="">Feb</option>
					    <option value="">Mar</option>
					    <option value="">Apr</option>
					    <option value="">May</option>
					    <option value="">Jun</option>
					    <option value="">Jul</option>
					    <option value="">Aug</option>
					    <option value="">Sep</option>
					    <option value="">Oct</option>
					    <option value="">Nov</option>
					    <option value="">Dec</option>
					</select>
				    </div>
				    </div>
				    <input type="button" class="btn btn-info btn-sm hidden" value="View">

			  </form>

			</div>
		    </div>
		  </div>
		    <!-- end panel -->
	    </div>
	<!-- end col-12-->
	  </div>
	
<script>
    $('.week_date').on('change',function(){
	var data=$('input[name=optionsRadios]:checked').val();
	if (data=="Week") {
	    $('.date').removeClass('hidden');
	    $('.btn').removeClass('hidden');
	    $('.month_date').addClass('hidden');

	    
	}else{
	    $('.month_date').removeClass('hidden');
	    $('.date').addClass('hidden');
	    $('.btn').removeClass('hidden');
	}
    });
</script>