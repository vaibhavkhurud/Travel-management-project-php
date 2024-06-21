<?php
session_start();
require('connection.php');
include('login_register.php');


if(isset($_POST['book']))
{
   //$name = $_POST['name'];
   //$email = $_POST['email'];
   //$phone = $_POST['phone'];
   $address = $_POST['address'];
   $destination = $_POST['destination'];
   $package = $_POST['package'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];
   $status=1;

   $query = "INSERT INTO `booking`(`uid`,`address`, `destination`, `package`, `arrivals`, `leaving`,`status`) VALUES ( '".$_SESSION['uid']."','$address','$destination','$package','$arrivals','$leaving','$status')";

   $result=mysqli_query($con,$query);

   echo"
   <script>alert('Booking Successful झालं ना शेठ...👌');
    window.location.href='index.php';
   </script>
";
//    header('location:booking.php');

}
else
{
    echo "somrthing went wrong";
}

?>