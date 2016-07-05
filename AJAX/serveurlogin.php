<?php require("../Fonctions/Connexion.php"); ?>
<?php


// Hachage du mot de passe
//$pass_hache = sha1($_POST['pass']);

// Vérification des identifiants
$req = $bdd->prepare('SELECT idclient,email FROM client WHERE email = ? AND mot_de_passe = ?');
//$req->execute(array('pseudo' => $pseudo,'pass' => $pass_hache));
$req->execute(array( $_POST['email'],$_POST['mot_de_passe']));

$resultat = $req->fetch();

if (!$resultat)
{
		header('Location: ../login.php');
}
else
{
   
    $_SESSION['id'] = $resultat['idclient'];
    $_SESSION['email'] = $resultat['email'];
	header('Location: ../index.php');

}
?>