<?php
	session_start();
	$user_id=$_SESSION['id'];
	
	if(empty($_POST)===FALSE){
		$filename=$_POST['file'];
		$folder = $_POST['folder'];
		/*$command="del ../userfiles/".$user_id."/".$filename;
		shell_exec($command);*/
		unlink("../userfiles/".$user_id."/".$folder.$filename);
		echo("FILE DELETED SUCCESSFULLY");
	}
	else{
		
	}
	
	
?>