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
	
	$id=$_POST["id"];
	
	$sql = "update emailinfo set type='0' where id='$id'";
	$result = $conn->query($sql);
	
	$i=0;
	if($result->num_rows > 0){
		$i=1;
	}
    echo $i;
	//echo $sss;
	$conn->close();
?>