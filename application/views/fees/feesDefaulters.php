<style>
     .panel-body h1{
                    font-size: 15px;
                }
</style>
<link href="<?php echo base_url(); ?>assets/datatable/jquery.dataTables.min.css" rel="stylesheet" />
    <div id="content" class="content">
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Fees</a></li>
		    <li><a href="javascript:;">Fees Defaulters</a></li>
		   
	    </ol>
	    <h1 class="page-header">Fees Defaulters | Students with fees due </h1>
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
		<h4 class="panel-title">Fees refund</h4>
	    </div>
	    <div class="panel-body">
		<div class="well">
		   
		    <div class="row">
			 <div class="form-group">
			      <label class="col-md-2 col-md-offset-2 control-label"> <h1 class="page-header"><b>Select Class :</b></h1></label>
				 <div class="col-md-3">
					 <select id="selectClass" class="form-control selectpicker"  data-style="btn-white btn-sm">
						 <option value="">Select Class</option>
						 <option value="Grade1">Grade1</option>
						 <option value="">Class1</option>
						 <option value="">Standard1</option>
					 </select>
				 </div>
			 </div>
		    </div>
		    <div class="row">
			 <div class="form-group">
			     <label class="col-md-2 col-md-offset-2 control-label"> <h1 class="page-header"><b>Select Batch :</b></h1></label>
				   <div class="col-md-3">
					<select id="emptyBatch" class="form-control selectpicker "  data-style="btn-white btn-sm">
					     <option value="">Select Batch</option>
					      <option value="G01" class="hidden show">G01-A</option>
					</select>
					
				   </div>
			 </div>
		    </div>
		      <div class="row">
			 <div class="form-group">
			       <label class="col-md-4 control-label" style="float:left;"> <h1 class="page-header"><b style="margin-left:74px;">Select Fee Collection Date :</b></h1></label>
				 <div class="col-md-3">
					 <select id="dropdown1" class="form-control selectpicker"  data-style="btn-white btn-sm">
						 <option value="">Select Fee collection</option>
						 <option value="Term1">Term1 for class1:24/02/2016To</option>
						 <option value="feeStd1">Fee for std_c1-g4:23/03/2016To</option>
						 <option value="Term2">Term2 fee collection:25/03/2016To</option>
						 <option value="str">Fee str:06/04/2016To</option>
					 </select>
				 </div>
			 </div>
		    </div>
		</div>
		    <br>
     <div class="panel-body " id="panel">
		  
     <div class="table-responsive">
	  <table id="example" class="table datatable table-bordered nowrap responsive " cellspacing="0" width="100%">
	       <thead>
	       <tr>
	       <th data-class="hidden">id</th>
	       <th>S.No</th>
	       <th>Name</th>
	       <th>Email</th>
	       <th>Emp_Id</th>
	       <th>Payslip NO</th>
	       <th>Designation</th>
	       <th>For The Month Of</th>
	       <th>Total Working Days</th>
	       <th>Worked Days</th>
	       <th>Basic Salary</th>
	       <th>HRA</th>
	       <th>DA</th>
	       <th>TA</th>
	       <th>Incentive</th>
	       <th>Increment</th>
	       <th>Gross Earnings</th>
	       <th>LOP</th>
	       <th>Advance salary paid</th>
	       <th>Other deduction</th>
	       <th>Gross deductions</th>
	       <th>Net-Salary</th>
	       <th>Remarks</th>
	       <th>Insert Timestamp</th>
	       <th>Update Timestamp</th>
	       </tr>
	       </thead>
	       <tbody id="sbody">
		   
	       </tbody>
	  </table>
	       <div class="col-md-offset-3">
		    <br>
		    <div class="col-sm-2">
			 <a class="form-control btn btn-primary btn-sm" href="<?php echo base_url('FeesCntrl/defaulter_pdf_generate');?>">PDF report</a>
		    </div>
		    <div class="col-md-3">
		    <input type="button" class="form-control btn btn-success" name="send" onclick="multiple_mail_send()"  value="Send Email"> 		
		    </div>
		   <!-- <button type="button" id="updatebutton"  class="btn btn-primary" disabled> Edit </button>
		    <button type="button" id="deletebutton" name="" class="btn btn-danger">Delete</button>-->
	       </div>

     </div>
		    
		   <!-- <div class="col-sm-2 col-sm-offset-3">
			 <a class="form-control btn btn-primary btn-sm" href="<?php echo base_url('FeesCntrl/defaulter_pdf_generate');?>">PDF report</a>
			 
		    </div>
		    <div class="col-sm-2">
			 
			 <a class="form-control btn btn-primary btn-sm" data-toggle="modal" data-target="#getToEmail" id="sendEmail" name="sendEmail"><i class="fa fa-envelope"></i> Email</a>
		    </div> -->
	       </div> 
	       </div>
	    </div>
	 </div>
	 <div>
    </div>
	 
	 
<!--     <div class="modal fade" id="EmailUserFancy" data_value="EmailUserFancy" data-backdrop="static"  tabindex="-1" role="dialog" aria-labelledby="EmailUserFancy">
	  <div class="modal-dialog">
	    <div class="modal-content">		
		<form  id="EmailUserFancy" class="smart-form" >
		    <div class="modal-header" style="border-bottom: 1px solid #e5e5e5; min-height: 16.4286px; padding: 15px;">			
			<b>
			   <img alt="Ruby" data-id="login-cover-image" src="<?php echo base_url();?>/assets/img/logo.jpg" style="width: 55px;">			    
			</b>						
			<button aria-hidden="true" data-dismiss="modal" class="close" type="button onClick="onClickHandler(this)">
			    <i class="fa  fa-times-circle "></i>
			</button>
		    </div>		    
		    <div class="model-body">
			<fieldset>
			    <p></p>
			    <div class="form-group">
				<div class="col-md-12">
				    <label class="col-md-4">Enter Email Address</label>
					<div class="col-md-5">
					    <input type="text" class="form-control EmailIdClass" name="EmailId" />
					</div>
				</div>
			    </div>
			</fieldset>
			<fieldset><p></p></fieldset>
		    </div>		   
		    <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" id="Savechanges" onclick="EmailIdPerson();"  class="btn btn-primary">Send Email</button>				    							
		    </div>	    
		</form>
		
	    </div>
	</div>
    </div>
-->

    <script>
    $(document).ready(function(){
	  $('#selectClass').change(function(){
	       
	       if($(this).val()=='Grade1'){
		    $('.show').removeClass('hidden');
		    $('#emptyBatch').addClass('hidden');
	       }else{
		    $('.hidden').addClass('hidden');
	       }
	  });
	//  $('#dropdown1').change(function(){
	//     console.log($(this).val());
	//     if($(this).val()=='Term1'  )
	//     {
	//	$('#panel').removeClass('hidden');
	//	$('#view').removeClass('hidden');
	//	$('#termData1').removeClass('hidden');
	//	$('#termData2').removeClass('hidden');
	//	$('#str').addClass('hidden');
	//	$('#feeStd').addClass('hidden');
	//     }
	//     else if ($(this).val()=='feeStd1' ) {
	//	 $('#panel').removeClass('hidden');
	//	 $('#view').removeClass('hidden');
	//	 $('#feeStd').removeClass('hidden');
	//	 $('#termData1').addClass('hidden');
	//	 $('#termData2').addClass('hidden');
	//	 $('#term2').addClass('hidden');
	//	 
	//	 
	//     } else if ($(this).val()=='Term2' ) {
	//	 $('#panel').removeClass('hidden');
	//	 $('#view').removeClass('hidden');
	//	 $('#term2').removeClass('hidden');
	//	 $('#str').addClass('hidden');
	//	 $('#feeStd').addClass('hidden');
	//	 $('#termData1').addClass('hidden');
	//	 $('#termData2').addClass('hidden');
	//     }
	//     else if ($(this).val()=='str') {
	//	 $('#panel').removeClass('hidden');
	//	 $('#view').removeClass('hidden');
	//	 $('#str').removeClass('hidden');
	//	 $('#term2').addClass('hidden');
	//	 $('#feeStd').addClass('hidden');
	//	 $('#termData1').addClass('hidden');
	//	 $('#termData2').addClass('hidden');
	//     }
	//     else
	//     {
	//	     $('#panel').addClass('hidden');
	//     }
	//  });
	  
	  
	  var t= $('#example').DataTable({
     
	       "bServerSide": true,
	       "bProcessing": true,
	       "sAjaxSource": '<?php echo site_url('FeesCntrl/payslip_Multiple_Data');?>',
	       'responsive': true,
	       
	       'scrollX':true,
	       "lengthMenu": [
			     [5,10, 20, 50, -1],
			     [5,10, 20, 50, "All"] // change per page values here
			 ],
   
		   columns: [
		   { data: 'ID',"orderable": true},
		   { data: 'ID'},
		   { data: 'EMP_NAME'},
		   { data: 'EMP_EMAIL'},
		   { data: 'EMP_ID'},
		   { data: 'PAYSLIP_NO'},
		   { data: 'EMP_DEPARTMENT'},
		   { data: 'MONTH_YEAR'},
		   
		   { data: 'TOTAL_WORKING_DAYS'},
		   { data: 'WORKED_DAYS'},
		   { data: 'BASIC_SALARY'},
		   { data: 'HRA'},
		   { data: 'DA'},
		   { data: 'TRAVELLING_ALLOWANCE'},
		   { data: 'INCENTIVE'},
		   { data: 'INCREMENT'},
		   { data: 'GROSS_EARNINGS'},
		   { data: 'LOP'},
		   { data: 'ADVANCE_SALARY'},
		   { data: 'OTHER_DEDUCTIONS'},
		   { data: 'GROSS_DEDUCTIONS'},
		   { data: 'NET_AMOUNT'},
		   { data: 'REMARKS'},
		   { data: 'CR_DATE'},
		    { data: 'UPDATED_DATE'},
		   ],
		   'columnDefs': [
		      {
			 'targets': 0,
			 'checkboxes': {
		       'selectRow': true
			 }
		      }
		   ],
		   'select': {
		      'style': 'multi'
		   },
		   'order': [[0, 'desc']],
	       //"order": [[ 0, 'desc' ]],
	       'fnServerData': function(sSource, aoData, fnCallback){
		   $.ajax({
		       'dataType': 'json',
		       'type'    : 'POST',
		       'url'     : sSource,
		       'data'    : aoData,
		       'success' : fnCallback
		   });
	       },
      });
	   t.on( 'order.dt search.dt processing.dt page.dt', function () {
                t.column(1, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
			cell.innerHTML = i+1;
			var info = t.page.info();
			var page = info.page+1;             
			if (page >'1') { 
			    hal = (page-1) *5;  // u can change this value of ur page
			    cell.innerHTML = hal+i+1;
			} 
		    } );
     } ).draw();
	   

	
       function loadLoader() {
	      $('body').addClass('loading').loader('show', { overlay: true });    
	  }
	  function unLoader() {
	      $('body').removeClass('loading').loader('hide');
	      //alert('Mail Send Sucessfully');
	  }
	  
	  
	  
	  $('#sendEmail').on('click',function(){
	     
	     $('#EmailUserFancy').modal('show');
	     
	 });
	 
    });
      function multiple_mail_send() {
	      
	  var names=[];
	  var email=[];
	  $('tr.selected').each(function(){
	  var datas=$(this).find('td:eq(2)').text();
	  var data1=$(this).find('td:eq(3)').text();
	  names.push(datas);
	  email.push(data1);
	  }); 
	  console.log(names);
	  console.log(email); 
	      //loadLoader();
	   $.ajax({
	      type:"post",
	      url:"http://localhost/smartedu/FeesCntrl/Multiple_send_email",
	      data:{names:names,email:email},
	      
	      success:function(){
	      //unLoader();
		   bootbox.alert('<h4><center>Email Send Successfully<center></h4>');
		   $('#emailfa').removeAttr('class',true).attr('class','fa fa-envelope');
	      },
	  });
      }
      
//     function EmailIdPerson(){
//	       $('#EmailUserFancy').modal('hide');
//	       $('#emailfa').removeAttr('class',true).attr('class','fa fa-circle-o-notch fa-spin fa-fw margin-bottom');
//	       //var emailSystemId = $('#emailSystemId').val();
//	       var EmailIdClass = $('.EmailIdClass').val();
//	       console.log(EmailIdClass);
//	       $.ajax({
//	       type: "POST",
//	       data: {EmailId:EmailIdClass},
//	       url:"<?php echo site_url('FeesCntrl/feesDefaulterEmail')?>",
//	       success: function (response) {
//		   $('.EmailIdClass').val('');
//		   bootbox.alert('<b><img alt="" data-id="login-cover-image" src="<?php echo base_url();?>/assets/img/logo.jpg" style="width: 55px;"></b><h4><center>Email Send Successfully<center></h4>');
//		   $('#emailfa').removeAttr('class',true).attr('class','fa fa-envelope');
//		   }
//	       });
//	       
//	   }
    </script>
   
