<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
    <li><a href="javascript:;">Home</a></li>
    <li><a href="javascript:;">Finance</a></li>
    <li class="active">Transaction</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Transaction | Add Expense</h1>
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
                    <h4 class="panel-title">Expense</h4>
                </div>
                <div class="panel-body">
                    <div class="well">
                        <div class="row">
                            <div class="col-md-4">
                                <a href="<?php echo base_url('FinTransactionCtrl/add_expense'); ?>" class="btn btn-primary btn-sm" role="button">Add Expense</a>
                            </div>
                        </div><br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataRespTable">
                                <thead>
                                    <tr style="background-color: #d9edf7; border-color: #b6e2ef;">
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Amount</th>
                                        <th>Transaction Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end well-->
                </div>
            <!-- end panel -->
            </div>
        <!-- end col-12-->
        <div>
    <!-- end row -->
    </div>
<!-- end #content -->
</div>
<script>
    $(document).ready(function() {
        var table = $("#dataRespTable").DataTable({
            // "sDom": "<'row'<'col-md-4 no 'f><'col-md-2 yes'l>r><t><'row'<'col-md-6'i>>",
            "sDom": 'Tlfrtip',
            "bServerSide": true,
            "bProcessing": false,
            "sAjaxSource": '<?php echo base_url('FinTransactionCtrl/showExpenseView')?>',
            'responsive': true,
            "bStateSave": true, 
            "language": {
            "sLengthMenu": "_MENU_",
            "lengthMenu": " _MENU_ records",
            "processing": true
            },
            columns: [
            { data: 'FINC_TXN_EX_TITLE'},
            { data: 'FINC_TXN_EX_DESC'},
            { data: 'FINC_CA_NAME'},
            { data: 'FINC_TXN_EX_AMT'},
            { data: 'FINC_TXN_EX_DT'},
            {
                data: null, className: "all", 
                    render: function( data, type, row) {
                    return '<button class="btn btn-xs btn-danger" onclick="javascript:deleteExpense('+data['FINC_TXN_EX_ID']+')"><i class="fa fa-trash-o"></i></button>';
                    }
                },
            ],
            'fnServerData': function(sSource, aoData, fnCallback){
                $.ajax({
                'dataType': 'json',
                'type'    : 'POST',
                'url'     : sSource,
                'data'    : aoData,
                'success' : fnCallback
                });
            },
            "tableTools": {
                "sSwfPath": "<?php echo site_url()?>assets/plugins/DataTables/swf/copy_csv_xls_pdf.swf",
            }
            });       
                
        //------------- Start for Processing Icon image------------------------------------//       
        $('#dataRespTable')
            .on( 'processing.dt', function ( e, settings, processing ) {
            // $('#processingIndicator').css( 'display', processing ? loadLoader() : unLoader());
        }).dataTable(); 
    });
    function deleteExpense($curr_id){
        bootbox.confirm("<h5>Are you want to delete this record ?<h5/>", function(confirmed) {   
            if (confirmed) {
                $.ajax({
                    type: "delete",
                    url: "<?php echo base_url('FinanceTxnAPI/expense?id=')?>"+$curr_id,
                    success: function(res) {
                        console.log(res.message);
                        console.log(res.message.message);
                        if(res.status==true){
                            $('#alert').append('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> '+res.message.message+'</div>');
                            $('#dataRespTable').dataTable().fnDraw();
                        }else{
                            $('#alert').append('<div class="alert alert-danger "><a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">&times;</a><strong>Failure!</strong>'+res.message+'</div>');
                        }
                        setTimeout(function(){ $('#alert').empty(); }, 5000);
                    }
                });
            }
        })
    }
</script>
