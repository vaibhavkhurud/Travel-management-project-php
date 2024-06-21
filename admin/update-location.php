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


    <title>Update Location</title>
</head>
<body>

<?php
        include('connection.php');
        $Srno = $_GET['srno'];
        $location = mysqli_query($con,"SELECT * FROM `location` WHERE srno =$Srno");
        $data = mysqli_fetch_assoc($location);
        

?>

  
    <div class="container mt-5">

        <?php //include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Update Location 
                            <a href="manage-location.php" class="btn btn-success float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form  method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label>Location State</label>
                                <input type="text" value="<?php echo $data['state'] ?>" name="state" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Location Name</label>
                                <input type="text" value="<?php echo $data['loc_name'] ?>" name="loc_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Location Description</label>
                                <input type="text" value="<?php echo $data['description'] ?>" name="description" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Virtual Link</label>
                                <input type="text" value="<?php echo $data['vr'] ?>" name="vr" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <label>Location Photo</label>
                               <td> <input type="file" value="<?php echo $data['photo'] ?>" name="photo" class="form-control"><img src="<?php echo $data['photo'] ?>" width="75" alt=""></td>
                            </div>
                            <input type="hidden" name="srno" value="<?php  echo $data['srno']?>">
                            <div class="mb-3">
                                <button type="submit" name="update" class="btn btn-primary">Update Location</button>
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


    <!-- update backend -->
<?php
        if(isset($_POST['update']))
{
    $Srno = $_POST['srno'];
    $loc_state= $_POST['state'];
    $loc_name =$_POST['loc_name'];
    $description =$_POST['description'];
    $vr =$_POST['vr'];
    $photo =$_FILES['photo'];

    $img_loc=$_FILES['photo']['tmp_name'];
    $img_name=$_FILES['photo']['name'];
    //$loc_name=$_POST['loc_name'];
    $img_ext=pathinfo($img_name,PATHINFO_EXTENSION);
    $img_des="../files/".$loc_name.".".$img_ext;
    move_uploaded_file($img_loc,$img_des);


    /*echo $que1="UPDATE `location` SET `state`=' $loc_state',`loc_name`='$loc_name',`description`='$description',`vr`='$vr',`photo`='$img_des' WHERE srno ='$Srno' ";

    //mysqli_query($con,$que1);

   // header("location:manage-location.php");*/

   if(strlen($img_name)>0)
   {

       mysqli_query($con,"UPDATE `location` SET `state`=' $loc_state',`loc_name`='$loc_name',`description`='$description',`vr`='$vr',`photo`='$img_des' WHERE srno ='$Srno' ");
      header("location:manage-location.php");

   }
   else
   {  

   $aa="UPDATE `location` SET `state`=' $loc_state',`loc_name`='$loc_name',`description`='$description',`vr`='$vr' WHERE srno ='$Srno' ";
      
       mysqli_query($con,$aa);
     header("location:manage-location.php");

   }
}

?>