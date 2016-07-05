<?php include('Fonctions/Connexion.php');?>

<!DOCTYPE html>
    <?php include('Fonctions/Fonctions-panier.php');?>

<html lang="en">

<head>
    <title>Se connecter| FitShop</title>
	<?php include('Include/head.php');?>
			
</head><!--/head-->

<body>
        <?php include('Include/header.php');?>

	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form method="POST" action="AJAX/serveurlogin.php">
						 <input type="email" placeholder="Email Addresse" name="email" id="email" />
					     <input type="password" placeholder="Mot de passe" name="mot_de_passe"/>

							<span>
								<input type="checkbox" class="checkbox"> 
								Rester connecter
							</span>
							<button type="submit" class="btn btn-default" onclick="JScreation_panier()">Se connecter</button>
						</form>
					</div><!--/login form-->
				</div>
				
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
		        <?php include('Include/footer.php');?>

	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>