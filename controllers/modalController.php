<?php 

include("models/catalogModel.php");

$catalog = new catalogModel();


if(isset($_POST['save_menu'])) {
  echo "hola";
  $name = $_POST['name'];
  $menu_parent = $_POST['menu_parent'];
  $description = $_POST['description'];

  $newCatalog =$catalog->addCatalog($name, $menu_parent, $description);

  $_SESSION['message'] = 'Menu save succesfully';
  $_SESSION['message_type'] = 'success';

  header("Location: index.php");
}