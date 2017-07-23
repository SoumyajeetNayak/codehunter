$('#delete').click(function(){
	var filename=$('#selectdelete').val();
	var con=confirm("Are You Sure You Want to delet the file " + filename);
	var folder = $('#folder').val();
	alert(folder);
	if(con==true){
		$.ajax({
			type:'POST',
			url:'php/delete.php',
			data:'file=' + filename + '&folder ='+folder,
			success:function(data){
				alert(data);
				load();
			}
		});
	}
})