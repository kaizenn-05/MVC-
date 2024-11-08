<?php
class Database
{
  private $host = "localhost";
  private $db_name = "jobmatch_db";
  private $username = "root";
  private $password = "";
  public $conn;

  public function getConnection()
  {
    $this->conn = null;
    try {
      $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);
    } catch (Exception $exception) {
      die("Connection error: " . $exception->getMessage());
    }
    return $this->conn;
  }
}
