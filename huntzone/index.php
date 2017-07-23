<?php
	include '../utilities/general.php';
	include '../utilities/database.php';
	protect();
	$table='user_details';
	$id=$_SESSION['id'];
	$user_data=user_data($table,$id,'title', 'name');
	
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>CodeHunter</title>
<meta name="" content="">
<link  type="text/css" rel="stylesheet" href="css/style.css"/><!--For Style -->
<link href="css/jquery-ui.css" rel="stylesheet">
<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
<script language="javascript" type="text/javascript" src="edit_area/edit_area_full.js"></script>
<script language="javascript" type="text/javascript" src="js/compiler.js"></script>
<script language="javascript" type="text/javascript">
editAreaLoader.init({
	id : "code"		// textarea id
	,syntax: "c"			// syntax to be uses for highgliting
	,start_highlight: true
	,font_size: "12"	
	,font_family:"Courier New"	// to display with highlight mode on start-up
});
</script>
</head>
<body>
<table width="100%">
		<tr>
			<td width="100%S">
				<form onsubmit="process();return false;" enctype="multipart/form-data" method="POST" target="_blank" action="php/load.php" id="frm">
	<div id="control_box"   >
	<table>
		<tr>
			<td>
				<table id="button_zone" >
					<tr id="tooltip">
						<td><button type="button" id="run" title="RUN" class="butn" accesskey="R" ><img  src="images/play.ico" width="40px" height="40px"/></button></td>
						<td><button type="reset" id="reset"title="RESET" class="butn"><img  src="images/refresh.ico" width="40px" height="40px"/></button></td>
						<td><button type="button" id="save"title="SAVE" class="butn"><img  src="images/save.ico" width="40px" height="40px"/></button></td>
						<td><button type="button" id="create_new_folder" title="CREATE A NEW FOLDER" class="butn"><img  src="images/folder.ico" width="40px" height="40px"/></button></td>
						<td><button type="button" id="kill" title="KILL" class="butn"><img src="images/stop.ico" width="40px" height="40px"/></button></td>
					</tr>	
				</table>
			</td>
			<td>
				<span id="heading"> CodeHunter</span>
			</td>
			<td>
				<table border="0px">
					<tr>
						<!--<td><a href="../utilities/logout.php"> LOGOUT</a></td>-->
						<td><img id="adm" src="images/administrator.ico" width="60" height="60"/><br />
							</td>
						<td><span id="greet">Welcome!<br /><?php echo($user_data['title']); echo($user_data['name']); ?></td>
							
					
					</tr>														
			
				</table>
			
			
	
		
			</td>
		
	</table>
		<div id="mn">menu</div>
	</div>
	<table width="100%" border="0px">
		
		<tr>
			<td><br /><textarea id="code" rows="30" cols="90">
#include"stdio.h"
int main()
{
	printf("Hello\n");
	return 0;
}
			</textarea></td>
			<td id="op"><textarea id="output" readonly rows="28" cols="87" >output</textarea></td>
		</tr>
		<tr>
			
			<td><textarea id="input" placeholder="Enter Inputs Here..." cols="92" rows="1"></textarea></td>
			<td>
			<table border="0px;">
				<tr>
					<td><textarea id="save_name" placeholder="File Name Here" rows="1"></textarea></td>
                    <td><select id="folder"></select></td>
					<td><select id="selectmenu"></select></td>
					<td><button type="button" id="refresh" ><img  src="images/key.ico" width="40px" height="40px"/>	</button></td>
					
				</tr>
				
			</table>
			
			
			</td>
			
		</tr>
		<tr>
			<td><textarea id="commandline" placeholder="Command Line Arguments" cols="92" rows="1"></textarea></td>
			<td>
			<table>
				<tr>
					
					<td><select id="selectdelete"></select></td>
					<td><button type="button" id="delete" >Delete</button></td>
					<td>
						<select id="s">
							<option>Logout</option>
							<option>Change Password</option>
							<option>Configure My LoginId</option>
							<option>View My Profile</option>
							<option>Go To Discussion Forum</option>
							
							<option>Report a Matter to Admin</option>
							<option>Delete My Account</option>
						</select>
					</td>
					<td><input type="button" value="GO" id="sett"/></td>
				</tr>
				
			</table>
		</tr>
	
	</table>
	
</form>
	<div id="footer">
		Design:Soumyajeet Nayak&copy;
	</div>
			</td>
		</tr>
	</table>

	<script type="text/javascript" language="javascript"src="js/jquery.min.js"></script>
	<script type="text/javascript" language="javascript"src="js/save.js"></script>
	<script type="text/javascript" language="javascript"src="js/display.js"></script>
	<script type="text/javascript" language="javascript"src="js/settings.js"></script>
	<script type="text/javascript" language="javascript"src="js/delete.js"></script>
	<script type="text/javascript" language="javascript"src="js/open.js"></script>
	<script type="text/javascript" language="javascript"src="js/load.js"></script>
	<script type="text/javascript" language="javascript"src="js/general.js"></script>
	<script type="text/javascript" language="javascript"src="js/compiler1.js"></script>
    <script type="text/javascript" language="javascript"src="js/kill.js"></script>
    <script type="text/javascript" language="javascript"src="js/list_folders.js"></script>
</body>
</html>