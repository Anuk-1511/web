<!DOCTYPE html>
<?php
    if (isset($_POST['submit1']))
    {   
          include("connection.php");
          session_start();
          $username=$_POST['username'];
          $pwd=$_POST['pwd'];
          
          $_SESSION['login_user']=$username; 
          
          $query = mysqli_query($connect,"INSERT INTO logins ( username, password) VALUES ($username,$pwd)");
          if (mysqli_($connect,$query) !=0)
            {
              echo "<script language='javascript' type='text/javascript'> location.href='profile.php' </script>";   
            }
          else
            {
              echo "<script type='text/javascript'>alert('Retry!')</script>";
             }
    }
 ?>
 
<html lang="en">
<head>
     <link rel="stylesheet" type="text/css" href="stylesignup.css">
</head>
<body>
<?php include 'application.php';?>
</body>
</html>

