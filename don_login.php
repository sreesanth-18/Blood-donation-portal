<?php
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $usrname = $_POST['usrname'];
        $password = $_POST['pwd'];
        include 'conn.php';

        $sql = "SELECT pwd FROM donorreg WHERE usrname='$usrname'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) 
        {
            $row = $result->fetch_assoc();
            $hashedPasswordFromDB = $row['pwd'];

            // Verify the entered password against the stored hashed password
            if (password_verify($password, $hashedPasswordFromDB)) 
            {
                $_SESSION['username'] = $usrname;
                header("Location: dashboard.html");
                exit();
            }
            else
            {
                echo '<script>alert("Inncorrect password. Please try again");
                window.location.href = "don_login.html";
                </script>'; 
            }
        } 
        else 
        {
            echo '<script>alert("Username does not exist. Please register");
            window.location.href = "donor_form.html";
            </script>';
        }
        $conn->close();
    }
?>
