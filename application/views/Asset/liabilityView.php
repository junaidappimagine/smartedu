<style>
     .panel-body h1{
                    font-size: 15px;
                }
</style>
    <div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Asset Liability Management</a></li>
		    <li><a href="javascript:;">Liability</a></li>
		    <li><a href="javascript:;">View </a></li>
	    </ol>
	    <h1 class="page-header">Asset Liability Management | Liability View</h1>
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
		<h4 class="panel-title">Liability View</h4>
	    </div>
	    <div class="panel-body">
		<div class="well">
                    <div style="float: right;"><div class="col-md-2 col-md-offset-4"><a href="<?php echo base_url('AssetCntrl/createLiability'); ?>" class="btn btn-primary btn-sm" role="button">Create Liability</a></div></div>
                    <br><br>
		</div>
		<br>
	       <div class="form-group col-sm-12">
			<div class="table-responsive">
			    <table id="dataRespTable" class="table table-striped table-bordered">
				 <thead>
                                    <tr>
                                        <th>Liability</th>
                                        <th>Created at</th>
                                        <th>Total Amount</th>
                                        <th>Action</th>
                                    </tr>
				 </thead>
				 <tbody>
				    
				 </tbody>
			     </table>
			  </div>
		     </div>
		    <div class="col-sm-2 col-sm-offset-4">
                        <div class="col-md-2 col-md-offset-1"><a href="<?php echo base_url('AssetCntrl/liability_pdf_generate'); ?>" class="btn btn-primary btn-sm" role="button">PDF Report</a></div>
		    </div>
	       </div>
		</div>
	    </div>
	 </div>
	 <div>
    </div>
 
    <script>
    	$(document).ready(function() {
	        var table = $("#dataRespTable").DataTable({
	            // "sDom": "<'row'<'col-md-4 no 'f><'col-md-2 yes'l>r><t><'row'<'col-md-6'i>>",
	            "sDom": 'Tlfrtip',
	            "bServerSide": true,
	            "bProcessing": false,
	            "sAjaxSource": '<?php echo base_url('AssetCntrl/fetchLiabilityView')?>',
	            'responsive': true,
	            "bStateSave": true, 
	            "language": {
	            "sLengthMenu": "_MENU_",
	            "lengthMenu": " _MENU_ records",
	            "processing": true
	            },
	            columns: [
	            { data: 'FINC_LI_TITLE'},
	            { data: 'FINC_LI_CRT_DT'},
	            { data: 'FINC_LI_AMT'},
	            {
	                data: null, className: "all", 
	                    render: function( data, type, row) {
	                    return '<a href="<?php $phpvar="'+ data['FINC_LI_ID']+ '"; echo base_url('AssetCntrl/liability_edit/'.$phpvar);?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>  <button class="btn btn-xs btn-danger" onclick="javascript:deleteLiability('+data['FINC_LI_ID']+')"><i class="fa fa-trash-o"></i></button>';
	                    }
	                },
	            ],
	            'fnServerData': function(sSource, aoData, fnCallback){
	                $.ajax({
	                'dataType': 'json',
	                'type'    : 'POST',
	                'url'     : sSource,
	                'data'    : aoData,
	                'success' : fnCallback
	                });
	            },
	            "tableTools": {
	                "sSwfPath": "<?php echo site_url()?>assets/plugins/DataTables/swf/copy_csv_xls_pdf.swf",
	            }
	            });       
	                
	        //------------- Start for Processing Icon image------------------------------------//       
	        $('#dataRespTable')
	            .on( 'processing.dt', function ( e, settings, processing ) {
	            // $('#processingIndicator').css( 'display', processing ? loadLoader() : unLoader());
	        }).dataTable(); 
	    });
	    function deleteLiability($curr_id){
	    	bootbox.confirm("<h5>Are you want to delete this record ?<h5/>", function(confirmed) {   
			    if (confirmed) {
					$.ajax({
						type: "delete",
					    url: "<?php echo base_url('FinanceAPI/liability?id=')?>"+$curr_id,
					    success: function(res) {
					    	console.log(res.message);
					    	console.log(res.message.message);
					    	if(res.status==true){
						    	$('#alert').append('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> '+res.message.message+'</div>');
						    	$('#dataRespTable').dataTable().fnDraw();
						    }else{
						    	$('#alert').append('<div class="alert alert-danger "><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">&times;</a><strong>Failure!</strong>'+res.message+'</div>');
						    }
						    setTimeout(function(){ $('#alert').empty(); }, 5000);
					    }
					});
				}
			})
	    }
    </script>
