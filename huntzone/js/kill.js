$('#kill').click(function(){
		xhr.abort();
	$.ajax({
		
		type:'POST',
		url:'php/kill_process.php',
		success: function(data){
			alert(data);	
		}	
	})
})