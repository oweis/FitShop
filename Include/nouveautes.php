	<div class="tab-content">
<?php 
			$req_nouveautes = $bdd ->query('select * from produit order by date_ajout desc ' );
				foreach($req_nouveautes as $donne){
					echo'

		<a href="produitdetails.php?idproduit='.$donne['idproduit'].'"> 
	              <div class="col-sm-3">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="data:image/jpeg;base64,'.base64_encode( $donne['image'] ).'" />
								<h2>'.$donne['prix'].' DH</h2>
											<p>'.$donne['nom'].'</p>
									Details
								
							</div>
						</div>
					</div>
				</div>
				</a>';}?>
			
		</div>
		