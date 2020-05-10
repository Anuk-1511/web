<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php $seesion_user = "stint"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="styleprofile.css" rel="stylesheet" type="text/css"/>
		<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="stylepro.css" >
        <style>
            #change-profile .preview {

            }

            .priview-wraper{
                width: 100px;
                height:100px;
                position: absolute;
                top: 25%;
                right: 10%;
                overflow: hidden;
                border-radius: 100%;


            }

            .priview-wraper-origal{
                width: 100px;
                height:100px;
                overflow: hidden;
                border-radius: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: 100%;
            }
     
        </style>
    </head>

<body>
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar" >
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">

						<a href="#" data-toggle="modal" data-target="#change-profile">
							<div id="profile-result">
								
								<?php if (file_exists('profile-pic/' . $seesion_user . '.jpg')): ?>
						
									<img src="<?php echo 'profile-pic/' . $seesion_user . '.jpg'; ?>" alt="" class="thumb-lg img-circle" style="width: 200px;height: 200px;">
								<?php else: ?>
									<img src="default.png" alt="" class="thumb-lg img-circle" style="width: 200px;height: 200px;">    
								<?php endif; ?>
							</div>
						</a>

				</div>
						<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
						<script src="profile.js" type="text/javascript"></script>
						<script src="promain.js" type="text/javascript"></script>
						<!--        boostrap model change profile pic-->
					<div class="modal fade" id="change-profile">
						<div class="modal-dialog">
							<div class="" style="background: #fff;padding: 10px;">

								<div class="ajax-response" id="loading"></div>

								<h4 class="m-t-5 m-b-5 ellipsis">Change profile</h4>
								<div class="profile-pic-wraper col-sm-8">
									<?php if (file_exists('profile-pic/' . $seesion_user . '.jpg')): ?>
										<img src="<?php echo 'profile-pic/' . $seesion_user . '.jpg'; ?>" alt="" id="change-profile-pic" style="width: 50%;">
									<?php else: ?>
										<img src="profile-pic/default.png" alt="" id="change-profile-pic" style="width: 40%;">    
									<?php endif; ?>

								</div>

								<div class="priview-wraper">
									<div class="preview"></div>
								</div><br>
								<div>
									<form action="" enctype="multipart/form-data">
										<input type="file" accept="image/*" id="profile-file-input" onchange="loadFile(event)">
										<div style="position: absolute;right: 20px;bottom: 20px;">
											<button href="#" class="btn btn-primary " data-dismiss="modal" style="background: #8fcb62;">Close</button>
											<input type="button" value="Save" class="btn btn-primary" id="save-profile">
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<form>
					<button type="submit" class="btn btn-success btn-sm" formaction="profile.php">Edit profile</button>
					</form>
					
				
					
     	

					<form>
					<button type="submit" class="btn btn-danger btn-sm" formaction="index.php">HomePage</button>
					</form>
					</div>

				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="">
							<a href="#" onclick="window.location.reload(true);">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#" onclick="window.location.reload(true);">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" onclick="window.location.reload(true);">
							<i class="glyphicon glyphicon-ok"></i>
							Educational info </a>
						</li>
						<li>
							<a href="contact-us.php" onclick="window.location.reload(true);">
							<i class="glyphicon glyphicon-flag" ></i>
							Help </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   <h1>User Info</h1>
			
			</div>
			
		</div>
		
	</div>
	
</div>
<br>
<br>
</body>
</html>

<?php
         // session_start();
     	if(!$_SESSION['login_user'])
     	{
            header("location:index.php");
     	}
     	?>