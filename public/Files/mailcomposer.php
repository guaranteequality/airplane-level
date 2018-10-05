<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$mainreceptance=$_POST["mainreceptance"];
$mailsubject=$_POST["mailsubject"];
$mailbody=$_POST["mailbody"];

$sql = "INSERT INTO emailinfo(toman,subject,body) VALUES ('$mainreceptance','$mailsubject','$mailbody');";
$result = $conn->query($sql);
$sss=0;
if($result){
	$sss=1;
}
echo $sss;
$conn->close();
?>