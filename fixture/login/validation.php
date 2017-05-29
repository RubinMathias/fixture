<?php
$val = $_GET['value'];
$field = $_GET['field'];

if ($field == "name") {
	if (strlen($val) < 3) {
		echo 'Too short';
	} else {
		echo '<label class = "text-success">Valid</label>';
	}
}
if ($field == "last_result") {
	if (strlen($val) < 3) {
		echo 'Too short';
	} else {
		echo '<label class = "text-success">Valid</label>';
	}
}

if($field == "usn_result"){
	if(strlen($val) < 10  ){
		echo 'Too short USN';
	}
	elseif (strlen($val)>10) {
		echo "Too long USN";
	}
	elseif(!preg_match("/^[a-z\d_]{10,10}$/i", $val))
	{
		echo 'Invalid USN';
	}
	
	else{
		echo '<label class = "text-success">Valid</label>';
	}
}

if($field == "lastname_result"){
	if(strlen($val) < 2){
		echo 'Invalid';
	}else{
		echo '<label class = "text-success">Valid</label>';
	}
}

if ($field == "email_result") {
	if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $val)) {
		echo 'Invalid email';
	} else {
		echo '<label class = "text-success">Valid</label>';
	}
}

if($field == "dept_result"){
	if(strlen($val) < 2){
		echo 'Invalid';
	}else{
		echo '<label class = "text-success">Valid</label>';
	}
}

if($field == "college_result"){
	if(strlen($val) < 2){
		echo 'Invalid';
	}else{
		echo '<label class = "text-success">Valid</label>';
	}
}

if($field == "ph_result"){
	
	if(!preg_match("/^\d*(?:\.\d{1,2})?$/", $val))
	{
		echo 'Invalid';
	}
	elseif(strlen($val) < 10){
		echo 'Invalid Contact no';
	}
	elseif(strlen($val)>10) {
	# code...
	echo 'Invalid Contact no';
}
	else{
		echo '<label class = "text-success">Valid</label>';
	}
}

?>