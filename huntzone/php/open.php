<?php
	session_start();
	$user_id=$_SESSION['id'];
	if(empty($_POST)===FALSE){
		$filename=$_POST['file'];
		$folder=$_POST['folder'];
		$location="../userfiles/".$user_id."/".$folder."/".$filename;
		$handle=fopen($location,"r");
		$code=file_get_contents($location);
		echo($code);
		
	}
	else{
		
	}
?>