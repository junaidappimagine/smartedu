	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">HR</a></li>
		<li><a href="javascript:;">Configurations</a></li>
		<li class="active">Employee Subject Association</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">Employee Subject Association</h1>
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
			    <h4 class="panel-title">Employee Subject Association </h4>
			</div>
			<div class="panel-body">
			    <legend>Employee Subject Association</legend>
				<form class="form-horizontal">
				    <div class="col-md-12">
                                        <div class="form-group">
					    <label class="col-sm-2 control-label">Class &nbsp; :</label>
					    <div class="col-sm-3">
					    <select name="" class="form-control input-sm" id="Class">
                                                <option disabled selected>Select a Class</option>
                                                <option value="Grade1">Grade 1</option>
                                                <option value="Grade2">Grade 2</option>
                                                <option value="Grade3">Grade 3</option>
                                            </select>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label"> Batch &nbsp; :</label>
					    <div class="col-sm-3">
                                            <select name="" class="form-control input-sm" id="Batch">
                                                <option disabled selected>Select  Batch</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                            </select>
					    </div>
					</div>
					<div class="form-group">
					    <label class="col-sm-2 control-label">Subject &nbsp; :</label>
					    <div class="col-sm-3">
					    <select name="" class="form-control input-sm" id="Subject">
                                                <option disabled selected>Select  Subject</option>
                                                <!--<option value="English">English</option>
                                                <option value="Tamil">Tamil</option>
                                                <option value="Maths">Maths</option>-->
                                            </select>
					    </div>
					</div>
					<div class="col-md-12">
					   <div class="col-md-8">
					    <div class="" id="assign_new_div">
						
					    </div>
					    <table class="table table-bordered" id="new_assign" >
						<tbody>
						    <!--<tr><td>asdfsdafsdf</td><td>asdfsdafsdf</td></tr>-->
						</tbody>
					    </table>
					    </div>
					    <!--<div class="col-md-2"></div>-->
					</div>
                                        <div class="form-group">
					    <label class="col-sm-2 control-label">Department &nbsp; :</label>
					    <div class="col-sm-3">
					    <select name="" class="form-control input-sm" id="Department">
                                                <option disabled selected>Select  Department</option>
                                                <option value="English">English</option>
                                                <option value="Hindi">Hindi</option>
                                                <option value="Maths">Maths</option>
                                                <option value="Other Languages">Other Languages</option>
                                                <option value="Science">Science</option>
                                                <option value="Social Studies">Social Studies</option>
                                                <option value="System Admin">System Admin</option>
                                            </select>
					    </div>
					</div>
                                        <div class="col-md-12" id="assign_new">
					    <div class="col-md-2"></div>
					    <h5>Assign new :</h5>
					    <div class="col-md-8">
					    <table class="table table-bordered" id="new_assign" >
						<tbody>
						    <tr><td>asdfsdafsdf</td><td>asdfsdafsdf</td></tr>
						</tbody>
					    </table>
					    </div>
					    <div class="col-md-2"></div>
					</div>

					
					<!--&nbsp;&nbsp;<input type="button" class="btn btn-primary btn-sm col-md-offset-2" value="Save">-->
				    </div>
				</form>
                                
			</div>
		    <!-- end panel -->
		    </div>
	<!-- end col-12-->
		</div>
	    </div>
	</div>
<script>
//    $(document).ready(function(){
//	$('#current_assign').empty();
//	})
    $('#Batch').on('change',function(){
    var data=$('#Batch').val();
    //console.log(data);
    if (data == 'A') {
        console.log('tamil,english');
        $("#Subject").empty().append('<option selected disabled>'+'Select Subject'+'</option>');
        $("#Subject").append('<option value="'+'English'+'">'+'English'+'</option>');
        $("#Subject").append('<option value="'+'Tamil'+'">'+'Tamil'+'</option>');        
    }else if (data == 'B') {
        console.log('maths,science');
        $("#Subject").empty().append('<option selected disabled>'+'Select Subject'+'</option>');
        $('#Subject').append('<option value="Maths">'+'Maths'+'</option>');
        $('#Subject').append('<option value="science">'+'science'+'</option>');
    }else{
        console.log('no subject');
        $("#Subject").empty().append('<option selected disabled>'+'Select Subject'+'</option>');
        $('#Subject').append('<option value="Hindi">'+'Hindi'+'</option>');
    }
    });
    $('#Subject').on('change',function(){
        var value=$('#Subject').val();
        console.log(value);
        if (value=='English') {
	    $('#assign_new_div').append('<h4>Assign new:</h4>');
	    $('#new_assign').append('<tr><td>test 2</td><td><a href="#">Assign</a></td></tr>');
	   
        }else{
            console.log('No Data');
            $('#current_assign').empty().append('<tr><td><Center>No Data Found</Center><td></tr>');
	    //$('#current_assign').empty().append('<h3>Currently assigned:</h3>');
	    //$('#current_assign').empty().append('<tr><td><Center>No Data Found</Center><td></tr>');
        }
    });
    
    //$('#fffff').append('<tr><td>test 2</td><td>test 2</td></tr>')
    
</script>