<style>
     .panel-body h1{
                    font-size: 18px;
                }
</style>
    <div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Users</a></li>
	    </ol>
	    <h1 class="page-header">Users| Details about users

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
		<h4 class="panel-title">Users</h4>
	    </div>
	    <div class="panel-body">
		<div class="well">
		  <!--  <div class="row">
			      <div class="col-md-8">
				  
			      </div>
			      <div class="col-md-1 ">
				      <a class="btn btn-primary btn-sm">View</a>
			      </div>
			      <div class="col-md-2">
				      <button type="button" class="btn btn-primary btn-sm"><a href="<?php echo base_url('GrSettingsC/addNew');?> Add New</a></button>
			      </div>
		    </div><hr>-->
		   
		    <div class="row">
			 <div style="float: right;">
			 <div class="col-md-4 col-md-offset-0">
			      <a href="<?php echo base_url('GrSettingsC/userView'); ?>" class="btn btn-warning btn-xs" role="button">View</a>
			 </div>
			 <div class="col-md-2 col-md-offset-1">
			      <a href="<?php echo base_url('GrSettingsC/addNew'); ?>" class="btn btn-primary btn-xs" role="button"><i class="fa fa-plus fa-1x"></i> Add New</a>
			 </div>
		    </div>
		    </div>
		    <div class="row">
			 <hr>
		    </div>
		  
		    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-2 col-md-offset-1">
                                    <h1 class="page-header" style="float:right;">Search</h1>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="searchData" placeholder="Search" style="border-radius: 15px;">
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
                                                <th width="30%"> Name </th>
                                                <th width="30%">Username </th>
                                                <th width="20%">Role</th>
					     </tr>
					</thead>
					<tbody>
					    <tr class="hidden" id="termData1">
                                                <td>1</td>
                                                <td>Karthik</td>
                                                <td>EMP008</td>
                                                <td>Employee </td>
                                                
					    </tr>
					    <tr class="hidden" id="Data2">
                                                <td>2</td>
                                                <td>Karan</td>
						<td>STD005</td>
                                                <td>Student</td>
					    </tr>
					    <tr class="hidden" id="termData2">
                                                <td>2</td>
                                                <td>Arun</td>
						<td>STD001</td>
                                                <td>Student</td>
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
	 <div>
    </div>
 
    <script>
    $(document).ready(function(){
        $('#searchData').keyup(function(){
            var resdata=$('#searchData').val();
               //alert(resdata);
                if(resdata =='kar')
                {
                    $('#view').removeClass('hidden');
                    $('#termData1').removeClass('hidden');
                    $('#termData2').addClass('hidden');
                    $('#noData').addClass('hidden');
		    $('#Data2').removeClass('hidden');
                   
                }
//		 else if (resdata =='kar' ) {
//                    $('#view').removeClass('hidden');
//                    $('#Data2').removeClass('hidden');
//                    $('#termData1').addClass('hidden');
//                    $('#noData').addClass('hidden');
//                    
//                } 
                else if (resdata =='arun' ) {
                    $('#view').removeClass('hidden');
                    $('#termData2').removeClass('hidden');
                    $('#termData1').addClass('hidden');
                    $('#noData').addClass('hidden');
		    $('#Data2').addClass('hidden');
                    
                } 
                else
                {
                        $('#view').removeClass('hidden');
                        $('#noData').removeClass('hidden');
                        $('#termData1').addClass('hidden');
                        $('#termData2').addClass('hidden');
			$('#Data2').addClass('hidden'); 	
                }
        });
    });
    
    
    </script>
