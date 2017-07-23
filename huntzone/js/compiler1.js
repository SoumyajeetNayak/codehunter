$('#run').click(function(){
	
	$('#output').css('color','blue');
	$(document).css('cursor','wait');
	$('#output').val("Running Please Wait...");
	var code=editAreaLoader.getValue("code");
	var codenew = encodeURIComponent(code);
	var input = $('#input').val();
	var newinput = encodeURIComponent(input);
	
	$.ajax({
		type:'POST',
		url:'php/compile.php',
		data:'content='+codenew+'&input='+newinput,
		success:function(data){
			var data = data.split('#');
			if(data[0]==1)
				$('#output').css('color','blue');
				
			else
				$('#output').css('color','red');
				
			$('#output').val(data[1]);
			
		}
	})
	
})