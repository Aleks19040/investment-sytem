<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);
    $password = trim($_POST["password"]);
    $confirm_password = trim($_POST["confirm_password"]);

    // Check if all fields are provided
    if (!$email || !$phone || !$password || !$confirm_password) {
        die("Error: All fields are required.");
    }

    // Validate password
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into database (without user_id if it's auto-increment)
    $stmt = $conn->prepare("INSERT INTO users (email, phone, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $phone, $hashed_password);

    if ($stmt->execute()) {
        header("Location: about.php");
        exit();
    } else {
        die("Error: " . $stmt->error);
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
  <title>Sign Up</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background: linear-gradient(135deg, #71b7e6, #9b59b6);
      font-family: 'Arial', sans-serif;
    }

    .signup-container {
      background: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 100%;
      max-width: 400px;
    }

    .signup-container h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .signup-container form {
      display: flex;
      flex-direction: column;
    }

    .signup-container input {
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
    }

    .signup-container button {
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: #9b59b6;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .signup-container button:hover {
      background: #8e44ad;
    }

    .signup-container p {
      margin-top: 20px;
      color: #555;
    }

    .signup-container p a {
      color: #9b59b6;
      text-decoration: none;
    }

    .signup-container p a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="signup-container">
    <h2>Sign Up</h2>
    <form action="signup.php" method="post">
      <input type="number" name="user_id" placeholder="user_id" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="tel" name="phone" placeholder="Phone" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="password" name="confirm_password" placeholder="Confirm Password" required>
      <button type="submit">Sign Up</button>
    </form>
    <p>Already have an account? <a href="login.php">Login</a></p>
  </div>
</body>
</html>