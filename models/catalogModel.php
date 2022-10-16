<?php

include("db/db.php");

class catalogModel{
  private $db;
  private $catalog = [];

  public function __construct() {
   $this->db=Connection::conn();
  }

  public function getCatalog() {
    $query = "SELECT * FROM menu";
    $res = $this->db->prepare($query);
    $res->execute();

    foreach($res as $row) {
      $this->catalog[] = $row;
    }

    return $this->catalog;
  }

  public function addCatalog($name, $menu_parent, $description){
    $query = "INSERT INTO menu (name, menu_parent, description) VALUES ($name, $menu_parent, $description)";

    $res = $this->db->prepare($query);
    $res->execute();


    $_SESSION['message'] = 'Menu save Succesfully';
    $_SESSION['message_type'] = 'success';
  }

  public function getMenus() {
    $query = "SELECT name FROM menu";
    $res = $this->db->prepare($query);
    $res->execute();

    $this->catalog[] = $res->fetch();

    return $this->catalog;
  }

}