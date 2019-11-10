<?php


class MysqlConnection {
  private $conn;
  function __construct() {
    $this->conn = new PDO("mysql:host=localhost;dbname=my_db;charset=utf8", "newuser", "password");
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  function select($sql) {
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }

  function create($sql) {
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
  }
}