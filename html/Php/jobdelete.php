<?php
require 'config.php';
?>
<?php
$delete = $_POST["delete"];

$sql = "DELETE FROM workdetails WHERE MobileNumber=$delete";
if ($conn->query($sql) === TRUE) {
  echo '<script language="javascript">';
echo 'alert("Succesfully Deleted!")';
echo '</script>';
  echo'<script> window.location="../Admin.php"; </script> ';
}
$conn->close();

?>