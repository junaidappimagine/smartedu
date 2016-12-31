
    $('#Batch').on('change',function(){
$('#Subject').selectpicker('refresh');
    var data=$('#Batch').val();
    //console.log(data);
    if (data == 'A') {
        console.log('tamil,english');
        $("#Subject").empty().append('<option selected >'+'Select Subject'+'</option>');
        $("#Subject").append('<option value="'+'English'+'">'+'English'+'</option>');
        $("#Subject").append('<option value="'+'Tamil'+'">'+'Tamil'+'</option>');
	$('#Subject').selectpicker('refresh');
    }else if (data == 'B') {
        console.log('maths,science');
        $("#Subject").empty().append('<option selected >'+'Select Subject'+'</option>');
        $('#Subject').append('<option value="Maths">'+'Maths'+'</option>');
        $('#Subject').append('<option value="science">'+'science'+'</option>');
	$('#Subject').selectpicker('refresh');
    }else{
        console.log('no subject');
        $("#Subject").empty().append('<option selected >'+'Select Subject'+'</option>');
	$('#Subject').selectpicker('refresh');
    }
    });
    $('#Subject').on('change',function(){
        var value=$('#Subject').val();
        console.log(value);
        if (value=='English'){
	    $('#department_select').removeClass('hidden');
	    $('#Current_assgin').empty().append('<h4>Current Assign:</h4>'); 
	    $('#Current_assgin_table').empty().append('<tr class="curemp1" style="color:#242A30"><th>Employee 1</td><th><span  onclick="delete_emp()" style="cursor:pointer"><u>Delete</u></span></td></tr>');
	    //assign//
		$('#Current_assgin_table').append('<tr class="curemp2 hidden" style="color:#242A30"><th>Employee 2</td><th><span onclick="delete_emp2()" style="cursor:pointer"><u>Delete</u></span></td></tr>');
		$('#Current_assgin_table').append('<tr class="curemp3 hidden" style="color:#242A30"><th>Employee 3</td><th><span onclick="delete_emp3()" style="cursor:pointer"><u>Delete</u></span></td></tr>');
		$('#Current_assgin_table').append('<tr class="curemp4 hidden" style="color:#242A30"><th>Employee 4</td><th><span onclick="delete_emp4()" style="cursor:pointer"><u>Delete</u></span></td></tr>');
	    $('.hidedata').removeClass('hidden');
        }else if (value=='Tamil') {
	    $('.currentassign_hide').addClass('hidden');
	    $('#Current_assgin_table').empty().append('<th colspan="2" style="padding:5px;background-color:#FFF1AB;"><Center>No Data Found</Center><th>');
	}
	else{
            $('#Current_assgin_table').empty().append('<th colspan="2" style="padding:5px;background-color:#FFF1AB;"><Center>No Data Found</Center><th>');
	    $('.hidedata').addClass('hidden');
        }
    });
    $('#Department').on("change",function(){
	    var department=$('#Department').val();
	    $('#assign_new_table').empty().append('<th colspan="2" style="padding:5px;background-color:#FFF1AB"><Center>No Data Found</Center><th>');
	    if (department=='English') {
		$('#assign_new').empty().append('<h4>Assign New:</h4>');
		$('#assign_new_table').empty().append('<tr style="color:#242A30" class="hidden emp1"><th>Employee 1</td><th><span  onclick="Assign_emp1()" style="cursor:pointer"><u>Assign</u></span></td></tr>');
		$('#assign_new_table').append('<tr class="emp2" style="color:#242A30"><th>Employee 2</td><th><span onclick="Assign_emp2()" style="cursor:pointer"><u>Assign</u></span></td></tr>');
		$('#assign_new_table').append('<tr class="emp3" style="color:#242A30"><th>Employee 3</td><th><span onclick="Assign_emp3()" style="cursor:pointer"><u>Assign</u></span></td></tr>');
		$('#assign_new_table').append('<tr class="emp4" style="color:#242A30"><th>Employee 4</td><th><span onclick="Assign_emp4()" style="cursor:pointer"><u>Assign</u></span></td></tr>');
	    }/*else if (department=='Hindi') {
		$('#assign_new_table').empty().append('<tr class="emp5" style="color:#242A30"><th>Employee 5</td><th><span  onclick="Assign_emp5()" style="cursor:pointer"><u>Assign</u></span></td></tr>');
		$('#assign_new_table').append('<tr class="emp6" style="color:#242A30"><th>Employee 6</td><th><span onclick="Assign_emp6()" style="cursor:pointer"><u>Assign</u></span></td></tr>');
	    }*/else{
		$('#assign_new').empty();
		$('#assign_new_table').empty().append('<th colspan="2" style="padding:5px;background-color:#FFF1AB"><Center>No Data Found</Center><th>');
	    }
	    });
    function delete_emp(){
	$('.emp1').removeClass('hidden');
	$('.curemp1').addClass('hidden');
	//$('.currentassign_hide').addClass('hidden');
    }
    function delete_emp2(){
	$('.emp2').removeClass('hidden');
	$('.curemp2').addClass('hidden');
	//$('.currentassign_hide').addClass('hidden');
    }
    function delete_emp3(){
	$('.emp3').removeClass('hidden');
	$('.curemp3').addClass('hidden');
	//$('.currentassign_hide').addClass('hidden');
    }
    function delete_emp4(){
	$('.emp4').removeClass('hidden');
	$('.curemp4').addClass('hidden');
	//$('.currentassign_hide').addClass('hidden');
    }
    
     function Assign_emp1(){
	$('.emp1').addClass('hidden');
	$('.curemp1').removeClass('hidden');
    }
    function Assign_emp2(){
	$('.emp2').addClass('hidden');
	$('.curemp2').removeClass('hidden');
    }
       function Assign_emp3(){
	$('.emp3').addClass('hidden');
	$('.curemp3').removeClass('hidden');
    }
       function Assign_emp4(){
	$('.emp4').addClass('hidden');
	$('.curemp4').removeClass('hidden');
    }
    
