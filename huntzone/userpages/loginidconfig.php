<?php
	
	include '../../utilities/general.php';
	include '../../utilities/database.php';
	protect();
	
	
	
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
		<div id="message">We have successfully reconfigured your login id</div>
		<table height="77%" border="0px">
			<form >
			<tr align="top">
				<td align="center">
					<div id="error"></div>
					<fieldset align="left" id="lgn">
						<legend>Re-set Login Id</legend>
						
						<table border="0px">
							<form method="POST" action="">
							
							
							<tr>
								<td><input type="radio" id="email" value="email" name="login"/>Set my email as my login id</td>
							</tr>
							<tr>
								<td><input type="radio" id="phone" value="phone" name="login"/>Set my phone number as my login id</td>
							</tr>
							<tr>
								<td><input type="button" id="change" value="CHANGE" class="list"/></td>
							</tr>
							<tr>
								<td colspan="4"><hr /></td>
							</tr>
							
							<tr>
								
								<td colspan="2" align="center">
									
									<a href="../"> Go Back To Home</a>
								</td>
								
							</tr>
							</form>
						</table>	
					</fieldset>	
				</td>
			</tr>
			</form>
		</table>
		
		
		
	</div>
	<br />
	<div id="footer">
		Design:Soumyajeet Nayak&copy;
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/loginidconfig.js"></script>
	
</body>
</html>
