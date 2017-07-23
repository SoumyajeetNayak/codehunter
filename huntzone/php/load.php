<?php
	session_start();
	$user_id=$_SESSION['id'];
	$name=$_FILES['sjn']['name'];
	$size=$_FILES['sjn']['size'];
	$type=$_FILES['sjn']['type'];
	$tmp_name=$_FILES['sjn']['tmp_name'];
	
	if(isset($name))
	{
		if(!empty($name))
		{
			$location="../userfiles/".$user_id."/";
			if(move_uploaded_file($tmp_name,$location.$name))
			{
				echo "File Uploaded Successfully";
			}
			else{
				
				echo "File Upload failed";
			}
		}
	}
	echo "Redirecting. Please Wait....";
	header("Location:../index.php");
?>