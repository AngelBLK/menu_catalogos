<?php 

require_once "models/catalogModel.php";

$catalog = new catalogModel();


if(isset($_POST['save_menu'])) {
  $name = $_POST['name'];
  $menu_parent = $_POST['menu_parent'];
  $description = $_POST['description'];
  
  $newCatalog =$catalog->addCatalog($name, $menu_parent, $description);

  header ("location: index.php");
  
}