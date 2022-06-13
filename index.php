<?php
spl_autoload_register(function($className){
    require './classes/'.$className.'.php';
});

date_default_timezone_set('Europe/Paris');

require_once './functions/autoLoadfunciton.php';

require_once './includes/head.php';
require_once './includes/main.php';
require_once './includes/footer.php';

//include_once  './includes/footer.php';

?>