$(document).ready(function(){
	$('#commandline').val("");
});

$('#sett').click(function(){
	var set = $('#s').val();
	if(set=="Logout")
		$(location).attr("href","../utilities/logout.php");
	if(set=="Change Password")
		$(location).attr("href","userpages/changepassword.php");
	if(set=="Configure My LoginId")
		$(location).attr("href","userpages/loginidconfig.php");
	if(set=="Go To Discussion Forum")
		$(location).attr("href","userpages/discussion.php");
	if(set=="View My Profile")
		$(location).attr("href","userpages/profile.php");
})