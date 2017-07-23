<?php
	include '../../../utilities/general.php';
	include '../../../utilities/database.php';
	$message=NULL;
	if(empty($_POST)===FALSE){
		$required_fields=array('current','new','again');
		foreach($_POST as $key=>$values){
			if(empty($values)&& in_array($key,$required_fields)===TRUE){
				$message="Star markedfields are cumpulsory";
				break 1;
			}
		}
		if(empty($message)===TRUE){//No error all fields are filled
			$control=TRUE;
			$current=$_POST['current'];
			$new=$_POST['new'];
			$again=$_POST['again'];
			
			$control=check_length($current,32);
			if($control===FALSE)
				$message="Password cannon be more than 32 characters long";
			
			$control=check_length($new,32);
			if($control===FALSE)
				$message="Password cannon be more than 32 characters long";
			
			$control=check_length($again,32);
			if($control===FALSE)
				$message="Password cannon be more than 32 characters long";
			
			if($new!=$again){
				$control=FALSE;
				$message="Both The passwords should match";
			}
			$id = $_SESSION['id'];
			$user_password=getPassword($id);
			if(md5($current)!==$user_password){
				$message="Incorrect current password";
				$control=FALSE;
			}
			if($control===TRUE){
				
				$id=$_SESSION['id'];
				
				changePassword($id,$new);
				echo('1');
			}else{
				echo($message);
			}
		}
	}
	else{
		
	}
?>