<?php
if (!isset($_GET['id']))
{
    header('Location:./index.php');
}
$idUser = $_GET['id'];


$requete = "DELETE FROM utilisateurs WHERE id_utilisateur = '$idUser' ";

$requeteSupp = new Sql();
$requeteSupp->supprimer($requete);

header('Location: ./index.php?page=admin');