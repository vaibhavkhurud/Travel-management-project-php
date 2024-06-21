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
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../files/logo1.png">


    <title>Manage Users</title>
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
                        <h4>User Details
                            
                            <a href="dashboard.php" class="btn btn-success float-end">Back</a>
                        </h4>
                    </div>
                    <div class="data">

                        <table >
                            <thead>
                                <tr>
                                    <th>UserId</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th> Email</th>
                                    <th>Phone</th>
                                    <th colspan="2">Action</th>
                                    <!-- <th>Delete</th> -->
                                    
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sr=1;
                                    $query="SELECT * FROM `register_user`";
                                    $result = mysqli_query($con,$query);
                                    while($row_fetch=mysqli_fetch_assoc($result)) 
                                    {
                                        echo "
                                        <tr>
                                        <td>$sr<?td>
                                        <td>$row_fetch[name]<?td>
                                        <td>$row_fetch[username]<?td>
                                        <td>$row_fetch[email]<?td>
                                        <td>$row_fetch[phone]<?td>
                                        <td>
                                        <a href='manage-booking.php? uid= $row_fetch[uid]' class='btn btn-primary'>UserBooking</a> </td>
                                        <td><a href='delete-user.php? uid= $row_fetch[uid]' class='btn btn-danger'>Delete</a></td>
                                        
                                       
                                        
										
                                        " ;

                                        $sr=$sr+1;
                                    } 
                                ?>
                        
                                
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