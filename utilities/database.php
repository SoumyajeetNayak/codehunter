<?php
	
	include'connect.inc.php';
	
	function changeData($table,$data,$value,$id){
		mysql_query("UPDATE `$table` SET `$data`="."'".$value."' WHERE `id`=".$id);
	}
	
	function getData($table,$data,$id){
		return(mysql_result(mysql_query("SELECT `$data` FROM `$table` WHERE `id`=$id"),0));
	}
	
	function user_exist($username){
		$username=sanitize($username);
		$query=mysql_query("SELECT count('login_id') FROM `login` WHERE `login_id`='$username'");
		$result=mysql_result($query,0);
		if($result==1)
			return TRUE;
		else
		 	return FALSE;
	}
	function email_exist($email){
		$email=sanitize($email);
		$query=mysql_query("SELECT count('email') FROM `user_details` WHERE `email`='$email'");
		$result=mysql_result($query,0);
		if($result==1)
			return TRUE;
		else
		 	return FALSE;
	}
	function user_active($username){
		$username=sanitize($username);		
		$query=mysql_query("SELECT `id` FROM `login` WHERE `login_id`='$username'");
		$result=mysql_result($query,0);
		$query=mysql_query("SELECT `status` FROM `login_status` WHERE `id`='$result'");
		$result=mysql_result($query,0);
		if($result==1)
		return TRUE;
		else return FALSE;
	}
	function getId($username){
		$username=sanitize($username);
		$query=mysql_query("SELECT `id` FROM `login` WHERE `login_id`='$username'");
		$result=mysql_result($query,0);
		return $result;
	}
	function getIdForFolder($email){
		$email=sanitize($email);
		$query=mysql_query("SELECT `id` FROM `user_details` WHERE `email`='$email'");
		$result=mysql_result($query,0);
		return $result;
	}
	function login($username,$password){
		$username=sanitize($username);
		$user_id=getId($username);
		$password=md5($password);
		
		
		
		$query=mysql_query("SELECT COUNT('login_id') FROM `login` WHERE `id`='".$user_id."'AND `password`='".$password."'");
		$result=mysql_result($query,0);
		
		if($result==1)
			return $user_id;
		else 
			return FALSE;

		
			
	}
	
	
	
	function register_user_details($table,$content){
		$fields='`'.implode('`,`',array_keys($content)).'`';
		$data='\''.implode('\',\'',$content).'\'';
		$query="INSERT INTO $table($fields)VALUES($data)";
		echo($query);
		//mysql_query($query);
		
	}
	
	function getPassword($user_id){
		return(mysql_result(mysql_query("SELECT `password` FROM `login` WHERE `id`=$user_id"),0));
	}
	
	function changePassword($id,$password){
		$password=md5($password);
		mysql_query("UPDATE `login` SET `password`="."'".$password."' WHERE `id`=".$id);
	}
	
	function user_id_from_username($username){
		$username = sanitize($username);
		return( mysql_result( mysql_query("SELECT `id` FROM `user_details` WHERE `name`=$username"),0));
	}
	
	function user_data($tables,$user_id){
		$data= array();
		$user_id=(int)$user_id;
		$func_num_args=func_num_args();
		$func_get_args=func_get_args();
		if($func_num_args>1){
			unset($func_get_args[0]);
			unset($func_get_args[1]);
			$fields='`'.implode('`, `',$func_get_args).'`';
			$data=mysql_fetch_array(mysql_query("SELECT $fields FROM `$tables` WHERE `id`=$user_id"));
			return $data;
		}
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>