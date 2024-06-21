<?php 
require("connection.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Admin login </title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../files/logo1.png">


   
</head> 
<body>
 
    <form  method="post">
        <h3>Admin Login </h3>

        <label for="username">Username</label>
        <input type="text" placeholder="username" id="username" name="admin_username">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="admin_password">

        <button type="submit" name="login">Log In</button>
        <a class="back" href="../index.php">Back to home</a>
       
    </form>

<?php 
 
if(isset( $_POST['login'])){
    $query= "SELECT * FROM `admin` WHERE `admin_username`='$_POST[admin_username]' AND `admin_password`='$_POST[admin_password]'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
      session_start();
      $_SESSION['admin']=$_POST['admin_username'];
      header("location:dashboard.php");
    }
    else{
        echo "<script>alert('incorrect password')</script>";
    }
}

?>

</body>
</html>