<?php
session_start();

// if (!isset($_SESSION['admin_logged_in'])) {
//     header("Location: login.php"); 
//     exit();
// }

include_once("connection.php");

if (isset($_POST['confirm'])) {
    $Bookingid = $_POST['Bookingid'];
    $sql = "UPDATE booking SET status = 'confirmed' WHERE id = $Bookingid";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Booking confirmed successfully.";
    } else {
        echo "Error confirming booking.";
    }
}

if (isset($_POST['cancel'])) {
    $Bookingid = $_POST['Bookingid'];
    $sql = "UPDATE bookings SET status = 'canceled' WHERE id = $Bookingid";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Booking canceled successfully.";
        header("Location: manage-booking.php");
    } else {
        echo "Error canceling booking.";
    }
}
?>
