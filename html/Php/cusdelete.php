<?php
require 'config.php';
?>
<?php
$delete = $_POST["delete"];

$sql = "DELETE FROM customers WHERE NIC=$delete";
if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
echo 'alert("Succesfully Deleted!")';
echo '</script>';
  echo'<script> window.location="../Customer.php"; </script> ';
}
$conn->close();

?>