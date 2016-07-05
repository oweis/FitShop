<?php
		 $req = $bdd ->query('select * from produit where reductiondisponible=1 LIMIT 3' );
		 $req2 = $bdd ->query('select * from produit where reductiondisponible=1' );
		 ?>
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">
						<?php foreach($req as $donne) { echo'
								
									<div class="col-sm-4">
									<a href="produitdetails.php?idproduit='.$donne['idproduit'].'"> 

										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
											<img src="data:image/jpeg;base64,'.base64_encode( $donne['image'] ).'"/>
													<h2>'.$donne['prix'].' DH</h2>
													<p>'.$donne['nom'].'</p>
													<a href="#" class="btn btn-default add-to-cart">Details</a>
												</div>
												
											</div>
										</div>
										</a>
									</div>';}
									?>
								</div>
								<div class="item">	
									<?php foreach($req2 as $donne) { echo'
								
									<div class="col-sm-4">
									<a href="produitdetails.php?idproduit='.$donne['idproduit'].'"> 

										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
											<img src="data:image/jpeg;base64,'.base64_encode( $donne['image'] ).'"/>
													<h2>'.$donne['prix'].' DH</h2>
													<p>'.$donne['nom'].'</p>
													<a href="#" class="btn btn-default add-to-cart">Details</a>
												</div>
												
											</div>
										</div>
										</a>
									</div>';}
									?>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>