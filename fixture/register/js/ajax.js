function validForm() {
	var Name = document.getElementById("Name").value;
	var Password = document.getElementById("Password").value;
	var cpass = document.getElementById("cpass").value;
	var League = document.getElementById("League").value;
	if (name == '' || pass == '' || cpass == '' || usn == '' ||email == '' ||dob == '') {
		alert("Complete all the required fields");
	} else {
		var Name1 = document.getElementById("name_result");
		var Password = document.getElementById("pass_result");
		var cpass1 = document.getElementById("cpass_result");
		var League1 = document.getElementById("League_result");
		if (Name1.innerHTML == 'Must be valid' || Password1.innerHTML == 'Password too short' || cpass1.innerHTML == 'Password too short' || League1.innerHTML == 'Invalid league') {
			alert("Complete valid information");
		} else {
			document.getElementById("regForm").submit();
		}
	}
}

function validate(field, value) {
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	} else { 
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
			document.getElementById(field).innerHTML = "Validating..";
		} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById(field).innerHTML = xmlhttp.responseText;
		} else {
			document.getElementById(field).innerHTML = "Error Occurred. <a href='reg.php'>Reload Or Try Again</a> the page.";
		}
	}
	xmlhttp.open("GET", "validation.php?field=" + field + "&value=" + value, true);
	xmlhttp.send();
}