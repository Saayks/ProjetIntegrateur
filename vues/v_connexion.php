<img src="images/montauryPhoto.png" alt="Photo du Parking Montaury" class=fondecran>
<div class="formulaire">
  <form method="POST" action="index.php?controleur=connexion&action=Connexion">
    <fieldset>
      <legend> Connexion au site : </legend>

      <p class="retouràlaligne"><label> Nom d'utilisateur : </label></p>
      <p><input type=text id="user" name="user" placeholder="Identifiant" style="margin-left:10px"></p>

      <p class="retouràlaligne"><label> Mot de passe : </label></p>
      <p><input type=password id="motdepasse" name="motdepasse" placeholder="Mot de passe" style="margin-left:10px"></p>

      <p><input type=submit id="Envoyer" value="SE CONNECTER" style="margin-left:20%; margin-top:33px">
      <input type=reset id="Annuler" value="REINITIALISER"></p>

      <?php if(isset($testConnexion)){?>
          <p style="font-family:Verdana; color:red; margin-top:10px"> Les informations sont erronées, veuillez réessayer !</p>
      <?php } ?>

      <p><a href="index.php?controleur=connexion&action=PageInscription" class="button-size bouton"> Pas de compte ? Inscrivez vous ici !</a></p>
    </fieldset>
  </form>
</div>
