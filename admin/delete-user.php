<?php
include('connection.php');

 $id = $_GET['uid'];
mysqli_query($con,"DELETE FROM `register_user` WHERE  uid='$id'");
header('location:manage-users.php'); 
?>