<style>
     .panel-body h1{
                    font-size: 18px;
                }
</style>
    <div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Students</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Manage student Category</li>
	   </ol>
	    <h1 class="page-header">Configurations | Manage student Category
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
		<h4 class="panel-title">Manage student Category</h4>
	    </div>
	    <div class="panel-body">
		<div class="well">
		    <div class="row">
				<div class="col-md-12">
				    <div class="form-group">
					   <div class="col-md-3 col-md-offset-1">
						 <?php if($mode=='add'){?> <h5 style="float:right;">Enter New Category:</h5> <?php }?>
						 <?php if($mode=='edit'){?> <h5 style="float:right;">Edit Category:</h5> <?php }?>
					   </div>
					   <div class="col-md-3">
						 <input type="text" class="form-control input-sm" placeholder="" id="category" value="<?php if($mode=='edit'){ echo $result;} ?>"/>
					   </div>
				    </div>
				</div>
			</div><br>
		    <div class="row">
				<div class="form-group">
					<label class="col-md-2 col-md-offset-2 control-label"></label>
					<div class="col-md-3">
						<button type="button" class="btn btn-sm btn-success" id="save">Save </button>
					</div>
				</div>
		    </div><br>
		    <?php if($mode=='add'){?>
			<div class="panel-body" id="view">
			<div class="" id="">
				<div class="table-responsive">
					<table class="table table-bordered" id="myTable">
						<thead>
							<tr style="background-color: #d9edf7; border-color: #b6e2ef;">
								<th>Category name</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr class="" id="termData1">
								<td>siblings</td>
								<td><a  href="<?php echo base_url('studentCntrl/edit_category?var1=siblings');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
								<a href="" role="button" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
							</tr>
							<tr class="" id="termData2">
								<td>Staff student</td>
								<td><a  href="<?php echo base_url('studentCntrl/edit_category?var1=Staff student');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
								<a href="" role="button" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		 </div>
		<?php }?>
          </div>
	 </div>
	 <div>
    </div>
 
    <script>
    $(document).ready(function(){
        $('#save').click(function(){
	    var resdata=$('#category').val();
	    console.log(resdata);
          $('#myTable tbody').append('<tr class="child"><td>'+resdata+'</td><td><a  href="<?php echo base_url('studentCntrl/edit_category?var1=Staff student');?>" role="button"  id="edit" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>&nbsp;<a href="" role="button" id="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td></tr>');
          });
    });
    
    
    </script>
