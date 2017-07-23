$('#save').click(function(){
	//alert("Working");
	var name=$('#save_name').val();
	$('#save_name').blur();
	var code=editAreaLoader.getValue("code");
	var newcode=encodeURIComponent(code);
	var folder = $('#folder').val();
	$.ajax({
		type:'POST',
		url:'php/save.php',
		data:'name=' + name + "&code=" +newcode + '&folder=' + folder,
		success:function(data){
			alert(data);
			
			$.ajax({
				type:'POST',
				url:"php/display.php"	,
				data:'name='+folder,
				success:function(data){
					$('#selectmenu').text("");
					$('#selectdelete').text("");
					$('#selectmenu').append(data);
					$('#selectdelete').append(data);
				}
			})
		}
	})
	
})
