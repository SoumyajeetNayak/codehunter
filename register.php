<?php
	include 'utilities/general.php';
	include 'utilities/database.php';
	protect_reverse();
	$message="";
	$name_error_message=NULL;
	$title_error_message=NULL;
	$age_error_message=NULL;
	$phone_error_message=NULL;
	$email_error_message=NULL;
	$password_error_message=NULL;
	$password_again_error_message=NULL;
	$answer_error_message=NULL;
	$name_error_message=NULL;
	$loginid_selection=NULL;
	$loginid=NULL;
	$path = 'images/newuser.ico';
	$s=2;
	$status=1;
	
	
	

	if(empty($_POST)===FALSE){
		$required_fields=array('title','name','occupation','phone','email','password','password_again','question','answer'/*,'loginid_selection'*/);
		foreach($_POST as $key=>$values){
			if(empty($values)&& in_array($key,$required_fields)===TRUE){
				$message="Star markedfields are cumpulsory";
				break 1;
			}
		}
		if(empty($message)===TRUE){//No error all fields are filled
			$control=TRUE;
			$login_selection=$_POST['loginid_selection'];
			$title=$_POST['title'];
			$name=$_POST['name'];
			$age=$_POST['age'];
			$dob=$_POST['dob'];
			$occupation=$_POST['occupation'];
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$password_again=$_POST['password_again'];
			$question=$_POST['question'];
			$answer=$_POST['answer'];
			/*$loginid_selection=$_POST['loginid_selection'];*/
			$control=check_length($title,10);
			if($control===FALSE)
				$title_error_message="Title cannot be more than 10 characters long";
			$control=check_length($name,50);
			if($control===FALSE)
				$name_error_message="Name field cannot exceed 50 characters";
			$control=check_length($age,2);
			if($control===FALSE)
				$age_error_message="Age field cannot be more than 2 digits";
			$control=check_length($phone,12);
			if($control===FALSE)
				$phone_error_message="Phone number cannot be more than 12 digits";
			$control=check_length($email,32);
			if($control===FALSE)
				$email_error_message="Name field cannot exceed 50 characters";
			$control=check_length($password,32);
			if($control===FALSE)
				$password_error_message="password cannot be more than 32 characters long";
			$control=check_length($password_again,32);
			if($control===FALSE)
				$password_again_error_message="password cannot be more than 32 characters long";
			$control=check_length($answer,20);
			if($control===FALSE)
				$answer_error_message="The answer cannot me more than 20 characters long";
			if($password!=$password_again){
				$control=FALSE;
				$answer_error_message="Both The passwords should match";
			}
			if(filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE){
				$email_error_message="The email you provided is not authenticated";
				$control=FALSE;
			}
			//$control=email_exist($email);
			if($login_selection=='phone')
				$loginid=$phone;
			else	
				$loginid=$email;
			if($control===TRUE){
				//carry out the registrarion process here
				$password = md5($password);
				$user_details_data=array(
				'title' => $title,
				'name'=>$name,
				'age' => $age,
				'dob' => $dob,
				'occupation' => $occupation,
				'phone' => $phone,
				'email' => $email,
				);
				$login_data=array(
				'login_id' => $loginid,
				'password' => $password,
				);
				$security_question_data=array(
				'question' => $question,
				'answer' => $answer,
				);
				$login_status_data=array(
				'status' => $status,
				);
				$images=array(
				'path' => $path,
				);
				$type=array(
				'type' => $s,
				);
				register_user_details('user_details',$user_details_data);
				register_user_details('login',$login_data);
				register_user_details('security_question',$security_question_data);
				register_user_details('login_status',$login_status_data);
				register_user_details('images', $images);
				register_user_details('type',$type);
				make_folder($email);
				echo("Registered");
			}
			else{
				echo "Incorrect";
			}
			
			//echo $title.$name.$age.$dob.$occupation.$phone.$email.$password.$password_again.$question.$answer/*$loginid_selection*/;
			
			
		}
		else{
			//error
			
		}
	}
	else{
		
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
	<div id="control_box"   >
		<span id="heading"> CodeHunter</span>
	</div>
	<br />
	<div id="main">
		<table  height="77%"  border="0px" align="center">
			<tr>
				<td align="center">
				<div id="error"><?php echo $message ?></div>
					<fieldset align="left" id="reg">
						<legend>Register</legend>
							<table align="center" border="0px">
							<form method="POST" action="">
								<tr>
									<td>Select Your Title:*</td>
									<td>
										<select name="title">
											<option>---------</option>
											<option>Mr.</option>
											<option>Miss</option>
											<option>Mrs.</option>
											<option>Dr.</option>
											<option>Prof.</option>
											<option>Others</option>
										</select>
						
									</td>
									<td><?php echo $title_error_message ?></td>
								</tr>
								<tr>
									<td>Enter Your Name:*</td>
									<td><input type="text" size="30" placeholder="Enter Name Here..." name="name"/></td>
									<td><?php echo $name_error_message ?></td>
								</tr>
								<tr>
									<td>Enter Your Age:</td>
									<td><input type="number" size="2" placeholder="Enter Your Age" name="age"/></td>
									<td></td>
								</tr>
								<tr>
									<td>Enter Your Date of Birth:</td>
									<td><input type="date" name="dob" placeholder="Select Data..." size="2" placeholder="Enter Your Age"/></td>
									<td><?php echo $age_error_message ?></td>
								</tr>
								<tr>
								<td>Select Your Occupation:*</td>
								<td>
									<select name="occupation">
										<option>---------</option>
										<option>Student</option>
										<option>Professional</option>
										<option>Teacher</option>
										<option>Trainer</option>
										<option>Others</option>
									
									</select>
									</td>		
								</tr>
								<tr>
									<td>Enter Your PhoneNumber:</td>
									<td><input name="phone" type="tel" size="30" placeholder="Enter Your Phone Number..."/></td>
									<td><?php echo $phone_error_message ?></td>
									</tr>	
								<tr>
									<td>Enter Your Email:*</td>
									<td><input type="text" size="30" placeholder="Enter Your UserId" name="email"/></td>
									<td><?php echo $email_error_message ?></td>
								</tr>
								<tr>
									<td>Enter Your Password:*</td>
									<td><input name="password" type="password" size="30" placeholder="Enter Your Password..."/></td>
									<td><?php echo $password_error_message ?></td>
								</tr>
								<tr>
									<td>Reconform Your Password:*</td>
									<td><input name="password_again" type="password" size="30" placeholder="Re-Enter Your Password..."/></td>
									<td><?php echo $password_again_error_message ?></td>
								</tr>
								<tr>
									<td>Select a Sequrity Question:*</td>
									<td>
										<select name="question">
											<option>-------------------------</option>
											<option>Who is Your Role Model?</option>
											<option>Who do You Love the Most</option>
											<option>What is Your Favourite Book</option>
											<option>Any Special Day of Your Life</option>
										</select>
									</td>
									<td><input name="answer" type="text" placeholder="Enter Your Answer Here........" size="30"/></td>
									<td><?php echo $answer_error_message ?></td>
								</tr>
								<tr>
									<td colspan="3">
									<input type="radio" name="loginid_selection" value="email"/>Use My Email as My LoginId<br />
									<input type="radio" name="loginid_selection" value="phone"/>Use My Phone Number as My LoginId
									</td>
								</tr>	
								<tr>
									<td></td>
									<td align="left"><input type="checkbox"/>I Agree To The Terms and Conditions </td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="submit" class="list" value="REGISTER"/><input class="list"  type="reset" value="RESET"/> </td>
									<td></td>
								</tr>
								<tr>
									<td colspan="3" align="center"><hr><a href="index.php">I have an Accout!Login Me In Now!</a></td>
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