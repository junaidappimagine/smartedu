<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Manage Course & Batch</a></li>
				<li><a href="javascript:;">Manage Batch </a></li>
				<li class="active">Batch Transfer</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Batch Transfer | Create Instant fee</h1>
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
                               <!-- <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                            </div>
                            <h4 class="panel-title">Create Instant fee</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								<div class="row">
									<div class="col-md-6 main">
										<div class="form-group">
											<label class="col-md-4 control-label">Select payee :</label>
											<div class="col-md-6">
												<input type="text" class="form-control input-sm" placeholder="" value="" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											 <label class="radio-inline">
												<input type="radio" name="payee" value="student"checked>Student
											</label>
											<label class="radio-inline">
												<input type="radio" name="payee" value="employee">Employee
											</label>
											<label class="radio-inline">
												<input type="radio" name="payee" value="guest">Guest
											</label>
										</div>
									</div>
								</div><br>
								<div class="student employee col-md-offset-4 hidden">
									<h5><b>No users found</b></h5>
								</div>
								<div class="row guest hidden">
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-md-4 control-label">Guest Name:</label>
											<div class="col-md-6">
												<input type="text" class="form-control input-sm" placeholder="" value="" />
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="col-md-4 control-label">Seelct category</label>
											<div class="col-md-6">
												<select name="value"  class="form-control input-sm" id="value_type">
													<option>select value type</option>
													<option>term fee</option>
													<option>custom</option>
												</select>
											</div>
										</div>
									</div>
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
	$(document).ready(function(){
		$('input[type="radio"]').click(function()
         {
			//alert();
			if($(this).attr("value")=="student")
			{
				$('.guest').addClass('hidden');
				$('.student').removeClass('hidden');
				$('.employee').removeClass('hidden');
				$('.main').removeClass('hidden');
			}
			else if($(this).attr("value")=="employee")
			{
				$('.guest').addClass('hidden');
				$('.student').removeClass('hidden');
				$('.employee').removeClass('hidden');
				$('.main').removeClass('hidden');
			}
			else if($(this).attr("value")=="guest")
			{
				$('.guest').removeClass('hidden');
				$('.student').addClass('hidden');
				$('.employee').addClass('hidden');
				$('.main').addClass('hidden');
			}
		});
	})
</script>


		