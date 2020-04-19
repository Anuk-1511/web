<!DOCTYPE html>
<html lang="en">
<head>
     <?php include 'head.php';?>
     <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="styleapp.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>

<?php include 'navbar.php';?>

<div class="wrapper">
    <div class="title">
      Educational info
    </div>
    <div class="form">
       <div class="inputfield">
          <label>class 10th board</label>
          <input type="text" class="input">
       </div>  
        <div class="inputfield">
          <label>class 10th cgpa</label>
          <input type="text" class="input">
       </div>  
       <div class="inputfield">
          <label>class 12th board</label>
          <input type="text" class="input">
       </div>  
      <div class="inputfield">
          <label>class 12th cgpa</label>
          <input type="text" class="input">
       </div> 
        <div class="inputfield">
          <label>graduation</label>
          <div class="custom_select">
            <select>
              <option value="">Select</option>
              <option value="course">Bsc(H)</option>
              <option value="course">B.com(H)</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label></label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield">
          <label></label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield">
          <label>Upload Cv</label>
          <textarea class="textarea"></textarea>
       </div> 
      <div class="inputfield">
          <label></label>
          <input type="text" class="input">
       </div> 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
          <form action ="index.php">
        <input type="submit" value="Confirm" class="btn">
         </form>
      </div>
    </div>
</div>	

       <?php include 'scripts.php';?>
    
</body>
</html>
