<?php
	include '../../utilities/general.php';
	include '../../utilities/database.php';
	protect();
	$message = NULL;
	$table='user_details';
	$id=$_SESSION['id'];
	$data = user_data($table,$id,'name','dob','age','occupation','email','phone');
	$nameinitial = get_first_name($data['name']);
	$table='login';
	$login = user_data($table,$id,'login_id');
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>CodeHunter</title>
<meta name="" content="">
<link  type="text/css" rel="stylesheet" href="css/style.css"/><!--For Style -->
<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
</head>
<body>
	<div id="control_box"   >
		<span id="heading"> CodeHunter</span>
	</div>
	<br />
	<div id="main" >
		<table height="90%" border="0px" align="center">
			
			<tr align="top">
				<td align="center">
					<div id="error"><?php  $message ?></div>
					
						
						
						<table border="0px">
							<form method="POST">
							
							
							<tr>
								<td><span class="domain">Name:</span>:</td>
								<td><span id="name" class="data"><?php echo $data['name']; ?></span></td>
								<td><input id="ename" type="button" value="Edit" class="list"/></td>
								<td><input id="sname" type="button" value="Save" class="list"/></td>
								
							</tr>
							<tr>
								
							</tr>
							<tr>
								
								
							</tr>
							<tr>
								
							</tr>
							</form>
						</table>	
					
				</td>
			</tr>
		</table>
		
	</div>
	<br />
	<div id="footer">
		Design:Soumyajeet Nayak&copy;
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/edit.js"></script>
	<script>
		$('#back').click(function(){
			$(location).attr('href','../')
		})
	</script>
	
</body>
</html>