


<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +212 684704324</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> FitShop@gmail.com</a></li>
								
								<?php if(isset($_SESSION['email'])){
								 $req_user = $bdd ->prepare('select * from client where email=? ' );
								 $req_user->execute(array($_SESSION['email']));
								 $User = $req_user->fetch();
								echo '<li><a href="#"><i></i> 	  Bonjour '.$User['nom'].' sur FitShop !</a></li>';}
								?>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
						
							<a href="index.php"><img width="200px" height="100px" src="images/logo.png" alt="" /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							
								<?php 
								?>

							<?php if(!isset($_SESSION['email']))
							{echo'
							<li><a href="inscrition.php"><i class="fa fa-user"></i> Inscription</a></li>
							<li><a href="login.php"><i class="fa fa-lock"></i>Se connecter</a></li>';}
							else{
									if(isset($_SESSION['panier'])){$nbArticles=count($_SESSION['panier']['idProduit']);}else{$nbArticles=0;}
								echo'<li><a id="myBtn" href="panier.php"><i  class="fa fa-shopping-cart"></i>Panier ('.$nbArticles.')</a></li> 
									<li><a href="monprofil.php"><i class="fa fa-user"></i> Mon profil</a></li>
									<li><a href="Fonctions/SuppressionPanier.php"><i class="fa fa-lock"></i>Se deconnecter</a></li>' 

							;} ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<?php 				$req_marque = $bdd ->query('select * from marque' );
											$req_categorie = $bdd ->query('select * from categorie' );

?>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Acceuil</a></li>
								<li class="dropdown"><a>Categories<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
<?php foreach($req_categorie as $categorie) {echo'<li><a href="categorie.php?idcategorie='.$categorie['idcategorie'].'">'.$categorie['nom'].'</a></li>';} ?>
                                    </ul>
                                </li> 
								<li class="dropdown"><a>Marque<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
<?php foreach($req_marque as $marque) {echo'<li><a href="marque.php?idmarque='.$marque['idmarque'].'">'.$marque['nom'].'</a></li>';} ?>
                                    </ul>
                                </li> 
								<li><a href="contact-us.php">Contact</a></li>
							</ul>
						</div>
						
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	