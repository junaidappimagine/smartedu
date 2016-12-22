<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Students</a></li>
				<li><a href="javascript:;">Students Details</a></li>
				<li class="active">search</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Students Details | search</h1>
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
                            <h4 class="panel-title">Students Details</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<div class="row">
									<div class="col-md-offset-9 col-md-3">
										<a href="<?php echo base_url('studentCntrl/student_view_all');?>" type="button" class="btn btn-warning btn-sm">View all</a>
										<a href="<?php echo base_url('studentCntrl/advanced_search');?>" type="button" class="btn btn-warning btn-sm">Advanced</a>
									</div>
								</div>
								<div class="row">
									<form class="form-horizontal">
										<div class="form-group">
											<label class="col-md-2 control-label">Search :</label>
											<div class="col-md-3">
												<input type="text"  class="form-control input-sm" placeholder=""  id="searchData" value="" style="border-radius: 15px;"/>
											</div>
											<div class="col-md-5">
												<label class="radio-inline"><input type="radio" name="optradio" class="radioSearch" value="present" checked>Present Students</label>
												<label class="radio-inline"><input type="radio" name="optradio"  value="former" class="radioSearch" >Former Students</label>
											</div>
										</div>
									</form>
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
                    <!-- end panel -->
                </div>
                <!-- end col-12-->
			<div>
            <!-- end row -->
      </div>
		<!-- end #content -->
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
	
	$(document).ready(function(){
        $('.radioSearch').click(function(){
			alert();
           var resdata=$('.radioSearch').val();
		   //console.log(resdata);
		   if(resdata =='former'){
				$('#view').removeClass('hidden');
				$('#noData').removeClass('hidden');
				$('#termData1').addClass('hidden');
				$('#termData2').addClass('hidden');
		   }
		});
    });
	</script>

		