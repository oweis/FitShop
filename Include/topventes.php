<?php
		 $req_top = $bdd ->query('SELECT idproduit FROM commandeproduit GROUP BY idproduit ORDER BY COUNT(idproduit) DESC LIMIT 6' );
		
		foreach($req_top as $row){
			  		 $req_top_produit = $bdd ->prepare('SELECT * FROM produit where idproduit= ?' );
					 $req_top_produit->execute(array($row['idproduit']));
				$donne = $req_top_produit->fetch();
				echo'
<a href="produitdetails.php?idproduit='.$donne['idproduit'].'"> 
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
											<img src="data:image/jpeg;base64,'.base64_encode( $donne['image'] ).'"/>
											<h2>'.$donne['prix'].' DH</h2>
											<p>'.$donne['nom'].'</p>Details
										</div>
									
							</div>		
							</div>
						</div>
						</a>'
													;}?>