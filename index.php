<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/general.css"/>
  <meta charset="utf-8">
  <title> Bienvenue au Parking Montaury ! </title>
</head>
<body>
<?php
session_start();
require_once 'modeles/class.utilisateurDAO.inc.php';
$monPDO = new UtilisateurDAO();

if(!isset($_REQUEST["controleur"]))
  $controleur = "accueil";
else
  $controleur = $_REQUEST["controleur"];

switch($controleur){
    case "accueil":
      include ("vues/v_entete.php");
      include ("vues/v_accueil.html");
      break;
    case "services":
      if(isset($_SESSION['utilisateur'])){
        include ("vues/v_entete.php");
        include ("vues/v_services.php");
        include ("controleurs/c_utilisateur.php");
      }else{
        include ("vues/v_entete.php");
        $message = "Vous devez vous connecter afin d'accéder aux services !";
        include ("vues/v_message.php");
      }
      break;
    case "apropos":
      include ("vues/v_entete.php");
      include ("vues/v_propos.php");
      break;
    case "connexion":
      include ("controleurs/c_utilisateur.php");
      break;
    case "inscription":
      include ("controleurs/c_utilisateur.php");
      break;
    case "information":
      include ("vues/v_entete.php");
      include ("controleurs/c_utilisateur.php");
      break;
    case "modification":
      include ("controleurs/c_utilisateur.php");
      break;
    case "deconnexion":
      include ("controleurs/c_utilisateur.php");
      break;
}

?>
</body>
</html>
