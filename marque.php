<?php include('Fonctions/Connexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Marque | FitShop</title>
        <?php include('Include/head.php');?>

    </head><!--/head-->

<body>
	        <?php include('Include/header.php');?>

	

	
	<section>
		<div class="container">
			<div class="row">
				
				 <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Categories</h2>
                            <!--category-productsr-->
                            <?php include('Include/category.php');?>
                            <!--/category-products-->
                            <h2>Marque</h2>
                            <!--brands_products-->
                            <?php include('Include/brands.php');?>
                            <!--/brands_products-->
                            
                        </div>
                    </div>
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Les produits</h2>
					 <?php include('Include/marque-produit.php');?>
							</div>
						</div>
						
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	<?php include('Include/footer.php');?>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>