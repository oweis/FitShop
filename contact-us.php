<?php include('Fonctions/Connexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>  
 <title>Contact | E-Shopper</title>
<?php include("Include/head.php");?>
</head><!--/head-->

<body>
	<?php include("Include/header.php");?>

	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contactez <strong>Nous</strong></h2>    			    				    				
				
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="AJAX/serveuremail.php">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
						<script type="text/javascript"> function envoyer() {alert("Merci ! votre message est bien envoyé");}</script>

				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Envoyer" onclick="envoyer()">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>FitShop Inc.</p>
							<p>Ecole nationale des sports</p>
							<p>Maroc</p>
							<p>Mobile: + +212 684704324</p>
							
							<p>Email: FitShop@gmail.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="www.google.com"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="www.youtube.com"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
	<?php include("Include/footer.php");?>


  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>