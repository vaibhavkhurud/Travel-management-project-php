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


    <title>Manage Package</title>
    <style>
        .back{
            position:  absolute;
            right: 20vh;
        }
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
                        <h4>Package Details
                            <a href="add-package.php" class="btn btn-primary float-end ml-2">Add Package</a>
                            <a href="dashboard.php" class="btn btn-success float-end back">Back</a>
                        </h4>
                    </div>
                    <div class="data">

                        <table >
                            <thead>
                                <tr>
                                    <th>pkg_id.</th>
                                    <th>Package Name</th>
                                    <th>Package Price</th>
                                    <th>Package Description 1</th>
                                    <th>Package Description 2</th>
                                    <th>Photo</th>
                                    <th colspan="2">Action</th>
                                    <!-- <th>Delete</th> -->
                                    
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sr=1;
                                    $query="SELECT * FROM `package`";
                                    $result = mysqli_query($con,$query);
                                    while($row_fetch=mysqli_fetch_assoc($result)) 
                                    {
                                        echo "
                                        <tr>
                                        <td>$sr<?td>
                                        <td>$row_fetch[pkg_name]<?td>
                                        <td>$row_fetch[price]<?td>
                                        <td>$row_fetch[description]<?td>
                                        <td>$row_fetch[description2]<?td>
                                        <td><img src='$row_fetch[photo]' height='150px' width='150px'></td>
                                        <td><a href='update-pkg.php? pkg_id= $row_fetch[pkg_id]' class='btn btn-danger'>Update</a></td>
                                        <td><a href='delete-pkg.php? pkg_id= $row_fetch[pkg_id]' class='btn btn-danger'>Delete</a></td>

                                       
                                    
                                    
                                        
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