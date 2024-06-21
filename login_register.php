<?php
require('connection.php');

session_start();


#login
if (isset($_POST['login']))
 {
    $query="SELECT * FROM `register_user` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
    $result=mysqli_query($con,$query);

    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $result_fetch=mysqli_fetch_assoc($result);
           if(password_verify($_POST['password'],$result_fetch['password']))
           {

            // echo"hello";
            #pass matched 
           $_SESSION['logged_in']=true;
         $_SESSION['uid']=$result_fetch['uid'];
           header("location: index.php");
           }
           else
           {
            #pass not matched
            echo"
            <script>alert('password Incorrect 😱 ');
             window.location.href='index.php';
            </script>
         ";
           }
        }
        else
        {
            echo"
        <script>alert('E-mail and username are not Registered...😢');
         window.location.href='index.php';
        </script>
     ";
        }
    }

    else
    {
        echo"
        <script>alert('cannot run query');
         window.location.href='index.php';
        </script>
     "; 
    }
}












#registration
if(isset($_POST['register']))
{
    $user_exist_query="SELECT * FROM `register_user` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result=mysqli_query($con,$user_exist_query);

    if($result)
    {
        if(mysqli_num_rows($result)>0)  #if username & email already taken
        {
            #user taken already taken username aani email
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username'])
            {
                #alredy taken username
                echo"
                 <script>alert('कोणाकडे तरी हे Username आहे..!😢 तुम्ही दुसरं try करा 😊');
                   window.location.href='index.php';
                 </script>
                ";
            }
            else
            {
                #already taken email
                echo"
                 <script>alert('कोणाकडे तरी ही E-mail आहे..!😢 तुम्ही दुसरी  try करा 😊');
                  window.location.href='index.php';
                 </script>
                ";
            }
        }
        else  # already no taken username & email
        {
            $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
           $query="INSERT INTO `register_user`(`name`, `username`, `email`,`phone`, `password`) VALUES ('$_POST[name]','$_POST[username]','$_POST[email]','$_POST[phone]','$password')";

           if(mysqli_query($con,$query)) #data insertedd
           {
            echo"
             <script>alert('Registration Successful झालं ना शेठ...👌');
              window.location.href='index.php';
             </script>
          ";
           }
           else   # data not inserted
           {
            echo"
            <script>alert('cannot run query');
            window.location.href='index.php';
            </script>
            ";
           }
        }
    }
    else
    {
        echo"
        <script>alert('cannot run query');
        window.location.href='index.php';
        </script>
        ";
    }


}



?>