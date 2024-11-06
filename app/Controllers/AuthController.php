<?php
class AuthController
{
  private $user;

  public function __construct($db)
  {
    $this->user = new User($db);
  }

  public function login()
  {
    if (isset($_POST['login'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $loggedInUser = $this->user->login($email, $password);
      if ($loggedInUser) {
        session_start();
        $_SESSION['email'] = $loggedInUser['email'];
        $_SESSION['fname'] = $loggedInUser['fname'];
        header("Location: dashboard.php");
        exit();
      } else {
        return "Invalid email or password.";
      }
    }
  }

  public function register()
  {
    if (isset($_POST['register'])) {
      $fname = $_POST['firstName'];
      $lname = $_POST['lastName'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      if ($this->user->register($fname, $lname, $email, $password)) {
        header("Location: dashboard.php");
        exit();
      } else {
        return "Registration failed.";
      }
    }
  }
}
