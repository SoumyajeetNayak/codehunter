<?php
	include '../../../utilities/general.php';
	include '../../../utilities/database.php';
	if(empty($_POST)===FALSE){
		$login = $_POST['login'];
		if($login=='phone')
				$loginid=getData('user_details','phone',$_SESSION['id']);
				
		if($login == 'email')
				$loginid=getData('user_details','email',$_SESSION['id']);
				
		changeData('login','login_id',$loginid,$_SESSION['id']);
		
		echo("1");
		
		
		
	}
	else{
		
	}
?>