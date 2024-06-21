<?php

$con=mysqli_connect("localhost","root","","travel");

if(mysqli_connect_error()){
    echo"<script>alert('cannot connect to the database');</script>";
    exit();  
}


?>