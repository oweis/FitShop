<?php session_start(); 
 include('Fonctions-panier.php');

		try{ 
						  unset($_SESSION['email']);
							supprimePanier();
									
header('location: ../index.php');
			}
		catch(Exception $e){
			echo "Check Again";
		}
	
?>
