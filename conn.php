//Establish connection to the MySQL database 'bloodbank'
<?php
    $conn = new mysqli("localhost","root", "","bloodbank");
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

?>