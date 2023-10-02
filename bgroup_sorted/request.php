<?php
    session_start();
    if (isset($_POST['donor_username']) && isset($_POST['patient_username'])) 
    {
        // Assuming you have included your database connection in 'conn.php'
        include 'conn.php';

        // Sanitize and validate input data
        $donorUsername = mysqli_real_escape_string($conn, $_POST['donor_username']);
        $patientUsername = mysqli_real_escape_string($conn, $_POST['patient_username']);
        
        // Set an initial status (e.g., "Pending") for the request
        $status = "Pending";

        // Insert the request into the database
        $insertQuery = "INSERT INTO request (patient_id, donor_id, status) VALUES ('$patientUsername', '$donorUsername', '$status')";

        if (mysqli_query($conn, $insertQuery)) 
        {
            // Request successfully inserted
            header("Location: request_success.php");
            exit();
        } 
        else 
        {
            // Handle the case where the request insertion fails
            echo '<script>alert("Error sending request, please try again");
            window.location.href = "pat_dashboard.php";
            </script>';
        }

        // Close the database connection
        mysqli_close($conn);
    }
    else 
    {
        // Handle the case where the required POST data is not set
        echo "Invalid request.";
    }
?>
