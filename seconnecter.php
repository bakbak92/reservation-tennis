<?php


// récupération du mail et du pass apres nettoyage-sécurité
$mail = htmlspecialchars($_POST['mail']);

$password = htmlspecialchars($_POST['password']);






//  liaison a la base de données

try
{
$bdd = new PDO('mysql:host=localhost;dbname=tennis;charset=utf-8', 'root', 'flingualelas');
}



catch (Exception $e)
{
	die("Erreur : " . $e->getMessage());
}

//





//Vérification de l'existence du mail et du pass correspondant dans la base de données adhérents


$req = $bdd->prepare('SELECT id FROM adherents WHERE mail = :mail AND password = :password');
$req->execute(array(
'mail'=>$mail,
'password'=>$password
	));

$resultat = $req->fetch();
if (!$resultat){
	echo 'Votre adresse mail ou votre mot de passe n\'est pas correct.';
}else
{

	header ('Location: reservation.php');
}


?>
