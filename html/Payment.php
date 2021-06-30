<?php

if (isset($_POST["payment"])) //check if send button clicked
{
    $name = $_POST['name']; //caputue values form form
    $accnum =  $_POST['accNumber'];
    $amount =  $_POST['amount'];
    $email =  $_POST['email'];

    require 'Php/config.php';
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO payment (name,accountnum,email,amount) VALUES (?, ?, ?, ?)"); //send values to database
    $stmt->bind_param("sssi", $name , $accnum , $email, $amount );

    //  and execute
    $stmt->execute();

    $stmt->close(); //close statement
    $conn->close(); // close connection

    echo "<script> alert('Payment Sent Successfully'); </script>";


}


?>

<!DOCTYPE html>
<html>
<head>
    <title> | TAGMS | </title>
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
                    <a href="#">Pay Now</a>
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
            <h1>Enter your Payment Details here</h1>
        </div>
    
        <form action="Payment.php" method="POST">
            <div class="container paymentForm">
                <h1>Payment Form</h1>
                <p>Please fill in this form to proceed to the payment.</p>
                <hr>
    
                <label for="email"><b>Enter Name</b></label>
                <input type="text" placeholder="Enter Name" name="name" id="name" required>
    
                <label for="accnum"><b>Enter Account Number</b></label>
                <input type="text" placeholder="Enter Account Number" name="accNumber" id="accNumber" required>
    
                <label for="amount"><b>Amount</b></label>
                <input type="text" placeholder="Amount LKR" name="amount" id="amount" required>

                <label for="psw-repeat"><b>Email</b></label>
                <input type="email" placeholder="example@gmail.com" name="email" id="email" required>

                <hr>

                <div class="icon-container">
                    <a href="#a"> <img src="../images/1.png" /></a>
                    <a href="#a"> <img src="../images/2.png" /></a>
                    <a href="#a"> <img src="../images/3.png" /></a>
                    <a href="#a"> <img src="../images/4.png" /></a>
                </div>
    
                <button type="submit" name="payment" class="payNowButton">Pay Now</button>
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