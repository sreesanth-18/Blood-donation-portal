<?php
require('conn.php');
include 'header_admin.php';

// Function to terminate an account based on donusr
function terminateAccount($patusr) {
    global $conn;

    $deleteQuery = "DELETE FROM patreg WHERE patusr = '$patusr'";
    return mysqli_query($conn, $deleteQuery);
}

// Check if terminate button is clicked
if (isset($_POST['terminate'])) {
    $patusrToTerminate = $_POST['patusr_to_terminate'];

    // Terminate the account
    if (terminateAccount($patusrToTerminate)) {
        echo '<div class="alert alert-success" role="alert">Account terminated successfully!</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Failed to terminate account. Please try again.</div>';
    }
}

$query = "SELECT * FROM patreg";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Accounts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2>Recipient Accounts</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Date of Birth</th>
                    <th>Blood Group</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>District</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<td>' . $row['patusr'] . '</td>';
                    echo '<td>' . $row['pname'] . '</td>';
                    echo '<td>' . $row['dob'] . '</td>';
                    echo '<td>' . $row['bgroup'] . '</td>';
                    echo '<td>' . $row['phone'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['district'] . '</td>';
                    echo '<td>
                            <form method="post" onsubmit="return confirm(\'Are you sure you want to terminate this account?\')">
                                <input type="hidden" name="patusr_to_terminate" value="' . $row['patusr'] . '">
                                <button type="submit" name="terminate" class="btn btn-danger">Terminate</button>
                            </form>
                          </td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
