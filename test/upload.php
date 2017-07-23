<?php
	$name = $_FILES['file']['name'];
	$tmp= $_FILES['file']['tmp_name'];
	$val= file_get_contents($tmp);
	echo($val);
?>