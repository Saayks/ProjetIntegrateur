<?php
require_once 'class.gestionConnexion.inc.php';
require_once 'class.utilisateur.inc.php';

class UtilisateurDAO{

    private $_db;

    public function setDB(PDO $db){
        $this->_db = $db;
    }

    public function __construct(){
        $monPDO=GestionConnexion::getConnexion();
        $this->setDB($monPDO);
    }

    public function getUtilisateur($pseudonyme){
        $req = "select * from utilisateur WHERE pseudonyme LIKE '$pseudonyme'";
        $res = $this->_db->prepare($req);
        $res->execute();
        $donnees = $res->fetch();
        $id = $donnees['idutilisateur'];
        $nom = $donnees['nom'];
        $prenom = $donnees['prenom'];
        $adressemail = $donnees['adressemail'];
        $pseudonyme = $donnees['pseudonyme'];
        $motdepasse = $donnees['motdepasse'];
        $Utilisateur = new Utilisateur($nom, $prenom, $adressemail, $pseudonyme, $motdepasse);
        $Utilisateur->setID($id);
        return $Utilisateur;
    }

    public function inscriptionUtilisateur(Utilisateur $utilisateur){
      $nom = $utilisateur->getNom();
      $prenom = $utilisateur->getPrenom();
      $adressemail = $utilisateur->getAdresseMail();
      $pseudonyme = $utilisateur->getPseudonyme();
      $motdepasse = $utilisateur->getMotDePasse();
      $req = "insert into utilisateur (nom, prenom, adressemail, pseudonyme, motdepasse) values ('$nom', '$prenom', '$adressemail', '$pseudonyme', '$motdepasse')";
      $res = $this->_db->exec($req);
      return $res;
      }

    public function connexionUtilisateur ($utilisateur, $mdp){
      $req = "select * from utilisateur where pseudonyme like '$utilisateur' and motdepasse LIKE '$mdp'";
      $res = $this->_db->prepare($req);
      $res->execute();
      $donnees = $res->fetch();
      if(isset($donnees['idutilisateur'])){
          $id = $donnees['idutilisateur'];
      }
      else{
          $id = 0;
      }
      return $id;
    }

    public function modificationUtilisateur($nom, $prenom, $adresse, $pseudonyme, $mdp){
      $req = "update utilisateur set nom = '$nom', prenom = '$prenom', adressemail = '$adresse', pseudonyme = '$pseudonyme', motdepasse = '$mdp'";
      $res = $this->_db->exec($req);
      return $res;
    }

    public function recuperationDonnees($heure, $date, $nbPlaces, $id){
      $req = "insert into donnees values ('$date', '$heure', '$nbPlaces', '$id')";
      $res = $this->_db->exec($req);
      return $res;
    }

    public function verificationDonnees($date, $heure){
      $req = "select * from donnees where date LIKE '$date' and heure LIKE '$heure'";
      $res = $this->_db->query($req);
      $res = $res -> fetch();
      return $res;
    }

}
 ?>
