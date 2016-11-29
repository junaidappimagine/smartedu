
            <style>
                .panel-body h1{
                    font-size: 18px;
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
                                                      <input type="text" class="form-control input-sm" placeholder="Payroll Group Name" />
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
                                                           <option>Saturday</option>
                                                       </select>
                                                   </div>
                                               </div>
                                                 <div class="form-group hidden" id="PayslipDate">
                                                   <label class="col-md-2 control-label">Payslip generation date *</label>
                                                   <div class="col-md-4">
                                                       <select class="form-control input-sm" onchange="">
                                                           <option>1</option>
                                                           <option>2</option>
                                                           <option>3</option>
                                                       </select>
                                                   </div>
                                               </div>
                                                <h1 class="page-header">Selected Payroll Categories </h1><hr>
                                               <div class="panel-body">
                                                   <table class="table table-bordered">
                                                       <thead>
                                                           <tr style="background-color: #d9edf7;border-color: #b6e2ef;">
                                                             <th>Payroll Category</th>
                                                             <th>Code</th>
                                                             <th>Value</th>
                                                             <th></th>
                                                           </tr>
                                                       </thead>
                                                       <tbody>
                                                           <tr>
                                                             <td>Add payroll categories from the below table</td>
                                                             <td></td>
                                                             <td></td>
                                                             <td></td>
                                                           </tr>
                                                       </tbody>
                                                   </table>
                                               </div>
                                               <p></p>
                                               <h1 class="page-header">Add Payroll Categories </h1><hr>
                                             <div class="panel-body">
                                                  <table class="table table-bordered ">
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
                                                      </thead>
                                                      <tbody>
                                                          <tr>
                                                              <td>Basic</td>
                                                              <td>BA</td>
                                                              <td>50%GROSS</td>
                                                              <td><a>ADD</a></td>
                                                          </tr>
                                                          <tr>
                                                              <th colspan="4" style="color:#333;background: #f0f3f5 none repeat scroll 0 0;"><b>Deduction</b></th>
                                                          </tr>
                                                          <tr>
                                                              <td>Provident fund</td>
                                                              <td>PF</td>
                                                              <td>10%GROSS</td>
                                                              <td><a>ADD</a></td>
                                                          </tr>
                                                          <tr>
                                                              <td>Provident fund</td>
                                                              <td>LOP</td>
                                                              <td>1.5%GROSS</td>
                                                              <td><a>ADD</a></td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
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
                                                                <input type="radio" name="LOP" value="option2" onclick="DisableDeduction()"/>
                                                                LOP not applicable
                                                            </label>
                                                       </div>
                                                           <div class="col-md-2"></div>
                                                   </div>
                                             </div>
                                             <div  class="form-group hidden" id="EnableLOP" >
                                                   <label class="col-md-2 control-label">LOP Calculation Method *</label>
                                                   <div class="col-md-4">
                                                       <select class="form-control input-sm" id="selectType" onchange="CalculationMethod()">
                                                            <option>Select value Type</option>
                                                            <option>Numeric</option>
                                                            <option>Formula</option>
                                                            <option>Conditional Formula</option>
                                                       </select>
                                                   </div>
                                             </div>
                                             <div  class="form-group hidden" id="numeric" >
                                                   <label class="col-md-2 control-label">Amount</label>
                                                   <div class="col-md-4">
                                                       <input type="text" class="form-control input-sm" name="amount">
                                                   </div>
                                             </div>
                                             <div  class="form-group hidden" id="formula" >
                                                   <label class="col-md-2 control-label">Formula</label>
                                                   <div class="col-md-4">
                                                       <textarea class="form-control" placeholder="Textarea" rows="5"></textarea>
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
               </script>

    