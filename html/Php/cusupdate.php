<?php
require 'config.php';
?>
<?php
$update = $_POST["update"];
$status = $_POST["stat"];

$sql = "UPDATE customers SET Status='$status' WHERE NIC='$update'";
if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
echo 'alert("Succesfully Updated!")';
echo '</script>';
  echo'<script> window.location="../Customer.php"; </script> ';
}
$conn->close();
?>