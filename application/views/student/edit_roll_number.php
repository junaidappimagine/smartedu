<style>
     .panel-body h1{
                    font-size: 18px;
                }
</style>
    <div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Students</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Edit Roll No</li>
	   </ol>
	    <h1 class="page-header">Configurations | Edit Roll No
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
		<h4 class="panel-title">Edit Roll No</h4>
	    </div>
	    <div class="panel-body">
		<div class="well">
			<div class="row">
				<div class="col-md-3">
					<h5>Roll number prefix</h5>
				</div>
				<div class="row">
					<div class="col-md-1">
						<h5><b><?php echo $result;?></b></h5>
					</div>
					<div class="col-md-1">
						<?php if($result==='Not set') { ?>
							<h5><a href="#" id="edit_prefix" data-toggle="modal" data-target="#myModal">Set Prefix</a></h5>
                              <?php }  else { ?>
							<h5><a href="#" id="edit_prefix" data-toggle="modal" data-target="#myModal">Edit</a></h5>
					    <?php }?>
					</div>
				</div>
				<?php if($result !=='Not set') { ?>
				<div class="row">
					<div class="col-md-offset-3">
						This is the default class prefix
					</div>
				</div>
				<?php } ?>
			</div><br>
			<div class="row">
				<div class="col-md-3">
					<h5>Sorted based on</h5>
				</div>
				<div class="col-md-3">
					<h5><b>First Name</b></h5>
				</div>
			</div>
			<br>
			<br>
			<br>
			<?php if($result==='Cls1A')
			{ ?>
			<div class="panel-body">
			<div>
				<div class="table-responsive">
					<div class="row">
						<div class="col-md-2">
							<h5><b>List of Students</b></h5>
						</div>
						<div class="col-md-offset-11">
							<h5><a href="" data-toggle="modal" data-target="#myModal2">Reset All</a></h5>
						</div>
					</div>
					<br>
					<table class="table table-bordered" id="myTable">
						<thead>
							<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
								<th width="40%">Student Name</th>
								<th width="20%">Admission number</th>
								<th width="40%" colspan="3">Roll number</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Ishan</td>
								<td>STD003</td>
								<td>Cls1A</td>
								<td style="border-left: hidden">
									<input type="text" value="" class="hidden i1">
								</td>
								<td style="border-left: hidden">
									<a  class="e1">Edit</a>
								</td>
							</tr>
							<tr>
								<td>Jeena</td>
								<td>STD004</td>
								<td>Cls1A<span class="r1">01</span></td>
								<td style="border-left: hidden" >
									<input type="text" value="01" class="hidden i2">
								</td>
								<td style="border-left: hidden">
									<a class="e2">Edit
								</td>
							</tr>
							<tr>
								<td>Koyal</td>
								<td>STD005</td>
								<td>Cls1A<span class="r2">02</span></td>
								<td style="border-left: hidden">
									<input type="text" value="02" class="hidden i3">
								</td>
								<td style="border-left: hidden">
									<a class="e3">Edit
								</td>
							</tr>
						</tbody>
					</table>
				</div><br>
				<button type="button" class="btn btn-primary btn-sm">Update</button>
			</div>
		     </div><br><br>
			<?php } ?>
			
			<?php if($result==='Cls2A')
			{ ?>
			<div class="panel-body">
			<div>
				<div class="table-responsive">
					<div class="row">
						<div class="col-md-2">
							<h5><b>List of Students</b></h5>
						</div>
						<div class="col-md-offset-11">
							<h5><a href="" data-toggle="modal" data-target="#myModal2">Reset All</a></h5>
						</div>
					</div>
					<br>
					<table class="table table-bordered" id="myTable">
						<thead>
							<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
								<th width="40%">Student Name</th>
								<th width="20%">Admission number</th>
								<th width="40%" colspan="3">Roll number</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Kelly</td>
								<td>STD006</td>
								<td>Cls2A</td>
								<td style="border-left: hidden">
									<input type="text" value="" class="hidden i1">
								</td>
								<td style="border-left: hidden">
									<a  class="e1">Edit</a>
								</td>
							</tr>
							<tr>
								<td>Olive</td>
								<td>STD007</td>
								<td>Cls2A<span class="r1">07</span></td>
								<td style="border-left: hidden" >
									<input type="text" value="07" class="hidden i2">
								</td>
								<td style="border-left: hidden">
									<a class="e2">Edit
								</td>
							</tr>
							<tr>
								<td>Koyal</td>
								<td>STD008</td>
								<td>Cls2A<span class="r2">08</span></td>
								<td style="border-left: hidden">
									<input type="text" value="08" class="hidden i3">
								</td>
								<td style="border-left: hidden">
									<a class="e3">Edit
								</td>
							</tr>
						</tbody>
					</table>
				</div><br>
				<button type="button" class="btn btn-primary btn-sm">Update</button>
			</div>
		 </div><br><br>
		 <?php } ?>
		 <?php if($result==='Not set')
			{ ?>
			<div class="panel-body">
			<div>
				<div class="table-responsive">
					<div class="row">
						<div class="col-md-2">
							<h5><b>List of Students</b></h5>
						</div>
						<div class="col-md-offset-11">
							<h5><a href="" data-toggle="modal" data-target="#myModal2">Reset All</a></h5>
						</div>
					</div>
					<br>
					<table class="table table-bordered" id="myTable">
						<thead>
							<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
								<th width="40%">Student Name</th>
								<th width="20%">Admission number</th>
								<th width="40%">Roll number</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Alex</td>
								<td>STD008</td>
								<td>
									<input type="text" value="" class="i1">
								</td>
							</tr>
							<tr>
								<td>Joel</td>
								<td>STD009</td>
								<td>
									<input type="text" value="" class="i1">
								</td>
							</tr>
						</tbody>
					</table>
				</div><br>
				<button type="button" class="btn btn-primary btn-sm">Apply</button>
			</div>
		 </div><br><br>
		 <?php } ?>
		 
		 
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
						<input type="text" class="form-control input-sm" placeholder="" value="<?php echo $result;?>"/> 
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
 <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reset all roll numbers</h4>
        </div>
        <div class="modal-body">
		<div class="row">
			<center><p>Reset all student roll number to default set, and then click apply to save changes.</p></center><br>
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
	
	$('.e1').click(function(){
		//alert();
		$('.i1').removeClass('hidden');
		$('.e1').addClass('hidden');
		
	});
    $('.e2').click(function(){
		$('.i2').removeClass('hidden');
		$('.e2').addClass('hidden');
		$('.r1').addClass('hidden');
	});
	$('.e3').click(function(){
		$('.i3').removeClass('hidden');
		$('.e3').addClass('hidden');
		$('.r2').addClass('hidden');
	});
});
    </script>
