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

$username=$_POST["username"];
$userpass=$_POST["userpass"];
$email=$_POST["email"];
$userid=$_POST["userid"];

$sql = "INSERT INTO userinfo (name,userid, passwd, email) VALUES ('$username','$userid', '$userpass', '$email');";
$result = $conn->query($sql);
$sss=0;
if($result){
	$sss=1;
}
echo $sss;
$conn->close();
?>