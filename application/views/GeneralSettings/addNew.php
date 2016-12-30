<style>
     .panel-body h1{
                    font-size: 21px;
                }
</style>
            <div id="content" class="content">
                    <ol class="breadcrumb pull-right">
			<li><a href="javascript:;">User</a></li>
			<li><a href="javascript:;">Add User </a></li>
                    </ol>
                    <h1 class="page-header">Create user | Make new admin user</h1>
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
                            <h4 class="panel-title">General settings</h4>
                    </div>
                    <div class="panel-body">
                        <div class="well">
                                <form class="form-horizontal">
                                        <fieldset>
                                                <legend>
                                                <div class="col-sm-10">
                                                    <h1 class="page-header" >Make new admin user</h1>
                                                </div>
                                                </legend>
						<div class="col-sm-offset-2">
                                                    <div class="form-group">
                                                        <label class="col-md-8 control-label"><b style="font-size:13px;margin-right:83px; ">Fields marked with * must be filled. (Only Admin user can be created)</b></label>
                                                        
						    </div>
						    <div class="form-group">
                                                        <label class="col-md-2 control-label"><b>Username * :</b></label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm" placeholder=""  />
					                </div>
						    </div>
							<div class="form-group">
                                                            <label class="col-md-2 control-label"><b>First Name *</b></label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control input-sm" placeholder="" />
                                                            </div>
							</div>
							<div class="form-group">
                                                            <label class="col-md-2 control-label"><b>Last Name:</b></label>
                                                            <div class="col-md-3">
                                                                <input type="text" class="form-control input-sm" placeholder="" />
                                                            </div>
							</div>
							 <div class="form-group">
                                                            <label class="col-md-2 control-label"><b>Password *:</b></label>
                                                            <div class="col-md-3">
                                                                <input type="Password" class="form-control input-sm" placeholder="" />
                                                            </div>
							</div>
							<div class="form-group">
                                                            <label class="col-md-2 control-label"><b>E-Mail:</b></label>
                                                            <div class="col-md-3">
                                                                <input type="email" class="form-control input-sm" placeholder="" />
                                                            </div>
							</div>
							<div class="form-group">
                                                            <div class="col-md-3">
                                                                
                                                            </div>
                                                            <div class="col-md-3 col-md-offset-0">
                                                                <button class="btn btn-primary btn-sm">Create</button>
                                                            </div>
							</div>
						</div>
                                                
                                                
                                        </fieldset>
                                </form>
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
		$(document).ready(function(){
                    
                    $('#datePicker').datepicker({
		    format: 'dd/mm/yyyy'
                    });
		    $('#datePicker1').datepicker({
		    format: 'dd/mm/yyyy'
                    });
		});
		
	</script>

		