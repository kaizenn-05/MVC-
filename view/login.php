<?php
session_start();
require_once '../app/core/Database.php';
require_once '../app/models/User.php';
require_once '../app/controllers/AuthController.php';


$db = new Database();
$conn = $db->getConnection();
$authController = new AuthController($conn);
$error = $authController->login();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../public/css/login.css">
</head>

<body>
  <div class="login-container">
    <form action="" method="post" class="login-form">
      <h2 class="form-title">Login</h2>
      <input type="email" name="email" required placeholder="Email" class="form-control">
      <input type="password" name="password" required placeholder="Password" class="form-control">
      <button type="submit" name="login" class="btn-submit">Login</button>
      <?php if (isset($error)) echo "<p class='error-message'>$error</p>"; ?>
      <p>Not yet registred? <a href="reg.php" class="login-link">Register here</a></p>
    </form>
  </div>
</body>


</html>