<?php
session_start();
include 'db_connect.php'; // Connect to database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $date = $_POST["date"];
    $time = $_POST["time"];
    $category = $_POST["category"];
    $message = trim($_POST["message"]);

    // Prepare SQL query to insert data into the database
    $stmt = $conn->prepare("INSERT INTO appointments (name, email, date, time, category, message) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $email, $date, $time, $category, $message);

    if ($stmt->execute()) {
        $success_message = "Appointment booked successfully!";
    } else {
        $error_message = "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a7c5ed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
            text-align: left;
            display: block;
        }
        input, textarea, select {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #218838;
        }
        .success-message {
            color: green;
            font-weight: bold;
        }
        .error-message {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Appointment Form</h2>

        <?php if (isset($success_message)) { echo "<p class='success-message'>$success_message</p>"; } ?>
        <?php if (isset($error_message)) { echo "<p class='error-message'>$error_message</p>"; } ?>

        <form method="POST" action="appointment.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required>
            
            <label for="time">Preferred Time:</label>
            <input type="time" id="time" name="time" required>
            
            <label for="category">Appointment Type:</label>
            <select id="category" name="category" required>
                <option value="consultation">Consultation</option>
                <option value="follow-up">Follow-up</option>
                <option value="general">General Appointment</option>
            </select>
            
            <label for="message">Additional Notes:</label>
            <textarea id="message" name="message" rows="4"></textarea>
            
            <button type="submit">Book Appointment</button>
        </form>
    </div>
</body>
</html>
