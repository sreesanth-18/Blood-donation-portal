<?php
require('conn.php');
include 'header_donor.php';
session_start();
$donorUsername = $_SESSION['donusr'];

// Check for errors in the query execution
$s = "SELECT r.request_id, p.*, r.status 
        FROM request r
        INNER JOIN patreg p ON r.patient_id = p.patusr
        WHERE r.donor_id = '$donorUsername'
        ORDER BY CASE
            WHEN r.status = 'Approved' THEN 1
            WHEN r.status = 'Declined' THEN 2
            ELSE 3
        END";
$rs = mysqli_query($conn, $s);

if (!$rs) {
    // If there's an error in the query, you can log or display the error
    die('Error: ' . mysqli_error($conn));
}
?>
<html>

<head>
    <title>Donor Request Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dyykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
            $(document).ready(function () 
            {
            // Function to handle Approve button click
            $(".approve-btn").click(function () {
                var requestId = $(this).data("request-id");

                // Send an AJAX request to update the status to "Approved"
                $.ajax({
                    url: "don_update_status.php", // Update the URL to "don_update_status.php"
                    method: "POST",
                    data: {
                        request_id: requestId,
                        status: "Approved"
                    },
                    success: function (response) {
                        // Refresh the page or update the UI as needed
                        location.reload(); // Reload the page for simplicity
                    }
                });
            });

            // Function to handle Delete button click
            $(".delete-btn").click(function () {
                var requestId = $(this).data("request-id");

                // Send an AJAX request to update the status to "Declined"
                $.ajax({
                    url: "don_update_status.php", // Update the URL to "don_update_status.php"
                    method: "POST",
                    data: {
                        request_id: requestId,
                        status: "Declined"
                    },
                    success: function (response) {
                        // Refresh the page or update the UI as needed
                        location.reload(); // Reload the page for simplicity
                    }
                });
            });
        });
    </script>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Requests Received</h2>
                    </div>
                </div>
                <?php
                if (mysqli_num_rows($rs) > 0) 
                {
                    echo '<div class="card-body">';
                    echo '<table class="table table-bordered text-center">';
                    echo '<tr class="bg-dark">';
                    echo '<td>Request ID</td>';
                    echo '<td>Name</td>';
                    echo '<td>Blood Group</td>';
                    echo '<td>District</td>';
                    echo '<td>Status</td>';
                    echo '<td>Action</td>';
                    echo '</tr>';
                    echo '</div>';

                    while ($row = mysqli_fetch_assoc($rs)) {
                        echo '<tr>';
                        echo '<td>' . $row['request_id'] . '</td>';
                        echo '<td>' . $row['pname'] . '</td>';
                        echo '<td>' . $row['bgroup'] . '</td>';
                        echo '<td>' . $row['district'] . '</td>';
                        echo '<td>' . $row['status'] . '</td>';

                        // Check if the status is not one of these
                        if ($row['status'] != 'Approved' && $row['status'] != 'Declined') {
                            // Add data attributes to store the request ID
                            echo '<td><button data-request-id="' . $row['request_id'] . '" class="btn btn-success approve-btn">Approve</button>';
                            echo '<button data-request-id="' . $row['request_id'] . '" class="btn btn-danger delete-btn">Delete</button></td>';
                        } else {
                            echo '<td></td>'; // Display an empty cell if the status is one of the mentioned
                        }

                        echo '</tr>';
                    }
                }
                else {
                    // Display Bootstrap container with alert box when no requests are found
                    echo '<div class="container mt-3">';
                    echo '<div class="alert alert-warning" role="alert">';
                    echo 'No requests found.';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
