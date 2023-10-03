<?php
require('conn.php');

if (isset($_POST['request_id'])) {
    $requestId = $_POST['request_id'];
    
    // Update the status to "Cancelled" in the database
    $updateQuery = "UPDATE request SET status = 'Cancelled' WHERE request_id = '$requestId'";
    if (mysqli_query($conn, $updateQuery)) {
        echo "Status updated successfully.";
    } else {
        echo "Error updating status: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

mysqli_close($conn);
?>
