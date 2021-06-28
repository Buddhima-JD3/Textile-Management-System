  <?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title> Mangalya </title>
 <link rel = "stylesheet" href = "../styles/styled.css">
 <link rel = "stylesheet" href = "../styles/header.css">
 <script src="../js/script.js"></script>
 <style>
 body{
 background-color:#fff2e6;
 }
 </style>
 </head>
 <body>
 <table class="tableTop" bgcolor="#ccddff">
    <tr>
        <th> <img src = "../images/logonew.png" class ="logo"> </th>
        <th class="tytle"> Welcome Planner..! </th>
    </tr>
 </table>

 <hr>
 <br>
 <center>
 <button style="padding: 15px 32px; background-color:#ffb366; border-radius: 4px; text-decoration:none;"><a href = "planner1.html"><b>Package Selected Users</b></a></button>
  <button style="padding: 15px 32px;  background-color:#ffb366; border-radius: 4px;  text-decoration:none;"><a href = "planner2.html"><b>Planning Partners</b></a></button>
  <button style="padding: 15px 32px; background-color:#ffb366; border-radius: 4px;  text-decoration:none;"><a href = "planner3.html"><b>Suggestions</b></a></button>
  <button style="padding: 15px 32px;  background-color:#ffb366; border-radius: 4px;  text-decoration:none;"><a href = "planner4.html"><b>Contacted Users</b></a></button
  <br>
  <br>
  <h2 style= "color:#000066; font-family:Verdana;">Package Selected Users</h2>
  </center>
  <br>
  <div>

<?php

  $sql = "SELECT Name,NIC,Email,Package,Requirements,WeddingDate,Status FROM packageusers";
 $result = mysqli_query($conn, $sql);
 echo '<table align = "center" border = "3" width = "70%" style = "color:black; background-color:#ffff66;">';
  echo '<tr><th align = "center"> <b> Name</b> </th>
   <th align = "center"> <b> National ID</b> </th>
  <th align = "center"> <b> Selected Package</b> </th>
  <th align = "center"> <b> Email</b> </th>
  <th align = "center"> <b> Selected Requirements</b> </th>
  <th align = "center"> <b> Status</b> </th>
   </tr>';
   if ($result-> num_rows > 0) {
    // output data of each row
    while($row = $result -> fetch_assoc()) {
        echo "<tr><td>" . $row["Name"]. "</td><td>". $row["NIC"]. "</td><td>". $row["Package"]. "</td><td>". $row["Email"]."</td><td>". $row["Requirements"]."</td><td>". $row["Status"]."<br><button>Update</button></td></tr>";
    }
 }else {
    echo "0 results";
}
echo '</table>';


   
  
   
    ?>
   </div>
   <br>
   <br>
   <br>
 
  <!--footer start-->
 <hr>
<link rel="stylesheet" href="../styles/foota.css">
<div class ="foota">
<center>
<br>
<div class="div-transbox">
<br>
<h3 a href="contact.html"> Contact Us </h3>
<p> +94 813 3454 <br>
mangalyaSL@gmail.com <br>
<h3 a href=""> About Us </h3><br>

<a href = "https://www.facebook.com" >
    <img class = "social" src="../images/fb.jpg"></a>
<a href = "https://www.twitter.com" >
    <img class = "social" src="../images/twitter.jpg"></a>
<a href = "https://www.youtube.com" > 
<img class = "social" src="../images/youtube.jpg"></a><br>

<h3 a href=""> Privacy Policy </h3>
<p class = "p2">copyright ? mangalya.com. All rights reserved.</p>
<img src="">
</div>
</center>
</div>

  </body>
 </html>
