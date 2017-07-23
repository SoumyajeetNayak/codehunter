<?php
	session_start();
	$user_id=$_SESSION['id'];
	if(empty($_POST)===FALSE){
		$control=TRUE;
		$name=$_POST['name'];
		$code=$_POST['code'];
		$folder = $_POST['folder'];
		if(empty($name)===TRUE){
			echo "Name field is empty";
			$control=FALSE;
		}
		if(empty($code)===TRUE){
			echo "No Program to save";
			$control=FALSE;
		}
		if($control===TRUE){
			$location="../userfiles/".$user_id."/".$folder.'/'.$name.".c";
			$handle=fopen($location,"w");
			fwrite($handle,$code);
			fclose($handle);
			echo("SAVED");
		}
		else{
			
		}
	}
?>