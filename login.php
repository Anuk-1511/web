<?php
  if(isset($_SESSION['login_user']))
  {
    header("location:profile.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <?php include 'head.php';?>
     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="stylelogin.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
	
<?php include 'navbar.php';?>
<div class="sign-in-form">
            <img src="pic.png">
            <form action="login.php" method="post">
                <input type ="text" placeholder="User Name" class="txt" name="username" required>
                <input type ="password" placeholder="password" class="txt" name="password" required>
                <input type="submit" name="submit" value="Sign In" class="btn1">
            
</div>
<?php include 'scripts.php';?>
</body>
</html>

<?php
    if (isset($_POST['submit']))
    {     
          include("config.php");
          session_start();
          $username=$_POST['username'];
          $password=$_POST['password'];
          $_SESSION['login_user']=$username; 
          $query = mysqli_query($link,"SELECT username FROM logins WHERE username='$username' and password='$password'");
          if (mysqli_num_rows($query) != 0)
            {
              echo "<script language='javascript' type='text/javascript'> location.href='profile.php' </script>";   
            }
          else
            {
              echo "<script type='text/javascript'>alert('User Name Or Password Invalid!')</script>";
             }
    }
 ?>
