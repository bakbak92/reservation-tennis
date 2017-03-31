<?php include('header.php'); ?>
<div class="row">
    <form class="col s12" action="inscription.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" name="prenom" class="validate">
          <label for="first_name">Prénom</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" name="nom" class="validate">
          <label for="last_name">Nom</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" name="password" class="validate">
          <label for="password">Mot de passe</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" name="mail"class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <input type="submit" name="" value="Envoyer">
    </form>
  </div>
<?php
include('footer.php');
 ?>
