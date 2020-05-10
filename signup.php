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
        <form  method ="post">
          <input type="text" name="username" placeholder="Username" required/>
          <input type="text" id="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Must look like  email@gmail.com" required/>
          <input type="password" id="pwd" name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>  
          <input type="password" name="confirm_password" id="cnpwd"placeholder="Retype password" required/> 
          <button type="submit" class="hbutton" formaction="insert.php" >Sign Up</button>
                
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

