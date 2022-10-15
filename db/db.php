<?php

class Connection {

  public static function conn() {
    $conn = new PDO("mysql:host=localhost;dbname=catalogo", "root", "D4nt32099");

    return $conn;
  }
}