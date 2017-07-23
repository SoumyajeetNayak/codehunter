<?php

$conn_error="Unable to connect to the database";
$host="localhost";
$user="soumyajeet";
$passowrd="";
$db="codehunter";

if(!@mysql_connect($host,$user,$passowrd)|| !@mysql_select_db($db))
{
	die($conn_error);
}

?>