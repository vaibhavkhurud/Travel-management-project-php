<?php
    session_start();
   require('connection.php');
   
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="wpidth=device-wpidth, initial-scale=1">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../files/logo1.png">


    <title>Manage Booking</title>
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
<body>



    <div class="container mt-4">

        

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Booking Details
                            
                            <a href="dashboard.php" class="btn btn-danger float-end">Back</a>
                        </h4>
                    </div>
                    <div class="data">

                        <table >
                            <thead>
                                <tr>
                                    <th>UserId</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
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
                            $sr=0;
                            $query ="SELECT register_user.uid,register_user.name,register_user.email,register_user.phone,booking.BookingId, booking.address,booking.destination,booking.package,booking.arrivals,booking.leaving,booking.status\n"

                            . "FROM register_user,booking\n"
                        
                            . "WHERE register_user.uid = booking.uid";
                                    $result = mysqli_query($con,$query);
                                    while($row_fetch=mysqli_fetch_assoc($result)) 
                                    {
                                        $BookingId = $row_fetch['BookingId'];
                                        $name = $row_fetch['name'];
                                        $email = $row_fetch['email'];
                                        $phone = $row_fetch['phone'];
                                        $address = $row_fetch['address'];
                                        $destination = $row_fetch['destination'];
                                        $package = $row_fetch['package'];
                                        $arrivals = $row_fetch['arrivals'];
                                        $leaving = $row_fetch['leaving'];
                                       //$status = $row_fetch['status'];

                                        $sr=$sr+1;
                                     
                                ?>
                                <tr>
                                    <td><?php echo $sr ?></td>
                                    <td><?php echo $name ?></td>
                                    <td><?php echo $email ?></td>
                                    <td><?php echo $phone ?></td>
                                    <td><?php echo $address ?></td>
                                    <td><?php echo $destination ?></td>
                                    <td><?php echo $package ?></td>
                                    <td><?php echo $arrivals ?></td>
                                    <td><?php echo $leaving ?></td>
                                    <td>
                                        <?php 
                                        if($row_fetch['status']==1){
                                            echo 'Inprocess';
                                        }
                                        else if($row_fetch['status']==2){
                                            echo "Confirm";
                                        }
                                        else if($row_fetch['status']==3){
                                            echo "Cancle";
                                        }
                                        ?>
                                        </td>
                                       
                                        <td>
                                            <?php
                                            if($row_fetch['status']==1){
                                                echo "
                                          <a href='manage-booking.php?bkid=$row_fetch[BookingId]' class='btn btn-danger' >cancle</a><br>
                                          <a href='manage-booking.php?bcid= $row_fetch[BookingId]' class='btn btn-success'  >confirm</a>
                                        ";
                                            }
                                            else if($row_fetch['status']==2){
                                                echo  ' Confirm';
                                            }
                                            else{
                                                echo 'Cancle';
                                            }
                                         ?>
                                          </td> 
                                        
                                      
                                </tr>
                        
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    


</body>
</html>


<!-- #region -->
 
<?php 
// Cancle

if(isset($_REQUEST['bkid'])){
    $bid = intval($_GET['bkid']);
    $st = 3;
    $sql = "UPDATE booking SET status=$st WHERE  BookingId= $bid";
    $result=mysqli_query($con,$sql);

    echo"
    <script>alert('Booking cancle');
     window.location.href='manage-booking.php';
    </script>
 ";

 
 }



?>


<?php
if(isset($_REQUEST['bcid'])){
    $bid = intval($_GET['bcid']);
    $st = 2;
    $sql = "UPDATE booking SET status=$st WHERE  BookingId= $bid";
    $result=mysqli_query($con,$sql);

    echo"
    <script>alert('Booking Confirm');
     window.location.href='manage-booking.php';
    </script>
 ";

 
 }
?>


