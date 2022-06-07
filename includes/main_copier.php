    <!--  <?php
    $page = isset($_GET['page'])?$page=$_GET['page']:"accueil";
    $fichier =$page.".php";
    $fichier="./includes/".$fichier;
  /*   <!-- if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else
        $page = "N'existe pas";
        --> */
        // var_dump($fichier);
    require_once $fichier;
    ?>  -->




$files = glob('./includes/*.inc.php');

$page = isset($_GET['page']) ? $page = $_GET['page'] : "accueil";
$page = "./includes/" . $page . ".inc.php";

echo "Debut";
if (in_array($page, $files))
    echo require $page;
else
    require './includes/accueil.inc.php';
    echo "Fin";