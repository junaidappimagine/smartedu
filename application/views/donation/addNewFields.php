
    
    <!-- begin #content -->
    <div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
    <li><a href="javascript:;">Home</a></li>
    <li><a href="javascript:;">Donation</a></li>
    <li class="active">NewFields</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Donation | New Fields</h1>
    <!-- end page-header -->
    
    <!-- begin row -->
    <div class="row">
    <!-- begin col-6 -->
    <div class="col-md-12">
    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
    <div class="panel-heading">
    <div class="panel-heading-btn">
    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
    <!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
    </div>
    <h4 class="panel-title">Add Fields</h4>
    </div>
    <div class="panel-body">
    <div class="well">
    <form class="form-horizontal">
    <fieldset>
  
    <div class="form-group">
    <label class="col-md-2 control-label">Name : </label>
    <div class="col-md-4">
    <input type="text" class="form-control input-sm" placeholder="" value=""/>
    </div>
    </div>
    <div class="form-group">
    <label class="col-md-2 control-label">Status </label>
    <div class="col-md-4">
    <label class="radio-inline">
    <input type="radio" class="" value="active" name="optradio" checked>Active
    </label>
    <label class="radio-inline">
    <input type="radio" class=""  value="inactive" name="optradio">Inactive
    </label>
    </div>
    </div><br>
    
      <div class="form-group">
            <label class="col-md-2 control-label">Is Mandatory?</label>
            <div class="col-md-4">
                <label class="">
                    <input type="checkbox" class="" name="optcheck">
                </label>
              
            </div>
    </div>
    
    <div class="form-group">
    <label class="col-md-2 control-label">Input Method: </label>
    <div class="col-md-4">
    <select name="value" class="form-control input-sm selectpicker" data-style="btn-white btn-sm" id="method" onchange="inputMethod()">
        <option value="textbox">Textbox</option>
        <option value="textarea">Text Area</option>
        <option value="selectbox">Select Box</option>
        <option value="checkbox">Check Box</option>
    </select>
    <div class="form-group input_fields_wrap hidden" id="addfield">
        <a class="add_field_button"><i class="fa fa-plus">Add</i></a>
    </div>
    </div>
    </div>
    
    <div class="col-md-offset-3 col-md-1">
      <button type="button" class="btn btn-sm btn-primary">Create</button>
    </div>
     <div class="col-md-3">
          <button type="button" class="btn btn-sm btn-danger ">Cancel</button>
     </div>
    </fieldset>
    </form>
    
    </div>
    </div>
    </div>
    <!-- end panel -->
    </div>
    <!-- end col-12-->
    
    <div>
    <!-- end row -->
    </div>
    <!-- end #content -->
    <script>
 
    function inputMethod() {
        if ($('#method').val() == 'checkbox' || $('#method').val() =='selectbox') {
            $("#addfield").removeClass('hidden');
        } else {
            $("#addfield").addClass('hidden');
        }
    }
    var max_fields = 10; 
    var wrapper = $(".input_fields_wrap");
    var add_button = $(".add_field_button"); 
    var x = 1;
    $(add_button).on('click',function(e) {
        e.preventDefault();
        if (x < max_fields) { 
            x++; 
            $(wrapper).append('<div class="remove_row" id="clearData"> <input type="text" class="form-control input-sm"/><a href="#" class="remove_field" style="color:red;">Remove</a></div>'); 
        }
    });
    $(wrapper).on("click", ".remove_field", function(e) { 
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
    </script>
