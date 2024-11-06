<?php
class User
{
  private $conn;

  public function __construct($db)
  {
    $this->conn = $db;
  }

  public function login($email, $password)
  {
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();
      if (password_verify($password, $user['password'])) {
        return $user;
      }
    }
    return false;
  }

  public function register($fname, $lname, $email, $password)
  {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (fname, lname, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("ssss", $fname, $lname, $email, $hashedPassword);
    return $stmt->execute();
  }
}
