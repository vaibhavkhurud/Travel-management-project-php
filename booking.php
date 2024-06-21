<?php
 require('connection.php'); 
 session_start();

 $query = "SELECT *FROM package";
 $package = $con->query($query);
 
 $query2 = "SELECT *FROM location";
 $location = $con->query($query2);
 
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
    <!-- <link rel="stylesheet" href="css/style1.css"> -->
    <link rel="stylesheet" href="css/pkg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <style>
        .book-body{
            background-color: #191919;
            color: white;
        }

    </style>
</head>

<body class="book-body">
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

    <section class="booking">
            <form action="book_form.php" method="post" class="book-form ">
                <h3>Book <span class="here">Now</span></h3>

                <div class="flex">
                    <!-- <div class="inputBox">
                        <span>Name :</span>
                        <input type="text" placeholder="Enter your name" name="name" required>
                    </div>
                    <div class="inputBox">
                        <span>Email :</span>
                        <input type="email" placeholder="Enter your email" name="email" required>
                    </div>
                    <div class="inputBox">
                        <span>Phone :</span>
                        <input type="number" placeholder="Enter your Phone Number" name="phone" required>
                    </div> -->
                    <div class="inputBox">
                        <span>Address :</span>
                        <input type="text" placeholder="Enter your Address" name="address" required>
                    </div>
                       
                    <div class="inputBox">
                    
                        <span>Destination :</span>

                      

                        <select id="Destination" name="destination" required>
                            <option value=""  class="opt"> Select Destination</option>
                            <!-- <option value=""  class="opt"> Raigad</option> -->
                        <?php
                        while($data2 = mysqli_fetch_assoc($location)){
                            ?>

                            <option value="<?php echo $data2['loc_name']; ?>"  class="opt"> <?php echo $data2["loc_name"]; ?></option>
                           
                            
                        <?php }
                        ?>

                        </select>

                    </div>
                        
                    <div class="inputBox">
                        <span>Select Package :</span>
                        <select  id="Destination" name="package" required>
                            <option value=""  class="opt"> Select Package</option>
                            <?php
                        while($data = mysqli_fetch_assoc($package)){
                            ?>
                            <option value=<?php echo $data['pkg_name'];?> class="opt"><?php echo $data['pkg_name']; ?>-Rs.<?php echo $data['price']; ?>/-</option>
                            <?php } ?>
                                                    

                        </select>
                    </div>


                    <div class="inputBox">
                        <span>Arrivals :</span>
                        <input type="date" name="arrivals" required>
                    </div>
                    <div class="inputBox">
                        <span>Leaving :</span>
                        <input type="date" name="leaving" required>
                    </div>
                    <!-- <div class="inputBox">
                        <span>Status :</span>
                        <input type="hidden" name="leaving" required>
                    </div> -->
                </div>
                <button class="bookbtn" name="book">Book now</button>
            </form>
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

<!-- Javascript -->
<script>
    function validateform(){ 
        var tel=document.getElementById("phonenum").value;  

        if(tel.length<10){  
            alert("Phone number must be of atleast 10 digits!");  
            return false;  
        } else if(isNaN(tel)){
            alert("Phone number should not include character!");
            return false;
        }
        return true;
}  
</script>

</body>
</html>