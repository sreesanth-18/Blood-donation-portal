<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet" type='text/css'>
    <link href='https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap' rel='stylesheet' type='text/css'>
    <style>
        /* Additional CSS for your existing code */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .header {
            width: 100%;
            height: 89px;
            display: block;
            background-color: white;
        }

        .logo {
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 22px;
            height: 100%;
            display: table-cell;
            float: left;
            vertical-align: middle;
            padding: 20px;
            margin-top: 7px;
            margin-left: 11%;
        }

        a {
            color: orangered;
            -webkit-transition: 0.5s ease;
            -o-transition: 0.5s ease;
            transition: 0.5s ease;
            text-decoration: none;
        }

        a:hover {
            text-decoration: none !important;
            color: black !important;
        }

        a:active {
            text-decoration: none;
            color: whitesmoke;
        }

        .navbar {
            float: right;
            height: 100%;
            list-style: none;
            margin-right: 11%;
            margin-top: 25px;
        }

        .navbar li {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            display: inline-block;
            height: 150%;
            vertical-align: middle;
            padding: 10px;
        }

        /* Add the dropdown styles here */
        .dropdown-container {
            position: relative;
            display: inline-block;
        }

        .dropdown {
            display: none;
            position: absolute;
            min-width: 170px;
            z-index: 1;

            border-radius: 5px;
            backdrop-filter: blur(25px); /* Gaussian blur effect */
        }

        .navbar li:hover .dropdown {
            display: block;
        }

        .dropdown li {
            display: block;
        }

        .dropdown li a {
            color: black;
            padding: 10px;
            text-decoration: none;
            display: block;
        }

        .dropdown li a:hover {
            background-color: #ddd;
        }

        span {
            color: orangered;
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            display: inline-block;
            height: 25%;
            vertical-align: middle;
        }

        /* Change the color of the span to black on hover */
        span:hover {
            color: black;
        }
    </style>
</head>
<body>
<section class="header">
    <div class="logo">
        <a href="index.html"><strong>VITALFLOW</strong></a>
    </div>
    <ul class="navbar">
    <li class="dropdown-container">
            <span>Search by Bloodgroup</span>
            <ul class="dropdown">
                <li><a href="apos.php">A+</a></li>
                <li><a href="aneg.php">A-</a></li>
                <li><a href="abpos.php">AB+</a></li>
                <li><a href="abneg.php">AB-</a></li>
                <li><a href="bpos.php">B+</a></li>
                <li><a href="bneg.php">B-</a></li>
                <li><a href="opos.php">O+</a></li>
                <li><a href="oneg.php">O-</a></li>
            </ul>
        </li>
        <a href="about.html"><li>Account Dashboard</li></a>
        <a href="contact.html"><li>Logout</li></a>
    </ul>
</section>
</body>
</html>
