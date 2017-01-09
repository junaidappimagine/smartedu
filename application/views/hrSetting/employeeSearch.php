    <html>
        <head>
            <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
            <style>
                .panel-body h1{
                 font-size: 15px;
                }  
            </style>
        </head>     
        <body>
            <div id="content" class="content">
                <ol class="breadcrumb pull-right">
                    <li><a href="javascript:;">HR</a></li>
                    <li><a href="javascript:;">Configuration</a></li>
                    <li class="active">Employee Search </li>
                </ol>
                 <h1 class="page-header">Employee Search | Employee details</h1>
                 <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                            <div class="panel-heading">
                                <div class="panel-heading-btn">
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                   <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                   <!--<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
                                </div>
                               <h4 class="panel-title">Employees</h4>
                            </div>
                            <div class="panel-body" >
                                            <h1 class="page-header"><b>Employee details</b></h1>
                                        
                                        <!--<div class="col-sm-2">
                                            <center><a href="<?php //echo base_url('hrSettingsC/employeeSearchView');?>" name="view" class="btn btn-xs btn-primary">View all</a>  <a href="<?php echo base_url('hrSettingsC/advancedSearch');?>" name="advanced" class="btn btn-xs btn-warning">Advanced</a></center>
                                            
                                        </div>-->
                                        <hr>
                                        <table class="table table-striped table-bordered nowrap responsive" id="dataRespTable" width="100%">
                                            <thead>
                                                <tr role="row" class="heading">
                                                    <th>Employee name </th>
                                                    <th>Emp ID </th>
                                                    <th>department </th>
                                                    <th>Category</th>
                                                    <th>Position</th>
                                                    <th>Grade</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr role="row" class="heading">
                                                    <th>Employee name </th>
                                                    <th>Emp ID </th>
                                                    <th>department </th>
                                                    <th>Category</th>
                                                    <th>Position</th>
                                                    <th>Grade</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                               
                                            </tbody>
                                        </table>
                                  <!--  </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#dataRespTable tfoot th').each( function () {
                        var title = $(this).text();
                        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
                    } );
                    var table = $("#dataRespTable").DataTable({
                        "sDom": "<'row'<'col-md-4 no 'f><'col-md-6 trcalign' TRC><'col-md-2 yes'l>r><t><'row'<'col-md-6'i><'col-md-6'p>>",
                        "bServerSide": true,
                        "bProcessing": true,
                        "sAjaxSource": '<?php echo site_url('GrSettingsC/employeeAdmissionView'); ?>',
                        'responsive': true,
                        'scrollX':true,
                        //"bStateSave": true, // save datatable state(pagination, sort, etc) in cookie.
                        "lengthMenu": [
                            [10, 20, 50, 100],
                            [10, 20, 50, 100] // change per page values here
                        ],	
                        // "pageLength": 10,
                        "language": {
                            "sLengthMenu": "_MENU_",
                            "lengthMenu": " _MENU_ records"
                        },
                                            
                         columns: [
                        { data: 'EMP_FIRST_NAME'},
                        { data: 'EMP_ID'},
                        { data: 'EMP_DEPT'},
                        { data: 'EMP_CATEGORY'},
                        { data: 'EMP_POSITION'},
                        { data: 'EMP_GRADE'},
                        //{
                        //    data: null, className: "all", 
                        //        render: function( data, type, row) {
                        //        return '<a href="<?php $phpvar="'+ data['FINC_AS_ID']+ '"; echo base_url('AssetCntrl/createAsset_edit/'.$phpvar);?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>  <button class="btn btn-xs btn-danger" onclick="javascript:deleteAsset('+data['FINC_AS_ID']+')"><i class="fa fa-trash-o"></i></button>';
                        //        }
                        //    },
                        ],"order": [[ 0, "desc" ]],
                        "sSwfPath": "<?php echo site_url()?>assets/plugins/DataTables/swf/copy_csv_xls_pdf.swf",
                        'fnServerData': function(sSource, aoData, fnCallback)
                        {
                            $.ajax
                            ({
                              'dataType': 'json',
                              'type'    : 'POST',
                              'url'     : sSource,
                              'data'    : aoData,
                              'success' : fnCallback
                            });
                        },
                    });
 
                    table.columns().every( function () {
                        var that = this;
                        $( 'input', this.footer() ).on( 'keyup change', function () {
                                var thatHere=this;
                                $z.delay(1000, function() {
                            if ( that.search() !== thatHere.value ) {
        
                                that.search( thatHere.value )
                                    .draw();
                            }
                            });
                        } );
                        
                    });
            });
            function delay(){
            	  var timer = 0;
            	  return function(ms, callback){
            	    clearTimeout (timer);
            	    timer = setTimeout(callback, ms);
            	  };
            	}
             var $z = (function($z) {
            	
            	//empty object to assign custom functions / properties to
            	$z.fn = {};
            	
            	//set a timeout delay that clears itself if it fires in succession before the timeout
            	//is reached.  Useful when 
            	$z.delay = (function(){
            	  var timer = 0;
            	  return function(ms, callback){
            	    clearTimeout (timer);
            	    timer = setTimeout(callback, ms);
            	  };
            	})();
            	//handles the security for ajax calls
            	$z.ajax = function(jQueryOpts) {
            		//store the success function specified on the call
            		var userSuccess = jQueryOpts.hasOwnProperty("success") === false ?
            			function(){}  :
            				jQueryOpts.success;
            			
            		//replace the success function
            		jQueryOpts.success = function(data, status, xhr) {
            			//TODO check the header to make sure we did not get denied access or were not 
            			//logged in
            			
            			userSuccess(data, status, xhr);
            		};
            		return jQuery.ajax(jQueryOpts);
            	};
            	
            	$z.select2Init = function(element, callback) {
            		var val = element.val().split("|");
            		if (val.length === 2) {
            			callback({
            				id: val[0],
            	        	text: val[1]
            	       });
            		}
            		
            		
            	};
            	$z.setToggle = function(eles) {
            		$z._toggleEles = eles;
            	};
            	$z.toggle = function() {
            		if($z._toggleEles !== undefined) {
            			$z._toggleEles.slideToggle(300, "swing");
            		}
            	};
            	return $z;
            	
            })(window.$z || {});
        </script>
            
            
            
            
        </body>
    </html>

    