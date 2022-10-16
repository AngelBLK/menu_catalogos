<?php 

require_once "models/catalogModel.php";

$catalog = new catalogModel();


if(isset($_POST['save_menu'])) {
  $name = $_POST['name'];
  $menu_parent = $_POST['menu_parent'];
  $description = $_POST['description'];
  
  echo "<script> console.log('". $menu_parent ."');</script>";
  // $newCatalog =$catalog->addCatalog($name, $menu_parent, $description);

  $_SESSION['message'] = 'Menu save succesfully';
  $_SESSION['message_type'] = 'success';

  header ("location: index.php");
}