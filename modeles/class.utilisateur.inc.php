<?php

  class Utilisateur{

      private $id;
      private $nom;
      private $prenom;
      private $adressemail;
      private $pseudonyme;
      private $motdepasse;

      public function __construct(){
        $this->nom=func_get_arg(0);
        $this->prenom=func_get_arg(1);
        $this->adressemail=func_get_arg(2);
        $this->pseudonyme=func_get_arg(3);
        $this->motdepasse=func_get_arg(4);
      }

      public function setID($id){
          $this->id=$id;
      }

      public function getID(){
          return $this->id;
      }

      public function setNom($nom){
          $this->nom=$nom;
      }

      public function getNom(){
          return $this->nom;
      }

      public function setPrenom($prenom){
          $this->prenom=$prenom;
      }

      public function getPrenom(){
          return $this->prenom;
      }

      public function setAdresseMail($adressemail){
          $this->adressemail=$adressemail;
      }

      public function getAdresseMail(){
          return $this->adressemail;
      }

      public function setPseudonyme($pseudonyme){
          $this->pseudonyme=$pseudonyme;
      }

      public function getPseudonyme(){
          return $this->pseudonyme;
      }

      public function setMotDePasse($motdepasse){
          $this->motdepasse=$motdepasse;
      }

      public function getMotDePasse(){
          return $this->motdepasse;
      }
  }

 ?>
