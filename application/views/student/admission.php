
<style>
	.imp{
		color:red;
	}
	.line{
		border-style:inset;
	}
</style>
<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Students</a></li>
				<li><a href="javascript:;">Students Details</a></li>
				<li class="active">Admission</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Students | Admission</h1>
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
                            <h4 class="panel-title">Admission</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
								   <form class="form-horizontal">
									<h5><b>Fields marked With <span class="imp">*</span> must be filled</b></h5><br>
									    <div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label class="col-md-5 control-label">Admission number<span class="imp">*</span></label>
													<div class="col-md-7">
														<input type="text" class="form-control input-sm" placeholder="" value=""/>
													</div>
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
												<label class="col-md-5 control-label">Admission Date<span class="imp">*</span></label>
													<div class="col-md-7">
														<span class="input-group">
															<input type="text" class="form-control dateSet input-sm"  id="from_date">
															<span class="input-group-addon" >
																<span class="glyphicon glyphicon-calendar"></span>
															</span>
														</span>
													</div>
												</div>
											</div>
										</div>
										<fieldset>
										<h5><b>Personal Details</b></h5><hr class="line">
										<div class="form-group">
											<label class="col-md-2 control-label">First Name<span class="imp">*</span></label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label">Middle Name</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label">Last Name</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label">Date of Birth<span class="imp">*</span></label>
											<div class="col-md-3">
												<span class="input-group">
													<input type="text" class="form-control dateSet input-sm"  id="from_date">
													<span class="input-group-addon" >
														<span class="glyphicon glyphicon-calendar"></span>
													</span>
												</span>
											</div>
										</div><hr>
										<div class="form-group">
											 <label class="col-md-2 control-label">Gender</label>
											 <div class="col-md-3">
												<label class="radio-inline">
														<input type="radio" class=""  value=""  name="optradio">Male
												</label>
											    <label class="radio-inline">
														<input type="radio" class=""  value=""  name="optradio">Female
												</label>
											 </div>
										</div><hr>
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
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label">Birth Place</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
										 <div class="form-group">
										    <label class="col-md-2 control-label">Nationality</label>
											<div class="col-md-3">
												<select name="value"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm" >
													<option>select</option>
													<option selected>India</option>
													<option>France</option>
													<option>Dubai</option>
													<option>newzland</option>
													<option>australia</option>
												</select>
											</div>
										</div><hr>
										 <div class="form-group">
											<label class="col-md-2 control-label">Mother Tongue</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
										 <div class="form-group">
										    <label class="col-md-2 control-label">Category</label>
											<div class="col-md-3">
												<select name="value"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm">
													<option>select a Category</option>
													<option>Term 1 Fee</option>
													<option>fee</option>
												</select>
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label">Religion</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
										<h5><b>Contact Deatils</b></h5><hr class="line">
										
										<div class="form-group">
											<label class="col-md-2 control-label">Address Line1</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label">Address Line1</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label">City</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label">State</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label">Pin code</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
										
									   <div class="form-group">
										    <label class="col-md-2 control-label">Country</label>
											<div class="col-md-3">
												<select name="value"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm" >
													<option>select</option>
													<option selected>India</option>
													<option>France</option>
													<option>Dubai</option>
													<option>newzland</option>
													<option>australia</option>
												</select>
											</div>
										</div><hr>
									   <div class="form-group">
											<label class="col-md-2 control-label">Phone</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
									   <div class="form-group">
											<label class="col-md-2 control-label">Mobile</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
									   <div class="form-group">
											<label class="col-md-2 control-label">Email</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
									   	<h5><b>Class and Batch details</b></h5><hr class="line">
									  
										<div class="form-group">
										    <label class="col-md-2 control-label">Class<span class="imp">*</span></label>
											<div class="col-md-3">
												<select name="value"  class="form-control input-sm selectpicker" data-style="btn-white btn-sm">
													<option>select a Class</option>
													<option value="class 1">class 1</option>
													<option value="class 2">Class 2</option>
													<option value="class 3">Class 3</option>
												</select>
											</div>
										</div><hr>
										<div class="form-group">
										    <label class="col-md-2 control-label">Batch<span class="imp">*</span></label>
											<div class="col-md-3">
												<select name="value"  class="form-control input-sm selectpicker" id="batch" data-style="btn-white btn-sm">
													<option>select a Batch</option>
													<option value="B.Tech">B.Tech</option>
												</select>
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label">Roll Number</label>
											<div class="col-md-1" id="show"></div>
											<div class="col-md-2">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
										<h5><b>Settings</b></h5><hr class="line">
									  
										<div class="form-group">
											<label class="col-md-2 control-label">Biometric ID</label>
											<div class="col-md-3">
												<input type="text" class="form-control input-sm" placeholder="" value=""/>
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label">Enable SMS features</label>
											<div class="col-md-offset-1 col-md-3">
												<div class="checkbox">
													<label><input type="checkbox" value="" checked></label>
												</div>
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label">Enable e-mail features</label>
											<div class="col-md-offset-1 col-md-3">
												<div class="checkbox">
													<label><input type="checkbox" value="" checked></label>
												</div>
											</div>
										</div><hr>
										<h5><b>Upload User's Photo</b></h5><hr class="line">
										<div class="form-group">
											<label class="col-md-2 control-label">Upload User's Photo</label>
											<div class="col-md-3">
												<div class="input-group">
													<label class="input-group-btn">
														<span class="btn btn-warning">Choose File<input type="file"  name="" id="" style="display: none;"  onchange="showimage1(this);"></span>
													</label>
													<input type="text" required="" placeholder="No file selected" name="" class="form-control" readonly  >
												</div>
											</div>
											<div class="col-md-3" style="border:1px solid;text-align:justify;">
												Maximum image size is 500KB Recommended resolution is 125x125
											</div>
										</div><hr>
										<div class="form-group">
											<label class="col-md-2 control-label"></label>
											<div class="col-md-3">
												<button type="button" class="btn btn-sm btn-success">Save & proceed</button>
											</div>
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

$(function() {
// We can attach the `fileselect` event to all file inputs on the page
$(document).on('change', ':file', function() {
var input = $(this),
numFiles = input.get(0).files ? input.get(0).files.length : 1,
label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
input.trigger('fileselect', [numFiles, label]);
});

// We can watch for our custom `fileselect` event like this
$(document).ready( function() {
$(':file').on('fileselect', function(event, numFiles, label) {

var input = $(this).parents('.input-group').find(':text'),
log = numFiles > 1 ? numFiles + ' files selected' : label;

if( input.length ) {
input.val(log);
} else {
if( log ) alert(log);
}

});
});
});

$(document).ready(function(){
		
$('.dateSet').datepicker({
            format: 'd MM yyyy',
});	
	
$('#batch').change(function(){
$('#show').text('BT1');	
});

});

</script>