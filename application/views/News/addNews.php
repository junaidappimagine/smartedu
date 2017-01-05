<style>
     .panel-body h1{
                    font-size: 15px;
                }
</style>
    <div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">News</a></li>
		    <li><a href="javascript:;">Add</a></li>
	    </ol>
	    <h1 class="page-header">Add News | Publish School News</h1>
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
		<h4 class="panel-title">Add News</h4>
	    </div>
	    <div class="panel-body">
		<div class="well"><br><br>
		    <div class="row">
			 <div class="form-group">
                                <label class="col-md-1 control-label"> <h1 class="page-header" style="">Title</h1></label>
			        <div class="col-md-5">
				   <input type="text" class="form-control">
			        </div>
			  </div>
		    </div>
                    <div class="row">
			 <div class="form-group">
                                <label class="col-md-1 control-label"> <h1 class="page-header" style="">Content</h1></label>
			        <div class="col-md-5">
				   <textarea class="textarea form-control"></textarea>
			        </div>
			  </div>
		    </div>
                     <div class="row">
			
                                <label class="col-md-1 control-label"> <h1 class="page-header" style="">Attach file </h1></label>
			        <div class="col-md-4" style="margin-left:10px;">
                                            <h1 style="font-size: 14px;"> (5MB max)</h1>
                                            <div class="field_wrapper">
                                                <div>
                                                    <input type="file"  name="field_name[]" style=""/>
                                                    <a href="javascript:void(0);" class="add_button" title="Add field"> <i class="fa fa-plus"> Add</i></a>
                                                </div>
                                            </div>
			        </div>
		    </div>
		    </div>
		    <br>
		    <div class="col-sm-2 col-sm-offset-2">
			 <button type="button" class="form-control btn btn-primary btn-sm">Publish News</button>
		    </div>
		   
	       </div>
		</div>
	    </div>
	 </div>
	 <div>
    </div>
 
    <script>
   
   $(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="row"><div class="col-sm-7"><input type="file"  name="field_name[]" value=""/></div><a href="javascript:void(0);" class="remove_button" title="Remove field"> <i class="fa  fa-times-circle " style="color:red;"></i></a></div><br>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
    </script>
