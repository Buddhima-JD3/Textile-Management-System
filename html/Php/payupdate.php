<?php
require 'config.php';
?>
<?php
$update = $_POST["update"];
$status = $_POST["stat"];

$sql = "UPDATE payment SET Status='$status' WHERE accountnum='$update'";
if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
echo 'alert("Succesfully Updated!")';
echo '</script>';
  echo'<script> window.location="../Pay.php"; </script> ';
}
$conn->close();
?>