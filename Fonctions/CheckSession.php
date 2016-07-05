
<?php 
session_start();

echo $_SESSION['email'];
				     include('../fonctions-panier.php');

				
				ajouterArticle(5,5000,50000);

?>