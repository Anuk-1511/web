<style>
ul{
	margin:0px;
	padding:0px;
}
ul li ul a
{   width:90px;
	color:black;
	display:block;
	text-decoration:none;
	font-size:15px;
	text-align:center;
	padding:10px;
	border-radius:10px;

}
ul li ul {
    background:#343a40;
	list-style:none;
	position:absolute;

}
ul li ul li {
	float:none;
	
}

ul li ul
{
	display:none;
}

ul li:hover ul 
{
	display:block;
}
</style>
<!--- Navigation -->
<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">Job Seeking Platform</a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto" >
				   <?php if( isset($_SESSION["loggedin"]) && !empty($_SESSION["loggedin"]) )
					 {
				    ?>
					  <li class="nav-item" >
						<a class="nav-link active" data-toggle="tab" href="index.php">Home</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" href="content.php">Content</a>
					  </li>
					   <li class="nav-item">
						<a class="nav-link" href="slider.php">Search</a>
					   </li>
					  <li class="nav-item">
						<a class="nav-link">About</a>
						<ul>
						 <li class="nav-item">
							 <a class="nav-link" href="contact-us.php">Contact Us</a>
							</li> 

							<li class="nav-item">
							 <a class="nav-link" href="aboutus.php">About Us</a>
							</li> 
						 </ul>
					    </li>
					  <li class="nav-item">
						<a class="nav-link">Profile</a>
						  <ul>
						    <li>
							  <a class="nav-link" href="welcome.php">Profile</a>
							</li>
							<li>
							   <a class="nav-link" href="logout.php">Logout</a>
							</li>
						   </ul>
					  </li>
					  <?php }
					  
				   else{ ?>
					<li class="nav-item">
						<a class="nav-link active" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="content.php">Content</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="signup.php">SignUp</a>
					</li>

					</li>
					<li class="nav-item">
						<a class="nav-link" href="slider.php">Search</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link">About</a>
						<ul>
						 <li class="nav-item">
							 <a class="nav-link" href="contact-us.php">Contact Us</a>
							</li> 

							<li class="nav-item">
							 <a class="nav-link" href="aboutus.php">About Us</a>
							</li> 
						</ul>
					</li>
									
				  <?php } ?> 
						
				</ul>
			</div>
		</div>
	</nav>
