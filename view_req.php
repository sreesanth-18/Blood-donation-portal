<?php
require('conn.php');
 include 'header_new.php';
session_start();
$sql = "SELECT r.request_id, d.dname AS donor_name, p.pname AS patient_name, r.status
        FROM request r
        JOIN donorreg d ON r.donor_id = d.donusr
        JOIN patreg p ON r.patient_id = p.patusr;";
$rs = mysqli_query($conn, $sql);
?>
<html>

<head>
    <title>Request Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                    echo '<td>Dname</td>';
                    echo '<td>Pname</td>';
                    echo '<td>Status</td>';
                    echo '</tr>';
                    echo '</div>';

                    while ($row = mysqli_fetch_assoc($rs)) {
                        echo '<tr>';
                        echo '<td>' . $row['request_id'] . '</td>';
                        echo '<td>' . $row['donor_name'] . '</td>';
                        echo '<td>' . $row['patient_name'] . '</td>';
                        echo '<td>' . $row['status'] . '</td>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>