<?php
    //vars
    $pname=$_POST['pname'];
    $dob=$_POST['dob'];
    $bgroup=$_POST['bgroup'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $district=$_POST['district'];
    $usrname=$_POST['usrname'];
    //$pwd=md5($_POST['pwd']);
    $pwd=password_hash($_POST['pwd'], PASSWORD_BCRYPT);
    //Establishing connection to db
    include 'conn.php';

    $user_count_qry = "SELECT COUNT(*) FROM patreg WHERE patusr = '$usrname'";
    $user_count_res_array = mysqli_query($conn, $user_count_qry);
    $user_count_res = mysqli_fetch_array($user_count_res_array);
    if (is_null($user_count_res))
    $user_count_res[0] = 0;
    if($user_count_res[0] == 0)
    {
        //inserting values into the table patreg
        $sql="INSERT INTO patreg (patusr,pwd,pname,dob,bgroup,phone,email,district) 
        values ('$usrname','$pwd','$pname','$dob','$bgroup','$phone','$email','$district');";
        if ($conn->query($sql) == TRUE) 
        {
            header("Location: registration_success.html");
            exit();
        }  
        else 
        {
            echo '<script>alert("Invalid data entered, please try again");
            window.location.href = "patient_form.html";
            </script>';
        }
    }
    else
    {
        if ($user_count_res[0] != 0)
        {
            echo '<script>alert("Username already exists, please try again with a different username");
            window.location.href = "patient_form.html";
            </script>';
        }
    }
    $conn->close();
?>
 
