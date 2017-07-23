$(document).ready(function(e) {
    $.ajax({
		type:'POST',
		async:'true',
		url:"php/list_folders.php"	,
		success: function(data){
			$('#folder').text("");
			$('#folder').append(data);	
			var name = $('#folder').val();
			$.ajax({
				type:'POST',
				url:'php/display.php',	
				data:'name='+name,
				success: function(data)
				{
					$('#selectmenu').text("");
					$('#selectdelete').text("");
					$('#selectmenu').append(data);
					$('#selectdelete').append(data);
					var name=$('#selectmenu').val();
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
				}
			})
		}
})
	
});
$('#folder').change(function(){
	var name = $(this).val();
	$.ajax({
		type:'POST',
		url:'php/display.php',	
		data:'name='+name,
		success: function(data)
		{
			$('#selectmenu').text("");
			$('#selectdelete').text("");
			$('#selectmenu').append(data);
			$('#selectdelete').append(data);	
		}
		
		
	})
})

$('#create_new_folder').click(function(){
	var name=prompt("Please Enter The Folder Name");
	if(name=="" || name==null)
	{
	}
	else
	{
		$.ajax({
			type:'POST',
			url:'php/create.php',
			data:'name=' + name,
			success:function(data)
			{
				$.ajax({
					type:'POST',
					url:"php/list_folders.php"	,
					success: function(data)
					{
						$('#folder').text("");
						$('#folder').append(data);
						var folder= $('#folder').val();
						$.ajax({
							type:'POST',
							url:'php/display.php',
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
			}
		})
	}
})