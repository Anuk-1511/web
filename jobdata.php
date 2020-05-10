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

<div class="wrapper">
    <div class="title">
      Job info
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Job Post</label>
          <input type="text" class="input">
       </div>  
       
       <div class="inputfield">
          <label>Skills</label>
          <textarea class="textarea"></textarea>
       </div> 
       <div class="inputfield">
          <label>Job Company Location</label>
          <div class="custom_select">
            <select>
              <option value="">Select</option>
              <option value="location">Delhi</option>
              <option value="location">Mumbai</option>
              <option value="location">Kolkata</option>
              <option value="location">Tamil Nadu</option>
            </select>
          </div>
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