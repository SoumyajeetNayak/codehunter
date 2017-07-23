<?php
	session_start();
	$user_id=$_SESSION['id'];
	$path='../userfiles/'.$user_id.'/';
	$directory = $_POST['name'];
	$data="";
	$count=0;
	$open="<option>";
	$close="</option>";
	$handle=opendir($path.$directory."/");
	while($files=readdir($handle)){
		$count=$count+1;
		if($count>2)
		{
			$data=$data.$open.$files.$close;	
		}
		
	}
	echo $data;
?>