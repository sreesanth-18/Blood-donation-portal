<html>
    <head>
        <title>Donor registration</title>
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
                include '../conn.php';
                $s = "SELECT * FROM donorreg WHERE bgroup = 'O-'"; // Modify the query to select A+ blood type donors
                $rs = mysqli_query($conn, $s);
                        
                if (mysqli_num_rows($rs) > 0) {
                    // Loop through the database results and create cards for A+ blood type donors
                    while ($row = mysqli_fetch_assoc($rs)) {
                        echo '<form action="request.php" method="post">';
                        echo '<div class="card">';
                        echo '<div class="image">';
                        echo '<img src="images\user.png">';
                        echo '</div>';
                        echo '<div class="caption">';
                        echo '<p class="name">' . $row['dname'] . '</p>';
                        echo '<p class="district">' . $row['district'] . '</p>';
                        echo '<p class="bloodgroup">' . $row['bgroup'] . '</p>'; // Display blood group
                        echo '</div>';
                        echo '<button class="request" type="submit">Request</button>';
                        echo '</div>';
                        echo '</form>';
                    }
                } else {
                    // No A+ blood type donors found
                    echo '<p>No blood donors found</p>';
                }
            ?>
        </main>
    </body>
</html>
