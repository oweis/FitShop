<?php	

				$req = $bdd ->query('select * from marque' );

					
?>
<div class="brands_products">
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								<?php foreach($req as $donne) { echo'
									<li><a href="marque.php?idmarque='.$donne['idmarque'].'"> <span class="pull-right"></span>'.$donne['nom'].' </a></li>
								';}?>
						
								</ul>
							</div>
						</div>
						
