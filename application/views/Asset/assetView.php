<style>
     .panel-body h1{
                    font-size: 15px;
                }
</style>
    <div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Asset Liability Management</a></li>
		    <li><a href="javascript:;">Asset</a></li>
		    <li><a href="javascript:;">View </a></li>
	    </ol>
	    <h1 class="page-header">Asset Liability Management | Asset View</h1>
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
		<h4 class="panel-title">Asset View</h4>
	    </div>
	    <div class="panel-body">
		<div class="well">
                    <div style="float: right;"><div class="col-md-2 col-md-offset-4"><a href="<?php echo base_url('AssetCntrl/createAsset'); ?>" class="btn btn-primary btn-sm" role="button">Create Asset</a></div></div>
                    <br><br>
		</div>
		<br>
	       <div class="form-group col-sm-12">
			<div class="table-responsive">
			    <table id="data-table" class="table table-striped table-bordered">
				 <thead>
                                    <tr>
                                        <th>Asset</th>
                                        <th>Created at</th>
                                        <th>Total Amount</th>
                                        <th>Action</th>
                                    </tr>
				 </thead>
				 <tbody>
				    <tr>
					 <td>Asset</td>
					 <td>24/02/2016 </td>
					 <td>Rs. 5000.00</td>
                                         <td><a  href="<?php echo base_url('AssetCntrl/createAsset_edit');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
					     <a href="" role="button" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
				    </tr>
				     
				     <tr>
					 <td>Asset</td>
					 <td>24/02/2016 </td>
					 <td>Rs. 4000.00</td>
                                         <td><a  href="<?php echo base_url('AssetCntrl/createAsset_edit');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
					     <a href="" role="button" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
				     </tr>
				 </tbody>
			     </table>
			  </div>
		     </div>
	  
		    <div class="col-sm-2 col-sm-offset-4">
                         <div class="col-md-2 col-md-offset-1"><a href="<?php echo base_url('AssetCntrl/asset_pdf_generate'); ?>" class="btn btn-primary btn-sm" role="button">PDF Report</a></div>
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
