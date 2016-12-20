<style>
     .panel-body h1{
                    font-size: 14px;
     }

</style>
            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Configuration</a></li>
			<li><a href="javascript:;">SMS </a></li>
                        <li><a href="javascript:;">Student  </a></li>
                    </ol>
                    <h1 class="page-header">SMS | Student </h1>
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
                            <h4 class="panel-title">SMS Student </h4>
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
                                                        <label class="col-md-2 control-label"> <h1 class="page-header"><b>Select a Batch :</b></h1></label>
                                                            <div class="col-md-3">
                                                                <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm" >
                                                                    <option value="bscb">BSc - B</option>
                                                                    <option value="bscb1">BSc - B1</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                            </div><br>
                                            </div>
                                            <div class="col-md-12 hidden"  id="noData"  style="background-color: rgb(195,217,255);"><p></p>
                                                <p style="margin-left: 369px;"><b>No students found in the batch </b></p>
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
                                                                                 <table cellspacing="0" cellpadding="1"  width="319" >
                                                                                    <tr>
                                                                                        <th style="border-bottom: 1px solid #dddddd;"><span class="text" style="margin-left: 38px;">Roll Number - Student Name</span></th>
                                                                                    </tr>
                                                                                 </table>
                                                                              </td>
                                                                            </tr>
                                                                            <tr>
                                                                              <td>
                                                                                 <div style="width:320px; height:240px; overflow:auto;">
                                                                                   <table cellspacing="0" cellpadding="1" width="319">
                                                                                    <tr>
                                                                                        <td>
                                                                                             <div class="checkbox" style="border-bottom: 1px solid #dddddd;">
                                                                                                <label style="margin-left: 38px;"><input type="checkbox" class="check">- Arya</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                             <div class="checkbox" disabled="disabled" style="border-bottom: 1px solid #dddddd;pointer-events: none;opacity:0.5">
                                                                                                <label style="margin-left: 38px;"><input type="checkbox" class="">- Deena</label>
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
                        if ($(this).val()=='bscb') {
                            $('.show').removeClass('hidden');
                            $('#noData').addClass('hidden');
                        }else if ($(this).val()=='bscb1') {
                              $('#noData').removeClass('hidden');
                              $('.show').addClass('hidden');
                        }
                        else{
                              $('#noData').addClass('hidden');
                              $('.show').addClass('hidden');
                        }
                });
		
		
	</script>

		