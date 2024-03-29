<?php
    session_start();
    $bgroup = $_SESSION['bgroup']; // Store the blood group session value in a variable
    $patusr = $_SESSION['patusr'];
?>
<html>
    <head>
        <title>Recipient Dashboard</title>
        <link rel="stylesheet" href="css\userdisplay.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" type='text/css'>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet" type='text/css'>
        <link href='https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php
            include_once 'header.php';
        ?>
        <main>
            <?php
                include 'conn.php';
                $s = "select * from donorreg where bgroup='$bgroup';";
                $rs = mysqli_query($conn, $s);
                        
                if (mysqli_num_rows($rs) > 0) 
                {
                    // Loop through the database results and create cards for each donor
                    while ($row = mysqli_fetch_assoc($rs)) 
                    {
                        $donorUsername = $row['donusr']; // Replace 'username' with the actual column name in your donor table
                        $patientUsername = $_SESSION['patusr'];

                        echo '<form action="request.php" method="post">';
                        echo '<input type="hidden" name="donor_username" value="' . $donorUsername . '">';
                        echo '<input type="hidden" name="patient_username" value="' . $patientUsername . '">';
                        echo '<div class="card">';
                        echo '<div class="image">';
                        echo '<img src="images\user.png">'; 
                        echo '</div>';
                        echo '<div class="caption">';
                        echo '<p class="name">' . $row['dname'] . '</p>';
                        echo '<p class="district">' . $row['district'] . '</p>';
                        if ($row['ldate'] != '0000-00-00') {
                            echo '<p class="date">' . $row['ldate'] . '</p>';
                        }
                        echo '<p class="bloodgroup">' . $row['bgroup'] . '</p>'; // Added blood group
                        echo '</div>';
                        echo '<button class="request" type="submit">Request</button>';
                        echo '</div>';
                        echo '</form>';
                    }
                }
                else
                {
                    echo '<div class="message">
                            <h2>No Donors Found</h2>
                            <p>If an emergency, kindly check with your nearest blood bank at the earliest.<br> <a href="https://www.google.com/maps/search/blood+bank+near+me/">More details...</a></p>
                        </div>';
                }
            ?>
        </main>
    </body>
</html>
