<?php
	include 'globals.php';
	session_start();
	$front=$front_salt;
	$rear=$rear_salt;
	
	function encript($string){
		global $front,$rear;
		$front=md5($front);
		$rear=md5($rear);
		$str=$rear.$string.$front;
		$str=md5($str);
		$str=md5($str);
		$str=md5($str);
		$str=md5($str);
		$str=md5($str);
		$str=md5($str);
		$str=md5($str);
		$str=md5($str);
		$str=strrev($str);
		$str=md5($str);
		$str=md5($str);
		$str=md5($str);
		$str=md5($str);
		$str=md5($str);
		$str=md5($str);
		$str=md5($str);
		$str=md5($str);
		$str=md5($str);
		$str=strrev($str);
		return $str;
	}
	
	function check_length($data,$limit){
		if(strlen($data)>$limit)
			return FALSE;
		else
			return TRUE;
	}
	
	function sanitize($data)	{
		$str=mysql_real_escape_string($data);
		return $str;
	}
	
	
	function logged_in(){
		
		if(isset($_SESSION['id']))
			return TRUE;
		else
			return FALSE;
	}
	
	function protect(){
		if(logged_in()===FALSE){
			header("Location:../index.php");
		}
	}
	function protect_reverse(){
		if(logged_in()===TRUE){
			header("Location:huntzone/index.php");
		}
	}
	function make_folder($email){
		$user_id=getIdForFolder($email);
		$code="huntzone/userfiles/".$user_id;
		mkdir($code);
	}
	
	
	function get_first_name($str){
		$arr=explode(' ',trim($str));
		return $arr[0];
	}
	
	function send_mail(){
		$result= mail("soumyajeet08@gmail.com","TEST","This is a test message");
		echo($result);
	}	
	
	function generate_string($length=8){
		$char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$var = rand(1,9);
		$var1 = $var + $length-1;
		$string = substr(str_shuffle($char),0,$length);
		return $string;
	}
?>