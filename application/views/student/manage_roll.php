<style>
     .panel-body h1{
                    font-size: 18px;
                }
</style>
    <div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Students</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Manage Student Roll No</li>
	   </ol>
	    <h1 class="page-header">Configurations | Manage Student Roll No
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
		<h4 class="panel-title">Manage Student Roll No</h4>
	    </div>
	    <div class="panel-body">
		<div class="well">
			<div class="row">
				<div class="col-md-2">
					<h5>Sort students based on </h5>
				</div>
				<div class="col-md-2 sortColumn">
					<h5><b>First Name</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#myModal1" >Edit</a></h5>
				</div>
				<div class="col-md-2 changeSort hidden">
					<select name="value"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm">
						<option>Admission no.</option>
						<option selected>First Name</option>
						<option>Last Name</option>
					</select>
				</div>
				<div class="col-md-2 changeSort hidden">
					<button type="button" class="btn btn-primary btn-sm">Save</button>
					<button type="button" class="btn btn-danger btn-sm" id="cancelSort">cancel</button
				</div>
			</div>
			<br>
			<br>
			<br>
			<div class="panel-body">
			<div>
				<div class="table-responsive">
					<table class="table table-bordered" id="myTable">
						<thead>
							<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
								<th width="40%">Class name</th>
								<th width="20%">Roll number prefix</th>
								<th width="40%">Options</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Class 1</td>
								<td>Cls1A</td>
								<td><a  href="#"  class="view1">view batches</a> |
								<a href="" data-toggle="modal" data-target="#myModal">Edit roll number prefix</td>
							</tr>
							<tr>
								<td>Class 2</td>
								<td>Cls2A</td>
								<td><a  href="#"  class="view2">view batches</a> |
								<a href=""data-toggle="modal" data-target="#myModal">Edit roll number prefix</td>
							</tr>
							<tr>
								<td>Class 3</td>
								<td>-</td>
								<td><a  href="#"  class="view3" >view batches</a> |
								<a href="" data-toggle="modal" data-target="#myModal">Set roll number prefix</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		 </div><br><br>
			<div class="panel-body" id="class1">
				<div class="table-responsive">
					<h5>Class1 list of batches :</h5>
					<table class="table table-bordered" id="myTable">
						<thead>
							<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
								<th width="40%">Batch name</th>
								<th width="20%">Roll number status</th>
								<th width="40%">Options</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>C1-A</td>
								<td>set</td>
								<td><a  href="<?php echo base_url('studentCntrl/edit_roll_number?var1=Cls1A');?>"  >Edit Roll numbers</a> </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel-body" id="class2">
				<div class="table-responsive">
					<h5>Class2 list of batches :</h5>
					<table class="table table-bordered" id="myTable">
						<thead>
							<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
								<th width="40%">Batch name</th>
								<th width="20%">Roll number status</th>
								<th width="40%">Options</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>C2-A</td>
								<td>set</td>
								<td><a  href="<?php echo base_url('studentCntrl/edit_roll_number?var1=Cls2A');?>" >Edit Roll numbers</a> </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel-body" id="class3">
				<div class="table-responsive">
					<h5>Class3 list of batches :</h5>
					<table class="table table-bordered" id="myTable">
						<thead>
							<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
								<th width="40%">Batch name</th>
								<th width="20%">Roll number status</th>
								<th width="40%">Options</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>C3-A</td>
								<td>Not set</td>
								<td><a  href="<?php echo base_url('studentCntrl/edit_roll_number?var1=Not set');?>" >Set Roll numbers</a> </td>
							</tr>
							<tr>
								<td>C3-B</td>
								<td>Not set</td>
								<td><a  href="<?php echo base_url('studentCntrl/edit_roll_number?var1=Not set');?>" >Set Roll numbers</a> </td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	 </div>
	 <div>
    </div>
	 
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit/Set Roll number Prefix</h4>
        </div>
        <div class="modal-body">
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<label class="col-md-6 control-label">Roll number Prefix</label>
					<div class="col-md-6">
						<input type="text" class="form-control input-sm" placeholder="" value=""/> 
					</div>
				</div>
			</div>
			<div class="col-md-4">
			  <div class="form-group">
				<label class="control-label">Max 6 characters</label>
			  </div>
			</div><br><br><br>
			<div class="form-group">
				<label class="col-md-4 control-label"></label>
				<div class="col-md-3">
					<button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Save</button>
					<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">cancel</button>
				</div>
			</div>
		</div>
		</div>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>
    </div>
  </div>
</div>
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Sorting order</h4>
        </div>
        <div class="modal-body">
		<div class="row">
			<center><p>Students will be arranged based on the selected sort order with roll numbers unchanged.</p></center><br>
			<div class="form-group">
				<label class="col-md-4 control-label"></label>
				<div class="col-md-3">
					<button type="button" class="btn btn-sm btn-success" id="edit" data-dismiss="modal">Edit</button>
					<button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">cancel</button>
				</div>
			</div>
		</div>
		</div>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>
    </div>
  </div>
</div>


    <script>
	$('#class1').hide();
	$('#class2').hide();
	$('#class3').hide();
	
    $(document).ready(function(){
	
	$('.view1').click(function(){
		$('#class1').show();
	     $('#class2').hide();
	     $('#class3').hide();
		});
    $('.view2').click(function(){
		$('#class1').hide();
	     $('#class2').show();
	     $('#class3').hide();
		});
	$('.view3').click(function(){
		$('#class1').hide();
	     $('#class2').hide();
	     $('#class3').show();
		});
	});
    
    $('#edit').click(function(){
		$('.sortColumn').addClass('hidden');
		$('.changeSort').removeClass('hidden');
	});
    $('#cancelSort').click(function(){
		$('.sortColumn').removeClass('hidden');
		$('.changeSort').addClass('hidden');
	});
    </script>
