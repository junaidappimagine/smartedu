<style>
     .panel-body h1{
                    font-size: 18px;
                }
</style>
    <div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Inbox </a></li>
	    </ol>
	    <h1 class="page-header">Messages | Inbox</h1>
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
		<h4 class="panel-title">Messages</h4>
	    </div>
	    <div class="panel-body">
		<div class="well">
		 
		    <div class="row">
			 <div style="float: right;">
			 <div class="col-md-4 col-md-offset-0">
			      <a href="#" class="btn btn-warning btn-xs" role="button">Sent</a>
			 </div>
			 <div class="col-md-2 col-md-offset-1">
			      <a href="#" class="btn btn-primary btn-xs" role="button"><i class="fa fa-plus fa-1x"></i> Create</a>
			 </div>
		    </div>
		    </div>
		    <div class="row">
			 <hr>
		    </div>
		  
		    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12" style="background-color: rgb(218,230,255);"><p></p>
                                 <p style="text-align: center;"><b>No reminders present</b> </p>
                                </div>
                               
                            </div>
                        </div>
		    </div>
		    <br>
		</div>
	    
            </div>
	 </div>
	 <div>
    </div>
 
    <script>
    $(document).ready(function(){
        $('#searchData').keyup(function(){
            var resdata=$('#searchData').val();
               //alert(resdata);
                if(resdata =='kar')
                {
                    $('#view').removeClass('hidden');
                    $('#termData1').removeClass('hidden');
                    $('#termData2').addClass('hidden');
                    $('#noData').addClass('hidden');
		    $('#Data2').removeClass('hidden');
                   
                }
//		 else if (resdata =='kar' ) {
//                    $('#view').removeClass('hidden');
//                    $('#Data2').removeClass('hidden');
//                    $('#termData1').addClass('hidden');
//                    $('#noData').addClass('hidden');
//                    
//                } 
                else if (resdata =='arun' ) {
                    $('#view').removeClass('hidden');
                    $('#termData2').removeClass('hidden');
                    $('#termData1').addClass('hidden');
                    $('#noData').addClass('hidden');
		    $('#Data2').addClass('hidden');
                    
                } 
                else
                {
                        $('#view').removeClass('hidden');
                        $('#noData').removeClass('hidden');
                        $('#termData1').addClass('hidden');
                        $('#termData2').addClass('hidden');
			$('#Data2').addClass('hidden'); 	
                }
        });
    });
    
    
    </script>
