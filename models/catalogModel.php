<?php

require_once "db/db.php";

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
    $query = "INSERT INTO menu (name, menu_parent, description) VALUES ('$name', '$menu_parent', '$description')";

    $res = $this->db->prepare($query);
    $res->execute();

  }

  public function getMenus() {
    $query = "SELECT name FROM menu WHERE menu_parent IS NULL OR menu_parent =''";
    $res = $this->db->prepare($query);
    $res->execute();

    foreach($res as $row) {
      $this->catalog[] = $row;
    }

    return $this->catalog;
  }

  public function deleteElement($id) {
    $query = "DELETE FROM menu WHERE id = $id";
    $res = $this->db->prepare($query);
    $res->execute();
  }

  public function selectEditMenu($id) {
    $query = "SELECT * FROM menu WHERE id = $id";
    $res = $this->db->prepare($query);
    $res->execute();

    foreach($res as $row) {

    }

    $row = $res->fetch();

    return $row;
    
  }

  public function editMenu($id, $new_name, $new_menu_parent, $new_description) {
    $query = "UPDATE menu SET name = '$new_name', menu_parent = 'new_menu_parent = '$new_menu_parent', description = '$new_description' WHERE id = $id";

    $res = $this->db->prepare($query);
    $res->execute();

  }

}