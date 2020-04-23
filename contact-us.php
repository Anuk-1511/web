<!DOCTYPE html>
<html lang="en">
<head>
     <?php include 'head.php';?>
     <link rel="stylesheet" href="stylecon.css" />
</head>
<body>
	
<?php include 'navbar.php';?>
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
  </div>
  <div class="row">
    <div class="column">
      <img src="5.jpg" style="width:100%">
    </div>
    <div class="column">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5278.721808229525!2d77.03524270423983!3d28.604801651527954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d053340000001%3A0x43728703a210ae01!2sDeen%20Dayal%20Upadhyaya%20College!5e0!3m2!1sen!2sin!4v1587552614372!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       
    </div>

    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="india">India</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
<?php include 'scripts.php';?>
</body>
</html>
