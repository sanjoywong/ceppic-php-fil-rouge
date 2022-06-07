<?php

function inclusionIncFile(string $defaultPage):void{

  $files = glob('./includes/*.inc.php');
  $page = isset($_GET['page'])??$defaultPage;

$pageTest = "./includes/" . $page . ".inc.php";

echo "Debut";
if (!in_array($pageTest, $files))
    require './includes/accueil.inc.php';
else
    require $pageTest;
    echo "Fin";

}