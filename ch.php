<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}


.column {
  float: left;
  width: 75%;
  padding: 0 10px;
}


.row {margin: 10px -5px;
   
  
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  margin: 0 auto; 
        float: none;
        margin-bottom: 10px;
}
</style>
</head>
<body>



<div class="row">
  <div class="column">
    <div class="card">
      <h3>Are you a Empolyee</h3>
      <form method=post>
      <button type="submit" class="hbutton" formaction="application.php"  >Sign Up</button>
      </form>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Are you a Empolyer</h3>
      <button type="submit" class="hbutton"  >Sign Up</button>
    </div>
  </div>
  
 
</div>

</body>
</html>
