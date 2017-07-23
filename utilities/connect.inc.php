<?php

$conn_error="Unable to connect to the database soumyajeet";
$host="localhost";
$user="soumyajeet";
$passowrd="1002199418";
$db="codehunter";

if(!@mysql_connect($host,$user,$passowrd)|| !@mysql_select_db($db))
{
	die($conn_error);
}

?>