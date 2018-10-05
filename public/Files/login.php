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

$userid=$_POST["username"];
$userpass=$_POST["userpass"];

$sql = "SELECT userid, passwd,email FROM userinfo where userid='$userid' and passwd='$userpass'";
$result = $conn->query($sql);
$sss=0;

//var_dump($result);exit;

if($result->num_rows > 0){
	$row=$result->fetch_assoc();
	$sss=1;
    $_SESSION["email"] = $row["email"];
	//echo $_SESSION["email"];
}
echo $sss;
$conn->close();
?>