

	<div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Manage Course & Batch</a></li>
		    <li class="active">Manage Batch </li>
	   </ol>
	    <h1 class="page-header">Manage Course & Batch | Manage Batch</h1>
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
            <h4 class="panel-title">Manage Batch</h4>
            </div>
            <div class="panel-body">
            <div class="well">
                <div class="row">
                    <div class="col-md-6">
                        <label class="control-label col-md-6">Select a Course</label>
                        <div class="col-md-6">
                            <select class="selectpicker form-control" id="batch" data-style="btn-sm btn-white">
                            <option value="common">Common</option>
                            <option value="c1">C1-A</option>
                            <option value="dt">DT Sem6 - A 2015</option>
                        </select>
                        </div>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-md-6">
                         <a  href="<?php echo base_url('AcademicsC/');?>"   data-toggle="modal" data-target="#myModal" id="add">+ Add Grades</a>
                    </div>
                </div><br>
                <div class="panel-body">
                    <div class="table-responsive " >
                        <table class="table table-bordered main " id="myTable">
                            <thead id="sub">
                                <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                    <th width="10%">Name</th>
                                    <th width="10%">Min Score (%)</th>
                                    <th width="10%">Credit Points</th>
                                    <th width="10%">Description</th>
                                    <th width="10%">Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A</td>
                                    <td>90</td>
                                    <td>9.0</td>
                                    <td>-</td>
                                    <td><a type="button"  name="edit" class="btn btn-xs btn-primary action1" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></a>
									<a type="button"  name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>B</td>
                                    <td>80</td>
                                    <td>8.0</td>
                                    <td>-</td>
                                    <td><a type="button"  name="edit" class="btn btn-xs btn-primary action2" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></a>
									<a type="button"  name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td>C</td>
                                    <td>70</td>
                                    <td>7.0</td>
                                    <td>-</td>
                                    <td><a type="button"  name="edit"   class="btn btn-xs btn-primary action3" data-toggle="modal" data-target="#myModal"><i class="fa fa-edit"></i></a>
									<a type="button"  name="delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="hidden main2" width="100%;">
                            <tr>
                                <td style="text-align: center;background-color: #c3d9ff!important;padding:8px">This batch is using the common set of grades  <a id="add2" data-toggle="modal" data-target="#myModal">&nbsp;&nbsp;&nbsp;+ Add Grades</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div><br><br>
            </div>
         </div>
	 <div>
    </div>
     
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add New Grading Levels</h4>
        </div>
        <div class="modal-body">
        <form class="form-horizontal">
            <h5 class="hidden"><span id="title"></span></h5>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Name</label>
                        <div class="col-md-5">
                            <input type="text" id="name" class="form-control input-sm" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Min Score (%)</label>
                        <div class="col-md-5">
                            <input type="text" id="min_score" class="form-control input-sm" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Description</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control input-sm" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">creadit Points</label>
                        <div class="col-md-5">
                            <input type="text" id="credit_points" class="form-control input-sm" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-5">
                            <button type="button" class="btn btn-sm btn-success">Save</button>
                        </div>
                     </div>
                </form>
        </div>
    </div>
  </div>
<script>
$('#batch').change(function(){
    //alert();
    if($(this).val()=='common')
    {
    $('.main').removeClass('hidden');
    $('.main2').addClass('hidden');
    }
    if($(this).val()=='c1')
    {
    $('.main').addClass('hidden');
    $('.main2').removeClass('hidden');
    }
    if($(this).val()=='dt')
    {
    $('.main').addClass('hidden');
    $('.main2').removeClass('hidden');
    }
});

     $('.action1').click(function(){
        $('.modal-title').text('Edit Grading Levels');
        $('#name').val('A');
        $('#min_score').val('90');
        $('#credit_points').val('9.0');
    });
     $('.action2').click(function(){
        $('.modal-title').text('Edit Grading Levels');
        $('#name').val('B');
        $('#min_score').val('80');
        $('#credit_points').val('8.0');
	});
    $('.action3').click(function(){
        $('.modal-title').text('Edit Grading Levels');
        $('#name').val('C');
        $('#min_score').val('70');
        $('#credit_points').val('7.0');
	});
    $('#add2').click(function(){
        $('#title').removeClass('hidden');
        $('.modal-title').text('Add Grading Levels');
        $('#name').val('');
        $('#min_score').val('');
        $('#credit_points').val('');
    });
     $('#add').click(function(){
        $('#title').removeClass('hidden');
        $('.modal-title').text('Add Grading Levels');
        $('#name').val('');
        $('#min_score').val('');
        $('#credit_points').val('');
    });
</script>
  


   