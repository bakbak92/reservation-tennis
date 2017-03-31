<?php

$nom= htmlspecialchars($_POST['nom']);
$prenom= htmlspecialchars($_POST['prenom']);
$password= htmlspecialchars($_POST['password']);
$mail= htmlspecialchars($_POST['mail']);

setcookie('nom', $nom, time()+365*24*3600, null, null, false, true);
setcookie('prenom', $prenom, time()+365*24*3600, null, null, false, true);
setcookie('password', $password, time()+365*24*3600, null, null, false, true);
setcookie('mail', $mail, time()+365*24*3600, null, null, false, true);

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>

	<form method="POST" action="inscription.php">

	<input type="text" name="nom" placeholder="votre nom : ">
	<input type="submit" value="envoyer">

	</form>

</body>


</html>

<?php


//liaison a la base de données


try
{
$bdd = new PDO('mysql:host=localhost;dbname=tennis;charset=utf8', 'root', 'flingualelas&');
}

catch (Exception $e)
{
	die("Erreur : " . $e->getMessage());
}



//INscription du nouvel adhérent dans la table adhérents

$req = $bdd->prepare('INSERT INTO adherents (nom, prenom, password, mail) VALUES (:nom, :prenom, :password, :mail)');
$req->execute(array(
'nom' => $nom,
'prenom' => $prenom,
'password' => $password,
'mail' => $mail
	));

?>

