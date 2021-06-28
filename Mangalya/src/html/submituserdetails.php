<?php
require 'config.php';
?>
<?php

$name = $_POST["fname"].' '.$_POST["lname"];
$nic = $_POST["psw"];
$email = $_POST["email"];
$package= $_POST["p"];
$date = $_POST["wedd"].'-'.$_POST["wedm"].'-'.$_POST["wedy"];
$status = "Pending";

$sql = "INSERT INTO packageusers(Name,NIC,Email,Package,Requirements,WeddingDate,Status)
VALUES ('$name', '$nic', '$email','$package','-','$date','$status')";

if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
echo 'alert("Succesfully Recorded!")';
echo '</script>';
  echo'<script> window.location="paymentplan.html"; </script> ';
} else {
  echo "Error: ". $conn->error;
}
$conn->close();
?>