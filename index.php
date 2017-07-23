
<?php
	include 'utilities/general.php';
	include 'utilities/database.php';
	protect_reverse();
	$message=NULL;
	
	if(empty($_POST)===FALSE){
		$username=$_POST['uid'];
		$password=$_POST['pid'];
		if(empty($username)===TRUE ){
			$message="User Name Field Cannot be Empty";
		} 
		
		elseif(empty($password)===TRUE){
			$message="Password Field Cannot be Empty";
		}
		elseif(check_length($username,32)===FALSE){
			$message="LoginId input field maximum length exceeded";
		}
		elseif(check_length($password,32)===FALSE){
			$message="LoginId input field maximum length exceeded";
		}
		elseif(user_exist($username)===FALSE){
			$message="The LoginId you supplied does not exist";
		}
		elseif(user_active($username)===FALSE){
			$message="Your account is temporarily not active";
		}
		else{
			
			$login=login($username,$password);
			
			if($login===FALSE){
				
				$message="Your Password is incorrect";
			}
			else{
				
				$type = getData('type' , 'type', $login);
				if($type == 1){
					$_SESSION['temp']=$login;
					header('Location:huntzone/userpages/adminauthenticate.php');
					/*$_SESSION['id']=$login;
					header('Location:huntzone/');*/
				}
					
				else if($type==2)
				{
					$_SESSION['temp']=$login;
					header('Location:huntzone/userpages/newauthenticate.php');
				}
					
				else if($type == 3){
					$_SESSION['id']=$login;
					header('Location:huntzone/');
				}
					
				
					
			}
		}
	
	}
	else{
		$message=NULL;
	}
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
	<div id="main" >
		<!--<div id="error">
			<div id="err_msg"></div> Error
		</div>-->
		<table height="77%" border="0px">
			
			<tr align="top">
				<td align="center">
					<div id="error"><?php echo $message ?></div>
					<fieldset align="left" id="lgn">
						<legend>Login</legend>
						
						<table border="0px">
							<form method="POST">
							
							
							<tr>
								<td><img class="img" align="right" src="images/administrator.ico" width="40px" height="40px"/></td>
								<td>LoginId:</td>
								<td><input type="text" placeholder="Enter Your User Name..." size="30" name="uid"/></td>
								<td></td>
							</tr>
							<tr>
								<td><img align="right" class="img" src="images/key.ico" width="40px" height="40px"/></td>
								<td>PassWord:</td>
								<td><input type="password" name="pid" placeholder="Enter Your Password..." size="30"/></td>
								<td></td>
							</tr>
							<tr>
								
								<td align="middle"></td>
								<td colspan="" align="right"></td>
								<td  align="right">
									<input type="submit" value="LOGIN" class="list" /><br />
									<input  type="checkbox" value=name="check"/>Keep Me Logged In	
								</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="2" align="center">
									<hr />
									<a href="register.php"> New User?Register Here!!!</a>
								</td>
								<td colspan="2" align="center">
									<hr />
									<a href="forget.php"> Forgot Password???</a>
									
								</td>
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