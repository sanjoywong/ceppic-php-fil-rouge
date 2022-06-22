<?php

interface interfaceUtilisateur
{

    public function inscrireUtilisateur($nom,$prenom,$email,$password);
    public function modifierUtilisateur($nom,$prenom,$email,$password,$id);
    public function supprimerUtilisateur($id);
    public function connecterUtilisateur();
    public function deconnecterUtilisateur();
}





?>