<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap-filestyle/src/bootstrap-filestyle.min.js"> </script>
<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Home</a></li>
		<li><a href="javascript:;">Employee Management</a></li>
		<li class="active">Employee subject association </li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Employee subject association <small></small></h1>
    <!-- end page-header -->
    <!-- begin row -->
    <div class="row">
		<!-- begin col-12 -->	
		<div class="col-md-12">
		    <!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
			    <div class="panel-heading">
				<div class="panel-heading-btn">
				</div>
				<h4 class="panel-title">Employee subject association </h4>
			    </div>
			    <div class="panel-body" id="crop-avatar">
				    <div class="container" style="width: 100% !important">
					    <form action="" method="" class="form-horizontal">
					    	
							<div class="form-group">
							    <label class="control-label col-md-2">Class</label>
							    <div class="col-md-3">
							      <select class="form-control selectpicker" data-live-search="true" data-style="btn-sm btn-white">
							      	<option>Select</option>
							      	<option>Grade 1</option>
							      	<option>Grade 2</option>
							      </select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="control-label col-md-2">Batch</label>
							    <div class="col-md-3">
							      <select class="form-control selectpicker" data-live-search="true" data-style="btn-sm btn-white" id="batch" onchange="changeBatchValue()">
							      	<option>Select</option>
							      	<option value="a">A</option>
							      	<option value="b">B</option>
							      </select>
							    </div>
							</div>
							<div class="form-group">
							    <label class="control-label col-md-2">Subject</label>
							    <div class="col-md-3">
							      <select class="form-control selectpicker1" data-live-search="true" id="subject" data-style="btn-sm btn-white">
							      	<option selected="">Select</option>
							      </select>
							    </div>
							</div>
					    </form>
			    	</div>
			    </div>
			</div>
		    <!-- end panel -->
		</div>
		<!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<script type="text/javascript">
 	var data=[{'dept':'English','batch':'a'},{'dept':'Hindi','batch':'a'},{'dept':'Maths','batch':'b'},{'dept':'Science','batch':'a'},{'dept':'Tamil','batch':'b'}];
 	var res;
	function changeBatchValue(){
		res='';
		var batch_val=$('#batch').val();
		for(var i=0;i<data.length;i++){
			if(data[i].batch==batch_val){
				getAllOptionValue(data[i]);
			}
		}
		console.log($('#subject').html(res));
	}
	function getAllOptionValue(curr_val){
		return res+='<option>'+curr_val.dept+'</option>';
	}
</script>