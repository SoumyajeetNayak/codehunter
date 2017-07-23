/*function slider(){
	$('#message').slideDown().delay(1500).slideUp();
}*/

$('#change').click(function(){
	$('#error').text("");
	var current = $('#current').val();
	var newpass = $('#new').val();
	var again = $('#again').val();
	
	$.ajax({
		type:'POST',
		url:'php/changepassword.php',
		data:'current='+current+'&new='+newpass+'&again='+again,
		success:function(data){
			if(data=='1'){
				$('#current').val("");
				$('#new').val("");
				$('#again').val("");
				$('#message').slideDown().delay(1500).slideUp();
			}
			else{
				$('#error').text(data);
			}
		}
	})
})