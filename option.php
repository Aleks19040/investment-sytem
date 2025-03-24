<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Bar</title>
    <link rel="stylesheet" href="style.css"><style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.nav-bar {
    background-color: #333;
    padding: 1em;
    text-align: right; /* Align navigation items to the right */
}

.nav-bar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.nav-bar li {
    display: inline-block;
    margin-right: 20px;
    position: relative;
}

.nav-bar a {
    color: white;
    text-decoration: none;
}

.dropdown .dropbtn {
    font-size: 16px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    right: 0; /* Position dropdown to the right */
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

    </style>
</head>
<body>

<nav class="nav-bar">
    <ul>
        <li><a href="#home">Home</a></li>
        <li class="dropdown">
            <a href="#dashboard" class="dropbtn">Dashboard</a>
            <div class="dropdown-content">
                <a href="/niheart_salim/Company/dashboard.php">Company</a>
                <a href="/niheart_salim/investors/dashboard.php">Investors</a>
            </div>
        </li>
        <li><a href="/niheart_salim/Company/appointment.php">Appointment Booking</a></li>
        <li><a href="/niheart_salim/investors/dashboard.php">Feedback</a></li>
    </ul>
</nav>


</div>

</body>
</html>


