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
    <title>सह्याद्री Travels</title>
    <link rel="icon" href="./files/logo1.png">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ranga:wght@400;700&display=swap');
    </style>

</head>

<body>


    <!-- Background Video & Header -->
    <header>
        <div class="banner">
            <video src="./files/bg.mp4" type="video/mp4" autoplay muted loop></video>

            <!-- Header -->

            <div class="content" id="home">
                <nav>
                    <img src="./files/logo1.png" class="logo" title="सह्याद्री Travels"><span>
                        <h4>सह्याद्री  </h4> Travels
                    </span>

                    <ul class="navbar">
                        <li>


                            <a href="#home">Home</a>
                            <a href="#locations">Locations</a>
                            <a href="#package">Packages</a>
                            <a href="./about.html">About Us</a>
                            <a href="./contact.php">Contact Us</a>
                            <?php
                            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                               echo
                              ' <a href="./my-booking.php">My Booking</a> 
                               <a href="./logout.php">Logout</a>
                               
                               ';

                                // echo "<a href='./my-booking.php'>My Booking</a>";
                                // echo "<a href='./logout.php'>Logout</a>";
                                
                            } else {
                                echo "<a href='./login.php'>Login</a>
                                <a href='./register.php'>Register</a>";

                            }

                            ?>
                        </li>






                        <!-- </ul>
                <button type='button' class="ll" onclick="popup('login-popup')">LOGIN</button>
                <button type='button' class="l" onclick="popup('register-popup')">REGISTER</button> -->


                </nav>

                <div class="title">
                    <h1><span>सह्याद्री</span> TRAVELS</h1>
                    <p>Plan your trip with us and travel around the world with the most affordable packages!</p>

                    <?php
                    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                        echo "<span><a href='./booking.php' class='button'>Book Now</a></span>";
                    } else {
                        echo "<span><a href='./login.php' class='button bt'>Login Now!</a></span><a href='./register.php'
                        class='button bt'>Register Now!</a>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>

    <!-- login & registration -->

    <!-- Services -->

    <section class="container">
        <div class="text">
            <h2>We have the best services available for you!</h2>
        </div>
        <div class="rowitems">
            <div class="container-box">
                <div class="container-image">
                    <img src="./files/1a.jpg">
                </div>
                <h4>Flight Services</h4>
                <p>Arrival and Departure</p>
            </div>

            <div class="container-box">
                <div class="container-image">
                    <img src="./files/2a.jpg">
                </div>
                <h4>Food Services</h4>
                <p>Catering</p>
            </div>

            <div class="container-box">
                <div class="container-image">
                    <img src="./files/3a.jpg">
                </div>
                <h4>Travel Services</h4>
                <p>Pick-up/drop</p>
            </div>

            <div class="container-box">
                <div class="container-image">
                    <img src="./files/4a.jpg">
                </div>
                <h4>Hotel Services</h4>
                <p>Check-in/out</p>
            </div>

        </div>

        </div>

    </section>

    <!-- Locations -->

    <section class="locations" id="locations">
        <div class="package-title">
            <h2>Locations</h2>
        </div>


        <div class="location-content">
            <!-- <a href="./locations.php#Raigad">
                <div class="col-content">
                    <img src="./files/l1.jpg" alt="">
                    <h5>Maharashtra</h5>
                    <p>Rajgad Fort</p>
                </div>
            </a> -->
        <?php

while($data = mysqli_fetch_assoc($location)){
    ?>

            <a href="./locations.php#<?php echo $data["loc_name"]; ?>">
                <div class="col-content">
                <img src="./files/<?php echo $data["photo"]; ?>" alt="">
                    <h5><?php echo $data["state"]; ?></h5>
                    <p><?php echo $data["loc_name"]; ?></p>
                </div>
            </a>
            <?php } ?>



<!-- 
            <a href="./locations.php#Shivneri">
                <div class="col-content">
                    <img src="./files/l2.jpg" alt="">
                    <h5>Maharashtra</h5>
                    <p>Shivneri Fort</p>
                </div>
            </a>

            <a href="./locations.php#Panhala">
                <div class="col-content">
                    <img src="./files/l3.jpg" alt="">
                    <h5>Maharashtra</h5>
                    <p>Panhala Fort</p>
                </div>
            </a>

            <a href="./locations.php#Harishchandragad">
                <div class="col-content">
                    <img src="./files/l4.jpg" alt="">
                    <h5>Maharashtra</h5>
                    <p>Harishchandragad</p>
                </div>
            </a>

            <a href="./locations.php#Pratapgad">
                <div class="col-content">
                    <img src="./files/l5.jpg" alt="">
                    <h5>Maharashtra</h5>
                    <p>Pratapgad Fort</p>
                </div>
            </a>

            <a href="./locations.php#Torna">
                <div class="col-content">
                    <img src="./files/l6.jpg" alt="">
                    <h5>Maharashtra</h5>
                    <p>Torna Fort</p>
                </div>
            </a>

            <a href="./locations.php#Sindhudurg">
                <div class="col-content">
                    <img src="./files/l7.jpg" alt="">
                    <h5>Maharashtra</h5>
                    <p>Sindhudurg Fort</p>
                </div>
            </a>

            <a href="./locations.php#Lohagad">
                <div class="col-content">
                    <img src="./files/l8.jpg" alt="">
                    <h5>Maharashtra</h5>
                    <p>Lohagad Fort</p>
                </div>
            </a>
        </div> -->
        
    </section>

    <!-- Packages -->

    <section class="package" id="package">
        <div class="package-title">
            <h2>Packages</h2>
        </div>

        <div class="package-content">
<?php

$query = "SELECT *FROM package";
 $package = $con->query($query);
?>


<?php

while($data = mysqli_fetch_assoc($package)){
    ?>
                        <div class="box">
                            <div class="image">
                            <img src="./files/<?php echo $data["photo"]; ?>" alt="">

                                <h3>Rs.<?php echo $data['price']; ?>/-</h3>
                            </div>
            
                            <div class="dest-content">
                                <div class="location">
                                    <h4><?php echo $data['pkg_name']; ?></h4>
                                    <ul class="pac-details">
                                        <li><?php echo $data['description']; ?></li>
                                        <li><?php echo $data['description2']; ?></li>
                                        <li>Free photo Session</li>
                                        <li>Friendly Tour Guide</li>
                                        <li>24/7 Customer Help Center</li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <?php
}
 ?>






    </section>
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

                <div class="footlinks fl">
                    <h4>Connect</h4>
                    <div class="social">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-linkedin'></i></a>

                    </div>
                </div>

            </div>
        </div>

        <div class="end">
            <p>Copyright © 2024 <b class="orange">सह्याद्री</b> Travels All Rights Reserved.<br>Website developed by: Vaibhav & Sarthak</p>
        </div>
    </section>
    <a href="#" class="top">Back to Top &#8593;</a>


    <script>
        function popup(popup_name) {
            get_popup = document.getElementById(popup_name);
            if (get_popup.style.display == "flex") {
                get_popup.style.display = "none";
            }
            else {
                get_popup.style.display = "flex";
            }
        }
    </script>
</body>

</html>