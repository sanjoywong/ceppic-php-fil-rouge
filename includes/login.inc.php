
<h1>entrer votre username et password</h1>

<?php

if (isset($_POST['frmLogin'])) {

    $message = "Je viens du submit";

    $email = htmlentities(trim($_POST['email']));
    $password = htmlentities(trim($_POST['password']));

    $erreurs = array();

    if (mb_strlen($email) === 0) {
        array_push($erreurs, "Il manque vore E-mail");
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
        $_SESSION['loginUser'] = $email;
        $toEmail = $email;
        $fromEmail = 'contact@ceppic-php-fil-rouge.fr';
        $sujetEmail = 'Login Sucess!';
        $messageEmail = $email.'Vous étes bien connecté !';
        
         sendEmail($toEmail,$fromEmail,$sujetEmail,$messageEmail);
        
       // header('location: index.php?page=membre');
        
          
    }
}else{
    
    $username ="";
    include './includes/frmLogin.php';
    
}
/* 
else{
}
 */






?>