<div class="centrer">
  <?php $Utilisateur = unserialize($_SESSION['utilisateur']); ?>
  <h1 style="margin-top:20px; text-align:center; font-family: Verdana"> Vos informations personnelles </h1>
  <div class="bordure">
    <form method="POST" action="index.php?controleur=modification&action=changementInformations">
      <p class="modification"> Nom : </p>
      <p><input type=text id="nom" name="nom" value="<?php echo $Utilisateur->getNom();?>" class="modification"></p>

      <p class="modification"> Prenom : </p>
      <p><input type=text id="prenom" name="prenom" value="<?php echo $Utilisateur->getPrenom();?>"class="modification"></p>

      <p class="modification"> Adresse Mail : </p>
      <p><input type=text id="mail" name="mail" value="<?php echo $Utilisateur->getAdresseMail();?>"class="modification"></p>

      <p class="modification"> Pseudonyme : </p>
      <p> <input type=text id="pseudo" name="pseudo" value="<?php echo $Utilisateur->getPseudonyme();?>"class="modification"></p>

      <p class="modification"> Mot de Passe : </p>
      <p><input type=password id="mdp" name="mdp" value="<?php echo $Utilisateur->getMotDePasse();?>"class="modification">
        <a href="JavaScript:void(0)" onclick="myFunction()" style="text-decoration:none; color:black">&#128065;</a></p>

      <script>
      function myFunction() {
        var x = document.getElementById("mdp");
        if (x.type === "password") {
            x.type = "text";
         } else {
            x.type = "password";
         }
        }
      </script>

      <input type=submit name="envoyer" value="MODIFIER">
      <input type=reset name="annuler" value="ANNULER">
    </form>
  </div>
</div>
