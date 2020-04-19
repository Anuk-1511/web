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
                <input type ="text" placeholder="User Name" class="txt" name="UserName">
                <input type ="email" placeholder="Email" class="txt" name="Email">
                <input type ="password" placeholder="Password" class="txt" name="Password">
                <input type ="password" placeholder="Confirm Password" class="txt" name="Cpass">
                <input type="submit" name="submit1" value="Sign In" class="btn1">
                <?php
      
      require_once('connection.php');

     if(isset($_POST['submit1']))
       {
           $UserName = mysqli_real_escape_string($con,$_POST['UserName']);
           $Email = mysqli_real_escape_string($con,$_POST['Email']);
           $Password = mysqli_real_escape_string($con,$_POST['Password']);
           $CPassword = mysqli_real_escape_string($con,$_POST['Cpass']);

           if(empty($UserName) || empty($Email) || empty($Password) || empty($CPassword))
           {
               echo 'Please fill in the Blanks';
           }

           if($Password!=$CPassword)
           {
               echo 'Password Not Matched';
           }
           else
           {
                $Pass = md5($Password);
                $sql = "insert into users (UName,Email,Password) values ('$UserName','$Email','$Pass')";
                $result = mysqli_query($con,$sql);

                if($result)
                {
                    echo 'Your record has been saved in the database';
                }

                else
                {
                     
                    echo 'Please Check your Query';

                }
           }
       }

?>
            
            </form>
            <form action="signup.php" method="post">
                <input type="submit" name="submit2" value="Sign Up" class="btn2" name="Sign Up">
                
                <?php
                    require_once('connection.php');

                       if(isset($_POST['submit2']))
                       {
                           echo '';
                       }
                ?>
                </form>
        </div>
        
<?php include 'scripts.php';?>
</body>
</html>
