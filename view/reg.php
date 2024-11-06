<?php
require_once '../app/core/Database.php';
require_once '../app/models/User.php';
require_once '../app/controllers/AuthController.php';

$db = new Database();
$conn = $db->getConnection();
$authController = new AuthController($conn);
$error = $authController->register();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="../public/css/registration.css">
</head>

<body>
  <div class="registration-container">
    <form action="" method="post" class="registration-form">
      <h2 class="form-title">Create an Account</h2>
      <input type="text" name="firstName" required placeholder="First Name" class="form-control">
      <input type="text" name="lastName" required placeholder="Last Name" class="form-control">
      <input type="email" name="email" required placeholder="Email" class="form-control">
      <input type="password" name="password" required placeholder="Password" class="form-control">
      <button type="submit" name="register" class="btn-submit">Register</button>
      <?php if (isset($error)) echo "<p class='error-message'>$error</p>"; ?>

      <!-- Link for users who already have an account -->
      <p>Already have an account? <a href="login.php" class="login-link">Login here</a></p>
    </form>
  </div>
  <script src="../public/js/registratio.js"></script>
</body>

</html>