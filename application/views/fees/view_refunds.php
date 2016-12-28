<style>
     .panel-body h1{
                    font-size: 18px;
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
		<div class="well">
		    <div style="float: right;"><div class="col-md-2 col-md-offset-4"><a href="<?php echo base_url('FeesCntrl/createRefundRule'); ?>" class="btn btn-primary btn-sm" role="button">Create Refund</a></div></div>
		    <div class="row">
			    <div class="col-md-12">
				    <div class="form-group">
                                         <div class="col-md-3">
                                            <h1 class="page-header">Search by :</h1>
                                         </div>
					    <div class="col-md-3">
						    <select id="dropdown1" class="form-control selectpicker"  data-style="btn-white btn-sm">
							    <option value="">Date</option>
							    <option value="Term1">Student Name</option>
							    <option value="feeStd1">Fee Collection Name</option>
						    </select>
					    </div>
                                             <label class="col-md-2 control-label">Refund Validity*:</label>
                                             <section class="col-sm-3">
                                                <span class='input-group'>
                                                    <input type='text' id="datePicker" name="dailyDate" class="form-control input-sm input-group datetimepicker defaultdate" value="<?php if($mode=='edit'){echo "24/02/2016";} ?>" />
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </span>                                 					    
                                            </section>
				    </div>
			    </div>
			    
		    </div>
		    <br>
		    <div class="hidden" id="view">
			    
			    <div class="table-responsive">
				    <table class="table table-bordered">
					    <thead>
						    <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
							    <th width="10%">Sl.No</th>
							    <th width="20%">Name</th>
							    <th width="20%">Refund percentage/Amount</th>
							    <th width="20%">Refund Validity </th>
							    <th width="10%">Action</th>
						    </tr>
					    </thead>
					    <tbody>
						    <tr class="hidden" id="termData1">
							    <td>1</td>
							    <td>Refund </td>
							    <td>2000.00</td>
							    <td>24/02/2016</td>
							    <td><a  href="<?php echo base_url('FeesCntrl/refundRule_edit');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
							    <a href="" role="button" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
						    </tr>
						    <tr class="hidden" id="termData2">
							    <td>2</td>
							    <td>Refund </td>
							    <td>2000.00</td>
							    <td>25/02/2016</td>
							    <td><a  href="<?php echo base_url('FeesCntrl/refundRule_edit');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
							    <a href="" role="button" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
						    </tr>
						     <tr class="hidden" id="feeStd">
							    <td>1</td>
							    <td>Refund </td>
							    <td>2000.00</td>
							    <td>23/03/2016</td>
							    <td><a  href="<?php echo base_url('FeesCntrl/refundRule_edit');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
							    <a href="" role="button" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
						    </tr>
						     <tr class="hidden" id="term2">
							    <td>1</td>
							    <td>Refund </td>
							    <td>50.00%</td>
							    <td>25/03/2016 </td>
							    <td><a  href="<?php echo base_url('FeesCntrl/refundRule_edit');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
							    <a href="" role="button" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
						    </tr>
						     <tr class="hidden" id="str">
							    <td>1</td>
							    <td>Refund </td>
							    <td>3000.00</td>
							    <td>06/04/2016 </td>
							    <td><a  href="<?php echo base_url('FeesCntrl/refundRule_edit');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
							    <a href="" role="button" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
						    </tr>
				       </tbody>
				    </table>
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
		     $('#view').removeClass('hidden');
		     $('#termData1').removeClass('hidden');
		     $('#termData2').removeClass('hidden');
                     $('#str').addClass('hidden');
		     $('#feeStd').addClass('hidden');
		
	    }
	    else if ($(this).val()=='feeStd1' ) {
		$('#view').removeClass('hidden');
		$('#feeStd').removeClass('hidden');
		$('#termData1').addClass('hidden');
		$('#termData2').addClass('hidden');
		$('#term2').addClass('hidden');
		
		
	    } else if ($(this).val()=='Term2' ) {
		$('#view').removeClass('hidden');
		$('#term2').removeClass('hidden');
		$('#str').addClass('hidden');
		$('#feeStd').addClass('hidden');
		$('#termData1').addClass('hidden');
		$('#termData2').addClass('hidden');
	    }
	    else if ($(this).val()=='str') {
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
