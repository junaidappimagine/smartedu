<style>
     .panel-body h1{
                    font-size: 18px;
                }
</style>
    <div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Students</a></li>
		    <li><a href="javascript:;">Students Details</a></li>
		    <li class="active">View All</li>
	   </ol>
	    <h1 class="page-header">Students | View All
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
		<h4 class="panel-title"> View All</h4>
	    </div>
	    <div class="panel-body">
		<div class="well">
		    <div class="row">
				<div class="col-md-12">
				    <div class="form-group">
					   <div class="col-md-2 col-md-offset-1">
						  <h1 class="page-header" style="float:right;">Select a batch:</h1>
					   </div>
					   <div class="col-md-3">
							 <select  class="form-control selectpicker"  data-style="btn-white btn-sm" id="searchData">
							 <option value="">select a batch</option>
							 <option value="b.tech">B.Tech</option>
						  </select>
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
							<tr class="" id="termData1">
								<td>1</td>
								<td>Karthik</td>
								<td>G01 - A</td>
								<td>STD001 </td>
							</tr>
							<tr class="" id="termData2">
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
	 <div>
    </div>
 
    <script>
    $(document).ready(function(){
        $('#searchData').change(function(){
            var resdata=$('#searchData').val();
               //alert(resdata);
                if(resdata =='b.tech')
                {
                    $('#view').removeClass('hidden');
                    $('#noData').addClass('hidden');
                   
                }
			 else
			{
			    $('#view').addClass('hidden');
			    $('#noData').removeClass('hidden');
			  
			}
        });
    });
    
    
    </script>
