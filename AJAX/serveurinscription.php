<?php require("../Fonctions/Connexion.php"); ?>

<?php

			  
	try{   							
		 $req = $bdd ->prepare('insert into client(nom,prenom,email,mot_de_passe,adresse,pays,ville,tel) values (?,?,?,?,?,?,?,?)');
		 $req ->execute(array($_POST["nom"],$_POST["prenom"],$_POST["email"],$_POST["mot_de_passe"],$_POST["adresse"],$_POST["pays"],$_POST["ville"],$_POST["telephone"]));
	     header('Location: login.php');

		 
		}
	catch(Exception $e){
		echo "<script>alert('pasok');</script>";
		echo 'Il faut remplir tous les champs';
	}
		

?>
