<h1>Inscription</h1>
<?php
 if (isset($_POST['frmInscription'])){
        $message = "Je viens du formulaire";
        dump($_POST);

        $nom = htmlentities(trim($_POST['nom']));
        $prenom = htmlentities(trim($_POST['prenom']));
        $mail = htmlentities(trim($_POST['mail']));
        
        dump($nom);
        dump($prenom);
        dump($mail);
    }
        else{
        $message = "Je ne viens pas du formulaire";
        include './includes/frmInscription.php';
    }
        echo $message;
?>
