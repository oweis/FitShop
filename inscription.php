<?php include('Fonctions/Connexion.php');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Inscription | FitShop</title>
		<?php include('Include/head.php');?>
	</head><!--/head-->

<body>
<?php include("Include/header.php");?>

	<section ><!--form-->
		<div class="container">
			<div class="row">
					<div class="signup-form"><!--sign up form-->
						<h2>Inscription </h2>
						<form  method= "post" action="AJAX/serveurinscription.php">
							<input type="text" placeholder="Nom" name="nom"/>
							<input type="text" placeholder="Prenom" name="prenom"/>
							<input type="text" placeholder="Adresse" name="adresse"/>
							<input type="text" placeholder="Pays" name="pays"/>
							<input type="text" placeholder="Ville" name="ville"/>
							<input type="text" placeholder="Telephone" name="telephone"/>
							<input type="email" placeholder="Email adresse" name="email"/>
							<input type="password" placeholder="Mot de passe" name="mot_de_passe"/>
							<button type="submit" class="btn btn-default">S'inscrire</button>
						</form>
					</div><!--/sign up form-->
				
			</div>
		</div>
	</section><!--/form-->
	<br>
	<br>
	<br>
	<br>
	<?php include("Include/footer.php");?>
  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>