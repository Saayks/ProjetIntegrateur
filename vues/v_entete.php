<header>
    <img src="images/LogoUPPA.png" alt="Logo Université des Pays de Pau et de l'Adour" style="float:left" class="logoUPPA">
      <a href="index.php?controleur=accueil" class="button-size bouton" > Accueil </a>
      <a href="index.php?controleur=services&action=pageServices" class="button-size bouton" > Services </a>
      <a href="index.php?controleur=apropos" class="button-size bouton" > À propos </a>
      <div class="alignementdroite">
      <?php if(!isset($_SESSION['utilisateur'])){  ?>
        <p><a href="index.php?controleur=inscription&action=PageInscription" class="button-size bouton"> Inscrivez-vous </a><span class="oubien">ou bien</span>
        <a href="index.php?controleur=connexion&action=PageConnexion" class="button-size bouton"> Connectez-vous </a></p>
      <?php }
        else { ?>
		<?php $Utilisateur = unserialize($_SESSION['utilisateur']); ?>
          <div class="menu">
            <span class="bouton" style="font-family:Verdana; margin-right:50px; margin-bottom:10px">឵឵឵឵឵឵឵឵឵឵឵឵឵឵឵឵ Bienvenue, <?php echo $Utilisateur->getPrenom() ?></span>
            <div class="menu-content">
              <p><a href="index.php?controleur=information&action=PageInformation" class="menuderoulant" style="border-bottom: 1px solid"> Informations </a></p>
              <p><a href="index.php?controleur=deconnexion&action=Deconnexion" class="menuderoulant"> Deconnexion </a></p>
            </div>
          </div>
        <?php } ?>
      </div>
</header>
