<?php
require('conn.php');
 include 'header_new.php';
session_start();
$patusr = $_SESSION['patusr'];
$s = "SELECT r.request_id, d.*, r.status 
        FROM request r
        INNER JOIN donorreg d ON r.donor_id = d.donusr
        WHERE r.patient_id = '$patusr'
        ORDER BY CASE
            WHEN r.status = 'Approved' THEN 1
            WHEN r.status = 'Declined' THEN 2
            ELSE 3
        END";
$rs = mysqli_query($conn, $s);
?>
<html>

<head>
    <title>Request Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Function to handle Cancel button click
            $(".cancel-btn").click(function () {
                var requestId = $(this).data("request-id");

                // Send an AJAX request to update the status to "Cancelled"
                $.ajax({
                    url: "update_status.php", // Specify the PHP script to handle the update
                    method: "POST",
                    data: {
                        request_id: requestId
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
                        <h2 class="display-6 text-center">Request Status</h2>
                    </div>
                </div>
                <?php
                if (mysqli_num_rows($rs) > 0) {
                    echo '<div class="card-body">';
                    echo '<table class="table table-bordered text-center">';
                    echo '<tr class="bg-dark">';
                    echo '<td>Request ID</td>';
                    echo '<td>Name</td>';
                    echo '<td>Phone</td>';
                    echo '<td>District</td>';
                    echo '<td>Bloodgroup</td>';
                    echo '<td>Status</td>';
                    echo '<td>Cancel</td>';
                    echo '</tr>';
                    echo '</div>';

                    while ($row = mysqli_fetch_assoc($rs)) {
                        echo '<tr>';
                        echo '<td>' . $row['request_id'] . '</td>';
                        echo '<td>' . $row['dname'] . '</td>';
                        echo '<td>';

                        if ($row['status'] == 'Approved') {
                            echo $row['phone'];
                        } else {
                            echo '**********'; 
                        }

                        echo '</td>';
                        echo '<td>' . $row['district'] . '</td>';
                        echo '<td>' . $row['bgroup'] . '</td>';
                        echo '<td>' . $row['status'] . '</td>';

                        // Check if the status is not one of these
                        if ($row['status'] != 'Approved' && $row['status'] != 'Cancelled' && $row['status'] != 'Declined') {
                            // Add a data attribute to store the request ID
                            echo '<td><button data-request-id="' . $row['request_id'] . '" class="btn btn-danger cancel-btn">Cancel</button></td>';
                        } else {
                            echo '<td></td>'; // Display an empty cell if status is one of the mentioned
                        }

                        echo '</tr>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>