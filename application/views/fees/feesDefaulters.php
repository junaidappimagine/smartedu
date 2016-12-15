<style>
     .panel-body h1{
                    font-size: 15px;
                }
</style>
    <div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Fees</a></li>
		    <li><a href="javascript:;">Fees Defaulters</a></li>
		   
	    </ol>
	    <h1 class="page-header">Fees Defaulters | Students with fees due </h1>
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
		<div class="well">
		   
		    <div class="row">
			 <div class="form-group">
			      <label class="col-md-2 col-md-offset-2 control-label"> <h1 class="page-header"><b>Select Class :</b></h1></label>
				 <div class="col-md-3">
					 <select id="" class="form-control selectpicker"  data-style="btn-white btn-sm">
						 <option value="">Select Class</option>
						 <option value="">Grade 1</option>
						 <option value="">Class 1</option>
						 <option value="">Standard 1</option>
					 </select>
				 </div>
			 </div>
		    </div>
		    <div class="row">
			 <div class="form-group">
			     <label class="col-md-2 col-md-offset-2 control-label"> <h1 class="page-header"><b>Select Batch :</b></h1></label>
				   <div class="col-md-3">
					<select id="" class="form-control selectpicker"  data-style="btn-white btn-sm">
					     <option value="">Select Batch</option>
					     <option value="">Go1-A</option>
					</select>
				   </div>
			 </div>
		    </div>
		      <div class="row">
			 <div class="form-group">
			       <label class="col-md-4 control-label" style="float:left;"> <h1 class="page-header"><b style="margin-left:74px;">Select Fee Collection Date :</b></h1></label>
				 <div class="col-md-3">
					 <select id="dropdown1" class="form-control selectpicker"  data-style="btn-white btn-sm">
						 <option value="">Select Fee collection</option>
						 <option value="Term1">Term1 for class1:24/02/2016To</option>
						 <option value="feeStd1">Fee for std_c1-g4:23/03/2016To</option>
						 <option value="Term2">Term2 fee collection:25/03/2016To</option>
						 <option value="str">Fee str:06/04/2016To</option>
					 </select>
				 </div>
			 </div>
		    </div>
		</div>
		    <br>
	       <div class="panel-body hidden" id="panel">
		    <div class="hidden" id="view">
			    <div class="table-responsive">
				   <table class="table table-bordered">
					<thead>
					     <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
						  <th width="10%">Sl.No</th>
						  <th width="20%">Admission No.</th>
						  <th width="20%">Roll Number</th>
						  <th width="20%">Student Name</th>
						  <th width="10%"></th>
					     </tr>
					</thead>
					<tbody>
					     <tr class="hidden" id="termData1">
						       <td>1</td>
						       <td>STD001 </td>
						       <td>G11501</td>
						       <td>Karthik </td>
						       <td><a  href="<?php echo base_url('feesCntrl/refundRule_edit');?>" role="button"  id="edit" class="btn btn-xs btn-primary">Pay fees</a></td>
					     </tr>
					     <!--<tr class="hidden" id="termData2">
						  <td>2</td>
						  <td>STD002</td>
						  <td>G11502</td>
						  <td>Arun</td>
						  <td><a  href="<?php echo base_url('feesCntrl/refundRule_edit');?>" role="button"  id="edit" class="btn btn-xs btn-primary">Pay fees</a></td>
					     </tr>-->
					     <tr class="hidden" id="feeStd">
						  <td>1</td>
						  <td>STD002 </td>
						  <td>G11502</td>
						  <td>Arun</td>
						  <td><a  href="<?php echo base_url('feesCntrl/refundRule_edit');?>" role="button"  id="edit" class="btn btn-xs btn-primary">Pay fees</a></td>
					     </tr>
					     <tr class="hidden" id="term2">
						  <td>1</td>
						  <td>STD001 </td>
						  <td>G11501</td>
						  <td>Karthik</td>
						  <td><a  href="<?php echo base_url('feesCntrl/refundRule_edit');?>" role="button"  id="edit" class="btn btn-xs btn-primary">Pay fees</a></td>
					     </tr>
					     <tr class="hidden" id="str">
						  <td>1</td>
						  <td>STD005</td>
						  <td>G11507</td>
						  <td>Mani</td>
						  <td><a  href="<?php echo base_url('feesCntrl/refundRule_edit');?>" role="button"  id="edit" class="btn btn-xs btn-primary">Pay fees</a></td>
					     </tr>
					</tbody>
				   </table>
			    </div>
		    </div>
		    <div class="col-sm-2 col-sm-offset-5">
			 <a class="form-control btn btn-primary btn-sm" href="<?php echo base_url('feesCntrl/defaulter_pdf_generate');?>">PDF report</a>
		    </div>  
	       </div>
	       </div>
	    </div>
	 </div>
	 <div>
    </div>
 
    <script>
    $(document).ready(function(){
    $('#dropdown1').change(function(){
	    console.log($(this).val());
	    if($(this).val()=='Term1'  )
	    {
	       $('#panel').removeClass('hidden');
	       $('#view').removeClass('hidden');
	       $('#termData1').removeClass('hidden');
	       $('#termData2').removeClass('hidden');
	       $('#str').addClass('hidden');
	       $('#feeStd').addClass('hidden');
	    }
	    else if ($(this).val()=='feeStd1' ) {
	        $('#panel').removeClass('hidden');
		$('#view').removeClass('hidden');
		$('#feeStd').removeClass('hidden');
		$('#termData1').addClass('hidden');
		$('#termData2').addClass('hidden');
		$('#term2').addClass('hidden');
		
		
	    } else if ($(this).val()=='Term2' ) {
	        $('#panel').removeClass('hidden');
		$('#view').removeClass('hidden');
		$('#term2').removeClass('hidden');
		$('#str').addClass('hidden');
		$('#feeStd').addClass('hidden');
		$('#termData1').addClass('hidden');
		$('#termData2').addClass('hidden');
	    }
	    else if ($(this).val()=='str') {
	        $('#panel').removeClass('hidden');
		$('#view').removeClass('hidden');
		$('#str').removeClass('hidden');
		$('#term2').addClass('hidden');
		$('#feeStd').addClass('hidden');
		$('#termData1').addClass('hidden');
		$('#termData2').addClass('hidden');
	    }
	    else
	    {
		    $('#view').addClass('hidden');
	    }
    });
    });
    </script>
