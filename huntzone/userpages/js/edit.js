$('#ename').click(function(){
	var name = $('#name').text();
	var string ="<input type='text' id='namec' value='"+ name +"'/>";
	$('#name').html(string);
	$('#namec').focus();
	$('#namec').select();
	$(this).unbind();
	
})
