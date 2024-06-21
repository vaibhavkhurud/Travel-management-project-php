<?php
include('connection.php');

 $Pkg_id = $_GET['pkg_id'];
mysqli_query($con,"DELETE FROM `package` WHERE  pkg_id='$Pkg_id'");
header('location:manage-pkg.php'); 
?>