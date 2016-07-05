<?php
		 $req = $bdd ->prepare('select * from produit where idmarque=? ' );
		 $req->execute(array(($_GET["idmarque"])));

 foreach($req as $donne) { echo'
<a href="produitdetails.php?idproduit='.$donne['idproduit'].'"> 
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
											<img src="data:image/jpeg;base64,'.base64_encode( $donne['image'] ).'"/>
											<h2>'.$donne['prix'].'</h2>
											<p>'.$donne['nom'].'</p>
											<a href="#" class="btn btn-default add-to-cart">Details</a>
										</div>
									
							</div>		
							</div>
						</div>
						</a>'
													;}?>