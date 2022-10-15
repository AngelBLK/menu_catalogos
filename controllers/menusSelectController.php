<?php

require_once "models/catalogModel.php";

$catalog= new catalogModel();
$menuList = $catalog->getMenus();