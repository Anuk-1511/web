<html lang = en>
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "entry_details";
    
    // Create connection
    $con = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    //echo "Connected successfully";
   

?>
