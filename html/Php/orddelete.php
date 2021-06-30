<?php
require 'config.php';
?>
<?php
$delete = $_POST["delete"];

$sql = "DELETE FROM orders WHERE jobNo=$delete";
if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
echo 'alert("Succesfully Deleted!")';
echo '</script>';
  echo'<script> window.location="../Orderdet.php"; </script> ';
}
$conn->close();

?>