<?php
session_start();
if(!isset($_SESSION["uid"])){
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    div.data{
  padding: 30px 60px;

}

div.data table{
  width: 100%;
  border: 2px solid black;
  text-align: center;
}
table,table td,table tr,table th{
  border: 2px solid black;
  padding: 10px 20px;
  border-collapse:collapse ;
}

table thead{
  background-color: darkcyan;
  color: white;
}
</style>
</head>
<body><div class="container mt-4">

        

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Booking History
                    
                    <a href="index.php" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="data">

                <table >
                    <thead>
                        <tr>
                            <th>UserId</th>
                            <!-- <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th> -->
                            <th>Address</th>
                            <th>Destination</th>
                            <th>Package</th>
                            <th>Arrivals</th>
                            <th>Leaving</th>
                            <th>status</th>
                            <th colspan="2">Action</th>
                            <!-- <th>Delete</th> -->
                            
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    include 'connection.php';
                    $uid = $_SESSION["uid"];
                    $sql = "SELECT * FROM booking WHERE uid = '$uid'";
                    $result = $con->query($sql);
                    if($result->num_rows > 0){
                        while($row_fetch = $result->fetch_assoc()){
                            $bookid = $row_fetch['BookingId'];
                            $address = $row_fetch['address'];
                            $description = $row_fetch['destination'];
                            $package = $row_fetch['package'];
                            $arrivals = $row_fetch['arrivals'];
                            $leaving = $row_fetch['leaving'];
                          
                            $status = $row_fetch['status'];
                    ?>
                    <tr>
                        <td><?php echo $bookid; ?></td>
                        <td><?php echo $address; ?></td>
                        <td><?php echo $description; ?></td>
                        <td><?php echo $package; ?></td>
                        <td><?php echo $arrivals; ?></td>
                        <td><?php echo $leaving; ?></td>
                        <td><?php if( $status ==1){
                            echo 'Pending';
                            
                        }
                        else if($status ==2)
                        {
                            echo 'Confirm';

                        } 
                        else if($status ==3)
                        {
                            echo 'Cancle';
                        }
                        
                        
                        ?></td>

<td>
                                          <a href="my-booking.php?bkid=<?php echo $row_fetch['BookingId']; ?>" >cancle</a>
                                         </td>

                    </tr>


                        <?php
                        }
                    }?>

                    
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>
    
</body>
</html>

<?php 
// Cancle

if(isset($_REQUEST['bkid'])){
    $bid = intval($_GET['bkid']);
    $st = 3;
    $sql = "UPDATE booking SET status=$st WHERE  BookingId= $bid";
    $result=mysqli_query($con,$sql);

    echo"
    <script>alert('Booking cancle');
     window.location.href='my-booking.php';
    </script>
 ";

 
 }



?>