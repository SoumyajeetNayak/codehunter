<?php
	include '../../utilities/general.php';
	include '../../utilities/database.php';
	protect();
	$table='user_details';
	$id=$_SESSION['id'];
	$data = user_data($table,$id,'name','dob','age','occupation','email','phone');
	$nameinitial = get_first_name($data['name']);
	$table='login';
	$login = user_data($table,$id,'login_id');
	$table='images';
	$images = user_data($table,$id,'path');
	$table='type';
	$type=user_data($table,$id,'type');
	if($type['type']==1)
		$type='Admin Account';
	else
		$type='User Account';
	
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
		<h1 align="center"style="font-family: andalus;text-decoration:underline;color: red"><?php echo $nameinitial ?>'s Profile</h1>
		<table border="0px" width="100%">
			<tr>
				<td colspan="4"><hr /></td>
			</tr>
			<tr>
				<td rowspan="4"><img src="../images/userimages/<?php echo $images['path'] ?>" width="130px" height="170px" style="border: 2px solid black"/></td>
			</tr>
			<tr>
				<td><span class="index">Name:</span><span class="value"><?php echo $data['name'] ?></span></td>
				<td><span class="index">Profession:</span><span class="value"><?php echo $data['occupation'] ?></span></td>
				<td><span class="index">LoginId:</span><span class="value"><?php echo $login['login_id']?></span></td>
			</tr>
			<tr>
				<td><span class="index">Age:</span><span class="value"><?php echo $data['age'] ?></span></td>
				<td><span class="index">Email:</span><span class="value"><?php echo $data['email'] ?></span></td>
				<td><span class="index">Status:</span><span class="value">Active</span></td>
			</tr>
			<tr>
				<td><span class="index">DoB:</span><span class="value"><?php echo $data['dob'] ?></span></td>
				<td><span class="index">Phone:</span><span class="value"><?php echo $data['phone'] ?></span></td>
				<td><span class="index">Account Type:</span><span class="value"><?php echo $type?></span></td>
			</tr>
			<tr>
				<td colspan="4"><hr /></td>
			</tr>
			<tr>
				<td align="right" colspan="4">
					<input type="button" value="Edit Profile" id="edit" class="list"/>
					<input type="button" value="Go Back" class="list" id="back"/>
				</td>
			</tr>
			<tr>
				<td colspan="4"><hr /></td>
			</tr>
			
		</table>
		<hr />
		
		
	</div>
	<br />
	<div id="footer">
		Design:Soumyajeet Nayak&copy;
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/changepassword.js"></script>
	<script>
		$('#back').click(function(){
			$(location).attr('href','../')
		})
		$('#edit').click(function(){
			$(location).attr('href','edit.php');
		})
	</script>
	
</body>
</html>