<?php

use Utilisateur as GlobalUtilisateur;

class Utilisateur implements interfaceUtilisateur
{
    private string $name;
    //private string $prenom;

    public function __construct($nom)
    {
        $this->name = $nom;
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
    public function inscrireUtilisateur()
    {
        
    }
    public function modifierUtilisateur()
    {
        
    }
    public function supprimerUtilisateur()
    {
        
    }
    public function connecterUtilisateur()
    {
        
    }
    public function deconnecterUtilisateur()
    {
        
    }

    
}




?>