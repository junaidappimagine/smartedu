<style>
     .panel-body h1
     {
	  font-size: 14px;
     }
     hr.hrdesign{
	  display: block;
	  margin-left: auto;
	  margin-right: auto;
	  border-style:inset;
	  border-width: 1px;
	}
        th{
		background-color: white!important;
	}
	td{
		background-color: white!important;
	}
	tbody:before {
	  content: "-";
	  display: block;
	  line-height: 1em;
	  color: transparent;
	  }

</style>
            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Configuration</a></li>
			<li><a href="javascript:;">Subjects</a></li>
                    </ol>
                    <h1 class="page-header">Subject | Manage Subjects</h1>
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
                            <h4 class="panel-title">Manage Subjects </h4>
                    </div>
                    <div class="panel-body">
			 <br>
			 <div class="well">
                                  <!--<div class="panel-body tpanel">-->
                                        <fieldset>
					     <legend>
						  <div class="col-sm-10">
						      <h1 class="page-header" style="font-size:21px;">Manage Subjects</h1>
						  </div>
			                    </legend>
					     <div class="hidden" id="showC1A">
						   <div class="row">
						       <div class="form-group">
							   <div class="col-md-10">
								List of all subjects of this batch. You can add new subjects and manage their preferences here. 
							   </div>
							    <div class="col-md-2">
								No. of weekly classes 10
							   </div>
						       </div>
						  </div><br>
						  
						  <div class="panel-body tpanel" style="background-color: #C3D9FF">
							    
								   <table class="table table-bordered" style="width:100%">
								      <thead>
									   <tr>
										<th>Subject</th>
										<th>Code</th>
										<th>Weekly Classes</th>
										<th>Action</th>
									   </tr>
								      </thead>
								      <tbody>
									   <tr>
										<td>English</td>
										<td>Eng</td>
										<td>5</td>
										 <td><button type="button" name="edit" id="" value="edit3" class="btn btn-xs btn-primary editData" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
										     <button onclick="" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
										
									   </tr>
									   <tr>
										<td>Maths</td>
										<td>Mat</td>
										<td>5</td>
										 <td><button type="button" name="edit" id="" value="edit3" class="btn btn-xs btn-primary editData" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
										     <button onclick="" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
									   </tr>
									   <tr>
									       <td>Science</td>
										<td>Sci</td>
										<td>5</td>
										 <td><button type="button" name="edit" id="" value="edit3" class="btn btn-xs btn-primary editData" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></button>
										     <button onclick="" name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button></td>
									   </tr>
									  
								      </tbody>
								 </table>
					                    </div>
							    <br>
							   
					               </div>

					     
                                        </fieldset>
                                <!--</div>-->
                            </div>
                    </div>
		    
		    
                </div>
            </div>
        <div>
    </div>
		<!-- end #content -->
	<script>
		 $('#selectClass').change(function(){
                        console.log($(this).val());
                        if ($(this).val()=='Class1'||$(this).val()=='Class2') {
                            $('.show').removeClass('hidden');
                            $('#bach').addClass('hidden');
			    $('#showC1A').addClass('hidden');
			    $('#selectBsc').addClass('hidden');
                        }
			 else if ($(this).val()=='Bachelor') {
                            $('#bach').removeClass('hidden');
			    $('.show').addClass('hidden');
			    $('#showC1A').addClass('hidden');
			    $('#selectBsc').addClass('hidden');
                        }
                        else{
                              $('#bach').addClass('hidden');
			      $('.show').addClass('hidden');
			      $('#showC1A').addClass('hidden');
			      $('#selectBsc').addClass('hidden');
                        }
                });
		 $('#selectBatch').change(function(){
                        console.log($(this).val());
                        if ($(this).val()=='BScB') {
                            $('#selectBsc').removeClass('hidden');
			    $('#showC1A').addClass('hidden');
                        }
                        else{
                              $('#selectBsc').addClass('hidden');
			      $('#showC1A').addClass('hidden');
                        }
                });
               $('#selectC1A').change(function(){
                        console.log($(this).val());
                        if ($(this).val()=='C1A') {
                            $('#showC1A').removeClass('hidden');
			    $('#selectBsc').addClass('hidden');
                        }
                        else{
                              $('#showC1A').addClass('hidden');
			      $('#selectBsc').addClass('hidden');
                        }
                });
	        $('#addBatch').click(function() {
		    
		    $('.modal-title').text('Add New Subject');
		    $('#addshow').removeClass('hidden');
		    $('#updateBtn').addClass('hidden');
		});
	        $('#addSub').click(function() {
		   
		    $('.modal-title').text('Add New Subject');
		    $('#addData').removeClass('hidden');
		    $('#updateBtn').addClass('hidden');
		});
		 $('.editData').click(function() {
		   
		    $('.modal-title').text('Edit Subject');
		    $('#name').val('English');
		    $('#code').val('Eng');
		    $('#max').val('5');
		    $('#updateBtn').removeClass('hidden');
		    $('#addData').addClass('hidden');
		});
	       
	       
	       
		
	</script>

		