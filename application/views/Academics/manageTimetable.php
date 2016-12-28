	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Manage Timetable</li>
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
			    <h4 class="panel-title">Manage Timetable</h4>
			</div>
			<div class="panel-body">
			  <legend>Manage Timetable</legend>
			    <div class="form-group row">
			      <div class="col-md-3"><a href="<?php echo base_url('AcademicsC/createTimetable');?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Add</a></div>
			      <div class="col-md-6"></div>
			      <div class="col-md-3">
			      <select class="selectpicker form-control choose input-sm" data-style="btn-white">
				<option value="active">Active</option>
				<option value="inactive">Inactive</option>
			      </select>
			    </div>
			  </div>
			    <p><br></p>
			  <div class="table-responsive">
			      <table class="table table-bordered table table-striped">
				<thead>
				  <tr>
				    <th>Active timetables</th>
				    <th>Allocation status</th>
				    <th>Action</th>
				  </tr>
				</thead>
				<tbody>
				  <tr class="activeT tablerow">
				    <td>December 01, 2017 - December 01, 2017 </td>
				    <td>Not eligible</td>
				    <td><a style="cursor: pointer" href="<?php echo base_url('AcademicsC/timetableAllocation');?>">Timetable allocations</a>   |  <a style="cursor: pointer" href="<?php echo base_url('AcademicsC/editTimetable');?>">Edit</a>   |  <a style="cursor: pointer" href="<?php echo base_url('AcademicsC/manageBatches')?>">Manage Batches</a>   |  <a style="cursor: pointer" href="<?php echo base_url('AcademicsC/manageAllocation')?>">Manage Allocation</a>  |  <a style="cursor: pointer" class="deleterow" >Delete</a>   </td> 
				  </tr>
				  <tr class="activeT tablerow">
				    <td>December 01, 2016 - November 30, 2017  </td>
				    <td>Not allocated</td>
				    <td><a style="cursor: pointer" href="<?php echo base_url('AcademicsC/timetableAllocation');?>">Timetable allocations</a>   |  <a style="cursor: pointer" href="<?php echo base_url('AcademicsC/editTimetable');?>">Edit</a>   |  <a style="cursor: pointer" href="<?php echo base_url('AcademicsC/manageBatches')?>">Manage Batches</a>   |  <a style="cursor: pointer" href="<?php echo base_url('AcademicsC/manageAllocation')?>">Manage Allocation</a>  |  <a style="cursor: pointer" class="deleterow" >Delete</a>   </td> 
				  </tr>
				  <tr class="inactiveT hidden tablerow">
				    <td>February 29, 2016 - March 07, 2016 </td>
				    <td> Partially allocated </td>
				    <td><a style="cursor: pointer" href="<?php echo base_url('AcademicsC/timetableAllocation');?>">Timetable allocations</a>   |  <a style="cursor: pointer" href="<?php echo base_url('AcademicsC/editTimetable');?>">Edit</a>   |  <a style="cursor: pointer" href="<?php echo base_url('AcademicsC/manageBatches')?>">Manage Batches</a>   |  <a style="cursor: pointer" href="<?php echo base_url('AcademicsC/manageAllocation')?>">Manage Allocation</a>  |  <a style="cursor: pointer" class="deleterow" >Delete</a>   </td> 
				  </tr>
				  <tr class="inactiveT hidden tablerow">
				    <td>November 25, 2016 - November 30, 2016  </td>
				    <td> Partially allocated </td>
				    <td><a style="cursor: pointer" href="<?php echo base_url('AcademicsC/timetableAllocation');?>">Timetable allocations</a>   |  <a style="cursor: pointer" href="<?php echo base_url('AcademicsC/editTimetable');?>">Edit</a>   |  <a style="cursor: pointer" href="<?php echo base_url('AcademicsC/manageBatches')?>">Manage Batches</a>   |  <a style="cursor: pointer" href="<?php echo base_url('AcademicsC/manageAllocation')?>">Manage Allocation</a>  |  <a style="cursor: pointer" class="deleterow" >Delete</a>   </td> 
				  </tr>
				  <tr class="inactiveT hidden tablerow">
				    <td>March 16, 2016 - March 23, 2016 </td>
				    <td>Not eligible</td>
				    <td><a style="cursor: pointer" href="<?php echo base_url('AcademicsC/timetableAllocation');?>">Timetable allocations</a>   |  <a style="cursor: pointer" href="<?php echo base_url('AcademicsC/editTimetable');?>">Edit</a>   |  <a style="cursor: pointer" href="<?php echo base_url('AcademicsC/manageBatches')?>">Manage Batches</a>   |  <a style="cursor: pointer" href="<?php echo base_url('AcademicsC/manageAllocation')?>">Manage Allocation</a>  |  <a class="deleterow" style="cursor: pointer">Delete</a>   </td> 
				  </tr>
				</tbody>
			      </table>
			    </div>

			</div>
		    </div>
		  </div>
		    <!-- end panel -->
	    </div>
	<!-- end col-12-->
	  </div>
<script>
  $('.choose').on('change',function(){
     var data=$('.choose').val();
     if (data=='inactive') {
      $('.inactiveT').removeClass('hidden')
      $('.activeT').addClass('hidden')
     }else{
      $('.inactiveT').addClass('hidden')
      $('.activeT').removeClass('hidden')
     }
   })
  $('.deleterow').on('click',function(){
      var result = confirm("Are You Sure Want to delete?");
      if (result==true) {
      $(this).parents('tr.tablerow').remove();
    }
  })
</script>