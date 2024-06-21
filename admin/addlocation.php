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


    <title>Add Location</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php //include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Location 
                            <a href="manage-location.php" class="btn btn-success float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label>Location State</label>
                                <input type="text" name="state" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Location Name</label>
                                <input type="text" name="loc_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Location Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Virtual Link</label>
                                <input type="text" name="vr" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <label>Location Photo</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="upload" class="btn btn-primary">Add Location</button>
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
    $loc_name=$_POST['loc_name'];
    $img_ext=pathinfo($img_name,PATHINFO_EXTENSION);

    $img_des="../files/".$loc_name.".".$img_ext;

    if( ($img_ext!='jpg') && ($img_ext!='png') && ($img_ext!='jpeg') &&  ($img_ext!='webp')) 
    {

        echo "<script>alert('Invalid Image Extention');</script>";
        exit();
    }

    
    $query="INSERT INTO `location`(`state`, `loc_name`, `description`, `vr`, `photo`) VALUES ('$_POST[state]','$_POST[loc_name]','$_POST[description]','$_POST[vr]','$img_des')";
    
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