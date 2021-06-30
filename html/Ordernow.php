<?php

if (isset($_POST["order"])) //check if send button clicked
{
    $ordertype = $_POST['ordertype']; //caputue values form form
    $jobno =  $_POST['jobno'];
    $dimensions =  $_POST['dimensions'];
    $deadline =  $_POST['deadline'];
    $units =  $_POST['units'];

    require 'Php/config.php';
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO orders(ordertype,jobNo,dimensions,deadline,noOfUnits) VALUES (?, ?, ?, ?, ?)"); //send values to database
    $stmt->bind_param("sissi", $ordertype ,$jobno,  $dimensions ,$deadline ,  $units );

    //  and execute
    $stmt->execute();

    $stmt->close(); //close statement
    $conn->close(); // close connection

    echo "<script> alert('Order Placed'); </script>";


}


?>

<!DOCTYPE html>
<html>
<head>
    <title> Order Now </title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/Styles.css">
    <link rel="stylesheet" href="../css/payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-image: url('../images/paymentbg.jpeg');">

    <div class="container">

        <div class="navigation">

            <div class="left">

                <div class="navlink">
                    <div class="index">
                    <a href="Home.html">Home</a>
                    </div>
                </div>
                
                <div class="navlink">
                    <div class="gallery">
                    <a href="Gallery.html">Gallery</a>
                    </div>
                </div>

                <div class="navlink">
                    <div class="products">
                    <a href="Products.html">Products</a>
                    </div>
                </div>
                   
                <div class="navlink">
                    <div class="payment">
                    <a href="Payment.php">Pay Now</a>
                    </div>
                </div>
                
                <div class="navlink">
                    <div class="work">
                    <a href="WorkwithUs.html">Work with Us</a>
                    </div>
                </div>

                <div class="navlink">
                    <div class="login">
                    <a href="Login.html">Login</a>
                    </div>
                </div>
                
                <div class="navlink">
                    <div class="about">
                    <a href="About.html">About Us</a>
                    </div>
                </div>

                <div class="navlink">
                    <div class="profiles">
                    <a href="Profile.html">Profiles</a>
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


   <br> <br> <br> <br>

        <div class="data">
            <h1>Enter your Order Details here</h1>
        </div>
    
        <form action="Ordernow.php" method="POST">
            <div class="container paymentForm">
                <h1>Order Now</h1>
                <p>Please fill this form to place a order</p>
                <hr>
    
                <label for="ordertype"><b>Enter Order Type</b></label>
                <input type="text" placeholder="Order Type" name="ordertype" required>
    
                <label for="jobno"><b>Enter Job no</b></label>
                <input type="text" placeholder="Job number" name="jobno"  required>
    
                <label for="dimensions"><b>Dimensions</b></label>
                <input type="text" placeholder="inches"  name="dimensions" required>

                <label for="deadline"><b>Deadline</b></label>
                <input type="date" placeholder="2020 xx xx" name="deadline"  required>


                <label for="units"><b>No. Of Units</b></label>
                <input type="text" placeholder="Units" name="units"  required>

                <hr>

                
    
                <button type="submit" name="order" class="payNowButton"> Order Now</button>
            </div>
    
    
            </form>



            <div style="height: 300px;"></div>


    <div class="footer">

        
                <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                <a href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="fa fa-twitter"></a>
                <a href="https://lk.linkedin.com/" class="fa fa-linkedin"></a>
                <a href="https://www.instagram.com/?hl=en" class="fa fa-instagram"></a>
                <a href="https://www.skype.com/en/" class="fa fa-skype"></a>
       
            <div class="footer-bottom">
        &copy;2020 TAGMS Pvt.Ltd. | All Rights Reserved |
        </div>
    </div>
       
</body>
</html>