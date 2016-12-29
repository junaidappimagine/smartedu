	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Courses and Batches</a></li>
		    <li class="active">Revert Batch Transfer</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">Academics | Courses and Batches</h1>
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
			    </div>
			    <h4 class="panel-title">Revert Batch Transfer</h4>
			</div>
			<div class="panel-body">
			  <legend>Revert Batch Transfer</legend>
			    <div class="form-group row">
			      <div class="col-md-2">
				<label class="input-sm">Select a batch &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>:</b></label>
			      </div>
			      <div class="col-md-3">
			      <select class="selectpicker form-control choose input-sm" data-style="btn-white">
				<option value="select">Select Batch</option>
				<option value="C1-A">C1 - A</option>
				<option value="C2-A">C2 - A</option>
				<option value="C3-A">C3 - A</option>
			      </select>
			    </div>
			    <div class="col-md-5"></div>
			    <div class="col-md-2">
				<input style="float: right" type="button" name="" class="btn btn-primary btn-sm hidden revertbtn" value="Revert">
			    </div>
			  </div>
			<p><br></p>
			<div class="table-responsive">
			    <table class="table  table-bordered table table-striped hidden showtable">
				<thead class="">
				    <tr class="deleterow">
					<th>SI.No</th>
					<th>Admission no. </th>
					<th>Student name </th>
					<th>Previous batch </th>
					<th>
					    Revert
					    <span style="float: right;">
						<a style="cursor: pointer" class="allcheck">All</a>
						<a style="cursor: pointer" class="uncheck"> None</a>
					    </span>
					</th>
				    </tr>
				</thead>
				<tbody class="hereappend">
				</tbody>
			    </table>
			</div>

			</div>
		    </div>
		  </div>
		    <!-- end panel -->
	    </div>
	<!-- end col-12-->
	  </div>
<script>
    
    var arraydata=[
		   {'batch':'C1-A','SI_NO':'1','admission_no':'STD025','studname':'Alex','prebatch':'None','Revert':'<a style="cursor: pointer" data-toggle="popover" data-content="No previous batch available">Notapplicable</a>'},
		   {'batch':'C1-A','SI_NO':'2','admission_no':'STD022','studname':'kumar','prebatch':'None','Revert':'<a style="cursor: pointer" data-toggle="popover" data-content="No previous batch available">Notapplicable</a>'},
		   {'batch':'C1-A','SI_NO':'3','admission_no':'STD020','studname':'Naveen','prebatch':'C1-A','Revert':'<input class="check" type="checkbox">'},
		   {'batch':'C1-A','SI_NO':'4','admission_no':'STD028','studname':'Siva','prebatch':'C1-A','Revert':'<input class="check" type="checkbox">'},
		   {'batch':'C1-A','SI_NO':'5','admission_no':'STD029','studname':'Raj','prebatch':'C1-A','Revert':'<input class="check" type="checkbox">'},
		   
		   {'batch':'C2-A','SI_NO':'1', 'admission_no':'STD032','studname':'Arun','prebatch':'C2-A','Revert':'<a style="cursor: pointer" data-toggle="popover" data-content="No previous batch available">Notapplicable</a>'},
		   {'batch':'C2-A','SI_NO':'2','admission_no':'STD010','studname':'Jhon','prebatch':'C2-A','Revert':'<a style="cursor: pointer" data-toggle="popover" data-content="No previous batch available">Notapplicable</a>'},
		   
		   {'batch':'C3-A','SI_NO':'1','admission_no':'STD005','studname':'Seenu','prebatch':'C3-A','Revert':'<a style="cursor: pointer" data-toggle="popover" data-content="No previous batch available">Notapplicable</a>'},
		   {'batch':'C3-A','SI_NO':'2','admission_no':'STD015','studname':'Guru','prebatch':'C3-A','Revert':'<a style="cursor: pointer" data-toggle="popover" data-content="No previous batch available">Notapplicable</a>'},
		   ];
    
    var tabledata;
    $('.choose').on('change',function(){
	tabledata='';
	for(i=0;i<arraydata.length;i++){
	    var getval=$(this).val();	
	    if (getval==arraydata[i].batch) {
		$('.showtable').removeClass('hidden');
	        tabledata+='<tr class="deleterow"><td>'+arraydata[i].SI_NO+'</td><td>'+arraydata[i].admission_no+'</td><td>'+arraydata[i].studname+'</td><td>'+arraydata[i].prebatch+'</td><td class="pop">'+arraydata[i].Revert+'</td></tr>';
	    }else if(getval=='select'){
		$('.showtable').addClass('hidden');
	    }
	}
	$('.hereappend').html(tabledata);
	$('[data-toggle="popover"]').popover();  
    })
    $('.allcheck').on('click',function(){
	$('.check').attr('checked',true);
    })
    $('.uncheck').on('click',function(){
        $('.check').prop('checked',false);
    })
    
    
    $('.revertbtn').on('click',function(){
	$('.check').each(function(){
	  if($(this).is(':checked')){
	  $(this).parents('tr.deleterow').remove();
	  console.log('check');
	  }else{
	    console.log('un-check');
	  }
	})
    })
    //for revert btn hide show//
    $('.choose').on('change',function(){
    var dataleng=$('.hereappend').find(':checkbox')
    console.log(dataleng);
    var data=dataleng.length;
    if(!data=="0"){
	$('.revertbtn').removeClass('hidden');
	console.log('in')
    }else{
	$('.revertbtn').addClass('hidden');
	console.log('out')
    }
    });
    

</script>