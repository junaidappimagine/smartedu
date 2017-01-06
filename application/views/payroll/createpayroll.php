
<style>
	.imp{
		color:red;
	}
	.tips{
		background-color: #3F729B;
		color:white;
	}
	
	.tabs{
		border: 1px solid;
		width:300px;
		padding:0px;
	}
	.nav-pills > li > a {
    
   border-radius: 0 0 0 0  !important;
}
.section_header{
	border-bottom: 1px solid;
}
.conditional{
	
	border:1px solid;
}
	.hidden{ display: none; }
	
</style>

<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">HR</a></li>
				<li><a href="javascript:;">Payroll and Payslip</a></li>
				<li class="active">Create Payroll category</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">HR Management | Payroll Category</h1>
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
                            <h4 class="panel-title"> Create Payroll Category</h4>
                        </div>
                        <div class="panel-body">
                            <div class="well">
					<form id="saveData" class="form-horizontal form_validation">
					     <fieldset>
						 <legend>Create Payroll Category</legend>
						     <div class="form-group">
							     <label class="col-md-2 control-label">Payroll Category name <span class="imp">*</span> </label>
							     <div class="col-md-4">
								     <input type="text" class="form-control input-sm" name="PR_C_H_NAME" id="PR_C_H_NAME"/>
							     </div>
						     </div>
						     <div class="form-group">
							     <label class="col-md-2 control-label">Category code <span  class="imp">*</span></label>
							     <div class="col-md-4">
								     <input type="text" class="form-control input-sm" name="PR_C_H_CODE" id="PR_C_H_CODE" />
							     </div>
							     <div class="col-md-5">
								     <span><p class="tips" align="justify">You can use numbers and formulas, category code will be used to create formulas to calculate the wage amount for other payroll categories</p></span>
							     </div>
						     </div>
						     <div class="form-group">
							      <label class="col-md-2 control-label">Category type <span  class="imp">*</span> </label>
							      <div class="col-md-4">
								     <label class="radio-inline">
										<input type="radio" name="PR_C_H_TYPE" value="earnings" id="PR_C_H_TYPE">Earnings
								     </label>
								<label class="radio-inline">
										<input type="radio" name="PR_C_H_TYPE"  value="deductions" id="PR_C_H_TYPE">Deductions
								     </label>
							      </div>
						     </div><br>
						<legend>Category Value</legend>
						<p>specify how the payroll amount for this category is to be calculated. It can be fixed amount or  can be calculated by using formula</p>
						<br>
						<div class="form-group">
							 <label class="col-md-2 control-label">Value type <span  class="imp">*</span> </label>
							     <div class="col-md-4">
								     <select name="PR_C_H_VAL_TYPE"  class="form-control input-sm" id="PR_C_H_VAL_TYPE">
									     <option>select value type</option>
									     <option value="N">Numeric</option>
									     <option value="F">Formula</option>
									     <option value="CF">Conditional Formula</option>
								     </select>
							     </div>
						     </div>
						 <div class="form-group" id="numeric">
							     <label class="col-md-2 control-label">Amount <span class="imp">*</span> </label>
							     <div class="col-md-4">
								     <input type="text" class="form-control input-sm" name="PR_C_L_DEFAULT_VAL" id="PR_C_L_DEFAULT_VAL"/>
							     </div>
						     </div>
						     <div class="form-group" id="formula">
							     <label class="col-md-2 control-label">Formula <span class="imp">*</span> </label>
							     <div class="col-md-4">
								     <textarea  style="width: 100%;" rows="3"  class="form-control input-sm" cols="38" name="PR_C_L_DEFAULT_VAL" id="PR_C_L_DEFAULT_VAL" > </textarea> 
							     </div>
							     <div class="col-md-1">
								     <a href="#">Validate</a>
							     </div>
							     <div class="col-md-5">
								     <ul class="nav nav-tabs">
									     <li class="active"><a data-toggle="tab" href="#t1">Payroll categories</a></li>
									     <li><a data-toggle="tab" href="#t2">Formula Examples</a></li>
								     </ul>
								     <div class="tab-content well">
									     <div id="t1" class="tab-pane fade in active">
										     <h6 class="section_header">Standard codes</h6>
						  <div class="row">
											     <div class="col-md-6">Gross pay</div>
											     <div class="col-md-offset-2 col-md-4">GROSS</div>
										      </div>
										      <div class="row">
											     <div class="col-md-6">Number of working days</div>
											     <div class="col-md-offset-2 col-md-4">NWD</div>
										      </div>
										      <h6 class="section_header">Earnings</h6>
						  <div class="row">
											     <div class="col-md-6">Basic</div>
											     <div class="col-md-offset-2 col-md-4">Travelling </div>
										      </div>
										      <div class="row">
											     <div class="col-md-6">Number of working days</div>
											     <div class="col-md-offset-2 col-md-4">NWD</div>
										      </div>
										      <h6 class="section_header">Deductions</h6>
					     </div>
									     <div id="t2" class="tab-pane fade">
										     <ul>
											     <li>content 1</li>
											     <li>content 2</li>
											     <li>content 3</li>
										     </ul>
									     </div>
								     </div>
							     </div>
						     </div>
						     <div class="row" id="conditional_formula">
							     <div class="row">
								 <div class="col-md-offset-1 col-md-5" style="border:1px solid;"  >
									     <div class="row section_header">
										     <div class="col-md-2">
											     <h6>Condition </h6>
										     </div>
										     <!--<div class="col-md-offset-9 col-md-1">
											     <a href="#"  class="cancel hidden">[X]</a>
										     </div>-->
									     </div>
									     <br>
									     <div class="form-group">
										     <label class="col-md-2 control-label">if</label>
										     <div class="col-md-8">
											     <textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" name="PR_C_L_VALI_1[]" id="PR_C_L_VALI_1"> </textarea> 
										     </div>
										     <div class="col-md-2">
											<a href="#">Validate</a>
										     </div>
									     </div>
									     <div class="form-group">
										      <label class="col-md-2 control-label"></label>
										     <div class="col-md-8">
											     <select name="PR_C_L_VALI_2[]"  id="PR_C_L_VALI_2" class="form-control input-sm">
												     <option value="">select value type</option>
												     <option>Numeric</option>
												     <option>Formula</option>
												     <option>Conditional Formula</option>
											     </select>
										     </div>
									     </div>
									     <div class="form-group" id="">
										     <label class="col-md-2 control-label"></label>
										     <div class="col-md-8">
											     <textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" name="PR_C_L_VALI_3[]" id="PR_C_L_VALI_3"> </textarea> 
										     </div>
										     <div class="col-md-2">
											<a href="#">Validate</a>
										     </div>
									     </div>
									     <div class="form-group" id="">
										     <label class="col-md-2 control-label">then</label>
										     <div class="col-md-8">
											     <textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" name="PR_C_L_VALI_4[]" id="PR_C_L_VALI_4"> </textarea> 
										     </div>
										     <div class="col-md-2">
											<a href="#">Validate</a>
										     </div>
									     </div>
								</div>
								     <div class="col-md-offset-1 col-md-5" id="reference_code1">
									     <ul class="nav nav-tabs">
										     <li class="active"><a data-toggle="tab" href="#t3">Payroll categories</a></li>
										     <li><a data-toggle="tab" href="#t4">Formula Examples</a></li>
									     </ul>
									     <div class="tab-content well">
										     <div id="t3" class="tab-pane fade in active">
											     <h6 class="section_header">Standard codes</h6>
											      <div class="row">
												     <div class="col-md-6">Gross pay</div>
												     <div class="col-md-offset-2 col-md-4">GROSS</div>
											      </div>
											      <div class="row">
												     <div class="col-md-6">Number of working days</div>
												     <div class="col-md-offset-2 col-md-4">NWD</div>
											      </div>
											      <h6 class="section_header">Earnings</h6>
											      <div class="row">
												     <div class="col-md-6">Basic</div>
												     <div class="col-md-offset-2 col-md-4">Travelling </div>
											      </div>
											      <div class="row">
												     <div class="col-md-6">Number of working days</div>
												     <div class="col-md-offset-2 col-md-4">NWD</div>
											      </div>
											      <h6 class="section_header">Deductions</h6>
										     </div>
										     <div id="t4" class="tab-pane fade">
											     <ul>
												     <li>content 1</li>
												     <li>content 2</li>
												     <li>content 3</li>
											     </ul>
										     </div>
									     </div>
								 </div>
							     </div>
							     
							     <div class="row template hidden" id="template" style="margin-top: 50px">
								 <div class="col-md-offset-1 col-md-5" style="border:1px solid;"  >
									     <div class="row section_header">
										     <div class="col-md-2">
											     <h6>Condition </h6>
										     </div>
										     <div class="col-md-offset-9 col-md-1">
											     <a  class="cancel">[X]</a>
										     </div>
									     </div>
									     <br>
									     <div class="form-group">
										     <label class="col-md-2 control-label">if</label>
										     <div class="col-md-8">
											     <textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" id="value1[]"> </textarea> 
										     </div>
										     <div class="col-md-2">
											<a href="#">Validate</a>
										     </div>
									     </div>
									     <div class="form-group">
										      <label class="col-md-2 control-label"></label>
											     <div class="col-md-8">
												     <select id="value2[]"  class="form-control input-sm">
													     <option>select value type</option>
													     <option>Numeric</option>
													     <option>Formula</option>
													     <option>Conditional Formula</option>
												     </select>
											     </div>
									     </div>
									     <div class="form-group" id="">
										     <label class="col-md-2 control-label"></label>
										     <div class="col-md-8">
											     <textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" id="value3[]"> </textarea> 
										     </div>
										     <div class="col-md-2">
											<a href="#">Validate</a>
										     </div>
									     </div>
									     <div class="form-group" id="">
										     <label class="col-md-2 control-label">then</label>
										     <div class="col-md-8">
											     <textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" id="value4[]"> </textarea> 
										     </div>
										     <div class="col-md-2">
											<a href="#">Validate</a>
										     </div>
									     </div>
								</div>
								     
								     <div class="col-md-offset-1 col-md-5" id="reference_code">
									     <ul class="nav nav-tabs">
										     <li class="active"><a data-toggle="tab" href="#categories">Payroll categories</a></li>
										     <li><a data-toggle="tab" href="#formula">Formula Examples</a></li>
									     </ul>
									     <div class="tab-content well">
										     <div id="categories" class="tab-pane fade in active">
											     <h6 class="section_header">Standard codes</h6>
											      <div class="row">
												     <div class="col-md-6">Gross pay</div>
												     <div class="col-md-offset-2 col-md-4">GROSS</div>
											      </div>
											      <div class="row">
												     <div class="col-md-6">Number of working days</div>
												     <div class="col-md-offset-2 col-md-4">NWD</div>
											      </div>
											      <h6 class="section_header">Earnings</h6>
											      <div class="row">
												     <div class="col-md-6">Basic</div>
												     <div class="col-md-offset-2 col-md-4">Travelling </div>
											      </div>
											      <div class="row">
												     <div class="col-md-6">Number of working days</div>
												     <div class="col-md-offset-2 col-md-4">NWD</div>
											      </div>
											      <h6 class="section_header">Deductions</h6>
										     </div>
										     <div id="formula" class="tab-pane fade">
											     <ul>
												     <li>content 1</li>
												     <li>content 2</li>
												     <li>content 3</li>
											     </ul>
										     </div>
									     </div>
								 </div>
							     </div>
							     
							    <div class="row">
								     <div class="col-md-offset-1 col-md-3">
									     <a id="add">Add another condition</a>
								     </div>
							    </div>
							     <br><br>
							      <div class="row">
								     <div class="col-md-offset-1 col-md-5" style="border:1px solid;">
									     <h6>Default Condition</h6>
									     <p class="section_header">If above condition cannot be performed, this condition will be considered</p>
									     <div class="form-group">
										     <label class="col-md-2 control-label">Value</label>
										     <div class="col-md-8">
											     <textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" name="PR_C_L_DEFAULT_VAL" id="PR_C_L_DEFAULT_VAL"> </textarea> 
										     </div>
										     <div class="col-md-2">
											<a href="#">Validate</a>
										     </div>
									     </div>
								     </div>
							      </div>
						 </div>
						      <br>
						     <div class="col-md-offset-2 col-md-2">
							  <button type="submit" name="pay_grp" id="pay_grp" class="btn btn-sm btn-success">Create Payroll Group</button>
						      </div>
						     <div class="col-md-4">
							      <button type="button" class="btn btn-sm btn-danger col-md-5" onclick="window.history.back();">Cancel</button>
						     </div>
						     </fieldset>
					     </form>
								   
                              </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
			  <div>
            <!-- end row -->
      </div>
		<!-- end #content -->
<script>
$('#numeric').hide();
$('#formula').hide();
$('#conditional_formula').hide();
$(document).ready(function() {
    $('.form_validation').bootstrapValidator
		({
		    message: 'This value is not valid',
		    excluded: ':disabled',
		    container: 'tooltip',
		    feedbackIcons:
		    {
			valid: 'fa fa-check',
			invalid: 'fa fa-times',
			validating: 'fa fa-refresh'
		    },
		    fields:
		    {
			PR_C_H_NAME:
			{
			    validators:
			    {
				notEmpty:
				{
				    message: 'Category Name is required and can\'t be empty'
				},
			    }
			},
			
			PR_C_H_CODE:
			{
			    validators:
			    {
				notEmpty:
				{
				    message: 'Category Code is required and can\'t be empty'
				},
			    }
			},
			
			PR_C_L_VALI_1:
			{
			    excluded: false,
			    validators:
			    {
				notEmpty:
				{
				    message: 'Please enter a value or expression.'
				}
			    }
			},
			PR_C_L_VALI_2:
			{
			    excluded: false,
			    validators:
			    {
				notEmpty:
				{
				    message: ' You must select an operation'
				}
			    }
			},
			PR_C_L_VALI_3:
			{
			    excluded: false,
			    validators:
			    {
				notEmpty:
				{
				    message: 'Please enter a value or expression.'
				}
			    }
			},
			PR_C_L_VALI_4:
			{
			    excluded: false,
			    validators:
			    {
				notEmpty:
				{
				    message: 'Please enter a value or expression.'
				}
			    }
			},
			PR_C_L_DEFAULT_VAL:
			{
			    excluded: false,
			    validators:
			    {
				notEmpty:
				{
				    message: 'Please enter a value or expression.'
				}
			    }
			}
		    }
		});
		$('#saveData').submit(function(e){
		    e.preventDefault();
		    var url_data="<?php echo base_url('PayrollAPI/payrollCategory');?>";
		    var url1="<?php echo base_url('payrollcategory/Create_Payroll_Category');?>";
		    $.ajax({
			type:'post',
			url:url_data,
			data:$('#saveData').serialize(),
			success:function(res){
			    console.log(res);
			    //window.location.href = url1; 
			}
		    });
		    
		});
		var readData=$('#PR_C_H_VAL_TYPE').val();
		if(readData=='F')
		{
			$('#numeric').hide();
			$('#formula').show();
			$('#conditional_formula').hide();
		}
	
	$("#PR_C_H_VAL_TYPE").change(function(){
		//alert();
		console.log($(this).val());
		 if($(this).val()==='N')
		 {
			$('#numeric').show();
			$('#formula').hide();
			$('#conditional_formula').hide();
		 }
		 else if($(this).val()==='F')
		 {
			$('#numeric').hide();
			$('#formula').show();
			$('#conditional_formula').hide();
		 }
		 else if($(this).val()==='CF')
		 {
			$('#numeric').hide();
			$('#formula').hide();
			$('#conditional_formula').show();
		 }
	});
	
});
    $('#add').click(function()
	{
	    var $template = $('#template'),
	    $clone = $('#template').clone(true).insertBefore('#template').addClass('clonediv').removeClass('hidden');
	    $clone.find('[id="value1[]"]').attr('name','PR_C_L_VALI_1[]');
	    $clone.find('[id="value2[]"]').attr('name','PR_C_L_VALI_2[]');
	    $clone.find('[id="value3[]"]').attr('name','PR_C_L_VALI_3[]');
	    $clone.find('[id="value4[]"]').attr('name','PR_C_L_VALI_4[]');
	});
//$('#add').click(function(){
//	var newEle= $('#template').clone(true).insertBefore('#template').addClass('clonediv').removeClass('hidden');
//	$(newEle).find("div#reference_code").remove();
//});
 
    
$('.cancel').click(function(){
    console.log($(this).val());
    var ele=$(this).parents('.clonediv').remove();
    console.log(ele);
});

<?php if($mode=='edit') {?>
	$(document).ready(function(){
	    $.ajax({
		type:'get',
		url:"<?php echo base_url('PayrollAPI/payrollCategory');?>",
		data:{},
		dataType: "json",
		success:function(res){
		    $('#PR_C_H_NAME').val(res[0].PR_C_H_NAME);
		    $('#PR_C_H_CODE').val(res[0].PR_C_H_CODE);
		    $('#PR_C_H_TYPE').val(res[0].PR_C_H_TYPE);
		    $('#PR_C_H_VAL_TYPE').val(res[0].PR_C_H_VAL_TYPE);
		    $('#PR_C_L_DEFAULT_VAL').val(res[0].PR_C_L_DEFAULT_VAL);
		    $('#PR_C_L_VALI_3').val(res[0].PR_C_L_VALI_1);
		    $('#PR_C_L_VALI_3').val(res[0].PR_C_L_VALI_2);
		    $('#PR_C_L_VALI_3').val(res[0].PR_C_L_VALI_3);
		    $('#PR_C_L_VALI_3').val(res[0].PR_C_L_VALI_4);
		}
		
	    });
	})
    <?php } ?>

</script>