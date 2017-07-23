<?php
	include '../../../utilities/general.php';
	include '../../../utilities/database.php';
	require '../../../utilities/connect.inc.php';
	if(empty($_POST)===FALSE){
		$subject= $_POST['subject'];
		$content= $_POST['content'];
		$id = $_SESSION['id'];
		$date = date('d-m-y');
		$control=TRUE;
		$message = NULL;
		
		
		
		if(!empty($subject)&& !empty($content))
		{
			$s=strlen($subject);
			$c=strlen($content);
			if($s<50 && $c < 1000){
				$control = check_length($subject,50);
			if($control=== FALSE)
				$message = "Subject cannot be more than 50 characters long";
			echo($message);
			
			$control = check_length($content,1000);
			if($control=== FALSE)
				$message = "Content cannot be more than 1000 characters long";
			
			if($control === TRUE){
				$discussion_data=array(
					'user_id' => $id,
					'subject'=>$subject,
					'comment' => $content,
					'date' =>$date,
				);
				register_user_details('discussion',$discussion_data);
				$sql = "SELECT * FROM `discussion` ORDER BY id DESC LIMIT 50";
				$run1=mysql_query($sql); 
				while($row=mysql_fetch_array($run1))
				{
					$id=$row['user_id'];
					$name= mysql_result(mysql_query("SELECT `name` FROM  `user_details` WHERE `id`=$id"),0);
					$subject=$row['subject'];
					$content=$row['comment'];
					$date=$row['date'];
					
					$final="<i><span id='name'>".$name."</span></i> <br/><span id='subject'>".$subject."</span>
							<div id='comment'>".$content."</div><hr/>";
					
					echo $final;
					
					
					
				}
			}
		}
			}
			
		
		
	
	}
	else{
		
	}
?>