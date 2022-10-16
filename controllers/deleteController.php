<?php 

require_once "models/catalogModel.php";

$menu = new catalogModel();

if(isset($_GET['id'])) {
  $id = $_GET['id'];

  $menu->deleteElement($id);

  header ("location: index.php");
}
