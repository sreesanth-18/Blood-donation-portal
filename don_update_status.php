<?php
require('conn.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['request_id']) && isset($_POST['status'])) {
    // Sanitize and validate the input
    $requestId = mysqli_real_escape_string($conn, $_POST['request_id']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);

    // Get the donor's username from the session
    $donorUsername = $_SESSION['donusr'];

    // Update the status in the database
    $updateQuery = "UPDATE request SET status = '$status' WHERE request_id = $requestId AND donor_id = '$donorUsername'";

    if (mysqli_query($conn, $updateQuery)) {
        // Request status updated successfully
        echo 'Status updated successfully.';
    } else {
        // Error updating the status
        echo 'Error updating status: ' . mysqli_error($conn);
    }
} else {
    // Handle invalid or missing data
    echo 'Invalid request data.';
}
?>
