<?php
 require('connection.php'); 
 session_start();

 $query = "SELECT *FROM location";
 $location = $con->query($query);
 
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Destinations</title>
    <link rel="icon" href="./files/logo1.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <style>
        .location-body{
            background-color: #191919;
            color: white;
        }
    </style>

</head>







<body class="location-body">
    <nav>
    <img src="./files/logo1.png" class="logo" title="सह्याद्री Travels"><span>
                        <h4>सह्याद्री  </h4> Travels
                    </span>
        <ul class="navbar">
            <li>
                <a href="./index.php">Home</a>
                <a href="./index.php#locations">Locations</a>
                <a href="./index.php#package">Packages</a>
                <a href="./about.html">About Us</a>
                <a href="./contact.php">Contact Us</a>
            </li>
        </ul>
    </nav>
<section class="location-section">
    <div class="location-heading">
        <h1>Discover The <span>Beautiful World</span></h1>
    </div>

    <div class="location-detail">
    <?php

while($data = mysqli_fetch_assoc($location)){
    ?>
    <h1><?php echo $data['loc_name']; ?></h1>
    
    <p><?php echo $data['description']; ?></p>
    <div class="location-img">
    <img src="./files/<?php echo $data["photo"]; ?>" alt="">
    </div>
    <a href="VR tours/shivneri.html" class="button">Virtual view</a>
    <?php
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) 
    {
        echo "<span><a href='./booking.php' class='button' id='Raigad'>Book Now</a></span>";
    }?>
 </div>

 <?php
}
 ?>










    <!-- Footer -->
<section class="footer">
    <div class="foot">
        <div class="footer-content">
            
            <div class="footlinks">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="./register.php">Register</a></li>
                    <li><a href="./about.html">About Us</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                </ul>
            </div>

            <div class="footlinks">
                <h4>Connect</h4>
                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram' ></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                    <a href="#"><i class='bx bxl-linkedin' ></i></a>
                    
                </div>
            </div>
            
        </div>
    </div>

    <div class="end">
    <p>Copyright © 2024 <b class="orange">सह्याद्री</b> Travels All Rights Reserved.<br>Website developed by: Vaibhav & Sarthak</p>
    </div>
</section>

<a href="#" class="top">Back to Top &#8593;</a>

</body>
</html>
