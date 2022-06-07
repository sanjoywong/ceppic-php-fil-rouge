<?php
require_once './includes/nav.php';
?>
<main>
    <?php
    $files = glob('./includes/*.inc.php');

    $page = isset($_GET['page']) ? $page = $_GET['page'] : "accueil";
    $page = "./includes/" . $page . ".inc.php";

    if (in_array($page, $files))
        echo require $page;
    else
        require './includes/accueil.inc.php';

    ?>
</main>