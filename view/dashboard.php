<?php
session_start();

// If the user is not logged in, redirect to login page
if (!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit();
}
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>


<div class="container">
  <h1>Welcome to JobMatch</h1>
  <p>Find your dream job or post job openings today.</p>
  <a href="jobs.php" class="btn btn-primary">Find Jobs</a>
  <a href="reg.php" class="btn btn-success">Get Started</a>
</div>

<?php include 'includes/footer.php'; ?>