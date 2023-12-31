<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usrname = $_POST['usrname'];
        $password = $_POST['pwd']; // Password entered by the user
        include 'conn.php';
    
        // Fetch the hashed password and bloodgroup from the database based on the username
        $sql = "SELECT pwd, bgroup FROM patreg WHERE patusr='$usrname'";
        $result = $conn->query($sql);
    
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $hashedPasswordFromDB = $row['pwd'];
            $bloodgroup = $row['bgroup']; // Retrieve bloodgroup
    
            // Verify the entered password against the stored hashed password
            if (password_verify($password, $hashedPasswordFromDB)) {
                $_SESSION['patusr'] = $usrname;
                $_SESSION['bgroup'] = $bloodgroup; // Store bloodgroup in session
                header("Location: pat_dashboard.php");
                exit();
            } else {
                echo '<script>alert("Incorrect password. Please try again");
                window.location.href = "pat_login.html";
                </script>';
            }
        } else {
            echo '<script>alert("Username does not exist. Please register");
            window.location.href = "patient_form.html";
            </script>';
        }
        $conn->close();
    }
?>
