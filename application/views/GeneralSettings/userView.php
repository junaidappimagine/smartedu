   
   
    <html>
        <head>
            <style>
                .panel-body h1{
                 font-size: 15px;
                }
		
            </style>
        </head>     
        <body>
            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="javascript:;">HR</a></li>
                    <li><a href="javascript:;">Payroll and Payslip Management</a></li>
                    <li class="active">Rejected Payslips</li>
                    
                </ol>
                 <h1 class="page-header">HR Management | Rejected payslips </h1>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                            <div class="panel-heading">
                                <div class="panel-heading-btn">
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                   <!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                                </div>
                               <h4 class="panel-title">Rejected payslips</h4>
                            </div>
                            <div class="panel-body" >
				<div class="col-md-12 row">
					  <h1 class="page-header"><b> Rejected payslips </<b></h1>
					  
				</div>
				<div class="col-md-12 row">
				    <br>
				     <div class="form-group">
					<div class="col-sm-2 col-md-offset-1">
                                            
					    <label class="control-label"> <h1 class="page-header"><b style="margin-left:19px;"> Select a Role : </<b></h1></label>
					</div>
					<div class="col-sm-3">
					    <select class="form-control selectpicker" data-style="btn-white btn-sm" id="selectRoll">												    
						<option >Select</option>
						<?php foreach ($usertype as $row){?>
						    <option value="<?php echo $row['USER_TYPE'];?>"><?php echo $row['USER_TYPE'];?></option>
						<?php }?>
					    </select>
					</div>
                                        <div class="col-sm-3 hidden" id="department">
					    <select class="form-control selectpicker" data-style="btn-white btn-sm" id="selectDept">
						<option>Select a Department</option>
                                                <option value="English">English</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="Maths">Maths</option>
					    </select>
					</div>
					
				     </div>
				</div>
				
                                <div class="col-md-12 row hidden" id="tableData2"><br><br>
				     <div class="table-responsive">
                                             <table id="dataRespTable" class="table table-striped table-bordered">
                                                <thead style="background-color: rgb(195,217,255);">
                                                    <tr>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Role</th>
							<th>Action</th>
                                                    </tr>
                                                </thead>
						<tbody></tbody>
                                            </table>
                                         </div>
				</div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
        <script>
	       
    $(document).ready(function() {
            var table = $("#dataRespTable").DataTable({
                //"sDom": "<'row'<'col-md-4 no 'f><'col-md-6 trcalign' TRC><'col-md-2 yes'l>r><t><'row'<'col-md-6'i><'col-md-6'p>>",
		"sDom":'lfb',
                "bServerSide": true,
                "bProcessing": false,
                "sAjaxSource": '<?php echo base_url('GrSettingsC/fetchUserView')?>',
                'responsive': true,
                //'scrollX':true,
                "bStateSave": true,	
                "lengthMenu": [
                    [10, 20, 50, -1],
                    [10, 20, 50, "All"] // change per page values here
                ],
                // "order": [[ 0, "desc" ]],
                "language": {
                "sLengthMenu": "_MENU_",
                "lengthMenu": " _MENU_ records",
                "processing": true
                },
                columns: [
                { data: 'USER_FIRST_NAME'},
                { data: 'USER_LAST_NAME'},
		{ data: 'USER_TYPE'},	
                {
                        data: null, className: "all", 
                            render: function( data, type, row) {
                                return '<a href="<?php echo base_url("GrSettingsC/userProfile/'+ data['USER_ID']+ '");?>"  name="edit" id="edit" value="edit" class="btn btn-xs btn-primary">view &nbsp;<i class="glyphicon glyphicon-open-file"></i></a></button>';
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
	//------------- End of Data table------------------------------------//		
    	$('#selectRoll').change(function(){
            
            if ($(this).val() == 'Admin') {
                $("#tableData2").removeClass('hidden');
                $(".admin").removeClass('hidden');
                $("#hindi").addClass('hidden');
                $("#eng").addClass('hidden');
                $(".maths").addClass('hidden');
                $("#department").addClass('hidden');
            }else if ($(this).val() == 'Employee'||$(this).val() == 'Student'||$(this).val() == 'Parent') {
                $("#department").removeClass('hidden');
                $("#tableData2").addClass('hidden');
            }
            else{
                  $("#tableData2").addClass('hidden');
                  $("#department").addClass('hidden');
            }
           
            });
        $('#selectDept').change(function(){
            
            if ($(this).val() == 'English') {
                $("#tableData2").removeClass('hidden');
                $("#eng").removeClass('hidden');
                $(".hindi").addClass('hidden');
                $(".admin").addClass('hidden');
            }else if ($(this).val() == 'Hindi') {
                $(".hindi").removeClass('hidden');
                $("#tableData2").removeClass('hidden');
                $("#eng").addClass('hidden');
                $(".maths").addClass('hidden');
                $(".admin").addClass('hidden');
            }
            else if ($(this).val() == 'Maths') {
                $(".maths").removeClass('hidden');
                $("#tableData2").removeClass('hidden');
                $("#eng").addClass('hidden');
                $(".hindi").addClass('hidden');
                $(".admin").addClass('hidden');
            }
            else{
                $("#tableData2").addClass('hidden');
                $("#hindi").addClass('hidden');
                $("#eng").addClass('hidden');
                $(".maths").addClass('hidden');
                $(".admin").addClass('hidden');
            }
           
            });
		
	    
	    
        </script>
     </html>

    