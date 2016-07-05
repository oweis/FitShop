
<?php require("../Fonctions/Connexion.php"); ?>
<?php include('../Fonctions/Fonctions-panier.php');?>


<?php
	try{     
			$req_client = $bdd->prepare('select idclient from client where email=? and mot_de_passe=?;');
			$req_client->execute(array($_POST["email_adresse"],$_POST["mot_de_passe"]));								
												
							$client = $req_client->fetch();
							$idclient = $client['idclient']; 
		 if(!empty($idclient))
		 {
					 $req_commande = $bdd ->prepare('insert into commande(idlivraison,idpaiement,idclient) values (?,?,?)');
					 $req_commande ->execute(array($_POST["idlivraison"],$_POST["idpaiement"],$idclient));
					 
					 $req_commande_id = $bdd ->query('select max(idcommande) as maxid from commande');
					 
					 foreach($req_commande_id as $row){ $idcommande = $row['maxid']; }
									
								if (isset($_SESSION['panier']))
								{
									for($i=0;$i<count($_SESSION['panier']['idProduit']);$i++)
								{
									$req_produit_dispo = $bdd->prepare('select quantite from produit where idproduit=?;');
									$req_produit_dispo->execute(array($_SESSION['panier']['idProduit'][$i]));
									
									$quantite = $req_produit_dispo->fetch();
									
									if($_SESSION['panier']['qteProduit'][$i]<$quantite['quantite'])
									{
										$nv_quantite = $quantite['quantite'] - $_SESSION['panier']['qteProduit'][$i];
									$req_update_produit = $bdd ->prepare('update produit set quantite=? where idproduit=?');
									$req_update_produit ->execute(array($nv_quantite,$_SESSION['panier']['idProduit'][$i]));
									
									$req_commandeproduit = $bdd ->prepare('insert into commandeproduit(idcommande,idproduit,qte) values (?,?,?)');
									$req_commandeproduit ->execute(array($idcommande,$_SESSION['panier']['idProduit'][$i],$_SESSION['panier']['qteProduit'][$i]));
									}
								}
								}
								   supprimePanier();
								   creationPanier();
			}
	

		header('Location: ../index.php');
		 
		}
	catch(Exception $e){
		echo "<script>alert('pasok');</script>";
		echo 'Il faut remplir tous les champs';
	}
		

?>
