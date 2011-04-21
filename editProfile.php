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
            $connection = new Mongo();
    		$db = $connection->antiblog;
    		$collection = $db->profiles;

            $username = $_SESSION['name'];
            $query = array("username"=> $username);
    		$cursor = $collection->find($query);

    		foreach($cursor as $obj){
                $first = $obj["first"];
                $last = $obj["last"];
                $interest = $obj["interest"];
                $dob = $obj["dob"];
                $about = $obj["about"];

    		}
?>
        <script type="text/javascript" language="JavaScript" src="scripts/formValidate.js"></script>
        <form method="post" action="editProfileController.php" name=editProfile  onsubmit="return myPWValidate('editProfile', 'oldPW', 'password', 'confirm')">
		<table id="profile">
            <tr>
                <th><label for="first">New First Name:</label></th>
                <td><input type="text" id="first" name="first" value="<?php echo $first;?>" ondblclick="value=''" onblur="if (this.value == '') this.value = '<?php echo $first;?>';"/></td>
            <tr>
                <th><label for="last">New Last Name:</label></th>
                <td><input type="text" id="last" name="last" value="<?php echo $last;?>" ondblclick="value=''" onblur="if (this.value == '') this.value = '<?php echo $last;?>';"//></td>
            <tr>
                <th><label for="interest">New Interests:</label></th>
                <td><input type="text" id="interest" name="interest" value="<?php echo $interest;?>" ondblclick="value=''" onblur="if (this.value == '') this.value = '<?php echo interest;?>';"//></td>
            <tr>
                 <th><label for="dob">New Date of Birth:</label></th>
                <td>
                    <INPUT TYPE="text" NAME="dob" ID="dob" SIZE=25 value="<?php echo $dob;?>" ondblclick="value=''" onblur="if (this.value == '') this.value = '<?php echo $dob;?>';"/>
                    <A HREF="#" onClick="cal.select(document.forms['editProfile'].dob,'anchor1','MM/dd/yyyy'); return false;" NAME="anchor1" ID="anchor1">select</A>

                </td>
            <tr>
                 <th><label for="about">New About Me:</label></th>
                 <td>
                 <div class="entry">
				    <textarea name="about" id="about" rows=10 cols=35 style='width:100%;'  ondblclick="value=''" onblur="if (this.value == '') this.value = '<?php echo $about;?>';"><?php echo $about;?></textarea>
				 </div>
                 </td>
<!--                <td><input type="text" id="about" name="about" value="--><?php //echo $about;?><!--" ondblclick="value=''" onblur="if (this.value == '') this.value = '--><?php //echo $about;?><!--';"//></td>-->
            </tr>
            <tr><td>&nbsp;</td></tr>
            <tr><td>&nbsp;</td></tr>
            <tr>
                 <th><label for="oldPW">Old Password *required*:</label></th>
                <td><input type="password" id="oldPW" name="oldPW" /></td>
            </tr>
            <tr>
                 <th><label for="password">New Password:</label></th>
                <td><input type="password" id="password" name="password" /></td>
            </tr>
            <tr>
                 <th><label for="confirm">Confirm Password:</label></th>
                <td><input type="password" id="confirm" name="confirm" /></td>
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


<script type='text/javascript' language="javascript">
function myPWValidate(formName, arg1, arg2, arg3){
//    if(oldPWValidate(formName, arg1)) alert("OLDPW Pass"); else alert("OLDPW FAIL");
//    if(newPasswordValidate(formName, arg2, arg3)) alert("NEWPW PASS"); else alert("NEWPW FAIL");
    if (oldPWValidate(formName, arg1) && newPasswordValidate(formName, arg2, arg3)){
        alert("Profile Updated");
        document.getElementById(formName).submit();
	    return true;
    }
    return false
}
function oldPWValidate(formName, arg1){
    var fields = new Array();	//create an array to store all of the field names

	fields[0] = arg1;

	var frm = formName		//Store the name for the form

    if(document.getElementById(fields[0]).value == ""){
        alert("Please enter an Old Password and try again");
        document.getElementById(fields[0]).value = "";
        document.getElementById(fields[0]).focus();
        return false;
    }else if(document.getElementById(fields[0]).value != "<?php echo $_SESSION['pw'];?>"){
        alert("Old Password is Incorrect. Try again");
        document.getElementById(fields[0]).value = "";
        document.getElementById(fields[0]).focus();
        return false;
    }
	return true;
}
function newPasswordValidate(formName, arg1, arg2){
    var fields = new Array();	//create an array to store all of the field names

	fields[0] = arg1;
	fields[1] = arg2;

    var frm = formName		//Store the name for the form

    if(document.getElementById(fields[1]).value != document.getElementById(fields[0]).value){
		alert("Your password and confirmation don't match.");
		document.getElementById(fields[1]).value = "";
		document.getElementById(fields[0]).value = "";
		document.getElementById(fields[0]).focus();
		return false;
	}
	return true;
}
</script>
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

onfocus="if (this.value == 'zip') this.value = '';"
onblur="if (this.value == '') this.value = 'zip';"
ondblclick="value=''"

<input type="text" name="Zip" value=" Zip" size="5" onfocus="value=''" maxlength="5"> 
			-->
