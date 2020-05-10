<?php

require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
   
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        $email = mysqli_real_escape_string($link, $_REQUEST['email']);
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password ,email) VALUES (?, ?,'$email')";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                header("location: ch.php");
                
            } else{
                echo "Something went wrong. Please try again later.";
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
     <link rel="stylesheet" type="text/css" href="stylesignup.css">
</head>
<body>
	<?php include 'navbar.php';?>
    <div id="login-box">
      <div class="left-box">
        <h1> Sign Up</h1>
        <form method ="post">
          <input type="text" name="username" placeholder="Username" required/>
          <input type="text" id="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Must look like  email@gmail.com" required/>
          <input type="password" id="pwd" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>  
          <input type="password" name="confirm_password" id="cnpwd"placeholder="Retype password" required/> 
              <button type="submit" class="hbutton"  >Sign Up</button>
            </form>
          
        </div>
        <script type="text/javascript">
        window.onload = function () {
            var txtPassword = document.getElementById("pwd");
            var cnpwd = document.getElementById("cnpwd");
            txtPassword.onchange = ConfirmPassword;
            cnpwd.onkeyup = ConfirmPassword;
            function ConfirmPassword() {
                cnpwd.setCustomValidity("");
                if (txtPassword.value != cnpwd.value) {
                    cnpwd.setCustomValidity("Passwords do not match.");
                }
            }
        }
    </script>
        <div class="right-box">
          <span class="signinwith">Sign in with<br/>Social Network     </span>
        
        <button class="social facebook">Log in with Facebook</button>    
        <button class="social twitter">Log in with Twitter</button> 
        <button class="social google">Log in with Google+</button> 
            
        
        </div>
        <div class="or">OR</div>
    </div>



    <?php include 'scripts.php';?>
</body>
</html>


