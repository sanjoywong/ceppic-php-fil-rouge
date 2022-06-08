<?php

function inclusionIncFile(string $defaultPage):void{

  var_dump($defaultPage);
  $files = glob('./includes/*.inc.php');
  $page = isset($_GET['page']) ?? $defaultPage;
  var_dump(isset($_GET['page']));
  var_dump($defaultPage);
  var_dump($page);
  echo $page;
$pageTest = "./includes/" . $defaultPage . ".inc.php";
  var_dump($pageTest);
echo "Debut";
if (!in_array($pageTest, $files))
    require './includes/accueil.inc.php';
else{
    var_dump($pageTest);
    require $pageTest;}
    echo "Fin";

}