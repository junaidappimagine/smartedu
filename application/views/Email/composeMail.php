<style>
     .well h1{
                    font-size: 15px;
                }
</style>
         
	  <link href="<?php echo base_url(); ?>assets/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
	  <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css" rel="stylesheet" />
	   <link href="<?php echo base_url(); ?>assets/Burtlanassets/include/css/chosen.css" rel="stylesheet" />
	  <!--<link href="<?php echo base_url(); ?>assets/css/style.min.css" rel="stylesheet" />-->
	  
	  
	  
            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
			 <li><a href="javascript:;">Inbox</a></li>
			<li><a href="javascript:;">Email Compose</a></li>
                    </ol>
                    <h1 class="page-header">Messages | Compose</h1>
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
                            <h4 class="panel-title">Compose</h4>
                    </div>
                    <div class="well" style="background-color: rgb(217,224,231);">
                        <div class="row">
                            <h1 class="page-header" style="font-size: 18px">Choose Recipients</h1>
                        </div>
                        <div class="row">
                           
                            <div class="form-group">
                                 <label class="col-md-2 control-label"> <h1 class="page-header"><b>Add employees :</b></h1></label>
                                    <div class="col-md-2">
                                            <select id="selectDept" class="form-control selectpicker" data-style="">
                                                    <option value="">Select a Department</option>
                                                    <option value="English">English</option>
                                                    <option value="Hindi">Hindi</option>
                                                    <option value="Maths">Maths</option>
                                            </select>
                                    </div>
                                    <label class="col-md-2 control-label"> <h1 class="page-header"><b>Add students:</b></h1></label>
                                    <div class="col-md-2">
                                            <select id="selectStudent" class="form-control selectpicker" data-style="">
                                                    <option value="">Select a Batch</option>
                                                    <option value="BSc">BSc- B</option>
                                                    <option value="C1">C1- A</option>
                                                    <option value="C2">C2- A</option>
                                            </select><br><br>

                                    </div>
                                    <label class="col-md-2 control-label"> <h1 class="page-header"><b>Add parents :</b></h1></label>
                                    <div class="col-md-2">
                                            <select id="selectParents" class="form-control selectpicker"  data-style="">
                                                    <option value="">Select a Batch</option>
                                                    <option value="BSc">BSc- B</option>
                                                    <option value="C1">C1- A</option>
                                                    <option value="C2">C2- A</option>
                                            </select><br><br>

                                    </div>
                            </div>
                       </div>
                        <br>
                    	<div class="vertical-box">
		        <!-- begin vertical-box-column -->
		        <div class="vertical-box-column width-250">
		            <!-- begin wrapper -->
                    <div class="">
                        <a href="email_compose.html" class="btn btn-success p-l-40 p-r-40 btn-sm">
                            Compose
                        </a>
                    </div>
		            <!-- end wrapper -->
		            <!-- begin wrapper -->
                    <div class="wrapper">
                        <p><b>FOLDERS</b></p>
                        <ul class="nav nav-pills nav-stacked nav-sm">
                            <li><a href="email_inbox_v2.html"><i class="fa fa-inbox fa-fw m-r-5"></i> Inbox <span class="badge pull-right">52</span></a></li>
                            <li><a href="email_inbox_v2.html"><i class="fa fa-flag fa-fw m-r-5"></i> Important</a></li>
                            <li><a href="email_inbox_v2.html"><i class="fa fa-send fa-fw m-r-5"></i> Sent</a></li>
                            <li><a href="email_inbox_v2.html"><i class="fa fa-pencil fa-fw m-r-5"></i> Drafts</a></li>
                            <li><a href="email_inbox_v2.html"><i class="fa fa-trash fa-fw m-r-5"></i> Trash</a></li>
                        </ul>
                        <p><b>LABEL</b></p>
                        <ul class="nav nav-pills nav-stacked nav-sm m-b-0">
                            <li><a href="javascript:;"><i class="fa fa-fw m-r-5 fa-circle text-inverse"></i> Admin</a></li>
                            <li><a href="javascript:;"><i class="fa fa-fw m-r-5 fa-circle text-primary"></i> Designer & Employer</a></li>
                            <li><a href="javascript:;"><i class="fa fa-fw m-r-5 fa-circle text-success"></i> Staff</a></li>
                            <li><a href="javascript:;"><i class="fa fa-fw m-r-5 fa-circle text-warning"></i> Sponsorer</a></li>
                            <li><a href="javascript:;"><i class="fa fa-fw m-r-5 fa-circle text-danger"></i> Client</a></li>
                        </ul>
                    </div>
		            <!-- end wrapper -->
		        </div>
		        <!-- end vertical-box-column -->
		        <!-- begin vertical-box-column -->
		        <div class="vertical-box-column">
		            <!-- begin wrapper -->
                    <div class="" style="margin-left:13px;">
		                <!-- begin btn-toolbar -->
                        <div class="btn-toolbar">
                            <div class="btn-group">
                                <a href="inbox_v2.html" class="btn btn-white btn-sm p-l-20 p-r-20"><i class="fa fa-file"></i></a>
                                <a href="inbox_v2.html" class="btn btn-white btn-sm p-l-20 p-r-20"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
		                <!-- end btn-toolbar -->
                    </div>
		            <!-- end wrapper -->
		            <!-- begin wrapper -->
                    <div class="wrapper">
                        <div class="p-30 bg-white">
                            <!-- begin email form -->
                            <form action="http://seantheme.com/" method="POST" name="email_to_form">
                                <!-- begin email to -->
                                <label class="control-label">To:</label>
                                <div class="m-b-15">
                                    
                        <div class="row">
                            <div class="form-group">
			      <div class="col-md-1">
				   
			      </div>
                               
                                <div class="col-md-3">
                                     <div class="col-md-3" id="english">
					     <label class="control-label"> <p>Employees</p></label>
					     <select id="" class="chosen form-control" multiple="true"  style="width: 150px !important;" placeholder="">
						     <option value="">Faizer</option>
						     <option value="">Arun</option>
					     </select>
                                    </div>
                                    <div class="col-md-3" id="hindi">
					     <label class="control-label"> <p>Employees</p></label>		
					     <select id="" class="chosen form-control" multiple="true"  style="width: 150px !important;" placeholder="">
						     <option value="">Rafeeq</option>
						     <option value="">Magesh</option>
					     </select>
                                    </div>
                                    <div class="col-md-3" id="maths">
					    <label class="control-label"> <p>Employees</p></label>
					     <select id="" class="chosen" multiple="true"  style="width: 150px !important;" placeholder="">
						     <option value="">Keerthi</option>
						     <option value="">Vijay</option>
					     </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="col-md-3" id="Bsc">
					 <label class="control-label"> <p>Students</p></label>
                                            <select id="" class="chosen" multiple="true"   style="width:150px;">
                                                    <option value="">Karthi</option>
                                                    <option value="">Saran</option>
                                            </select>
                                    </div>
                                    
                                    <div class="col-md-3" id="c1a">
					 <label class="control-label"> <p>Students</p></label>
                                            <select id="" class="chosen" multiple="true" data-style="btn-white btn-sm" style="width:150px;">
                                                    <option value="">Chandru </option>
                                                    <option value="">Roman</option>
                                            </select>

                                    </div>
                                    <div class="col-md-3" id="c2a">
					 <label class="control-label"> <p>Students</p></label>
                                            <select id="" class="chosen" multiple="true" data-style="btn-white btn-sm" style="width:150px;">
                                                    <option value="">smith </option>
                                                    <option value="">Randy</option>
                                            </select>

                                    </div>
                                </div>
                                 <div class="col-md-3">
                                    <div class="col-md-3" id="p_Bsc">
					  <label class="control-label"> <p>Parents</p></label>
                                            <select id="" class="chosen" multiple="true"   style="width:150px;">
                                                    <option value="">No parents found</option>
                                            </select>
                                    </div>
                                    
                                    <div class="col-md-3" id="p_c1a">
					  <label class="control-label"> <p>Parents</p></label>
                                            <select id="" class="chosen" multiple="true" data-style="btn-white btn-sm" style="width:150px;">
                                                    <option value="">Dean</option>
                                                    <option value="">jio</option>
                                            </select>

                                    </div>
                                    <div class="col-md-3" id="p_c2a">
					  <label class="control-label"> <p>Parents</p></label>
                                            <select id="" class="chosen" multiple="true" data-style="btn-white btn-sm" style="width:150px;">
                                                    <option value="">Sai </option>
                                                    <option value="">Glady</option>
                                            </select>

                                    </div>
                                </div>
                                    
                            </div>
                       </div>                 
                                </div>
                                <!-- end email to -->
                                <!-- begin email subject -->
                                <label class="control-label">Subject:</label>
                                <div class="m-b-15">
                                    <input type="text" class="form-control" />
                                </div>
                                <!-- end email subject -->
                                <!-- begin email content -->
                                <label class="control-label">Content:</label>
                                <div class="m-b-15">
                                    <textarea class="textarea form-control" id="wysihtml5" placeholder="Enter text ..." rows="12"></textarea>
                                </div>
                                <div class="m-b-15">
                                        <h1 style="font-size: 15px;"><b>Attach file (5MB max) </b></h1>
                                            <label >
                                                <input type="file" style="">
                                            </label>
                                </div>
                                <!-- end email content -->
                                <button type="submit" class="btn btn-primary p-l-40 p-r-40">Send</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                <button type="button" class="btn btn-danger p-l-30 p-r-30" onclick="window.history.back();">Cancel</button>
                            </form>
                            <!-- end email form -->
                        </div>
                    </div>
		            <!-- end wrapper -->
		        </div>
		        <!-- end vertical-box-column -->
		    </div>

                    
                    
                </div>
            </div>
        </div>
        </div>
    </div>
	
	  
        <script>
            
            $(document).ready(function(){
                    $(".chosen").chosen();
                    $('#english').hide();
                    $('#hindi').hide();
                    $('#maths').hide();
                    $('#Bsc').hide();
                    $('#c1a').hide();
                    $('#c2a').hide();
                    $('#p_Bsc').hide();
                    $('#p_c1a').hide();
                    $('#p_c2a').hide();
            });
            $('#selectDept').change(function(){
                if ($(this).val()=='English'){ 
                    $('#english').show();
                    $('#hindi').hide();
                    $('#maths').hide();
                }else if ($(this).val()=='Hindi'){ 
                    $('#hindi').show();
                    $('#english').hide();
                    $('#maths').hide();
                }
                else if ($(this).val()=='Maths'){
                    $('#maths').show();
                    $('#english').hide();
                    $('#hindi').hide();
                    
                }   
                else{
                    $('#english').hide();
                    $('#hindi').hide();
                    $('#maths').hide();
                }
            });
             $('#selectStudent').change(function(){
                if ($(this).val()=='BSc'){
                    $('#Bsc').show();
                    $('#c1a').hide();
                    $('#c2a').hide();
                }else if ($(this).val()=='C1'){ 
                    $('#Bsc').hide();
                    $('#c1a').show();
                    $('#c2a').hide();
                }
                else if ($(this).val()=='C2'){
                    $('#Bsc').hide();
                    $('#c1a').hide();
                    $('#c2a').show();
                    
                }  
                else{
                    $('#Bsc').hide();
                    $('#c1a').hide();
                    $('#c2a').hide();
                }
            });
              $('#selectParents').change(function(){
                if ($(this).val()=='BSc'){
                    $('#p_Bsc').show();
                    $('#p_c1a').hide();
                    $('#p_c2a').hide();
                }else if ($(this).val()=='C1'){ 
                    $('#p_Bsc').hide();
                    $('#p_c1a').show();
                    $('#p_c2a').hide();
                }
                else if ($(this).val()=='C2'){
                    $('#p_Bsc').hide();
                    $('#p_c1a').hide();
                    $('#p_c2a').show();
                    
                }  
                else{
                    $('#p_Bsc').hide();
                    $('#p_c1a').hide();
                    $('#p_c2a').hide();
                }
            });
            
        </script>
	 