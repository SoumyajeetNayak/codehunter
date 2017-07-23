<?php
	protect_reverse();
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
		<table height="77%">
			<tr>
				<td align="center">
					<fieldset align="left" id="lgn">
						<legend>Forget Password</legend>
						<table align="center" border="0px">
							<form method="POST">
							<tr>
								
								<td>Email:</td>
								<td><input type="text" placeholder="Enter Your User Email..." size="30" name="email"/></td>
								<td></td>
							</tr>
							<tr>
								
								<td>Data of Registration:</td>
								<td><input type="date" name="data"/></td>
								<td></td>
							</tr>
							<tr>
								<td>Select Your Security Question</td>
								<td>
									<select>
											<option>-------------------------</option>
											<option>Who is Your Role Model?</option>
											<option>Who do You Love the Mos/t</option>
											<option>What is Your Favourite Book/</option>
											<option>Any Special Day of Your Life/</option>
										</select>
								</td>	
								<td></td>
							</tr>
							<tr>
								<td>Enter Your Answer</td>
								<td><input type="text" name="answer" placeholder="Enter Your Answer Here..." size="30"/></td>
							</tr>
							<tr>
								
								<td colspan="" align="right"></td>
								<td  align="right"><input type="submit" value="HELP" class="list" /></td>
								<td></td>
							</tr>
							<tr>
									<td colspan="3" align="center"><hr><a href="index.php">I Remember My Password!</a></td>
									<td colspan="1"><hr /> </td>
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