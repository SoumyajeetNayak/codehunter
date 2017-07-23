<?php
 		require '../../../utilities/connect.inc.php';
		$sql = "SELECT * FROM `discussion` ORDER BY id  LIMIT 50";
		$run1=mysql_query($sql); 
		$final=NULL;
		while($row=mysql_fetch_array($run1))
		{
			$id=$row['user_id'];
			$subject=$row['subject'];
			$name= mysql_result(mysql_query("SELECT `name` FROM  `user_details` WHERE `id`=$id"),0);
			$content=$row['comment'];
			$date=$row['date'];
			
			
			$final="<i><span id='name'>".$name."</span></i> <br/><span id='subject'>".$subject."</span>
							<div id='comment'>".$content."</div><hr/>";
			
			echo $final;
		}
		
		
?>