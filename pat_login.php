<?php
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $usrname = $_POST['usrname'];
        $pwd = md5($_POST['pwd']);
        include 'conn.php';
        $sql = "SELECT * FROM patreg WHERE usrname='$usrname' AND pwd='$pwd'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $_SESSION['username'] = $usrname;
            header("Location: patient_form.html");
            exit();
        } 
        else 
        {
            echo "Invalid username or password. Please try again.";
        }
        $conn->close();
    }
?>