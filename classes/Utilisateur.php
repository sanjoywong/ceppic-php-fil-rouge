<?php

use Utilisateur as GlobalUtilisateur;

class Utilisateur implements interfaceUtilisateur
{
    private string $serverName = "localhost";
    private string $userName = "root";
    private string $userPassword = "";
    private string $database = "filrouge";
    private object $connecxion;

    public function __construct()
    {
        // $this->name = $nom;
    }

    public function __toString()
    {
        return "Vous tentez d'afficher un objet __tostring! ";
    }

    public function __invoke($arguments)
    {
        echo " Vous tentez d'utiliser un objet comme fonction avec argument $arguments __invoke";
    }

    public function __clone()
    {
        // Invoqué lors de l'utilisation du clonage d'objet
    }

    public function __isset($nomm)
    {
        echo "Vous tentez d'accéder à nom $nomm"."<hr>";
        
    }

    public function __get($arguments)
    {
        echo "La propriété $arguments n'existe pas";
    }

    public function __set($name, $value)
    {
        echo "Vous essayez de mettre la $value à la propriété $name";
    }


    public function __call($name, $arguments)
    {
        echo "La méthode $name n'est accessible";
      // var_dump($arguments); 
        echo "Les arguments passés sont :".implode('/',$arguments);
    }
    public static function __callStatic($name, $arguments)
    {
        //même chose aue __call() dans un contexte d'appel de méthode statique
    }
    public function inscrireUtilisateur($nom,$prenom,$email,$password)
    {
        //connecterUtilisateur();
        //var_dump($nom);

        $requete = "INSERT INTO utilisateurs (id_utilisateur, nom, prenom, mail, password)
            VALUES (NULL, '$nom', '$prenom', '$email', '$password');";
        
        $queryInsert = new Sql();
        $queryInsert->inserer($requete);
       // deconnecterUtilisateur();
    }
    public function modifierUtilisateur($nom,$prenom,$email,$password,$id)
    {
        $requete = "UPDATE utilisateurs set nom='$nom', prenom ='$prenom', mail='$email', password ='$password'
        where id_utilisateur = '$id';";
    
        $sqlUpdate = new Sql();
        $sqlUpdate->udt($requete);

    
    }
    public function supprimerUtilisateur($id)
    {
        $requete = "DELETE FROM utilisateurs WHERE id_utilisateur = '$id' ";

        $requeteSupp = new Sql();
        $requeteSupp->supprimer($requete);
    }
    public function connecterUtilisateur()
    {
            
       try {
             $this->connecxion = new PDO("mysql:host=$this->serverName;dbname=$this->database", $this->userName, $this->userPassword);
             $this->connecxion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } 
            catch (PDOException $e) {
             die("Erreur : " . $e->getMessage());
            }
       
    }
    public function deconnecterUtilisateur()
    {
        if(isset($this->connexion))
        $this->connexion = null;
    }

    
}
