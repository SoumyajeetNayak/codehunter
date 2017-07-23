$('#change').click(function(){
	var loginid = $("input[name='login']:checked").val();
	if(loginid==undefined)
		alert('Please select an option');
	else{
		$.ajax({
			type:'POST',
			url:'php/loginidconfig.php',
			data:'login='+loginid,
			success:function(data){
				if(data=='1'){
					$('#message').slideDown().delay(1500).slideUp();
					$('input[type="radio"]').prop('checked',false);
				}
					
			}
		})
	}
})