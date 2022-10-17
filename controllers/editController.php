<?php

require_once "models/catalogModel.php";

$edit_menu = new catalogModel();
$name;
$description;


if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $data = $edit_menu->selectEditMenu($id);
  
    
  $name = $data['name'];
  $description = $data['description'];
}

if(isset($_POST['update'])) {
  $id = $_GET['id'];
  $new_name = $_POST['name'];
  $new_menu_parent = $_POST['menu_data'];
  $new_description = $_POST['description'];
  $edit_menu->editMenu($id, $new_name, $new_menu_parent, $new_description);
}
