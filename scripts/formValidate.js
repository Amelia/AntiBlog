/*
*	formValidate.js
*	Author:		Michael Glitzos
*	Date-Started:	4/19/2011
*	Description:
------------------------------------------------
	This script is designed to check through specified form elements on a
	page and break the submit operation until the required conditions are
	met
*/

function formValidate(formName, arg1, arg2, arg3){
	var fields = new Array();	//create an array to store all of the field names

	fields[0] = arg1;
	fields[1] = arg2;
	fields[2] = arg3;

	var frm = formName		//Store the name for the form

	for(i = 0; i < fields.length; i++){
		if(document.getElementById(fields[i]).value == ""){
			alert("You did not enter a " + fields[i]+".\n Please enter a " + fields[i] + " and try again");
			document.getElementById(fields[i]).value = "";
			document.getElementById(fields[i]).focus();
			return false;
		}
	}
	document.getElementById(frm).submit();
	return true;
}
