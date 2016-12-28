    <div id="content" class="content">
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li><a href="javascript:;">Transaction</a></li>
            <li class="active">Reverted Transaction</li>
        </ol>
     <h1 class="page-header">Transaction | Reverted Transaction </h1>
     <div class="row">
        <div class="col-md-12">
             <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                  <div class="panel-heading">
                   <div class="panel-heading-btn">
                       <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                       <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                       <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                   </div>
                   <h4 class="panel-title">Reverted Transaction</h4>
               </div>
               <div class="panel-body">
                    <div class="row">
<div class="col-md-4"><a href="<?php echo base_url('FinTransactionCtrl/Create_revert'); ?>" class="btn btn-primary btn-sm" role="button">Advanced</a></div>
</div><br>
                <form class="form-horizontal">
                    <div class="form-group">
                       <label class="col-md-2 control-label">Transaction Type: </label>
                       <div class="col-md-3">
                           <select name="value" class="form-control input-sm selectpicker" data-style="btn-white btn-sm" id="type" onchange="transaction()">
                               <option value="fees">Fees</option>
                               <option value="payslip">Payslips</option>
                               <option value="other">Others</option>
                           </select>
                       </div>
                   </div>
                    
                    <div class="form-group" id="sed">
                    <label class="control-label col-md-2">Start Date</label>
                        <div class="col-md-3">
                            <span class="input-group">
                                <input type="text" class="form-control dateSet input-sm" size="30" id="from_date">
                                <span class="input-group-addon" >
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </span>
                    </div>
                        
                    <label class="control-label col-md-2">End Date</label>
                        <div class="col-md-3">
                            <span class="input-group">
                                <input type="text" class="form-control dateSet input-sm" size="30" id="from_date">
                                <span class="input-group-addon" >
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </span>
                    </div>
                     </div>
                    <div class="form-group" id="adno">
                       <label class="col-md-2 control-label">Search By: </label>
                           <div class="col-md-3">
                               <select name="value" class="form-control input-sm selectpicker" data-style="btn-white btn-sm" id="search" onchange="searchDate()">
                                   <option value="ad">Admission No</option>
                                   <option value="date">Date</option>
                                   <option value="collection">Fee Collection Name</option>
                               </select>
                           </div>
                            <div class="form-group" id="datefields">
                    <label class="control-label col-md-1">Start Date</label>
                        <div class="col-md-2">
                            <span class="input-group">
                                <input type="text" class="form-control dateSet input-sm" size="30" id="from_date">
                                <span class="input-group-addon" >
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </span>
                    </div>
                        
                    <label class="control-label col-md-1">End Date</label>
                        <div class="col-md-2">
                            <span class="input-group">
                                <input type="text" class="form-control dateSet input-sm" size="30" id="from_date">
                                <span class="input-group-addon" >
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                        </span>
                    </div>
                     </div>
                    </div>
                        
                    <div class="form-group searchClas" id="txt">
                       <label class="col-md-2 control-label">Search: </label>
                           <div class="col-md-3">
                              <input type="text" class="form-control" id="" placeholder="">
                           </div>
                    </div>
                       <div class="col-md-offset-2 hidden" id="btn">
                            <button type="button" class="btn btn-sm btn-primary" onclick="showtable()">Search</button>
                        </div>
                       <br>
              
                       <div class="table-responsive" id="tableview">
                        <table class="table table-bordered">
                                <thead>
                                    <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                        <th>S.No</th>
                                        <th>Payer Name</th>
                                        <th>Receipt No.</th>
                                        <th>Amount</th>
                                        <th>Cancelled by</th>
                                        <th>Reason</th>
                                        <th>Date</th>
                                        <th>Fee collection name</th>
                                        <th>Fee type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>XXXXX</td>
                                        <td>232</td>
                                        <td>3500</td>
                                        <td>Admin User</td>
                                        <td>-</td>
                                        <td>Dec-2016</td>
                                        <td>Term 1 for class1</td>
                                        <td>Refund</td>
                                        
                                    </tr>
                           </tbody>
                        </table>
                        <div class="col-md-offset-3 col-md-2">
                            <button type="button" class="btn btn-sm btn-success">PDF Report</button>
                        </div>
                       <div class="col-md-3">
                            <button type="button" class="btn btn-sm btn-primary">CSV Report</button>
                       </div>
                        </div>

                       
                       
                       
                </form>
            </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.dateSet').datepicker({
            format: 'd MM yyyy',
        });
        $(document).ready(function(){
            $('#sed').addClass('hidden');
            $('#datefields').addClass('hidden');
            $('#tableview').addClass('hidden');
            
        });
        function transaction()
        {
            if($('#type').val() == 'fees') {
                $('#sed').addClass('hidden');
                $('#adno').removeClass('hidden');
            }
            else if($("#type").val()=='payslip') {
                $('#sed').removeClass('hidden');
                $('#adno').addClass('hidden');
                 $('#tableview').addClass('hidden');
            }
            else if($("#type").val()=='other') {
                $('#sed').removeClass('hidden');
                $('#adno').addClass('hidden');
            }
        }
        
        function searchDate()
        {
            if($('#search').val() == 'date') {
                $('#datefields').removeClass('hidden');
                $('#btn').removeClass('hidden');
                $('#txt').addClass('hidden');
                
            }
            else{
                $('#datefields').addClass('hidden');
                $('#txt').removeClass('hidden');
                 $('#btn').addClass('hidden');
                  $('#tableview').addClass('hidden');
                 
            }
        }
        function showtable() {
            $('#tableview').removeClass('hidden');
        }
    </script>