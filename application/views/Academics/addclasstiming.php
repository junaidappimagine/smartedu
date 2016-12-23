	<style>
/*
.inputForm
{
 border-radius: 15px;
    border:solid 1px black; 
    padding:5px;
}*/
</style>
	<div id="content" class="content">
		<!-- begin breadcrumb -->
	    <ol class="breadcrumb pull-right">
		    <li><a href="javascript:;">Academics</a></li>
		    <li><a href="javascript:;">Configurations</a></li>
		    <li class="active">Class Timing Sets</li>
	    </ol>
	    <!-- end breadcrumb -->
	    <!-- begin page-header -->
	    <h1 class="page-header">Academics | Configurations</h1>
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
			    <h4 class="panel-title">Class Timing Sets</h4>
			</div>
			<div class="panel-body">
			  <legend>Class Timing Sets</legend>
			  <?php if($Mode=="View"){?>
			  <form class="form-horizontal">
			    <div class="form-group">
				<label class="control-label input-sm col-md-1">Name &nbsp&nbsp&nbsp&nbsp<b>:</b></label>
				<div class=" col-md-3">
				<input type="text" name="" class="form-control  input-sm" >
				</div>
			    </div>
			    <div class="form-group">
				<label class="control-label input-sm col-md-1"></label>
				<div class=" col-md-3">
				<input type="button" class="btn btn-primary btn-sm" name="" value="Save">
				</div>
				</div>
			  </form>
			  <?php }else{?>
			  <div class="row">
			  <form class="form-horizontal">
			    <div class="form-group">
				<label class="control-label input-sm col-md-2">Class timing set name &nbsp&nbsp&nbsp&nbsp<b>:</b></label>
				<label class="control-label input-sm col-md-2 labelview">Default &nbsp;&nbsp;&nbsp;<a class="edit">Edit</a></label>
				<div class=" col-md-3 hidden inputedit ">
				<input type="text" name="" class="form-control  input-sm" >
				</div>
				<input type="button" class="btn btn-success btn-sm inputedit inputedit1 save hidden" value="save">
				<input type="button" class="btn btn-danger btn-sm cancel inputedit inputedit1 hidden" value="Cancel">
			    </div>
			  </form>
			  </div>
			  	<table class="table table-bordered table table-striped">
				    <thead>
					<tr>
					    <th>SI.NO</th>
					    <th>Name</th>
					    <th>Start time</th>
					    <th>End time</th>
					    <th>Options</th>
					</tr>
				    </thead>
				    <tbody class="tablebody">
					<tr>
					    <td>1</td>
					    <td>Period 1</td>
					    <td>09:00 AM</td>
					    <td>10:00 AM</td>
					    <td> 	
						<a class="editrow"> Edit</a>&nbsp;&nbsp; | &nbsp;&nbsp; 
						<a id="deleterow" class="deleterow"> Delete</a>	
					    </td>
					</tr>
					<tr>
					    <td>2</td>
					  <td>Period 2</td>
					  <td>10:00 AM</td>
					    <td>11:00 AM</td>
					    <td>
						<a class="editrow"> Edit</a>&nbsp;&nbsp; | &nbsp;&nbsp; 
						<a id="deleterow" class="deleterow"> Delete</a>	
					    </td>
					</tr>
					<tr>
					    <td>3</td>
					  <td>Break</td>
					  <td>11:00 AM</td>
					    <td>11:10 AM</td>
					    <td>
						<a class="editrow"> Edit</a>&nbsp;&nbsp; | &nbsp;&nbsp; 
						<a id="deleterow" class="deleterow"> Delete</a>	
					    </td>
					</tr>
				    </tbody>
				</table
				<div class="container">
				    <!-- Trigger the modal with a button -->
				    <!--<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Open Large Modal</button>-->
				    <!-- Modal -->
				    <div class="modal fade" id="myModal" role="dialog">
				      <div class="modal-dialog modal-md">
					<div class="modal-content">
					  <div class="modal-header">
					    <button type="button" class="close" data-dismiss="modal">&times;</button>
					    <h4 class="modal-title">Add new class timing </h4>
					  </div>
					  <div class="modal-body">
					    <form class="form-horizontal">
						<div class="form-group">
						      <div class="col-md-2"></div>
						    <label class="col-md-2 input-sm">Name </label>
						    <div class=" col-md-6 ">
						    <input type="text" class="form-control" >
						    </div>
						</div>
						<div class="form-group">
						    <div class="col-md-2"></div>
						    <label class="col-md-2 input-sm">Start time  </label>
						    <div class=" col-md-3 ">
						    <select class="selectpicker form-control input-sm" data-style="btn-white" data-live-search="true">
							<option value="00">00</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
						    </select>
						    </div>
						    <div class=" col-md-3 ">
						    <select class="selectpicker form-control input-sm" data-style="btn-white" data-live-search="true">
							<option selected="" value="00">00</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
							<option value="45">45</option>
							<option value="46">46</option>
							<option value="47">47</option>
							<option value="48">48</option>
							<option value="49">49</option>
							<option value="50">50</option>
							<option value="51">51</option>
							<option value="52">52</option>
							<option value="53">53</option>
							<option value="54">54</option>
							<option value="55">55</option>
							<option value="56">56</option>
							<option value="57">57</option>
							<option value="58">58</option>
							<option value="59">59</option>
						    </select>
						    </div>
						</div>
						<div class="form-group">
						      <div class="col-md-2"></div>
						    <label class="col-md-2 input-sm">End time  </label>
						    <div class=" col-md-3 ">
						    <select class="selectpicker form-control input-sm" data-style="btn-white" data-live-search="true">
							<option value="00">00</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
						    </select>
						    </div>
						    <div class=" col-md-3 ">
						    <select class="selectpicker form-control input-sm" data-style="btn-white" data-live-search="true">
							<option selected="" value="00">00</option>
							<option value="01">01</option>
							<option value="02">02</option>
							<option value="03">03</option>
							<option value="04">04</option>
							<option value="05">05</option>
							<option value="06">06</option>
							<option value="07">07</option>
							<option value="08">08</option>
							<option value="09">09</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							<option value="39">39</option>
							<option value="40">40</option>
							<option value="41">41</option>
							<option value="42">42</option>
							<option value="43">43</option>
							<option value="44">44</option>
							<option value="45">45</option>
							<option value="46">46</option>
							<option value="47">47</option>
							<option value="48">48</option>
							<option value="49">49</option>
							<option value="50">50</option>
							<option value="51">51</option>
							<option value="52">52</option>
							<option value="53">53</option>
							<option value="54">54</option>
							<option value="55">55</option>
							<option value="56">56</option>
							<option value="57">57</option>
							<option value="58">58</option>
							<option value="59">59</option>
						    </select>
						    </div>
						</div>
						<div class="form-group">
						    <div class="col-md-2"></div>
						    <label class="col-md-2 input-sm"> </label>
						    <div class=" col-md-6 ">
						    <input  type="checkbox">  &nbsp;&nbsp;&nbsp;&nbsp;<b>Break</b>
						    </div>
						</div>
					    </form>
					  </div>
					  <div class="modal-footer">
					    <center><button type="button" class="btn btn-success" data-dismiss="modal">Save</button></center>
					  </div>
					</div>
				      </div>
				    </div>
				  </div>
			  <?php }?>
			  <p><br></p>
			  
			</div>
		    </div>
		  </div>
		    <!-- end panel -->
	    </div>
	<!-- end col-12-->
	  </div>
	<script>
	    $('.edit').on('click',function(){
	    $('.edit').addClass('hidden');
	    $('.inputedit').removeClass('hidden');
	    $('.labelview').addClass('hidden');
	    })
	    $('.inputedit1').on('click',function(){
	    $('.edit').removeClass('hidden');
	    $('.inputedit').addClass('hidden');
	    $('.labelview').removeClass('hidden');
	    })
	    $('.editrow').on('click',function(){
		$('#myModal').modal('show');
	    })
	</script>
  