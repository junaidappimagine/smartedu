<style>
     .panel-body h1{
                    font-size: 15px;
                }
</style>
    <div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Fees</a></li>
		    <li><a href="javascript:;">Fees refund </a></li>
		    <li><a href="javascript:;">View refunds </a></li>
	    </ol>
	    <h1 class="page-header">Fees refund | View refunds 
</h1>
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
		<h4 class="panel-title">Fees refund</h4>
	    </div>
	    <div class="panel-body">
		<div class="well"><br><br>
		    <div class="row">
			 <div class="form-group">
			      <label class="col-md-2 control-label"> <h1 class="page-header"><b>Employee details</b></h1></label>
			      <div class="col-md-2">
				   <select id="dropdown1" class="form-control selectpicker"  data-style="btn-white btn-sm">
					<option value="Date">Date</option>
					<option value="Student">Student Name</option>
					<option value="Fee">Fee Collection Name</option>
				   </select>
			      </div>
			      <div class="hidden" id="selectDate">
				   <label class="col-md-2 control-label"><h1 class="page-header"><b>Start date</b></h1></label>
			       
				   <div class="col-sm-2">
					<span class='input-group'>
					    <input type='text' id="datePicker" name="dailyDate" class="form-control input-sm input-group datetimepicker defaultdate" value="" />
					    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					    </span>
					</span>                                 					    
				   </div>
				   <label class="col-md-2 control-label"><h1 class="page-header"><b>End date</b></h1></label>
				   <div class="col-sm-2">
					<span class='input-group'>
					    <input type='text' id="datePicker1" name="dailyDate" class="form-control input-sm input-group datetimepicker defaultdate" value="" />
					    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
					    </span>
					</span>                                 					    
				   </div>
			      </div>
			      <div class="hidden" id="search">
				   <label class="col-md-1 control-label"><h1 class="page-header"><b>Search</b></h1></label>
				   <div class="col-sm-2">
					<input type='text'  id="search" class="form-control input-sm input-group " value="" />
														  
				   </div>
			      </div>
			  </div>
		    </div>
		    </div>
		    <br>
	       <div class="form-group col-sm-12">
			 <div class="table-responsive">
			     <table id="data-table" class="table table-striped table-bordered">
				 <thead>
				 <tr>
				     <th>Sl. no.</th>
				     <th>Student name</th>
				     <th>Amount</th>
				     <th>Date</th>
				     <th>Fee collection name</th>
				     <th>Refunded by</th>
				     <th>Voucher No.</th>
				 </tr>
				 </thead>
				 <tbody>
				     <tr>
					 <td>1</td>
					 <td>Rafeeq</td>
					 <td>3000.00</td>
					 <td>06/04/2016 </td>
					 <td>Fee str</td>
					 <td>Admin</td>
					 <td>11</td>
					 
				     </tr>
				     
				     <tr>
					 <td>2</td>
					 <td>vijay</td>
					 <td>3825.00</td>
					 <td>25/03/2016 </td>
					 <td>Term 2 fee collection</td>
					 <td>Admin</td>
					 <td>09</td>
				     </tr>
				 </tbody>
			     </table>
			  </div>
		     </div>
	  
		    <div class="col-sm-2 col-sm-offset-5">
			 <a class="form-control btn btn-primary btn-sm" href="<?php echo base_url('feesCntrl/refund_pdf_generate');?>">View PDF report</a>
		    </div>
		   
	       </div>
		</div>
	    </div>
	 </div>
	 <div>
    </div>
 
    <script>
    $(document).ready(function(){
          $('#datePicker').datepicker({
	       format: 'dd-mm-yyyy'
	   });
	  $('#datePicker1').datepicker({
	       format: 'dd-mm-yyyy'
	   });
     
	  $('#selectDate').removeClass('hidden');
	  $('#dropdown1').change(function(){
	       if ($(this).val()=='Student') {
		    $('#search').removeClass('hidden');
		    $('#selectDate').addClass('hidden');
	       }else  if ($(this).val()=='Fee') {
		     $('#search').removeClass('hidden');
		    $('#selectDate').addClass('hidden');
	       }
	       else {
		    $('#selectDate').removeClass('hidden');
	       }
	  });
	 
    
    });
     $("input").keyup(function(){
		
		 var table =  $('#data-table').DataTable();
                    table.columns(1).search( this.value ).draw();
                } );
    </script>
