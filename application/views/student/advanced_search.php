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
				<li><a href="javascript:;">Students</a></li>
				<li><a href="javascript:;">Students Details</a></li>
				<li class="active">Advanced Search</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Students | Advanced Search</h1>
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
                            <h4 class="panel-title">Advanced Search</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								   <form class="form-horizontal">
									<fieldset>
									    <legend>Advanced Search</legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Name</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Admission number</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div>
										<div class="form-group">
										    <label class="col-md-2 control-label">Class</label>
											<div class="col-md-3">
												<select name="value"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm">
													<option>select value type</option>
													<option>class 1</option>
													<option>Class 2</option>
													<option>Class 3</option>
												</select>
											</div>
										</div>
										<div class="form-group">
										    <label class="col-md-2 control-label">Batch</label>
											<div class="col-md-3">
												<select name="value"  class="form-control input-sm selectpicker"  data-style="btn-white btn-sm">
													<option>select value type</option>
													<option>B.Tech</option>
												</select>
											</div>
										</div>
										<div class="form-group">
										    <label class="col-md-2 control-label">Category</label>
											<div class="col-md-3">
												<select name="value"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm">
													<option>select value type</option>
													<option>Term 1 Fee</option>
													<option>fee</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											 <label class="col-md-2 control-label">Gender</label>
											 <div class="col-md-3">
												<label class="radio-inline">
													   <input type="radio" class="" value=""  name="optradio">All
												</label>
											   <label class="radio-inline">
														<input type="radio" class=""  value=""  name="optradio">Male
												</label>
											    <label class="radio-inline">
														<input type="radio" class=""  value=""  name="optradio">Female
												</label>
											 </div>
										</div><br>
									  <div class="form-group">
										    <label class="col-md-2 control-label">Blood Group</label>
											<div class="col-md-3">
												<select name="value"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm">
													<option>select blood group</option>
													<option>A+</option>
													<option>B+</option>
													<option>AB+</option>
													<option>O+</option>
													<option>AB-</option>
													<option>AB+</option>
													<option>A1B+</option>
													<option>A-</option>
													<option>B-</option>
													<option>O-</option>
													<option>A1B-</option>
												</select>
											</div>
										</div>
									   <div class="form-group">
										    <label class="col-md-2 control-label">Country</label>
											<div class="col-md-3">
												<select name="value"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm" >
													<option>select</option>
													<option>India</option>
													<option>France</option>
													<option>Dubai</option>
													<option>newzland</option>
													<option>australia</option>
												</select>
											</div>
										</div>
									    <div class="form-group">
										    <label class="col-md-2 control-label">Admission Date:</label>
											<div class="col-md-2">
												<select name="value"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm">
													<option>select</option>
													<option>equal to</option>
													<option>less than</option>
													<option>greater thann</option>
												</select>
											</div>
											<div class="col-md-2">
												<select name="value"  class="form-control input-sm selectpicker"  data-style="btn-white btn-sm">
													<option>select</option>
													<option>2012</option>
													<option>2013</option>
													<option>2014</option>
													<option>2015</option>
													<option>2016</option>
												</select>
											</div>
										</div>
									     <div class="form-group">
										    <label class="col-md-2 control-label">Birth Date:</label>
											<div class="col-md-2">
												<select name="value"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm">
													<option>select</option>
													<option>equal to</option>
													<option>less than</option>
													<option>greater thann</option>
												</select>
											</div>
											<div class="col-md-2">
												<select name="value"  class="form-control input-sm selectpicker"  data-style="btn-white btn-sm">
													<option>select</option>
													<option>2012</option>
													<option>2013</option>
													<option>2014</option>
													<option>2015</option>
													<option>2016</option>
												</select>
											</div>
										</div>
										<div class="form-group">
										    <label class="col-md-2 control-label">Status:</label>
											<div class="col-md-3">
												<label class="radio-inline"><input type="radio" name="optradio" class="radioSearch" checked>Present</label>
												<label class="radio-inline"><input type="radio" name="optradio"  class="radioSearch" >Former</label>
												<label class="radio-inline"><input type="radio" name="optradio"  class="radioSearch" >All</label>
										   </div>
										</div><br><br>
										 <div class="col-md-offset-2 col-md-2">
										     <button type="button" class="btn btn-sm btn-success">search</button>
										 </div>
										</fieldset>
									</form>
								   
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