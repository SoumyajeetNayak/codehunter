$('#selectmenu').change(function(){
	var name=$(this).val();
	var folder = $('#folder').val();
	$.ajax({
		type:'POST',
		url:'php/open.php',
		data:'file=' + name +'&folder='+ folder,
		success:function(data){
			editAreaLoader.setValue("code","")
			editAreaLoader.setValue("code",data);
		}
	});
})