<?php
	$directory = '../userfiles/2/';
	$files = glob($directory."*",GLOB_ONLYDIR);
	$open="<option>";
	$close="</option>";
	$data="";
	foreach($files as $file)
	{
		$new = substr($file,strlen($directory),strlen($file));
		$data=$data.$open.$new.$close;
	}
	echo $data;
?>