<?php
    //variables
    $dname=$_POST['dname'];
    $dob=$_POST['dob'];
    $bgroup=$_POST['bgroup'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $district=$_POST['district'];
    $usrname=$_POST['usrname'];
    $pwd=password_hash($_POST['pwd'], PASSWORD_BCRYPT);
    include 'conn.php';

    $user_count_qry = "SELECT COUNT(*) FROM donorreg WHERE usrname = '$usrname'";
    $user_count_res_array = mysqli_query($conn, $user_count_qry);
    $user_count_res = mysqli_fetch_array($user_count_res_array);
    if (is_null($user_count_res))
    $user_count_res[0] = 0;
    if($user_count_res[0] == 0)
    {
        $sql="INSERT INTO donorreg (usrname,pwd,dname,dob,bgroup,phone,email,district) 
        values ('$usrname','$pwd','$dname','$dob','$bgroup','$phone','$email','$district');";
        if ($conn->query($sql) == TRUE) 
        {
            header("Location: registration_success.html");
            exit();
        }  
        else 
        {
            echo '<script>alert("Invalid data entered, please try again");
            window.location.href = "donor_form.html";
            </script>';
        }
    }
    else
    {
        if ($user_count_res[0] != 0)
        {
            echo '<script>alert("Username already exists, please try again with a different username");
            window.location.href = "donor_form.html";
            </script>';
        }
    }
    $conn->close();
?>
