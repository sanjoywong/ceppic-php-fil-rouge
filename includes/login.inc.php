<?php

session_start();
?>

<h1>login</h1>

<?php

if (isset($_POST['frmLogin'])) {

    $message = "Je viens du submit";

    $username = htmlentities(trim($_POST['username']));
    $password = htmlentities(trim($_POST['password']));

    $erreurs = array();

    if (mb_strlen($username) === 0) {
        array_push($erreurs, "Il manque vore username");
    };

    if (mb_strlen($password) === 0) {
        array_push($erreurs, "Il manque vore mot de pass");
    };

    if (count($erreurs)) {
        $messageErreur = "<ul>";
        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";
        echo $messageErreur;
        include './includes/frmLogin.php';
    } else {
        $_SESSION['loginUser'] = $username;
        echo $_SESSION['loginUser'];  
        displayMessage("Pas d'erreurs");
        
          
    }
}else{
    echo $_SESSION['loginUser'];
    echo "tout va bien";
    include './includes/frmLogin.php';
}
/* 
else{
    $mail ="";
    include './includes/frmLogin.php';
}
 */






?>