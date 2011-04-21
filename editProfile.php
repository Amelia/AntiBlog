<?php include 'head.php';?>
<html>
<SCRIPT LANGUAGE="JavaScript" SRC="scripts/calendarPopup.js"></SCRIPT>
<SCRIPT LANGUAGE="JavaScript">
	var cal = new CalendarPopup();
</SCRIPT>

<head>
	<title>anti-blog</title>
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
<div id="page"><div class="inner_copy"><div class="inner_copy">Best selection of premium <a href="http://www.templatemonster.com/pack/joomla-1-6-templates/">Joomla 1.6 templates</a></div></div>
    <div id="page-bgtop">
        <div id="page-bgbtm">
            <div class="post">
<?php
if($_SESSION['name'] == '')
{
	echo 'Error: please log in.';	
}
else
{
?>
        <form method="post" action="editProfileController.php" name=editProfile>
		<table id="profile">
            <tr>
                <th><label for="first">New First Name:</label></th>
                <td><input type="text" id="first" name="first" /></td>
            <tr>
                <th><label for="last">New Last Name:</label></th>
                <td><input type="text" id="last" name="last" /></td>
            <tr>
                <th><label for="interest">New Interests:</label></th>
                <td><input type="text" id="interest" name="interest" /></td>
            <tr>
                 <th><label for="dob">New Date of Birth:</label></th>
                <td>
                    <INPUT TYPE="text" NAME="dob" ID="dob" VALUE="" SIZE=25>
                    <A HREF="#" onClick="cal.select(document.forms['editProfile'].dob,'anchor1','MM/dd/yyyy'); return false;" NAME="anchor1" ID="anchor1">select</A>

                </td>
            <tr>
                 <th><label for="about">New About Me:</label></th>
                <td><input type="text" id="about" name="about" /></td>
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                 <th><label for="about">Old Password *required:</label></th>
                <td><input type="text" id="about" name="about" /></td>
            </tr>
            <tr>
                 <th><label for="about">New Password:</label></th>
                <td><input type="text" id="about" name="about" /></td>
            </tr>
            <tr>
                 <th><label for="about">Confirm Password:</label></th>
                <td><input type="text" id="about" name="about" /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Update Profile"/></td>
            </tr>
		</table>
        </form> 
<?php } ?>
            </div>
        </div>
	</div>
</div>
</div>
</body>
</html>

<!--<form method="post" action="changePWController.php" name=changepw>
				<label for="username">Username:</label>
				<input type="text" id="username" name="username" /><br />
				<label for="pw">Old Password:</label>
				<input type="password" id="pw" name="pw" /><br /><p></p>
				<br>
				<label for="pw">New Password:</label>
				<input type="password" id="newpw" name="newpw" /><br />
				<label for="pw">New Password:</label>
				<input type="password" id="newpw2" name="newpw2" onkeyup="if(document.changepw.newpw.value == document.changepw.newpw2.value && document.changepw.newpw.value != '') {document.changepw.submit.disabled=false;document.getElementById('pwerror').innerHTML='';} else {document.changepw.submit.disabled=true; if(document.changepw.newpw2.value != '') document.getElementById('pwerror').innerHTML='<font color=red><b>Passwords do not match!</b></font>'; else document.getElementById('pwerror').innerHTML=''}" /> (confirm)<br /><p></p>
				<table><tr>
				<td><input disabled type="submit" value="Change Password" name="submit" /> <span id='pwerror'></span></td>
			</form>

                    <FORM NAME="example">
                    <INPUT TYPE="text" NAME="date1" VALUE="" SIZE=25>
                    <A HREF="#"
                       onClick="cal.select(document.forms['example'].date1,'anchor1','MM/dd/yyyy'); return false;"
                       NAME="anchor1" ID="anchor1">select</A>
                    </FORM>
			-->
