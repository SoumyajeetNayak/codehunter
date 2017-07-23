function load(){
	
	$.ajax({
		type:'POST',
		url:'php/display.php',
		//data:'',
		success:function(data){
			$('#selectmenu').text("");
			$('#selectdelete').text("");
			$('#selectmenu').append(data);
			$('#selectdelete').append(data);
			
			
		}
	});
}


