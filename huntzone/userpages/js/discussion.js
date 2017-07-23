$(document).ready(function(){
	$('#comment_zone').html("<img src='img/ajax_loader_blue_350.gif' width='160px' height='160px' style='margin-left:200px'/>");
	$.ajax({
				type:'POST',
				url:'php/loadinitial.php',
				success:function(data){
					$('#zone').html(data);
				}
			})	
})

$('#say').click(function(){
	var subject = $('#subject').val();
	var content = $('#content').val();
	
	var subject_length = $('#subject').val().length;
	var content_length = $('#content').val().length;
	
	if(subject_length==0 || content_length==0)
		alert("fields cannot be empty");
	else{
		
	$('#zone').html("<img src='images/ajax_loader_blue_350.gif' width='160px' height='160px' style='margin-left:200px'/>");
	$.ajax({
		type:'POST',
		url:'php/discussion.php',
		data:'subject='+subject+'&content='+content,
		success:function(data){
			$('#subject').val("");
			$('#content').val("");
			$('#content').val("");
			$('#zone').val("");
			$('#zone').html(data);
			
		}
	})
	}
	
	
})