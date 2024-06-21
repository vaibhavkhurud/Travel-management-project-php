<?php
require ('connection.php');
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <!-- <link rel="stylesheet" href="/style1.css"> -->
  <title>Admin Dashboard</title>
  <link rel="icon" href="./files/logo1.png">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="../files/logo1.png">

  <style>
    body {
      background-color: black;
    }
    h2{
      align-items: center;
      text-align: center;
      text-decoration: dashed;
      color: white;
      font-weight: bolder;
      font-size: 8vh;
    position: relative;
    top: 105px;
    }

    /* Card styling */
    .group {

      align-items: center;
      text-align: center;
      position: relative;
      top: 22vh;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      transition: 0.3s;
      border-radius: 5px;
      overflow: hidden;
       width: 300px;
      margin: 14px;
      display: inline-block;
    }


    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container {
      padding: 20px;
    }

    img {
      width: 100%;
      border-radius: 5px 5px 0 0;
    }
  </style>

</head>

<body>


  <?php



  ?>
  <nav>
    <img src="../files/logo1.png" class="logo" title="सह्याद्री Travels"><span>
      <h4>सह्याद्री </h4> Travels
    </span>
    <ul class="navbar">
      <li>
        <a href="./manage-users.php">Manage User</a>
        <a href="manage-booking.php">Manage Booking</a>
        <a href="manage-location.php">Location</a>
        <a href="manage-pkg.php">Packages</a>
        <a href="./logout.php">Logout - admin
         
        </a>

      </li>
    </ul>
  </nav>

  <h2>Admin Dashboard</h2>

  <!-- <div class="p-box">
        <div class="box"><a href="./manage-users.php">Total User</a>
               <?php
               //    $query= "SELECT * from register_user";
               //    $result = mysqli_query($con,$query);
               
               //    if($total = mysqli_num_rows($result)){
               //     echo '<h3>'.$total.'</h3>';
               //    }
               //    else{
               //     echo '<h3>No Data</h3>';
               //    }
               ?>
    </div> -->



  <div class="group">
    <div class="card">
      <img src="../files/Sinhagad.jpg" alt="Avatar"> <!-- Replace with your image URL -->
      <div class="container">
        <h4><b><a href="manage-users.php">Manage User</a></b></h4>
        <?php
        $query= "SELECT * from register_user";
        $result = mysqli_query($con,$query);

        if($total = mysqli_num_rows($result)){
          echo "<h3><b>Total User-$total</b></h3>";
       
        }
        else{
          echo ' <p>NO DATA</p>';
        }

        ?>
      </div>
    </div>
    <div class="card">
      <img src="../files/Sinhagad.jpg" alt="Avatar"> <!-- Replace with your image URL -->
      <div class="container">
        <h4><b><a href="manage-booking.php">Manage Booking</a></b></h4>
        <?php
        $query= "SELECT * from booking";
        $result = mysqli_query($con,$query);

        if($total = mysqli_num_rows($result)){
          echo "<h3><b>Total Booking-$total</b></h3>";
       
        }
        else{
          echo ' <p>NO DATA</p>';
        }

        ?>
       
      </div>
    </div>
    <div class="card">
      <img src="../files/Sinhagad.jpg" alt="Avatar"> <!-- Replace with your image URL -->
      <div class="container">
        <h4><b><a href="manage-location.php">Manage Location</a></b></h4>
        <?php
        $query= "SELECT * from location";
        $result = mysqli_query($con,$query);

        if($total = mysqli_num_rows($result)){
          echo "<h3><b>Total Location-$total</b></h3>";
       
        }
        else{
          echo ' <p>NO DATA</p>';
        }

        ?>
        
      </div>
    </div>
    <div class="card">
      <img src="../files/Sinhagad.jpg" alt="Avatar"> <!-- Replace with your image URL -->
      <div class="container">
        <h4><b><a href="manage-pkg.php">Manage Package</a></b></h4>
        <?php
        $query= "SELECT * from package";
        $result = mysqli_query($con,$query);

        if($total = mysqli_num_rows($result)){
          echo "<h3><b>Total Package-$total</b></h3>";
       
        }
        else{
          echo ' <p>NO DATA</p>';
        }

        ?>
      </div>
    </div>
  </div>
</body>

</html>