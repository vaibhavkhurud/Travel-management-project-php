
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Here</title>
    <link rel="icon" href="./files/logo1.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body class="register-body">

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

    <section class="registration">
        <div class="register-form">
           
           
            <form method="POST" action="login_register.php" class="rform">
                <h3>Register Here</h3>

                <label for="name">Name</label>
                <input type="text" placeholder="Name" name="name">

                <label for="name">Username</label>
                <input type="text" placeholder="Username" name="username">
        
                <label for="username">Email</label>
                <input type="text" placeholder="Email" name="email">
               
                <label for="phone">Phone No.</label>
                <input type="number" placeholder="Phone No." name="phone">
        
                <label for="password">Password</label>
                <input type="password" placeholder="Password" name="password">
               
        
                <button class="submitbtn" name="register">Register</button>
                <a href="./login.php">Login</a>
            
            </form>
        </div>
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
