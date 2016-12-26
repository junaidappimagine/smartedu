

	<div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Manage Course & Batch</a></li>
		    <li class="active">Manage Batch </li>
	   </ol>
	    <h1 class="page-header">Manage Course & Batch | Manage Batch</h1>
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
            <h4 class="panel-title">Manage Batch</h4>
            </div>
            <div class="panel-body">
            <div class="well">
                <div class="row">
                    <div class="col-md-6">
                        <label class="control-label col-md-6">Select a Course</label>
                        <div class="col-md-6">
                            <select class="selectpicker form-control" id="batch" data-style="btn-sm btn-white">
                             <option value="">select a course</option>
							 <option value="course">Course</option>
                            <option value="dp">DT Sem6 - A 2015</option>
							<option value="grade">Grade 1(Normal)</option>
                        </select>
                        </div>
                    </div>
                </div><br><br>
              <!--  <div class="panel-body">-->
                    <div class="table-responsive " >
                        <table class="table table-bordered main " id="myTable">
                           <tr style="background-color: #d9edf7; border-color: #b6e2ef;" class="main hidden">
								<th width="10%">C1 - A</th>
								<th width="10%"><a  href="<?php echo base_url('AcademicsC/change_batch?var1=C1 - A');?>" >Batch transfer</a></th>
								<th width="10%"><a  href="<?php echo base_url('AcademicsC/graduation?var1=C1 - A');?>" >Graduation</a>Graduation</th>
							</tr>
                            <tr style="background-color: #d9edf7; border-color: #b6e2ef;" class="dip hidden">
								<th width="10%">DT Sem6 - A 2015</th>
								<th width="10%"><a  href="<?php echo base_url('AcademicsC/batch_tran?var1=DT Sem6 - A 2015');?>" >Batch transfer</a>Batch transfer</th>
								<th width="10%"><a  href="<?php echo base_url('AcademicsC/graduation?var1=DT Sem6 - A 2015');?>" >Graduation</a>Graduation</th>
							</tr>
							<tr style="background-color: #d9edf7; border-color: #b6e2ef;" class="grade hidden">
								<th colspan="3">No active batch exits for this group</th>
							</tr>
                        </table>
                    </div>
          <!--      </div>-->
            </div><br><br>
            </div>
         </div>
	 <div>
    </div>
	 
<script>
$('#batch').change(function(){
    //alert();
	console.log($(this).val());
	
    if($(this).val()=='course')
    {
    $('.main').removeClass('hidden');
    $('.dip').addClass('hidden');
	$('.grade').addClass('hidden');
    }
    if($(this).val()=='dp')
    {
    $('.main').addClass('hidden');
    $('.dip').removeClass('hidden');
	$('.grade').addClass('hidden');
    }
    if($(this).val()=='grade')
    {
    $('.main').addClass('hidden');
    $('.dip').addClass('hidden');
	$('.grade').removeClass('hidden');
    }
});

     
   
</script>
  


   