//php action page to fetch data from the donor registratin form and store it into the donorreg table
<?php
    //variables
    $dname=$_POST['dname'];
    $dob=$_POST['dob'];
    $bgroup=$_POST['bgroup'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $district=$_POST['district'];
    $usrname=$_POST['usrname'];
    $pwd=md5($_POST['pwd']);
    //Establishing connection to db
    include 'conn.php';
    //inserting values into the table donorreg
    $sql="INSERT INTO donorreg (usrname,pwd,dname,dob,bgroup,phone,email,district) 
    values ('$usrname','$pwd','$dname','$dob','$bgroup','$phone','$email','$district');";
    if ($conn->query($sql) === TRUE) 
    {
        echo "\nData inserted Succesfully";
    }  
    else 
    {
        echo "Error inserting into database: " . $conn->error;
    }
   
    $conn->close();

?>
