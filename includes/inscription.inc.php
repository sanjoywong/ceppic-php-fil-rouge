<h1>Inscription</h1>
<?php



if (isset($_POST['frmInscription'])) {
    $message = "Je viens du formulaire";

    $nom = htmlentities(trim($_POST['nom']));
    $prenom = htmlentities(trim($_POST['prenom']));
    $mail = htmlentities(trim($_POST['mail']));
    $password = htmlentities(trim($_POST['password']));
    $password1 = htmlentities(trim($_POST['password1']));
    
    

    $erreurs = array();

    if (mb_strlen($nom) === 0) {
        array_push($erreurs, "Il manque vore nom");
    };
    if (mb_strlen($prenom) === 0)
        array_push($erreurs, "Il manque vore prénom");
    if (mb_strlen($mail) === 0)
        array_push($erreurs, "Il manque vore e-mail");
    if(mb_strlen($password)===0|mb_strlen($password1===0)){
        
        array_push($erreurs, "Il manque vore password");
    }
    if($password!== $password1){
        // password_verify($password1, $password_hash);
        array_push($erreurs, "Ce ne sont pas le meme password, input again");
    }
    elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL))
        array_push($erreurs, "votre adress mail n'est pas conforme");

    if (count($erreurs)) {

        $messageErreur = "<ul>";
        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";
        echo $messageErreur;
        include './includes/frmInscription.php';
    } else {
        $serverName = "localhost";
        $userName = "root";
        $userPassword = "";
        $database = "filrouge";
        try {
            $connexion = new PDO("mysql:host=$serverName;dbname=$database", $userName, $userPassword);
            $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $password = password_hash($password, PASSWORD_DEFAULT);
            $requete = "INSERT INTO utilisateurs (id_utilisateur,nom,prenom,mail,password) VALUES(NULL,'$nom','$prenom','$mail','$password');";
            $connexion->exec($requete);
            displayMessage("Requete ok");
            
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }
} else {
    $nom = $prenom = $mail = "";
    include './includes/frmInscription.php';
    //echo $message;
}

//   displayMessage("!");
?>