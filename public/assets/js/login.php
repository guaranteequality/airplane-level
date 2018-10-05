<?php
echo "111";
exit;
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

var_dump($userpass); exit;
$sql = "SELECT userid, passwd FROM userinfo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["userid"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>