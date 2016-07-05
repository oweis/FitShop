<?php session_start(); ?>

<?php
				    include('Fonctions-panier.php');
						
							$idProduit = $_GET["JSidProduit"];
							$nomProduit = $_GET["JSnomProduit"];
							$qteProduit = $_GET["JSqteProduit"];
							$prixProduit =$_GET["JSprixProduit"];
			
				  
		try{ 
							
			ajouterArticle($idProduit,$qteProduit,$prixProduit,$nomProduit);
             		
		}
		catch(Exception $e){
			echo "Check Again";
		}
	
?>
