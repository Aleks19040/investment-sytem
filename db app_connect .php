<?php
$servername = "localhost";
$username = "root";
$password = "alex";
$dbname = "Investors";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM appointments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Appointments List</h2>";
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Date</th><th>Time</th><th>Type</th><th>Notes</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['preferred_date']}</td><td>{$row['preferred_time']}</td><td>{$row['appointment_type']}</td><td>{$row['additional_notes']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "No appointments found.";
}

$conn->close();
?>
