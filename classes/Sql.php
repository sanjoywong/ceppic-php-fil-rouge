<?php

class Sql{

   private string $serverName = "localhost";
   private string $userName = "root";
   private string $userPassword = "";
   private string $database = "filrouge";
   private object $connecxion;

   public function __construct()
   {
       try {
        $this->connecxion = new PDO("mysql:host=$this->serverName;dbname=$this->database", $this->userName, $this->userPassword);
        $this->connecxion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
       }
   }
   public function inserer($query){
      //var_dump($query);
       $this->connecxion->exec($query);
       
   }

   public function slt($tbl){
   //echo "Je suis la";
    $s1 = "select * from $tbl";
   
  // var_dump($s1);
   //echo $stmt->;
   //echo "Je suis la-ba***";
   
    $arrayRt=$this->connecxion->query($tbl)->fetchAll();
    return $arrayRt; 

   }
   
   public function udt($sql){
//    var_dump($sql);
    try{
        
        $this->connecxion->exec($sql);
        echo "updated the record !";
    } catch(PDOException $e){
        die("erreus：cannot excute ce sql $sql. " . $e->getMessage());
    }

   }
   public function supprimer($requete){
    try{
        
        $this->connecxion->exec($requete);
        echo "deleted the record !";
    } catch(PDOException $e){
        die("erreus：cannot excute ce sql $requete. " . $e->getMessage());
    }

   }

   public function __destruct()
   {

       unset($this->connecxion);
   }

}
