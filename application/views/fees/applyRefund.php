<style>
     .panel-body h1{
                    font-size: 18px;
                }
</style>
    <div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Fees</a></li>
		    <li><a href="javascript:;">Fees refund </a></li>
		    <li class="active">Create refund rule </li>
		    <li><a href="javascript:;">View Refund Rules</a></li>
	    </ol>
	    <h1 class="page-header">Fees refund | Create fee refund
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
		    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-1">
                                    <h1 class="page-header" style="float:right;">Search</h1>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="searchData" placeholder="Student Name / Addmision No." style="border-radius: 15px;">
                                </div>
                            </div>
                        </div>
		    </div>
		    <br>
		</div>
	    
            	<div class="panel-body hidden" id="view">
		    <div class="" id="">
			    <div class="table-responsive">
				<table class="table table-bordered">
					<thead>
					    <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                <th width="10%">Sl.No</th>
                                                <th width="30%">First Name </th>
                                                <th width="30%">Batch</th>
                                                <th width="20%">Addmision No.</th>
					    </tr>
					</thead>
					<tbody>
					    <tr class="hidden" id="termData1">
                                                <td>1</td>
                                                <td>Karthik</td>
                                                <td>G01 - A</td>
                                                <td>STD001 </td>
                                                
					    </tr>
					    <tr class="hidden" id="termData2">
                                                <td>2</td>
                                                <td>Arun</td>
						<td>G01 - B</td>
                                                <td>STD003</td>
                                                <td></td>
                                                <td><a  href="<?php echo base_url('feesCntrl/refundRule_edit');?>" role="button"  id="edit" class="btn btn-xs btn-primary">Pay fees</a></td>
					    </tr>
                                            <tr  class="hidden" id="noData">
                                                <td colspan=4><b style="margin-left:420px;">No students found</b></td>
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
        $('#searchData').keyup(function(){
            var resdata=$('#searchData').val();
               //alert(resdata);
                if(resdata =='ka')
                {
                    $('#view').removeClass('hidden');
                    $('#termData1').removeClass('hidden');
                    $('#termData2').addClass('hidden');
                     $('#noData').addClass('hidden');
                   
                }
                else if (resdata =='ar' ) {
                    $('#view').removeClass('hidden');
                    $('#termData2').removeClass('hidden');
                    $('#termData1').addClass('hidden');
                    $('#noData').addClass('hidden');
                    
                } 
                else
                {
                        $('#view').removeClass('hidden');
                        $('#noData').removeClass('hidden');
                        $('#termData1').addClass('hidden');
                        $('#termData2').addClass('hidden');
                }
        });
    });
    
    
    </script>
