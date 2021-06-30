<?php
require 'config.php';
?>
<?php
$update = $_POST["update"];
$status = $_POST["stat"];

$sql = "UPDATE workdetails SET Status='$status' WHERE MobileNumber='$update'";
if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
echo 'alert("Succesfully Updated!")';
echo '</script>';
  echo'<script> window.location="../Admin.php"; </script> ';
}
$conn->close();
?>