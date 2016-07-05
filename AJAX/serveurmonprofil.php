<?php require("../Fonctions/Connexion.php"); ?>

<?php

			  
	try{   							
		 $req = $bdd ->prepare('update client set nom= ? and prenom = ? and email =? mot_de_passe = ? adresse =? pays=? ville =? tel= ? where email="$_POST[\'email\']"');
		 $req ->execute();

		 
		}
	catch(Exception $e){
		dir();
	}
		
	     header('Location: ../monprofil.php');

?>
