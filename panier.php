<?php require("Fonctions/Connexion.php"); ?>
<?php include('Fonctions/Fonctions-Panier.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Panier | FitShop</title>
    <?php include('Include/head.php');?>

</head><!--/head-->

<body>
    <?php include('Include/header.php');?>



	<section id="cart_items">
		
				<div id="panierpanier"></div>
				

	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			
			<div class="row">
				
  
				<div class="col-sm-12">
					<h3>Utiliser la carte pour payer</h3>
					<div class="total_area">
						<ul>
							<li>Panier total <span><div id="paniertotal"></div></span></li>
							<li>Frais livraison <span>gratuit</span></li>
							<li>Total <span><div id="total"></div></span></li>
						</ul>
							<a class="btn btn-default check_out" href="payement.php">Passer une commande</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	    <?php include('Include/footer.php');?>




    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
