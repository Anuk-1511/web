<?php
// Initialize the session
session_start();
 

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: profile.php");
  exit;
}
 

require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
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
          include("connection.php");
          session_start();
          $username=$_POST['username'];
          $password=$_POST['password'];
          $_SESSION['login_user']=$username; 
          $query = mysqli_query($connect,"SELECT username FROM logins WHERE username='$username' and password='$password'");
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
