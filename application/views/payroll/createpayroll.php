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
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Form Stuff</a></li>
				<li class="active">Form Elements</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Form Elements </h1>
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
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Payroll Category</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								   <form class="form-horizontal">
									<fieldset>
									    <legend>Create Payroll Category</legend>
										<div class="form-group">
											<label class="col-md-2 control-label">Payroll Category name <span class="imp">*</span> </label>
											<div class="col-md-4">
												<input type="text" class="form-control input-sm" placeholder="" />
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">Category code <span  class="imp">*</span></label>
											<div class="col-md-4">
												<input type="text" class="form-control input-sm" placeholder="" d/>
											</div>
											<div class="col-md-5">
												<span><p class="tips" align="justify">You can use numbers and formulas, category code will be used to create formulas to calculate the wage amount for other payroll categories</p></span>
											</div>
										</div>
										<div class="form-group">
											 <label class="col-md-2 control-label">Category type <span  class="imp">*</span> </label>
											 <div class="col-md-4">
												<label class="radio-inline">
													   <input type="radio" class="" name="optradio">Earnings
												</label>
											   <label class="radio-inline">
														<input type="radio" class="" name="optradio">Deductions
												</label>
											 </div>
										</div><br>
									   <legend>Category Value</legend>
									   <p>specify how the payroll amount for this category is to be calculated. It can be fixed amount or  can be calculated by using formula</p>
									   <br>
									   <div class="form-group">
										    <label class="col-md-2 control-label">Value type <span  class="imp">*</span> </label>
											<div class="col-md-4">
												<select name="value"  class="form-control input-sm" id="value_type">
													<option>select value type</option>
													<option>Numeric</option>
													<option>Formula</option>
													<option>Conditional Formula</option>
												</select>
											</div>
										</div>
									    
									   <div class="form-group" id="numeric">
											<label class="col-md-2 control-label">Amount <span class="imp">*</span> </label>
											<div class="col-md-4">
												<input type="text" class="form-control input-sm" placeholder="" />
											</div>
										</div>
										<div class="form-group" id="formula">
											<label class="col-md-2 control-label">Formula <span class="imp">*</span> </label>
											<div class="col-md-4">
												<textarea  style="width: 100%;" rows="3"  class="form-control input-sm" cols="38" name=""> </textarea> 
											</div>
											<div class="col-md-1">
												<a href="#">Validate</a>
											</div>
											<div class="col-md-5">
												<ul class="nav nav-tabs">
													<li class="active"><a data-toggle="tab" href="#categories">Payroll categories</a></li>
													<li><a data-toggle="tab" href="#formula">Formula Examples</a></li>
												</ul>
												<div class="tab-content well">
													<div id="categories" class="tab-pane fade in active">
														<h6 class="section_header">Standard codes</h6>
					                                     <div class="row">
															<div class="col-md-6">Gross pay</div>
															<div class="col-md-offset-2 col-md-4">GROSS</div>
														 </div>
														 <div class="row">
															<div class="col-md-6">Number of working days</div>
															<div class="col-md-offset-2 col-md-4">NWD</div>
														 </div>
														 <h6 class="section_header">Earnings</h6>
					                                     <div class="row">
															<div class="col-md-6">Basic</div>
															<div class="col-md-offset-2 col-md-4">Travelling </div>
														 </div>
														 <div class="row">
															<div class="col-md-6">Number of working days</div>
															<div class="col-md-offset-2 col-md-4">NWD</div>
														 </div>
														 <h6 class="section_header">Deductions</h6>
					                                </div>
													<div id="formula" class="tab-pane fade">
														<ul>
															<li>content 1</li>
															<li>content 2</li>
															<li>content 3</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									    <div class="row" id="conditional_formula">
											<div class="row">
											    <div class="col-md-offset-1 col-md-5" style="border:1px solid;"  >
													<div class="row section_header">
														<div class="col-md-2">
															<h6>Condition </h6>
														</div>
														<!--<div class="col-md-offset-9 col-md-1">
															<a href="#"  class="cancel hidden">[X]</a>
														</div>-->
													</div>
													<br>
													<div class="form-group">
														<label class="col-md-2 control-label">if</label>
														<div class="col-md-8">
															<textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" name=""> </textarea> 
														</div>
														<div class="col-md-2">
														   <a href="#">Validate</a>
														</div>
													</div>
													<div class="form-group">
														 <label class="col-md-2 control-label"></label>
															<div class="col-md-8">
																<select name="value"  class="form-control input-sm">
																	<option>select value type</option>
																	<option>Numeric</option>
																	<option>Formula</option>
																	<option>Conditional Formula</option>
																</select>
															</div>
													</div>
													<div class="form-group" id="">
														<label class="col-md-2 control-label"></label>
														<div class="col-md-8">
															<textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" name=""> </textarea> 
														</div>
														<div class="col-md-2">
														   <a href="#">Validate</a>
														</div>
													</div>
													<div class="form-group" id="">
														<label class="col-md-2 control-label">then</label>
														<div class="col-md-8">
															<textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" name=""> </textarea> 
														</div>
														<div class="col-md-2">
														   <a href="#">Validate</a>
														</div>
													</div>
											   </div>
												
												<div class="col-md-offset-1 col-md-5" id="reference_code">
													<ul class="nav nav-tabs">
														<li class="active"><a data-toggle="tab" href="#categories">Payroll categories</a></li>
														<li><a data-toggle="tab" href="#formula">Formula Examples</a></li>
													</ul>
													<div class="tab-content well">
														<div id="categories" class="tab-pane fade in active">
															<h6 class="section_header">Standard codes</h6>
															 <div class="row">
																<div class="col-md-6">Gross pay</div>
																<div class="col-md-offset-2 col-md-4">GROSS</div>
															 </div>
															 <div class="row">
																<div class="col-md-6">Number of working days</div>
																<div class="col-md-offset-2 col-md-4">NWD</div>
															 </div>
															 <h6 class="section_header">Earnings</h6>
															 <div class="row">
																<div class="col-md-6">Basic</div>
																<div class="col-md-offset-2 col-md-4">Travelling </div>
															 </div>
															 <div class="row">
																<div class="col-md-6">Number of working days</div>
																<div class="col-md-offset-2 col-md-4">NWD</div>
															 </div>
															 <h6 class="section_header">Deductions</h6>
														</div>
														<div id="formula" class="tab-pane fade">
															<ul>
																<li>content 1</li>
																<li>content 2</li>
																<li>content 3</li>
															</ul>
														</div>
													</div>
											    </div>
											</div>
										    <br>
											<div class="template hidden"  id="template">
											<div class="col-md-offset-1 col-md-5 " style="border:1px solid;"   style="position:relative">
													<div class="row section_header">
														<div class="col-md-2">
															<h6>Condition </h6>
														</div>
														<div class="col-md-offset-9 col-md-1">
															<a href="#"  class="cancel">[X]</a>
														</div>
													</div>
													<br>
													<div class="form-group">
														<label class="col-md-2 control-label">if</label>
														<div class="col-md-8">
															<textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" name=""> </textarea> 
														</div>
														<div class="col-md-2">
														   <a href="#">Validate</a>
														</div>
													</div>
													<div class="form-group">
														 <label class="col-md-2 control-label"></label>
															<div class="col-md-8">
																<select name="value"  class="form-control input-sm">
																	<option>select value type</option>
																	<option>Numeric</option>
																	<option>Formula</option>
																	<option>Conditional Formula</option>
																</select>
															</div>
													</div>
													<div class="form-group" id="">
														<label class="col-md-2 control-label"></label>
														<div class="col-md-8">
															<textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" name=""> </textarea> 
														</div>
														<div class="col-md-2">
														   <a href="#">Validate</a>
														</div>
													</div>
													<div class="form-group" id="">
														<label class="col-md-2 control-label">then</label>
														<div class="col-md-8">
															<textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" name=""> </textarea> 
														</div>
														<div class="col-md-2">
														   <a href="#">Validate</a>
														</div>
													</div>
											   </div>
											</div>
											<div class="row">
												<div class="col-md-offset-1 col-md-3">
													<a href="#" id="add">Add another condition</a>
												</div>
											</div>
											<br><br>
											 <div class="row">
												<div class="col-md-offset-1 col-md-5" style="border:1px solid;">
													<h6>Default Condition</h6>
													<p class="section_header">If above condition cannot be performed, this condition will be considered</p>
													<div class="form-group">
														<label class="col-md-2 control-label">Value</label>
														<div class="col-md-8">
															<textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" name=""> </textarea> 
														</div>
														<div class="col-md-2">
														   <a href="#">Validate</a>
														</div>
													</div>
												</div>
											 </div>
									    </div>
										 <br>
										<div class="col-md-offset-2 col-md-4">
										     <button type="button" class="btn btn-md btn-success col-md-6">Create Payroll Group</button>
										 </div>
										<div class="col-md-6">
											 <button type="button" class="btn btn-md btn-danger col-md-4">Cancel</button>
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
				var newEle= $('#template').clone(true).insertBefore('#template').removeClass('hidden');
				//$(newEle).find(".cancel").removeClass("hidden");
			$('.cancel').click(function(){
				console.log($(this));
				var ele=$(this).parent().parent().parent().remove();
				console.log(ele);
			});
			
		});
</script>