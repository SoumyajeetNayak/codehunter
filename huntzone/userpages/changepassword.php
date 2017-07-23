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
		<div id="message">Your password is successfully updated !!!</div>
		<table height="77%" border="0px">
			<form action="" method="POST">
			<tr align="top">
				<td align="center">
					<div id="error"></div>
					<fieldset align="left" id="lgn">
						<legend>Change Password</legend>
						
						<table border="0px">
							<form method="POST">
							
							
							<tr>
								<td></td>
								<td>Enter Your Current Password:</td>
								<td><input type="text" placeholder="Enter Your Current Password..." size="30" name="current" id="current"/></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td>Enter Your New Password:</td>
								<td><input type="password" name="new" placeholder="Enter Your New Password..." size="30" id="new"/></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td>Conform Your New Password:</td>
								<td><input type="password" name="again" placeholder="Conform Your New Password..." size="30" id="again"/></td>
								<td></td>
							</tr>
							<tr>
								
								<td align="middle"></td>
								<td colspan="" align="right"></td>
								<td  align="right">
									<input type="button" value="CHANGE" class="list" id="change" />
									
								</td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td colspan="2" align="center">
									<hr />
									<a href="../index.php"> Go Back To Home</a>
								</td>
								<!--<td colspan="2" align="center">
									<hr />
									<a href="forget.php"> Forgot Password???</a>
									
								</td>-->
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
	<script type="text/javascript" src="js/changepassword.js"></script>
	
</body>
</html>