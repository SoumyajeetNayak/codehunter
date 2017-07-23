<?php
	session_start();
	$user_id = $_SESSION['id'];
	$name = $_POST['name'];
	mkdir('../userfiles/'.$user_id.'/'.$name);
	echo 'folder created';
?>