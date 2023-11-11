<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .card
        {
            width: 210px;
            height: 170px;
        }
        .card img {
            width: 50px;
            margin: 0 0 16px;
            height: 50px;
        }
        .line
        {
            margin-top: 50px;
            border-top: 1px solid red;
        }
        canvas {
            max-width: 100%;
            max-height: 100%;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h1>Admin Dashboard</h1>
        <div class="admin-line"></div>
        <div class="row mt-4">
            <?php
                include 'conn.php';

                // Function to get count from the database
                function getCount($tableName) {
                    global $conn; 

                    $query = "SELECT COUNT(*) as count FROM $tableName";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        $row = mysqli_fetch_assoc($result);
                        return $row['count'];
                    } 
                    else 
                    {
                        return 0;
                    }
                }

                // Get counts from the database
                $totalDonors = getCount('donorreg');
                $totalPatients = getCount('patreg');
                $totalRequests = getCount('request');
            ?>

            <div class="col-md-4">
                <a href="admin_donor.php"> 
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="images\admin_don.png" alt="Donor Icon" class="mb-3">
                            <h5 class="card-title">Total Donors</h5>
                            <p class="card-text"><?php echo $totalDonors; ?></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="admin_patient.php"> 
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="images\admin_pat.png">
                            <h5 class="card-title">Total Patients</h5>
                            <p class="card-text"><?php echo $totalPatients; ?></p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="view_req.php"> <!-- Replace with the actual link -->
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="images\request.png" alt="Request Icon" class="mb-3">
                            <h5 class="card-title">Total Requests</h5>
                            <p class="card-text"><?php echo $totalRequests; ?></p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="line"></div>

        <div class="row mt-4">
            <div class="col-md-6">
                <canvas id="combinedChart"></canvas>
            </div>
        </div>

        <div class="line"></div>
        
        <div class="mt-4">
            <a class="btn btn-primary" href="view_req.php">View All Requests</a>
            <a class="btn btn-danger" href="logout.php">Logout</a>
        </div>
    </div>

    <script>
        // Chart for Combined Donors and Patients
        var combinedChart = new Chart(document.getElementById('combinedChart').getContext('2d'), {
            type: 'bar',
            data: {
                labels: ['Total Donors', 'Total Recipients'],
                datasets: [{
                    label: 'Donors',
                    data: [<?php echo $totalDonors; ?>, 0], // The second value is 0 for patients
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Recipients',
                    data: [0, <?php echo $totalPatients; ?>], // The first value is 0 for donors
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
