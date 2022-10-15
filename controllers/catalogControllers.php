<?php

require_once "models/catalogModel.php";

$catalog= new catalogModel();
$catalogList = $catalog->getCatalog();
