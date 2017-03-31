<?php


$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$password = htmlspecialchars($_POST['password']);
$mail = htmlspecialchars($_POST['mail']);

$bdd = new PDO('mysql:host=localhost;dbname=test', 'phpmyadmin', 'bak92i', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$req = $bdd->prepare('INSERT INTO adherent (prenom, nom, password, mail) VALUES (:prenom, :nom, :password, :mail)');
$req->execute(array(
  'nom' => $nom,
  'prenom' => $prenom,
  'password' => $password,
  'mail' => $mail
));
  header ('Location: index.php');


 ?>;
