<?php
	session_start();
	$message = NULL;
	if(isset($_SESSION['temp'])===FALSE)
	{
		session_destroy();
		header('Location:../../');
	}
	session_destroy();	
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
	<table width="100%">
		<tr>
			<td>
				
			</td>
		</tr>
	</table>
	<div id="control_box"   >
		<span id="heading"> CodeHunter</span>
	</div>
	<br />
	<div id="main" style="height:400px">
		<table height="77%" border="0px">
			
			<tr align="top">
				<td align="center">
					<div id="error"><?php echo $message ?></div>
					<fieldset align="left" id="lgn">
						<legend>Admin. Authentication</legend>
						
						<table border="0px">
							<form method="POST">
							
							
							<tr>
								<td><img class="img" align="right" src="images/administrator.png" width="60px" height="60px"/></td>
								<td>Authentication Code:</td>
								<td><input type="text" placeholder="Authentication Code..." size="30" name="uid"/></td>
								<td></td>
							</tr>
							
							<tr>
								
								<td align="middle"></td>
								<td colspan="" align="right"></td>
								<td  align="right">
									<input type="submit" value="LOGIN" class="list" />
									
								</td>
								<td></td>
							</tr>
							
							</form>
						</table>	
					</fieldset>	
				</td>
			</tr>
		</table>
		
		
	</div>
	<br />
	<div id="footer">
		Design:Soumyajeet Nayak&copy;
	</div>
</body>
</html>