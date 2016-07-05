<?php require("Fonctions/Connexion.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>payement | FitShop</title>
<?php include("Include/head.php");?>
</head><!--/head-->

<body>
<?php include("Include/header.php");?>
	
	<section id="cart_items">
		<div class="container">
			<form class="form-horizontal" role="form" name='formulaire' action='AJAX/serveurpayement.php' method='post' id="formulaire">

			<div class="register-req">
				<p>S'il vous plait utiliser un compte enregistré  </p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
			

					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Informations du client</p>

								<input id="email_adresse" name='email_adresse' type="text" placeholder="Email Adresse">
								<input id="mot_de_passe" name='mot_de_passe' type="password" placeholder="Mot de passe">
							
						</div>
					</div>
					<div class="col-sm-8 clearfix">
						<div class="bill-to">
							<div class="form-one">
														<p>Choisir une methode de Livraison : </p>

									<select class="form-control" id="idlivraison" name='idlivraison'>
										<ul> 
									<?php 
										$req = $bdd ->query('SELECT idlivraison,nom FROM livraison');

										foreach($req as $donnee)
										{echo '<option id="'.htmlspecialchars($donnee['idlivraison']).'" name="'.htmlspecialchars($donnee['nom']).'" value="'.htmlspecialchars($donnee['idlivraison']).'">'.htmlspecialchars($donnee['nom']).'</option>';}
									?>
										</ul>
	   
									</select>
							</div>

							<div class="form-two">
															<p>Choisir une methode de Paimenet : </p>

								
									<select class="form-control" id="idpaiement" name='idpaiement'>
										<ul> 
									<?php 
										$req = $bdd ->query('SELECT idpaiement,nom FROM paiement');

										foreach($req as $donnees)
										{echo '<option id="'.htmlspecialchars($donnee['idpaiement']).'" name="'.htmlspecialchars($donnee['nom']).'" value="'.htmlspecialchars($donnee['idpaiement']).'">'.htmlspecialchars($donnee['nom']).'</option>';}
									?>
										</ul>
	   
									</select>
								
									<button onclick="JSPassercommande()" class="btn btn-primary" href="" >Continuer</button>
<br><br><br>
							</div>
							</div>
							
							
							
						</div>

					</div>
									
				</div>
								</form>

			</div>
		

	</section> <!--/#cart_items-->

	
<?php include("Include/footer.php");?>

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>