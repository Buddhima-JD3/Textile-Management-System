<html>
<body>
<?php require "config.php" ?>

<?php
@$gender =($_POST["gender"]);
@$type =($_POST["type"]);

$sql = "INSERT INTO workdetails (	FirstName,LastName,Gender,MobileNumber,EmailAddress,Address,DOB,JobType)
	VAlUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$gender."','".$_POST["mobile"]."','".$_POST["emailAdd"]."','".$_POST["addr"]."','".$_POST["dob"]."','".$type."')";
//echo($sql);
if ($conn->query($sql) === TRUE){
	echo'<script> window.location="../WorkwithUs.html"; </script> ';
}else{
	echo"Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();
?>

</body>
</html>