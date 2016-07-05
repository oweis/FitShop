<div class="panel-group category-products" id="accordian">
					
						<?php 

						$req = $bdd ->query('select * from categorie' );

					foreach($req as $donne) { echo'
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="categorie.php?idcategorie='.$donne['idcategorie'].'">'.$donne['nom'].' </a></h4>
								</div>
							</div>
					' ;}?>
							
							
						</div>