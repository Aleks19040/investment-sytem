<?php
$servername = "localhost";
$username = "root"; // Change if needed
$password = "alex"; // Change if needed
$dbname = "Investors"; // Change if needed

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$preferred_date = $_POST['preferred_date'];
$preferred_time = $_POST['preferred_time'];
$appointment = $_POST['appointment'];
$additional_notes = $_POST['additional_notes'];

// Prepare SQL statement
$sql = "INSERT INTO appointments (name, email, preferred_date, preferred_time, appointment_type, additional_notes) 
        VALUES ('$name', '$email', '$preferred_date', '$preferred_time', '$appointment', '$additional_notes')";

if ($conn->query($sql) === TRUE) {
    echo "Appointment booked successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
</head>
<body>
    <h2>Book an Appointment</h2>
    <form action="process_appointment.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="preferred_date">Preferred Date:</label>
        <input type="date" id="preferred_date" name="preferred_date" required><br><br>

        <label for="preferred_time">Preferred Time:</label>
        <input type="time" id="preferred_time" name="preferred_time" required><br><br>

        <label for="appointment">Appointment Type:</label>
        <input type="text" id="appointment" name="appointment" required><br><br>

        <label for="additional_notes">Additional Notes:</label>
        <textarea id="additional_notes" name="additional_notes"></textarea><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
