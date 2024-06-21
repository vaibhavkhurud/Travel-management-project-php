<?php
session_start();
include('connection.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../files/logo1.png">


    <title>Add Packages</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php //include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Package 
                            <a href="manage-pkg.php" class="btn btn-success float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label>Package Name</label>
                                <input type="text" name="pkg_name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Package Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Package Description 1</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Package Description</label>
                                <input type="text" name="description2" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <label>Package Photo</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="upload" class="btn btn-primary">Add Package</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
if(isset($_POST['upload']))

{
    
    $img_loc=$_FILES['photo']['tmp_name'];
    $img_name=$_FILES['photo']['name'];
    $pkg_name=$_POST['pkg_name'];
    $img_ext=pathinfo($img_name,PATHINFO_EXTENSION);

    $img_des="../files/".$pkg_name.".".$img_ext;

    if( ($img_ext!='jpg') && ($img_ext!='png') && ($img_ext!='jpeg') &&  ($img_ext!='webp')) 
    {

        echo "<script>alert('Invalid Image Extention');</script>";
        exit();
    }

    
    $query="INSERT INTO `package`(`pkg_name`, `price`, `description`, `description2`, `photo`) VALUES ('$_POST[pkg_name]','$_POST[price]','$_POST[description]','$_POST[description2]','$img_des')";
    
    if( mysqli_query($con,$query))
    {
       move_uploaded_file($img_loc,$img_des);
       echo "<script>alert('Image Uploaded Successfully');</script>";
       
    }
     else
     {
        
        echo "<script>alert('Image Uploaded Successfully');</script>";
     }
    
    
}
?>