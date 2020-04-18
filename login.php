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
            <form action="index.html" method="POST">
                <input type ="text" placeholder="User Name" class="txt" name="UserName">
                <input type ="email" placeholder="Email" class="txt" name="Email">
                <input type ="password" placeholder="Password" class="txt" name="Password">
                <input type ="password" placeholder="Confirm Password" class="txt" name="Confirm Password">
                <form action="index.php">
                <input type="submit" value="Sign In" class="btn1">
                </form>
                <form action="signup.php">
                <input type="submit" value="Sign Up" class="btn2">
                </form>
                
                <a href="#">Already Have a Account</a>
            </form>
        </div>
<?php include 'scripts.php';?>
</body>
</html>


<!--- Check out my courses! -->
<!-- <div class="udemy-course" style="position: fixed; bottom: 0; right: 0; margin-bottom: -5px; z-index: 100;">
	<a href="https://www.google.com/search?q=shinchan&rlz=1C1CHBF_enIN859IN859&oq=sh&aqs=chrome.0.69i59j69i57j69i59j0l3j69i60j69i61.1407j0j7&sourceid=chrome&ie=UTF-8" target="_blank" style="z-index: 999!important; cursor: pointer!important;"><img src="img/sh.jpg" style="max-width: 100%; min-width: 100%;"></a>
</div> -->
