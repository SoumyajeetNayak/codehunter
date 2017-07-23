<?php
	
	include '../../utilities/general.php';
	include '../../utilities/database.php';
	protect();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>CodeHunter</title>
<meta name="" content="">
<link  type="text/css" rel="stylesheet" href="css/style.css"/><!--For Style -->
<link  type="text/css" rel="stylesheet" href="css/discussion.css"/>
<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
</head>
<body>
	<div id="control_box"   >
		<span id="heading"> CodeHunter</span>
	</div>
	<br />
	<div id="main" >
		Enter your Subject:<br/>
		<textarea rows="2" cols="50" id="subject"></textarea>
		<br />
		<br />
		Write your discussion Matter here:<br />
		<textarea rows="10" cols="150" id="content"></textarea>
		<br />
		<br />
		<input type="button" id="say" value="SAY IT" class="list"/>
		<input  type="button" id="back" value="GO BACK" class="list"/>
		<br />
		<br />
		
		<div id="zone"></div>
	</div>	
	<br />
	
	<div id="footer">
		Design:Soumyajeet Nayak&copy;
	</div>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/discussion.js"></script>
	<script type="text/javascript" src="js/loadinitial.js"></script>
	<script>
		$('#back').click(function(){
			$(location).attr('href','../')
		})
	</script>
	
</body>
</html>
