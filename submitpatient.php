//php action page to fetch data from the donor registratin form and store it into the donorreg table
<?php
    //vars
    $pname=$_POST['pname'];
    $dob=$_POST['dob'];
    $bgroup=$_POST['bgroup'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $district=$_POST['district'];
    $usrname=$_POST['usrname'];
    $pwd=$_POST['pwd'];
    //Establishing connection to db
    include 'conn.php';
    //inserting values into the table patreg
    $sql="INSERT INTO patreg (usrname,pwd,pname,dob,bgroup,phone,email,district) 
    values ('$usrname','$pwd','$pname','$dob','$bgroup','$phone','$email','$district');";
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
    
