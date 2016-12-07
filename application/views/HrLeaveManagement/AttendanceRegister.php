<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Home</a></li>
		<li><a href="javascript:;">Employee Leave Management</a></li>
		<li class="active">Attendance register</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">Attandance Register<small></small></h1>
    <!-- end page-header -->
    <!-- begin row -->
    <div class="row">
		<!-- begin col-12 -->
		<div class="col-md-12">
		    <!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="form-stuff-1">
			    <div class="panel-heading">
				<div class="panel-heading-btn">
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
				    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
				</div>
				<h4 class="panel-title">Attandance Register</h4>
			    </div>
			    <div class="panel-body" id="crop-avatar">
			    	<form autocomplete="off" id="form_validation" method="POST" enctype="multipart/form-data">
			    		<div class="form-group">
			    			<div class="col-md-2">
			    				<label>Department</label>
			    			</div>
			    			<div class="col-md-3">
				    			<select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white btn-sm" name="">
				    				<option>Select</option>
				    				<option value="">English</option>
				    				<option value="">Hindi</option>
				    				<option value="">Maths</option>
				    				<option value="">Other Languages</option>
				    				<option value="">Science</option>
				    				<option value="">Social Studies</option>
				    				<option value="">System Admin</option>
				    			</select>
			    			</div>
			    		</div>
			    		<button type="button" class="btn btn-info btn-lg model_test hidden" data-toggle="modal" data-target="#myModal">Open Modal</button>
			    		<!-- <div class="vertical-box">
			           
	                        <div id="calendar" class="vertical-box-column p-15 calendar"></div>
				        </div> -->
			    		<div id='calendar'></div>
			    	</form>
			    	<!-- Modal -->
				  	<div class="modal fade" id="myModal" role="dialog">
				    	<div class="modal-dialog">
				      	<!-- Modal content-->
				      		<div class="modal-content">
				        		<div class="modal-header">
				          			<button type="button" class="close" data-dismiss="modal">&times;</button>
				          			<h4 class="modal-title">Leave tracking</h4>
				        		</div>
				        		<div class="modal-body">
				          			<div class="row">
				          				<div class="col-md-3">
				          					<label>Employee Name</label>
				          				</div>
				          				<div class="col-md-3">
				          					<label>Vijayaraj</label>
				          				</div>
				        			</div>
				        			<div class="row" style="line-height: 500%;">
				          				<div class="col-md-3">
				          					<label>Date</label>
				          				</div>
				          				<div class="col-md-3">
				          					<label>03/12/16</label>
				          				</div>
				        			</div>
				        			<div class="row" style="line-height: 200%;">
				          				<div class="col-md-3">
				          					<label>Leave Type</label>
				          				</div>
				          				<div class="col-md-4">
				          					<select class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white btn-sm">
				          						<option>Select Leave Type</option>
				          						<option>Casual</option>
				          						<option>Sick Leave</option>
				          					</select>
				          				</div>
				        			</div><br>
				        			<div class="row">
				        				<div class="col-md-3"></div>
								  		<label class="radio-inline">
								          <input name="radioGroup" type="radio" checked=""> Full Day
								        </label>
								        <label class="radio-inline">
								          <input name="radioGroup" type="radio"> Half Day
								        </label>
								  	</div>
								  	<br>
				        			<div class="row" style="line-height: 200%;">
				          				<div class="col-md-3">
				          					<label>Reason</label>
				          				</div>
				          				<div class="col-md-3 form-group">
				          					<textarea cols="40"></textarea>
				          				</div>
				        			</div>
				        			<div class="modal-footer">
				          				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        			</div>
				      			</div>
				    		</div>
				  		</div>
			    	</div>
			</div>
		    <!-- end panel -->
		</div>
		<!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<script>

	// $(document).ready(function() {
	// 	$('#calendar').fullCalendar({
	// 		header: {
	// 			left: 'prev',
	// 			center: 'title',
	// 			right: 'month,agendaWeek,agendaDay'
	// 			// right: 'next'
	// 		},
	// 		// defaultDate: '2016-11-02',
	// 		navLinks: true, // can click day/week names to navigate views
	// 		selectable: true,
	// 		selectHelper: true,
	// 		select: function(start, end) {
	// 			var title = prompt('Event Title:');
	// 			var eventData;
	// 			if (title) {
	// 				eventData = {
	// 					title: title,
	// 					start: start,
	// 					end: end
	// 				};
	// 				$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
	// 			}
	// 			$('#calendar').fullCalendar('unselect');
	// 		},
	// 		editable: true,
	// 		eventLimit: true, // allow "more" link when too many events
	// 		// events: [
	// 		// 	{
	// 		// 		title: 'All Day Event',
	// 		// 		start: '2016-09-01'
	// 		// 	},
	// 		// 	{
	// 		// 		title: 'Long Event',
	// 		// 		start: '2016-09-07',
	// 		// 		end: '2016-09-10'
	// 		// 	},
	// 		// 	{
	// 		// 		id: 999,
	// 		// 		title: 'Repeating Event',
	// 		// 		start: '2016-09-09T16:00:00'
	// 		// 	},
	// 		// 	{
	// 		// 		id: 999,
	// 		// 		title: 'Repeating Event',
	// 		// 		start: '2016-09-16T16:00:00'
	// 		// 	},
	// 		// 	{
	// 		// 		title: 'Conference',
	// 		// 		start: '2016-09-11',
	// 		// 		end: '2016-09-13'
	// 		// 	},
	// 		// 	{
	// 		// 		title: 'Meeting',
	// 		// 		start: '2016-09-12T10:30:00',
	// 		// 		end: '2016-09-12T12:30:00'
	// 		// 	},
	// 		// 	{
	// 		// 		title: 'Lunch',
	// 		// 		start: '2016-09-12T12:00:00'
	// 		// 	},
	// 		// 	{
	// 		// 		title: 'Meeting',
	// 		// 		start: '2016-09-12T14:30:00'
	// 		// 	},
	// 		// 	{
	// 		// 		title: 'Happy Hour',
	// 		// 		start: '2016-09-12T17:30:00'
	// 		// 	},
	// 		// 	{
	// 		// 		title: 'Dinner',
	// 		// 		start: '2016-09-12T20:00:00'
	// 		// 	},
	// 		// 	{
	// 		// 		title: 'Birthday Party',
	// 		// 		start: '2016-09-13T07:00:00'
	// 		// 	},
	// 		// 	{
	// 		// 		title: 'Click for Google',
	// 		// 		url: 'http://google.com/',
	// 		// 		start: '2016-09-28'
	// 		// 	}
	// 		// ]
	// 	});
		
	// });

$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			// defaultDate: '2016-09-12',
			// navLinks: true, // can click day/week names to navigate views
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				$('.model_test').trigger('click');
				// var title = prompt('Event Title:');
				// var eventData;
				// if (title) {
				// 	eventData = {
				// 		title: title,
				// 		start: start,
				// 		end: end
				// 	};
				// 	$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
				// }
				// $('#myModal').show();
				$('#calendar').fullCalendar('unselect');
			},
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'All Day Event',
					start: '2016-09-01'
				},
				{
					title: 'Long Event',
					start: '2016-09-07',
					end: '2016-09-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-09-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-09-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2016-09-11',
					end: '2016-09-13'
				},
				{
					title: 'Meeting',
					start: '2016-09-12T10:30:00',
					end: '2016-09-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2016-09-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2016-09-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2016-09-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2016-09-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2016-09-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2016-09-28'
				}
			]
		});
		
	});
function seccsdsd(){
	$('.model_test').trigger('click');
	// alert('dddddddddddddddd');
	// $('#myModal').show();
}
</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
