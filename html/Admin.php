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
                    <a href="#">Job Applicants</a>
                    </div>
                </div>
                
                <div class="navlink">
                    <div class="work">
                    <a href="Pay.php">Payment Details</a>
                    </div>
                </div>

                <div class="navlink">
                    <div class="work">
                    <a href="Orderdet.php">Order Details</a>
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
  <h1 style="color:rgb(0, 153, 255);font-family: Courier, monospace;">Job Applicants</h1>
  </center>

  <?php require "Php/config.php";

$sql = "SELECT * FROM workdetails";
$result = $conn->query($sql);

echo "<table border='5'; align = 'center'; width = 75%; height = 20%;>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Gender</th>
			<th>Mobile Number</th>
			<th>Email Address</th>
			<th>Address</th>
			<th>DOB</th>
			<th>Job Type</th>
			<th>Status</th>
		</tr>
	";

if ($result->num_rows > 0){
	//output data of each row
	while($row = $result->fetch_assoc()){
	echo"<tr>";
	echo"<td>".$row["FirstName"]. "</td><td>" . $row["LastName"]. "</td><td>" . $row["Gender"]. "</td><td>" . $row["MobileNumber"]. "</td><td>" . $row["EmailAddress"]. "</td><td>" . $row["Address"]. "</td><td>" . $row["DOB"]. "</td><td>" . $row["JobType"]. "</td><td>" . $row["Status"]. "</td>";
	}
	}else{
		echo "<td colspan = '9' align = 'center'>  0 results </td>";
	}
		echo"</tr>";
		$conn->close();
?>
<center>
<form method = "post" action = "Php/jobupdate.php">
    <h4>Enter Phone Number to Update Status: <input type = "text" style= "background-color:#ff9966;" name = "update" required placeholder = "Enter Phone No.">
    <select name="stat" style= "background-color:#cccc00;">
  <option value="Approved">Approved</option>
  <option value="Dismissed">Dismissed</option>
  </select>
   <input type = "submit" value = "Update" name = "subu" style= "background-color:#33cc33;"></h4>
	</center>  
   </form>
   <center>
<form method = "post" action = "Php/jobdelete.php">
    <h4>Enter Phone Number to delete Status: <input type = "text" style= "background-color:#ff9966;" name = "delete" required placeholder = "Enter Phone No.">
   <input type = "submit" value = "Delete" name = "subu" style= "background-color:#33cc33;"></h4>
  </center>  
   </form>
  
</div>
</body>
</html>