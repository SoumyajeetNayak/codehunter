$('#sjn').submit(function(e){
	var data = $(this);
	var frmdata = new formData(this);
	$.ajax({
		type:'POST',
		url:'php/load.php',
		data:frmdata,
		mimeType:'multipart/form-data',
		contentType:false,
		cache:false,
		processData:false,
		success:function(data){
			alert(data);
			
		},
		error:function(jqXHR,textStatus,errorThrown){
			
		},
	});
	e.preventDefault();
	e.stopPropagation();
	e.unbind();
	
	/*load();*/
});
$('#sjn').change(function(){
	$('#frm').submit();
	load();
});
/*$('#sjn').change(function(){
	var filename=$(this).val();
	$.ajax({
		type:'POST',
		url:'php/load/php',
		data:'sjn=' + filename,
		mimeType:'multipart/form-data',
		contentType:false,
		cache:false,
		processData:false,
		success:function(data){
			alert(data);
		}
		
	})
})*/