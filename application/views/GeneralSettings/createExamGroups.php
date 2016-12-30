<style>
     .panel-body h1{
                    font-size: 14px;
     }

</style>
            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Exam</a></li>
                        <li><a href="javascript:;">Exam Management</a></li>
                        <li class="active">Bachelor of Commerce</li>
                        <li><a href="javascript:;">B</a></li>
                        <li><a href="javascript:;">Create Exam Group </a></li>
                    </ol>
                    <h1 class="page-header">Exams | Create Exam Group</h1>
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
                            <h4 class="panel-title">Create Exam Group</h4>
                    </div>
                    <div class="panel-body">
			
			 <div class="well">
                            <br>
                            <fieldset>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-2 col-md-offset-1 control-label"> <h1 class="page-header"><b style="margin-left: 30px;">Account Name :</b></h1></label>
                                            <div class="col-md-3">
                                                <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
                                                    <option value="">Select a Class</option>
                                                    <option value="">Grade 1</option>
                                                    <option value="">Grade 2</option>
                                                    <option value="">Grade 3</option>
                                                    <option value="">Bachelor of Commerce</option>
                                                </select>
                                            </div>
                                    </div>
                                </div>
                                <div class="row " id="selectData">
                                    <div class="form-group">
                                        <label class="col-md-2 col-md-offset-1 control-label"> <h1 class="page-header"><b style="margin-left: 89px;">Batch :</b></h1></label>

                                           <div class="col-md-3 col-md-offset-0">
                                            <div width="200"  height="150" style="background-color: rgb(238,238,238);border: 1px solid #dddddd;margin-left: 0px;">
                                                   <div class="">
                                                       <p>SELECT : &nbsp;&nbsp;&nbsp;<a onclick="selectGrade()"><b>All</b></a> ,&nbsp;&nbsp;&nbsp;<a onclick="noneGrade()"><b>None</b></a> </p>
                                                   </div>
                                                   <div class="row">
                                                        <div class="col-md-4">
                                                           <table cellspacing="0" cellpadding="0" >
                                                              
                                                                 <td>
                                                                    <div style="width:190px; height:101px; ">
                                                                      <table cellspacing="0" cellpadding="1" width="226">
                                                                       <tr>
                                                                           <td>
                                                                                <div class="checkbox" style="border-bottom: 1px solid #dddddd;">
                                                                                   <label style="margin-left: 38px;"><input type="checkbox" class="check" name="country">  BSc - B</label>
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
                                    </div>
                                </div>  
                                    <br>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-2 col-md-offset-1 control-label"> <h1 class="page-header"><b style="margin-left: 2px;">Exam group name :</b></h1></label>
                                                <div class="col-md-3">
                                                   <input type="text" class="form-control input-sm" >
                                                </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-2 col-md-offset-1 control-label"> <h1 class="page-header"><b style="margin-left: 55px;">Exam type :</b></h1></label>
                                                <div class="col-md-3">
                                                    <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
                                                        <option value="">Marks</option>
                                                        <option value="">Grades</option>
                                                        <option value="">Marks and Grades</option>
                                                    </select>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-2 col-md-offset-2 control-label"> </label>
                                                  <div class="col-md-1" style="margin-left: 0px;">
                                                        <a href="<?php echo base_url('GrSettingsC/profile'); ?>" class="btn btn-primary btn-sm" role="button">Create</a>
                                                  </div>
                                        </div>
                                    </div>	
                                   
                                </fieldset>
                            </div>
                                <!--</div>-->
                            </div>
                    </div>
                </div>
            </div>
        <div>
    </div>
	<script>
            function selectGrade(){
            $(".check").attr('checked',true);
            }
            function noneGrade(){
            $(".check").prop('checked', false); 
            }
	</script>