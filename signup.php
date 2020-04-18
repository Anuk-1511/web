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
          
          <input type="text" name="username" placeholder="Username"/>
          <input type="text" name="email" placeholder="Email"/>
          <input type="password" name="password" placeholder="Password"/>
        
          <input type="password" name="password2" placeholder="Retype password"/>
          <form action="/application.php">
          <input type="submit" name="signup-button" value="Sign up" href="http://new.local/application.php", target="_blank">
          </form>
        </div>
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


<!--- Check out my courses! -->
<!-- <div class="udemy-course" style="position: fixed; bottom: 0; right: 0; margin-bottom: -5px; z-index: 100;">
	<a href="https://www.google.com/search?q=shinchan&rlz=1C1CHBF_enIN859IN859&oq=sh&aqs=chrome.0.69i59j69i57j69i59j0l3j69i60j69i61.1407j0j7&sourceid=chrome&ie=UTF-8" target="_blank" style="z-index: 999!important; cursor: pointer!important;"><img src="img/sh.jpg" style="max-width: 100%; min-width: 100%;"></a>
</div> -->
