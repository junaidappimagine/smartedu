<style>
     .panel-body h1{
                    font-size: 14px;
     }

</style>
            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Configuration</a></li>
			<li><a href="javascript:;">SMS </a></li>
                        <li><a href="javascript:;">Employees   </a></li>
                    </ol>
                    <h1 class="page-header">SMS | Employees  </h1>
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
                            <h4 class="panel-title">SMS Employees  </h4>
                    </div>
                    <div class="panel-body">
			 <br>
			 <div class="well">
			      <div>
				   <p style="float: right;" ><b>Available SMS : 10 (validity expired) </b></p>
			      </div><br><br>
                                  <!--<div class="panel-body tpanel">-->
                                        <fieldset>
                                            <div class="row">
                                                 <div class="form-group">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label"> <h1 class="page-header"><b>Select a Department :</b></h1></label>
                                                            <div class="col-md-3">
                                                                <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm" >
                                                                    <option value="">Select a Department</option>
                                                                    <option value="English">English</option>
                                                                    <option value="Hindi">Hindi</option>
                                                                    <option value="Maths">Maths</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                            </div><br>
                                            </div>
                                           
                                             <div class="row hidden show"  id="selectData">
                                                 <div class="form-group">
                                                        <!--<label class="col-md-2 control-label"></label>-->
                                                        <div class="col-md-12">
                                                                <div class="">
                                                                    <p>SELECT : &nbsp;&nbsp;&nbsp;<a onclick="selectGrade()"><b>All</b></a> ,&nbsp;&nbsp;&nbsp;<a onclick="noneGrade()"><b>None</b></a> </p>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                     <div class="col-md-5">
                                                                        <table cellspacing="0" cellpadding="0"  width="255"  height="150" style="background-color: rgb(238,238,238);border: 1px solid #dddddd;">
                                                                            
                                                                            <tr>
                                                                              <td>
                                                                                 <div style="width:320px; height:240px; overflow:auto;">
                                                                                   <table cellspacing="0" cellpadding="1" width="319">
                                                                                    <tr>
                                                                                        <td class="hidden english">
                                                                                             <div class="checkbox" disabled="disabled" style="border-bottom: 1px solid #dddddd;pointer-events: none;opacity:0.5">
                                                                                                <label style="margin-left: 38px;"><input type="checkbox" class=""> Faizer (EMP003)</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="hidden hindi">
                                                                                             <div class="checkbox " disabled="disabled" style="border-bottom: 1px solid #dddddd;pointer-events: none;opacity:0.5">
                                                                                                <label style="margin-left: 38px;"><input type="checkbox" class="">Rafeeq (EMP001)</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="hidden hindi">
                                                                                             <div class="checkbox" disabled="disabled"  style="border-bottom: 1px solid #dddddd;pointer-events: none;opacity:0.5">
                                                                                                <label style="margin-left: 38px;"><input type="checkbox" class="">Deena (EMP008)</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="hidden hindi">
                                                                                             <div class="checkbox " disabled="disabled"  style="border-bottom: 1px solid #dddddd;pointer-events: none;opacity:0.5">
                                                                                                <label style="margin-left: 38px;"><input type="checkbox" class="">Arun (EMP006)</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="hidden maths">
                                                                                             <div class="checkbox " disabled="disabled"  style="border-bottom: 1px solid #dddddd;pointer-events: none;opacity:0.5">
                                                                                                <label style="margin-left: 38px;"><input type="checkbox" class="">Keerthi (EMP002)</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="hidden maths">
                                                                                             <div class="checkbox " disabled="disabled"  style="border-bottom: 1px solid #dddddd;pointer-events: none;opacity:0.5">
                                                                                                <label style="margin-left: 38px;"><input type="checkbox" class="">Sanji (EMP007)</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    
                                                                                   </table>  
                                                                                 </div>
                                                                              </td>
                                                                            </tr>
                                                                        </table>
                                                                     </div>
                                                                        <div class="form-group">
                                                                            <label class="col-md-1 control-label"><b style="font-size: 14px;">Message:</b></label>
                                                                            <div class="col-md-5">
                                                                                <textarea class="form-control" placeholder="Textarea" rows="5"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group"><br>
                                                                                <div class="col-md-0">
                                                                                    
                                                                                </div>
                                                                                <div class="col-md-3 col-md-offset-1">
                                                                                       <br><button type="button" class="btn btn-primary btn-sm" id="gnUpdate">Send SMS</button>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                    
                                                        </div>
                                                                
                                                               
                                                               
                                                        </div>
                                                    </div>
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
                function selectGrade(){
		$(".check").attr('checked',true);
		}
		function noneGrade(){
		$(".check").prop('checked', false); 
		}
		 $('#selectClass').change(function(){
                        console.log($(this).val());
                        if ($(this).val()=='English') {
                            $('.show').removeClass('hidden');
                            $('.english').removeClass('hidden');
                            $('.hindi').addClass('hidden');
                            $('.maths').addClass('hidden');
                        }else if ($(this).val()=='Hindi') {
                            $('.show').removeClass('hidden');
                            $('.hindi').removeClass('hidden');
                            $('.english').addClass('hidden');
                            $('.maths').addClass('hidden');
                            
                        }
                        else if ($(this).val()=='Maths') {
                            $('.show').removeClass('hidden');
                            $('.maths').removeClass('hidden');
                            $('.english').addClass('hidden');
                            $('.hindi').addClass('hidden');
                            
                        }
                        else{
                              $('#noData').addClass('hidden');
                              $('.show').addClass('hidden');
                        }
                });
		
		
	</script>

		