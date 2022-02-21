<?php
$action=$_REQUEST["action"];
require_once ("modeles/class.utilisateurDAO.inc.php");
require_once 'modeles/class.utilisateur.inc.php';

switch($action){
    case 'PageInscription':
      include ("vues/v_inscription.php");
      break;

    case 'Inscription':
      $nom=$_POST['nom'];
      $prenom=$_POST['prenom'];
      $adressemail=$_POST['adressemail'];
      $utilisateur=$_POST['pseudonyme'];
      $mdp=$_POST['motdepasse'];
      $nouvelUtilisateur= new Utilisateur($nom, $prenom, $adressemail, $utilisateur, $mdp);
      $creationUtilisateur=$monPDO->inscriptionUtilisateur($nouvelUtilisateur);
      if (gettype($creationUtilisateur)=="boolean"){
         $pseudonymeExistant = 1;
         include ("vues/v_inscription.php");
         break;
      }
      $Utilisateur=$monPDO->getUtilisateur($utilisateur);
      $_SESSION['utilisateur'] = serialize($Utilisateur);
      include ("vues/v_entete.php");
      include ("vues/v_accueil.html");
      break;

    case 'PageConnexion':
      include ("vues/v_connexion.php");
      break;

    case 'Connexion':
      $utilisateur=$_POST['user'];
      $mdp=$_POST['motdepasse'];
      $connexion=$monPDO->connexionUtilisateur($utilisateur, $mdp);
      if($connexion==0){
          $testConnexion = 1;
          include("vues/v_connexion.php");
          break;
      }
      $Utilisateur=$monPDO->getUtilisateur($utilisateur);
      $_SESSION['utilisateur'] = serialize($Utilisateur);
      include ("vues/v_entete.php");
      break;

    case 'PageInformation':
      include ("vues/v_informations.php");
      break;

    case 'changementInformations':
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $adresse = $_POST['mail'];
      $pseudonyme = $_POST['pseudo'];
      $motdepasse = $_POST['mdp'];
      $modifUtilisateur = $monPDO->modificationUtilisateur($nom, $prenom, $adresse, $pseudonyme, $motdepasse);
      $Utilisateur=$monPDO->getUtilisateur($pseudonyme);
      $_SESSION['utilisateur'] = serialize($Utilisateur);
      include('vues/v_entete.php');
      include('vues/v_accueil.html');
      break;

    case 'Deconnexion' :
      $_SESSION['utilisateur'] = null;
      $message = "Vous vous êtes bien deconnecté.";
      include('vues/v_entete.php');
      include('vues/v_message.php');
      break;

    case 'pageServices' :
      $id = $Utilisateur->getID();
      $heure = $_SESSION['heure'];
      $date = $_SESSION['date'];
      $nbPlaces = $_SESSION['nbPlaces'];
      $verification = $monPDO->verificationDonnees($date, $heure);
      if(isset($verification['date']))
        break;
      $donnees = $monPDO->recuperationDonnees($heure, $date, $nbPlaces, $id);
}
?>
