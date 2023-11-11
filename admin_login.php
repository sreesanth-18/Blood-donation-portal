<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_usr = $_POST['adminusr'];
    $admin_password = $_POST['adminpass']; // Password entered by the admin user
    include 'conn.php';

    // Fetch the hashed password based on the admin_usr
    $sql = "SELECT admin_password FROM admin WHERE admin_usr='$admin_usr'";
    $result = $conn->query($sql);   

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPasswordFromDB = $row['admin_password'];
        if (md5($admin_password) == $hashedPasswordFromDB) {
            header("Location: admin_dashboard.php");
        } else {
            // Password is incorrect
            echo '<script>alert("Incorrect password. Please try again");
            window.location.href = "admin_login.html";
            </script>';
        }
    } else {
        // Admin user does not exist
        echo '<script>alert("You are not an authorised admin to use this menu");
        window.location.href = "index.html";
        </script>';
    }
    $conn->close();
}
?>
