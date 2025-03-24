<?php
session_start();
include 'db_connect.php'; // Database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Check if email exists
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Start user session
            $_SESSION["user_id"] = $id;
            $_SESSION["username"] = $username;
            $_SESSION["email"] = $email;

            // Redirect to the home page
            header("Location: about.php");
            exit();
        } else {
            echo "Error: Incorrect password.";
        }
    } else {
        echo "Error: No account found with this email.";
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
  <title>Login</title>
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

    .login-container {
      background: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 100%;
      max-width: 400px;
    }

    .login-container h2 {
      margin-bottom: 20px;
      color: #333;
    }

    .login-container form {
      display: flex;
      flex-direction: column;
    }

    .login-container label {
      margin-bottom: 5px;
      color: #555;
      text-align: left;
    }

    .login-container input {
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 16px;
    }

    .login-container button {
      padding: 10px;
      border: none;
      border-radius: 5px;
      background: #9b59b6;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .login-container button:hover {
      background: #8e44ad;
    }

    .login-container .forgot-password {
      margin-top: 10px;
      color: #555;
      text-decoration: none;
      font-size: 14px;
    }

    .login-container .forgot-password:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
     <a href="dashboard.php"></a> <button type="submit">Login</button>
      <a href="signup.php" class="forgot-password">Don't have an account?</a>
    </form>
  </div>
</body>
</html>