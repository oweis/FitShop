<?php include('Fonctions/Connexion.php');?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Mon compte | FitShop</title>
		<?php include('Include/head.php');?>
	</head><!--/head-->

<body>
<?php include("Include/header.php");?>

	<section ><!--form-->
		<div class="container">
			<div class="row">
					<div class="signup-form"><!--sign up form-->
						<h2>Mes informations </h2>
						
						<form  method= "post" action="AJAX/serveurmonprofil.php">
						
						<?php if(isset($_SESSION['email'])){
								 $req_user = $bdd ->prepare('select * from client where email=? ' );
								 $req_user->execute(array($_SESSION['email']));
								 $User = $req_user->fetch();
								echo '
						
							<input type="text" value="'.$User['nom'].'" placeholder="Nom" name="nom"/>
							<input type="text" value="'.$User['prenom'].'"placeholder="Prenom" name="prenom"/>
							<input type="text" value="'.$User['adresse'].'" placeholder="Adresse" name="adresse"/>
							<input type="text" value="'.$User['pays'].'"placeholder="Pays" name="pays"/>
							<input type="text" value="'.$User['ville'].'" placeholder="Ville" name="ville"/>
							<input type="text" value="'.$User['tel'].'" placeholder="Telephone" name="telephone"/>
							<input readonly="true "type="email" value="'.$User['email'].'" placeholder="Email adresse" name="email"/>
						<input type="password" placeholder="Mot de passe" name="mot_de_passe"/>' ;} ?>
							<script type="text/javascript"> function update() {alert("Vos informations sont mis à jour !");}</script>
						<button onclick="update()" type="submit" class="btn btn-default">Enregistrer les modification</button>
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