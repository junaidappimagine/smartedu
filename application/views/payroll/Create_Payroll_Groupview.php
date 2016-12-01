
            <style>
                .panel-body h1{
                    font-size: 18px;
                }
                .btn-td {
                    padding: 0px 5px;
                }
                .input-sm-td {
                    height: 22px;
               }
            </style>
               <div id="content" class="content">
                 <ol class="breadcrumb pull-right">
                         <li><a href="javascript:;">Home</a></li>
                         <li><a href="javascript:;">Form Stuff</a></li>
                         <li class="active">Form Elements</li>
                 </ol>
            
                 <h1 class="page-header">HR Management | Payroll Group </h1>
                 <div class="row">
                    <div class="col-md-12">
                         <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                              <div class="panel-heading">
                               <div class="panel-heading-btn">
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                               </div>
                               <h4 class="panel-title">Create Payroll Group</h4>
                           </div>
                           <div class="panel-body">
                               <h1 class="page-header">Create Payroll Group <br><small>Create payroll group for salary preferences. Payroll categories and LOP calculation must be included.</small></h1>
                               <hr>
                               <form class="form-horizontal">
                                               <div class="form-group">
                                                  <label class="col-md-2 control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Payroll Group Name *</label>
                                                   <div class="col-md-4">
                                                      <input type="text" class="form-control input-sm" placeholder="Payroll Group Name" value="<?php if($mode=='edit') echo 'mani';?>"/>
                                                   </div>
                                               </div>
                                               <h1 class="page-header">Salary Preference</h1><hr>
                                               <div class="form-group">
                                                   <label class="col-md-2 control-label">Pyment Frequency *</label>
                                                   <div class="col-md-4">
                                                       <select class="form-control input-sm" id="Pyment" onchange="selectPreference()">
                                                           <option selected>Daily</option>
                                                           <option>Weekly</option>
                                                           <option>monthly</option>
                                                       </select>
                                                       
                                                   </div>
                                               </div>
                                                <div class="form-group hidden" id="PayslipDay">
                                                   <label class="col-md-2 control-label">Payslip generation day *</label>
                                                   <div class="col-md-4">
                                                       <select class="form-control input-sm" onchange="">
                                                           <option>Sunday</option>
                                                           <option>Monday</option>
                                                           <option>Tuesday</option>
                                                           <option>Wednesday</option>
                                                           <option>Thursday</option>
                                                           <option>Friday</option>
                                                           <option selected >Saturday</option>
                                                       </select>
                                                   </div>
                                               </div>
                                                 <div class="form-group hidden" id="PayslipDate">
                                                   <label class="col-md-2 control-label">Payslip generation date *</label>
                                                   <div class="col-md-4">
                                                       <select class="form-control input-sm" onchange="" >
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option >4</option>
                                                            <option selected>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                            <option>8</option>
                                                            <option>9</option>
                                                            <option>10</option>
                                                            <option>11</option>
                                                            <option>12</option>
                                                            <option>13</option>
                                                            <option>14</option>
                                                            <option>15</option>
                                                            <option>16</option>
                                                            <option>17</option>
                                                            <option>18</option>
                                                            <option>19</option>
                                                            <option>20</option>
                                                            <option>21</option>
                                                            <option>22</option>
                                                            <option>23</option>
                                                            <option>24</option>
                                                            <option>25</option>
                                                            <option>26</option>
                                                            <option>27</option>
                                                            <option>28</option>
                                                            <option>29</option>
                                                            <option>30</option>
                                                       </select>
                                                      
                                                   </div>
                                               </div>
                                                <h1 class="page-header">Selected Payroll Categories </h1><hr>
                                               <div class="panel-body">
                                                   <?php if($mode!='edit') { ?>
                                                   <table class="table table-bordered" id="table_dest">
                                                       <thead>
                                                           <tr style="background-color: #d9edf7;border-color: #b6e2ef;">
                                                             <th>Payroll Category</th>
                                                             <th>Code</th>
                                                             <th>Value</th>
                                                             <th></th>
                                                           </tr>
                                                       </thead>
                                                       <tbody>
                                                          <tr id="earn"><td colspan="4" style="color:#333;background: #f0f3f5 none repeat scroll 0 0;"><b>Earnings</b></td></tr>
                                                          <tr><td colspan="4">No data</td></tr>
                                                          <tr id="ded"><td colspan="4" style="color:#333;background: #f0f3f5 none repeat scroll 0 0;"><b>Deduction</b></td></tr>
                                                          <tr><td colspan="4">No data</td></tr>
                                                       </tbody>
                                                   </table>
                                                    <?php }else{ ?>
                                                    <table class="table table-bordered " id="table_source">
                                                      <thead>
                                                          <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                              <th>Category Name</th>
                                                              <th>Category Code</th>
                                                              <th>Value</th>
                                                              <th></th>
                                                          </tr>
                                                          <tr >
                                                              <th colspan="4" style="background: #f0f3f5 none repeat scroll 0 0;">Earnings</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <td>Basic</td>
                                                              <td>BA</td>
                                                              <td>50%GROSS</td>
                                                              <td><input type="button" name="test" class='move-row btn btn-danger btn-td input-sm-td' value="Remove"></td>
                                                          </tr>
                                                          <tr>
                                                              <th colspan="4" style="color:#333;background: #f0f3f5 none repeat scroll 0 0;"><b>Deduction</b></th>
                                                          </tr>
                                                          <tr>
                                                              <td>Provident fund</td>
                                                              <td>PF</td>
                                                              <td>10%GROSS</td>
                                                              <td><input type="button" name="test" class='move-row btn btn-danger btn-td input-sm-td' value="Remove"></td>
                                                          </tr>
                                                          <tr>
                                                              <td>Provident fund</td>
                                                              <td>LOP</td>
                                                              <td>1.5%GROSS</td>
                                                              <td><input type="button" name="test" class='move-row btn btn-danger btn-td input-sm-td' value="Remove"></td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                                        <?php 
                                                   }
                                                   ?>
                                                   
                                                   
                                                   
                                               </div>
                                               <p></p>
                                               <h1 class="page-header">Add Payroll Categories </h1><hr>
                                             <div class="panel-body">
                                                  <?php if($mode!='edit') { ?>
                                                  <table class="table table-bordered " id="table_source">
                                                      <thead>
                                                          <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                              <th>Category Name</th>
                                                              <th>Category Code</th>
                                                              <th>Value</th>
                                                              <th></th>
                                                          </tr>
                                                          <!--<tr id="earn1">-->
                                                          <!--    <th colspan="4" style="background: #f0f3f5 none repeat scroll 0 0;">Earnings</th>-->
                                                          <!--</tr>-->
                                                      </thead>
                                                      <tbody>
                                                       <tr id="earn_id"><td colspan="4" style="color:#333;background: #f0f3f5 none repeat scroll 0 0;"><b>Earnings</b></td></tr>
                                                          <tr id="erng">
                                                              <td>Basic</td>
                                                              <td>BA</td>
                                                              <td>50%GROSS</td>
                                                              <td><input type="button" class='move-row-ec btn btn-primary btn-td input-sm-td ' value="Add"></td>
                                                          </tr>
                                                          <!--<tr id="ded1">-->
                                                          <!--    <th colspan="4" style="color:#333;background: #f0f3f5 none repeat scroll 0 0;"><b>Deduction</b></th>-->
                                                          <!--</tr>-->
                                                          <tr id="deduct_id"><td colspan="4" style="color:#333;background: #f0f3f5 none repeat scroll 0 0;"><b>Deduction</b></td></tr>
                                                          <tr id="deduct">
                                                              <td>Provident fund</td>
                                                              <td>PF</td>
                                                              <td>10%GROSS</td>
                                                              <td><input type="button" class='move-row-dc btn btn-primary btn-td input-sm-td' value="Add" ></td>
                                                          </tr>
                                                          <tr id="deduct1">
                                                              <td>Provident fund</td>
                                                              <td>LOP</td>
                                                              <td>1.5%GROSS</td>
                                                              <td><input type="button" class='move-row-dc1 btn btn-primary btn-td input-sm-td' value="Add"></td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                                  <?php }else{ ?>
                                                  
                                                  <table class="table table-bordered " id="table_source">
                                                      <thead>
                                                          <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                                              <th>Category Name</th>
                                                              <th>Category Code</th>
                                                              <th>Value</th>
                                                              <th></th>
                                                          </tr>
                                                          <tr>
                                                              <th colspan="4" style="background: #f0f3f5 none repeat scroll 0 0;">Earnings</th>
                                                          </tr>
                                                          <tr>
                                                              <td colspan="4"><center>No Data</center> </td>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                         
                                                          <tr>
                                                              <th colspan="4" style="color:#333;background: #f0f3f5 none repeat scroll 0 0;"><b>Deduction</b></th>
                                                          </tr>
                                                          <tr>
                                                              <td colspan="4"><center>No Data</center> </td>
                                                          </tr>
                                                          
                                                      </tbody>
                                                  </table>
                                                  
                                                       <?php 
                                                   }
                                                   ?>
                                             </div><p></p>
                                             <h1 class="page-header">Loss of Pay Criteria <br><small>Applicable if the salary must be deducted from employee salary</small></h1><hr>
                                             <div class="form-group">
                                                  <div class="col-sm-12">
                                                       <div class="col-md-4">
                                                           <label class="radio-inline" style="float: left;">
                                                                <input type="radio" name="LOP" value="option1"  onclick="EnableDeduction()"/>
                                                                  Enable LOP Deduction
                                                           </label>
                                                       </div>
                                                       <div class="col-md-4">
                                                            <label class="radio-inline">
                                                                <input type="radio" name="LOP" value="option2" onclick="DisableDeduction()" checked/>
                                                                LOP not applicable
                                                            </label>
                                                       </div>
                                                           <div class="col-md-2"></div>
                                                   </div>
                                             </div>
                                             <div class="form-group hidden" id="EnableLOP" >
                                                  <label class="col-md-2 control-label">Value type <span  class="imp">*</span> </label>
                                                  <div class="col-md-4">
                                                       <select name="value"  class="form-control input-sm" id="value_type">
                                                            <option>select value type</option>
                                                            <option>Numeric</option>
                                                            <option>Formula</option>
                                                            <option>Conditional Formula</option>
                                                       </select>
                                                  </div>
                                             </div>		    
                                             <div class="form-group" id="numeric">
                                                  <label class="col-md-2 control-label">Amount <span class="imp">*</span> </label>
                                                  <div class="col-md-4">
                                                       <input type="text" class="form-control input-sm" placeholder="" />
                                                  </div>
                                             </div>
                                             <div class="form-group" id="formula">
                                                  <label class="col-md-2 control-label">Formula <span class="imp">*</span> </label>
                                                  <div class="col-md-4">
                                                       <textarea  style="width: 100%;" rows="3"  class="form-control input-sm" cols="38" name=""> </textarea> 
                                                  </div>
                                                  <div class="col-md-1">
                                                       <a href="#">Validate</a>
                                                  </div>
                                                  <div class="col-md-4">
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
                                             <div class="row" id="conditional_formula">
                                                  <div class="col-md-offset-2 col-md-6" style="border:1px solid;">
                                                       <h6  class="section_header">Condition</h6>
                                                       <div class="form-group">
                                                            <label class="col-md-2 control-label">if</label>
                                                            <div class="col-md-8">
                                                                    <textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" name=""> </textarea> 
                                                            </div>
                                                            <div class="col-md-2">
                                                               <a href="#">Validate</a>
                                                            </div>
                                                       </div>
                                                       <div class="form-group">
                                                           <label class="col-md-2 control-label"></label>
                                                           <div class="col-md-8">
                                                                <select name="value"  class="form-control input-sm">
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
                                                                 <textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" name=""> </textarea> 
                                                            </div>
                                                            <div class="col-md-2">
                                                                 <a href="#">Validate</a>
                                                            </div>
                                                       </div>
                                                       <div class="form-group" id="">
                                                           <label class="col-md-2 control-label">then</label>
                                                            <div class="col-md-8">
                                                                 <textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" name=""> </textarea> 
                                                            </div>
                                                            <div class="col-md-2">
                                                                 <a href="#">Validate</a>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="col-md-4">
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
                                                                 <div class="col-md-offset-2 col-md-46">NWD</div>
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
                                                  <div class="row">
                                                       <div class="col-md-offset-2 col-md-3">
                                                            <a href="#"><i class="fa fa-plus fa-1x">&nbsp;</i> Add another condition</a>
                                                       </div>
                                                  </div>
                                                  <br><br>
                                                  <div class="row">
                                                       <div class="col-md-offset-2 col-md-6" style="border:1px solid;">
                                                            <h6>Default Condition</h6>
                                                            <p class="section_header">If above condition cannot be performed, this condition will be considered</p>
                                                            <div class="form-group">
                                                                    <label class="col-md-2 control-label">Value</label>
                                                                    <div class="col-md-8">
                                                                           <textarea  style="width: 100%;" rows="2"  class="form-control input-sm" cols="38" name=""> </textarea> 
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                           <a href="#">Validate</a>
                                                                    </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <hr>
                                             <div class="form-group">
                                                  <div class="col-md-8 col-sm-offset-2">
                                                      <div class="col-md-4">
                                                           <button type="submit" class="btn btn-sm btn-success">Create Payroll Group</button>
                                                      </div>
                                                      <div class="col-md-4">
                                                          <button type="submit" class="btn btn-sm btn-danger">Cancel</button>
                                                      </div>
                                                  </div>
                                             </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                         </div>
                    </div>
               <script>
                    function check_es() {
                               var valu=$('#earn_id');
                              $('#es').clone().insertAfter(valu).removeAttr('id').find('input').attr('value','Add').removeClass('btn-danger').addClass('btn-primary');
                              $('#es').remove();
                         }
                    function check_ds() {
                    var valu2=$('#deduct_id');
                         $('#ds').clone().insertAfter(valu2).removeAttr('id').find('input').attr('value','Add').removeClass('btn-danger').addClass('btn-primary');
                         $('#ds').remove();
                         
                    }
                    function check_ds1() {
                           var valu2=$('#deduct_id');
                         $('#ds1').clone().insertAfter(valu2).removeAttr('id').find('input').attr('value','Add').removeClass('btn-danger').addClass('btn-primary');
                         $('#ds1').remove();
                        
                    };
                    $(document).ready(function() {
                         $(".move-row-ec").on("click",function() {
                             var valu=$('#earn');
                              $('#erng').clone().insertAfter(valu).removeAttr('id').attr('id','es').find('input').attr('value','Remove').removeClass('btn-primary move-row-ec').addClass('btn-danger').attr('onclick', 'check_es()');
                              $('#erng').remove();
                            
                         });
                         $(".move-row-dc").on("click",function() {
                            var valu1=$('#ded');
                              $('#deduct').clone().insertAfter(valu1).removeAttr('id').attr('id','ds').find('input').attr('value','Remove').removeClass('btn-primary move-row-dc').addClass('btn-danger move-row-ds').attr('onclick', 'check_ds()');
                              $('#deduct').remove();
                         });
                          $(".move-row-dc1").on("click",function() {
                              var valu1=$('#ded');
                              $('#deduct1').clone().insertAfter(valu1).removeAttr('id').attr('id','ds1').find('input').attr('value','Remove').removeClass('btn-primary move-row-dc1').addClass('btn-danger move-row-ds1').attr('onclick', 'check_ds1()');
                              $('#deduct1').remove();
                         });
                        //$('.move-row-ec').parents('tr:first').find('input').attr('value','remove').removeClass('btn-primary').addClass('btn-danger');
      
                         //$("#table_source").on("click","input.move-row", function() {
                         //     var valu=$('#earn');
                         //var tr = $(this).closest("tr");
                         //     console.log(tr,"tr");
                         //     $('#earn').clone().insertAfter(tr).removeAttr('id','hello123');
                         //     tr.remove();
                         //     tr.find("input.move-row")
                         //     .attr("value", "Remove");
                         ////$("#table_dest tbody").append(tr);
                         //});
                         //$("#table_dest").on("click"," input.move-row", function() {
                         //    var tr = $(this).closest("tr").remove().clone();
                         //    tr.find("input.move-row")
                         //        .attr("value", "ADD");
                         //    $("#table_source tbody").append(tr);
                         //});
                            
                    });
                    function selectPreference()
                    {
                       if($('#Pyment').val() == 'Weekly') {
                         $('#PayslipDate').addClass('hidden');
                         $('#PayslipDay').removeClass('hidden');
                       }else if($("#Pyment").val() == 'monthly') {
                         $('#PayslipDay').addClass('hidden');
                         $('#PayslipDate').removeClass('hidden');
                       } else{
                         $('#PayslipDate').addClass('hidden');
                         $('#PayslipDay').addClass('hidden');
                       }
                   }
                   
                   function EnableDeduction()
                   {
                         $("#EnableLOP").removeClass('hidden');
                   }
                   function DisableDeduction()
                   {
                         $("#EnableLOP").addClass('hidden');
                   }
                   function CalculationMethod()
                   {
                    if ($("#selectType").val() == 'Numeric'){
                         $('#formula').addClass('hidden');
                         $('#numeric').removeClass('hidden');
                    }else if ($("#selectType").val() == 'Formula') {
                         $('#numeric').addClass('hidden');
                         $('#formula').removeClass('hidden');
                    }else{
                         
                    }
                
                   }
                    
                  $('#numeric').hide();
                          $('#formula').hide();
                          $('#conditional_formula').hide();
                          $(document).ready(function() {
                  $("#value_type").change(function(){
                                          //alert();
                                  console.log($(this).val());
                                   if($(this).val()==='Numeric')
                                           {
                                                  $('#numeric').show();
                                              $('#formula').hide();
                                                  $('#conditional_formula').hide();
                                           }
                                           else if($(this).val()==='Formula')
                                           {
                                                  $('#numeric').hide();
                                                  $('#formula').show();
                                                  $('#conditional_formula').hide();
                                           }
                                           else if($(this).val()==='Conditional Formula')
                                           {
                                                  $('#numeric').hide();
                                                  $('#formula').hide();
                                                  $('#conditional_formula').show();
                                           }
                                  });
                          });
		
               </script>

    