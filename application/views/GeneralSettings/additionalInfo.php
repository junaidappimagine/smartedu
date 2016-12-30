<style>
     .panel-body h1{
                    font-size: 14px;
     }

</style>
            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
			<li><a href="javascript:;">HR</a></li>
                        <li><a href="javascript:;">Employees</a></li>
                        <li><a href="javascript:;">Admin</a></li>
                        <li><a href="javascript:;">Additional Details </a></li>
                    </ol>
                    <h1 class="page-header">Edit employee information | Additional details</h1>
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
                            <h4 class="panel-title">Additional Details</h4>
                    </div>
                    <div class="panel-body">
			
			 <div class="well">
                            <legend style="padding-bottom: 42px;">
                                <div class="col-sm-10">
                                    <h1 class="page-header" style="font-size:21px;">Additional Details</h1>
                                </div>
                            </legend>
                            <div class="col-sm-10">
                                <h1 class="page-header" style="font-size:21px;">Fields marked with * must be filled.</h1>
                            </div>
                             <div class="row">
                                <div class="form-group">
                                     <label class="col-md-2 col-md-offset-2 control-label"> <h1 class="page-header"><b style="margin-left: 30px;">Account Name :</b></h1></label>
                                        <div class="col-md-3">
                                               <input type="text" class="form-control input-sm" value="" />
                                        </div>
                                </div>
                            </div>
                                  <!--<div class="panel-body tpanel">-->
                                        <fieldset>
                                            
                                            <div class="col-md-12 hidden"  id="noData"  style="background-color: rgb(195,217,255);"><p></p>
                                                <p style="margin-left: 369px;"><b>No students found in the batch </b></p>
                                            </div>
                                             <div class="row "  id="selectData">
                                                 <div class="form-group">
                                                     <label class="col-md-2 col-md-offset-2 control-label"> <h1 class="page-header"><b style="margin-left: 0px;">Verified to work in this country? :</b></h1></label>
 
                                                        <div class="col-md-2 col-md-offset-0"  width="255"  height="150" style="background-color: rgb(238,238,238);border: 1px solid #dddddd;margin-left: 19px;">
                                                                <div class="">
                                                                    <p>SELECT : &nbsp;&nbsp;&nbsp;<a onclick="selectGrade()"><b>All</b></a> ,&nbsp;&nbsp;&nbsp;<a onclick="noneGrade()"><b>None</b></a> </p>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                     <div class="col-md-5">
                                                                        <table cellspacing="0" cellpadding="0" >
                                                                           
                                                                              <td>
                                                                                 <div style="width:153px; height:101px; ">
                                                                                   <table cellspacing="0" cellpadding="1" width="145">
                                                                                    <tr>
                                                                                        <td>
                                                                                             <div class="checkbox" style="border-bottom: 1px solid #dddddd;">
                                                                                                <label style="margin-left: 38px;"><input type="checkbox" class="check" name="country">  Yes</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                             <div class="checkbox"  style="border-bottom: 1px solid #dddddd;">
                                                                                                <label style="margin-left: 38px;"><input type="checkbox" class="check" name="country">  No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    
                                                                                   </table>  
                                                                                 </div>
                                                                              </td>
                                                                            </tr>
                                                                        </table>
                                                                     </div>
                                                                </div>
                                                                    
                                                        </div>
                                                                
                                                               
                                                               
                                                        </div>
                                             </div><br>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-md-2 col-md-offset-2 control-label"> </label>
                                                                  <div class="col-md-1" style="margin-left: 30px;">
                                                                        <a href="<?php echo base_url('GrSettingsC/profile'); ?>" class="btn btn-primary btn-sm" role="button">Save & Proceed</a>
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
		 
		
		
	</script>

		