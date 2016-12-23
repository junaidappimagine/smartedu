<style>
   /*  .panel-body h1
     {
	  font-size: 14px;
     }*/
 
    

</style>
            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
			<li><a href="javascript:;">Configuration</a></li>
			<li><a href="javascript:;">Subjects</a></li>
                        <li><a href="javascript:;">Import Subjects</a></li>
                    </ol>
                    <h1 class="page-header">Subject | Import subjects</h1>
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
                            <h4 class="panel-title">Import subjects</h4>
                    </div>
                    <div class="panel-body">
			 <br>
			 <div class="well">
                                  <!--<div class="panel-body tpanel">-->
                                        <fieldset>
					    <legend>
                                               
                                                 <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-10">
                                                             <h1 class="page-header" style="font-size:21px;">Import subjects</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group">
                                                        <div class="col-md-10">
                                                            <label style="font-size: 15px;"><b>BSc - B </b></label>
                                                        </div>
                                                    </div>
                                                </div><br>
			                    </legend>
                                            
					        <div class="" id="selectBsc">
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <div class="col-md-10">
                                                                <label style="font-size: 15px;"><b>Subjects and Elective Groups </b></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <div class="col-md-10">
                                                                &nbsp;&nbsp;<label style="font-size: 15px;">List of Subjects from the previous batch <strong>A</strong></label>
                                                            </div>
                                                        </div>
                                                    </div><br><br>
					        </div>
                                                <div class="table-responsive">
                                                <table class="table table-bordered">
                                                        <thead>
                                                            <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                                <th width="10%">
                                                                    <div class="">
                                                                        <label style="margin-bottom: 0;"><input type="checkbox" value="" class="toggle"></label>
                                                                    </div>
                                                                </th>
                                                                <th width="40%">Subject </th>
                                                                <th width="30%">Code</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="" id="termData1">
                                                                <td>
                                                                    <div class="">
                                                                        <label style="margin-bottom: 0;"><input type="checkbox" value="" class="toggle"></label>
                                                                    </div>
                                                                </td>
                                                                <td>Karthik</td>
                                                                <td>G01 - A</td>
                                                            </tr>
                                                            <tr class="" id="termData2">
                                                                <td>
                                                                    <div class="">
                                                                        <label style="margin-bottom: 0;"><input type="checkbox" value="" class="toggle"></label>
                                                                    </div>
                                                                </td>
                                                                <td>Arun</td>
                                                                <td>G01 - B</td>
                                                            </tr>
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                                 <div class="row">
						       <div class="form-group">
							   <div class="col-md-10">
								<label style="font-size: 15px;">0 of 2 subjects</label>
							   </div>
						       </div>
						</div><br>
                                                <hr>
                                                <div class="row">
						       <div class="form-group">
							   <div class="col-md-2">
								<button type="button" class="btn btn-primary btn-sm " id="enable">Import Subject</button>
							   </div>
                                                           <div class="col-md-2">
								<button type="button" class="btn btn-danger btn-sm" onclick="window.history.back();">Cancel</button>
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
	<script>
            $(document).ready(function(){
                $('#enable').attr('disabled', true);
		$('.toggle').click(function()
                {
                    if ($(this).is(':checked')) {
                        $('#enable').removeAttr('disabled');
                    }else{
                        $('#enable').attr('disabled', true);
                    }
                    
		});
            });
	       
	</script>

		