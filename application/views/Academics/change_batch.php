<style>
	.imp{
		color:red;
	}
	.tips{
		background-color: #3F729B;
		color:white;
	}
	
	.tabs{
		border: 1px solid;
		width:300px;
		padding:0px;
	}
	.nav-pills > li > a {
    
   border-radius: 0 0 0 0  !important;
}
.section_header{
	border-bottom: 1px solid;
}
.conditional{
	
	border:1px solid;
}
	.hidden{ display: none; }
	
</style>

<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">HR</a></li>
				<li><a href="javascript:;">Payroll and Payslip</a></li>
				<li class="active">Create Payroll category</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">HR Management | Payroll Category</h1>
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
                                <!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                            </div>
                            <h4 class="panel-title"> Create Payroll Category</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								   <form class="form-horizontal">
                                        <div class="form-group">
											<label class="col-md-2 control-label">Transferring Batch</label>
											<div class="col-md-4">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div>
										<div class="form-group">
										    <label class="col-md-2 control-label">Transfer to batch</label>
											<div class="col-md-4">
												<select name="value"  class="form-control input-sm" id="batch">
													<option>select a batch</option>
													<option value="c1">C1-A</option>
													<option value="dip">Diploma in Theatre Semester 6(GPA)</option>
												</select>
											</div>
										</div>
									    <div class="col-md-offset-2 col-md-2">
										     <button type="button" class="btn btn-sm btn-success">Create Payroll Group</button>
										 </div>
										<div class="col-md-4">
											 <button type="button" class="btn btn-sm btn-danger col-md-5">Cancel</button>
										</div>
										</fieldset>
									</form>
								   
                              </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12-->
				
                <!-- begin col-6 -->
               
			   <!-- <div class="col-md-6">-->
			        <!-- begin panel -->
                   <!-- <div class="panel panel-inverse" data-sortable-id="form-stuff-3">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Default Style</h4>
                        </div>
                        <div class="panel-body">
                            <form action="http://seantheme.com/" method="POST">
                                <fieldset>
                                    <legend>Legend</legend>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" />
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" /> Check me out
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary m-r-5">Login</button>
                                    <button type="submit" class="btn btn-sm btn-default">Cancel</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>-->
                    <!-- end panel -->
               <!-- </div>-->
                <!-- end col-6 -->
			  <div>
            <!-- end row -->
      </div>
		<!-- end #content -->
<script>
$('#numeric').hide();
$('#formula').hide();
$('#conditional_formula').hide();
$(document).ready(function() {
	
	var readData=$('#value_type').val();
	if(readData=='Formula')
	{
		$('#numeric').hide();
		$('#formula').show();
		$('#conditional_formula').hide();
	}
	
	$("#value_type").change(function(){
		//alert();
		console.log($(this).val());
		 if($(this).val()==='Numeric')
		 {
			$('#numeric').show();
			$('#formula').hide();
			$('#conditional_formula').hide();
		 }
		 else if($(this).val()==='Formula')
		 {
			$('#numeric').hide();
			$('#formula').show();
			$('#conditional_formula').hide();
		 }
		 else if($(this).val()==='Conditional Formula')
		 {
			$('#numeric').hide();
			$('#formula').hide();
			$('#conditional_formula').show();
		 }
	});
	
});
$('#add').click(function(){
	var newEle= $('#template').clone(true).insertBefore('#template').addClass('clonediv').removeClass('hidden');
	$(newEle).find("div#reference_code").remove();
});
$('.cancel').click(function(){
		console.log($(this).val());
		var ele=$(this).parents('.clonediv').remove();
		console.log(ele);
});
</script>