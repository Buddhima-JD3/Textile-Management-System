<?php
require 'config.php';
?>
<?php
$update = $_POST["update"];
$status = $_POST["stat"];

$sql = "UPDATE orders SET Status='$status' WHERE jobNo='$update'";
if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
echo 'alert("Succesfully Updated!")';
echo '</script>';
  echo'<script> window.location="../Orderdet.php"; </script> ';
}
$conn->close();
?>