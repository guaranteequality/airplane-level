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
	
	//$sessionemail=$_SESSION["email"];
	$id=$_POST["id"];
	//$userpass=$_POST["userpass"];
	
	$sql = "SELECT id,sender, subject,body,data FROM emailinfo where id='$id' and type='1'";
	$result = $conn->query($sql);
	$res=array();
	$i=0;
	if($result->num_rows > 0){
		while($row=$result->fetch_assoc()){
		
		$res=$row;
		$i++;	
		}
		//$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
		//echo json_encode($row);
	}
	echo json_encode($res);
	//echo $sss;
	$conn->close();
?>