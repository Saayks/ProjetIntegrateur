<img src="images/montauryPhoto.png" alt="Photo du Parking Montaury" class="fondecran">
<div class="formulaire">
  <form method="POST" action="index.php?controleur=inscription&action=Inscription">
    <fieldset>
      <legend> Inscription au site : </legend>

      <p class="retouràlaligne"><label> Nom :</label></p>
      <p><input type=text id="nom" name="nom" style="margin-left:10px"></p>

      <p class="retouràlaligne"><label> Prénom :</label></p>
      <p><input type=text id="prenom" name="prenom" style="margin-left:10px"></p>

      <p class="retouràlaligne"><label> Adresse mail :</label></p>
      <p><input type=text id="adressemail" name="adressemail" placeholder="@gmail.com, par exemple" style="margin-left:10px"></p>

      <p class="retouràlaligne"><label> Nom d'utilisateur : </label></p>
      <p><input type=text id="utilisateur" name="pseudonyme" placeholder="Identifiant" style="margin-left:10px"></p>

      <p class="retouràlaligne"<label> Mot de passe : </label>
      <p><input type=password id="motdepasse" name="motdepasse" placeholder="Mot de passe" style="margin-left:10px"></p>

      <?php if(isset($pseudonymeExistant)){?>
          <p style="font-family:Verdana; color:red; margin-top:10px"> Le pseudonyme est déjà utilisé. Veuillez en renseigner un autre </p>
      <?php  }  ?>

      <p><input type=submit id="Envoyer" value="S'INSCRIRE" style="margin-left:26%; margin-top:33px">
      <input type=reset id="Annuler" value="REINITIALISER" style="text-align:center;"></p>
      <p><a href="index.php?controleur=connexion&action=PageConnexion" class="button-size bouton"> Déjà un compte ? Connectez vous ici !</a></p>
    </fieldset>
  </form>
</div>
