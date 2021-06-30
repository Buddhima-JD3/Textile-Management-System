<html>
<body>
<?php require "config.php" ?>

<p>You are succesfuuly registered with us.</p>

<?php

$sql = "INSERT INTO customers (Email,NIC,Password)
	VALUES ('".$_POST["email"]."','".$_POST["nic"]."','".$_POST["pwd"]."')";
//echo($sql);
if ($conn->query($sql) === TRUE){
	echo "NEW record created successfully";
	echo'<script> window.location="../Login.html"; </script> ';
}else{
	echo"Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

</body>
</html>