<?php
require 'Php/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title> | TAGMS | </title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/Styles.css">
    <link rel="stylesheet" href="../css/Admin.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container">

        <div class="navigation">

            <div class="left">

                <div class="navlink">
                    <div class="index">
                    <a href="Customer.php">Customers</a>
                    </div>
                </div>
                                  
                <div class="navlink">
                    <div class="payment">
                    <a href="Admin.php">Job Applicants</a>
                    </div>
                </div>
                
                <div class="navlink">
                    <div class="work">
                    <a href="Pay.php">Payment Details</a>
                    </div>
                </div>

                <div class="navlink">
                    <div class="work">
                    <a href="#">Order Details</a>
                    </div>
                </div>


                 <div class="navlink">
                    <div class="work">
                    <a href="Home.html">Logout</a>
                    </div>
                </div>

            </div> 
            <div class = "logo">
                <img src="../images/logo.png" >
            </div> 

            <div class="slogan">
                <h2>Think Different.....</h2>
            </div>
        </div>
 <br>
  <br>
<div class="admin">
  <center>
  <h1 style="color:rgb(0, 153, 255);font-family: Courier, monospace;">Order Details</h1>
  </center>

  <?php require "Php/config.php";

$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

echo "<table border='5'; align = 'center'; width = 50%; height = 20%;>
		<tr>
			<th>Ordertype</th>
      <th>JobNo</th>
			<th>Dimensions</th>
			<th>Deadline</th>
			<th>No of Units</th>
      <th>Status</th>
		</tr>
	";

if ($result->num_rows > 0){
	//output data of each row
	while($row = $result->fetch_assoc()){
	echo"<tr>";
	echo"<td>".$row["ordertype"]. "</td><td>".$row["jobNo"]. "</td><td>" . $row["dimensions"]. "</td><td>" . $row["deadline"]. "</td><td>" . $row["noOfUnits"]. "</td><td>" . $row["Status"]. "</td>";
	}
	}else{
		echo "<td colspan = '6' align = 'center'>  0 results </td>";
	}
		echo"</tr>";
		$conn->close();
?>
  <center>
<form  method = "post" action = "Php/ordupdate.php">
    <h4>Enter Order No. to Update Status: <input type = "text" style= "background-color:#ff9966;" name = "update" required placeholder = "Enter Job No.">
    <select name="stat" style= "background-color:#cccc00;">
  <option value="Pending">Pending</option>
  <option value="Finished">Finished</option>
  </select>
   <input type = "submit" value = "Update" name = "subu" style= "background-color:#33cc33;"></h4>
    </center>  
   </form>
   <center>

    <form  method = "post" action = "Php/orddelete.php">
    <h4>Enter Order No. to delete Status: <input type = "text" style= "background-color:#ff9966;" name = "delete" required placeholder = "Enter Job No.">
   <input type = "submit" value = "Delete" name = "subu" style= "background-color:#33cc33;"></h4>
  </center>  
   </form>
</div>
</body>
</html>