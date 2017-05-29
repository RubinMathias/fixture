<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sport";

$connect = mysqli_connect("localhost", "root", "", "$dbname");
if(!empty($_POST))
{
 $output = '';
    $Name = mysqli_real_escape_string($connect, $_POST["Name"]);  
    $League = mysqli_real_escape_string($connect, $_POST["League"]);
    $Password = mysqli_real_escape_string($connect, $_POST["Password"]);  
   // echo $name, $usn, $college, $dept, $ph_no, $email;

    $query = "
    INSERT INTO user(Name, League, Password)  
     VALUES('$Name', '$League', '$Password')
    ";

   
    if(mysqli_query($connect, $query))
    {
    	echo"<h1>Registered</h1>";
         header("Location:../services.php");
    }

    
 }


 
 
?>
