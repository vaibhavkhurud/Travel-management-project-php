<?php
include('connection.php');

 $Srno = $_GET['srno'];
mysqli_query($con,"DELETE FROM `location` WHERE  srno='$Srno'");
header('location:manage-location.php'); 
?>
