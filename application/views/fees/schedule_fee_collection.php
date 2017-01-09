<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Fees</a></li>
				<li><a href="javascript:;">Schedule Fee Collection</a></li>
				<li class="active">View</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Schedule Fee Collection | View</h1>
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
                               <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                            </div>
                            <h4 class="panel-title">Schedule Fee Collection</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label class="col-md-4 control-label">Select a batch :</label>
							<div class="col-md-6">
								<select id="dropdown1" class="form-control selectpicker"  data-style="btn-white btn-sm">
									<option value="">select a batch</option>
									<option value="B.Tech">B.Tech</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-md-offset-4"><a href="<?php echo base_url('FeesCntrl/create_fee_collection'); ?>" class="btn btn-primary btn-sm" role="button">Create</a></div>
				</div>
				<br>
				<div class="hidden" id="view">
					<h4>List of Fee Collection</h4>
					<div class="table-responsive">
						 <table class="table table-striped table-bordered nowrap responsive" id="dataRespTable" width="100%">
							<thead>
								<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
									<th>Name</th>
									<th>Start Date</th>
									<th>Due Date</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
						</table>
					</div>
				</div>
							</div>
                        <!--end well-->
						</div>
                    <!-- end panel -->
					</div>
                <!-- end col-12-->
				<div>
            <!-- end row -->
      </div>
		<!-- end #content -->
<script>
	$(document).ready(function(){
		$('#dropdown1').change(function(){
			console.log($(this).val());
			if($(this).val()=='B.Tech')
			{
				$('#view').removeClass('hidden');
			}
			else{
				
				$('#view').addClass('hidden');
			}
		});
		var table = $("#dataRespTable").DataTable({
                
		    // "sDom": "<'row'<'col-md-4 no 'f><'col-md-2 yes'l>r><t><'row'<'col-md-6'i>>",
		    
		    "sDom": 'Tlfrtip',
		    "bServerSide": true,
		    "bProcessing": false,
		    "sAjaxSource": '<?php echo base_url('FeesCntrl/fetchScheduleFeeView')?>',
		    'responsive': true,
		    "bStateSave": true, 
		    "language": {
		    "sLengthMenu": "_MENU_",
		    "lengthMenu": " _MENU_ records",
		    "processing": true
		    },
		    columns: [
		    { data: 'FINC_SCH_NAME'},
		    { data: 'FINC_SCH_START_DT'},
		    { data: 'FINC_SCH_END_DT'},
		    
		    {
		        data: null, className: "all", 
		            render: function( data, type, row) {
		            return '<a href="<?php $phpvar="'+ data['FINC_SCH_ID']+ '"; echo base_url('FeesCntrl/edit_fee_collection/'.$phpvar);?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>  <button class="btn btn-xs btn-danger" onclick="javascript:deleteS_fees('+data['FINC_SCH_ID']+')"><i class="fa fa-trash-o"></i></button>';
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
		    },
		    
		    });       
			
		//------------- Start for Processing Icon image------------------------------------//       
		$('#dataRespTable')
		    .on( 'processing.dt', function ( e, settings, processing ) {
		    // $('#processingIndicator').css( 'display', processing ? loadLoader() : unLoader());
		}).dataTable(); 
	    });
	 function deleteS_fees($curr_id){
	    bootbox.confirm("<h5>Are you want to delete this record ?<h5/>", function(confirmed) {   
		if (confirmed) {
			    $.ajax({
				    type: "delete",
				url: "<?php echo base_url('FinanceFeesAPI/feesSchedule?FINC_SCH_ID=')?>"+$curr_id,
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
