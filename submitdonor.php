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
    include 'conn.php';
    $sql="INSERT INTO donorreg (usrname,pwd,dname,dob,bgroup,phone,email,district) 
    values ('$usrname','$pwd','$dname','$dob','$bgroup','$phone','$email','$district');";
    if ($conn->query($sql) === TRUE) 
    {
        header("Location: registration_success.html");
        exit();
    }  
    else 
    {
        echo "Error inserting into database: " . $conn->error;
    }
    $conn->close();
?>
