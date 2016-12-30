<style>
     .panel-body label b{
                    font-size: 14px;
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
		   <br>
                <div class="container col-md-offset-1" style="width: 100% !important">
                    <form class="form-horizontal">
                        <table class="mytable" width="44%">
                            <tr style="">
                                <td><label class="col-md-12 "><b>Current Manager</b> </label></td>
                                <td><label class="col-md-12 "><b>:</b></label></td>
                                <td><label class="col-md-12 "><b></b></label></td>
                            </tr>
                            <tr>
                                <td><label class="col-md-12 "><b>New Manager</b></label></td>
                                <td><label class="col-md-12 "><b>:</b></label></td>
                                <td><label  class="col-md-12 "><p></p><p><b>(not selected)</b></p></label></td>
                            </tr>
                        </table>
                    </form>
                </div>
               
		    
                    <div class="form-group  col-md-offset-2">
                        <label class="col-md-2 control-label"></label>
                        <div class="col-md-1">
                            <button type="button" class="btn btn-primary btn-sm" id="action">Save</button>
                        </div>
                        <div class="col-md-2" id="cancel">
                            <button type="button" class=" btn btn-danger btn-sm" >Cancel</button>
                        </div>
                    </div><br>
		    <div class="row">
			 <hr>
		    </div><br>
                    <div class="container col-md-offset-1" style="width: 100% !important">
                        <form class="form-horizontal">
                            <table class="mytable" width="54%">
                                <tr style="">
                                    <td><label class="col-md-12 "><b>Search by Name</b> </label></td>
                                    <td><label class="col-md-12 "><b>:</b></label></td>
                                    <td><label class="col-md-12 "><input type="text" class="form-control" id="searchData" placeholder="" style="border-radius: 15px;"></label></td>
                                </tr>
                               
                            </table>
                        </form>
                    </div>
		    <br>
                    <div class="col-md-offset-4" ">
                    <div class="row">
                        <div class="form-group">
                            
                        </div>
			  <div class="form-group">
				 <div class="col-md-3">
					 <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
						 <option value="">Select Department</option>
						 <option value="">English</option>
						 <option value="">Hindi</option>
						 <option value="">Maths</option>
					 </select>
				 </div>
			</div>
                        <div class="form-group">
				 <div class="col-md-3">
					 <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
						 <option value="">Select Category</option>
						 <option value="">System Admin</option>
						 <option value="">Finance</option>
						 <option value="">Human Resource</option>
                                                 <option value="">Teacher</option>
					 </select>
				 </div>
			</div>
                        <div class="form-group">
				 <div class="col-md-3">
					 <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
						 <option value="">Select Position</option>
						 <option value="">Junior</option>
						 <option value="">Senior</option>
						<option value="">System Admin</option>
					 </select>
				 </div>
			</div>
                        <div class="form-group">
				 <div class="col-md-3">
					 <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
						 <option value="">Select Grade</option>
						 <option value="Grade1">Grade1</option>
						 <option value="">Grade 2</option>
                                                 <option value="">System Admin</option>
					 </select>
				 </div>
			</div>
		    </div>   

                    </div>
		</div>
	    
            	<div class="panel-body hidden" id="view">
		    <div class="" id="">
			    <div class="table-responsive">
				<table class="table table-bordered">
					<thead>
					     <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                <th width="10%">Sl.No</th>
                                                <th width="30%"> Employee Name  </th>
                                                <th width="30%">Employee ID  </th>
                                                <th width="20%">Employee Department </th>
					     </tr>
					</thead>
					<tbody>
					    <tr class="hidden" id="termData1">
                                                <td>1</td>
                                                <td>Keerthi</td>
                                                <td>EMP003</td>
                                                <td>Maths </td>
                                                
					    </tr>
					   <!-- <tr class="hidden" id="Data2">
                                                <td>2</td>
                                                <td>Karan</td>
						<td>EMP004</td>
                                                <td>Maths</td>
					    </tr>-->
					    <tr class="hidden" id="termData2">
                                                <td>2</td>
                                                <td>Arun</td>
						<td>EMP009</td>
                                                <td>Hindi</td>
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
                if(resdata =='keer')
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
