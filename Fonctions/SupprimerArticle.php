<?php include('Connexion.php'); ?>
<?php include('Fonctions-panier.php'); ?>
<?php 
								//$i=$_GET['SuppidProduit'];

try{
		if (isset($_SESSION['panier'])) {
			{for($i=0;$i<count($_SESSION['panier']['idProduit']);$i++)
						{
						supprimerArticle($_SESSION['panier']['idProduit'][$i]);	
			}}
			
}
header("location: ../panier.php");
}		
		catch(Exception $e){
			echo "Check Again";
		}
	
?>
