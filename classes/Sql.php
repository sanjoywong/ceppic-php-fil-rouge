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
      
       $this->connecxion->exec($query);
       
   }
   public function __destruct()
   {

       // $this->connecxion= null;
   }

}
