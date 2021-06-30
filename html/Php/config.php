<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tagms";

//Create Connetion
$conn = new mysqli($servername, $username, $password, $dbname);
//Check COnnection
if($conn->connect_error){
	die("Connection failed: " .$conn->connect_error);
}

?>