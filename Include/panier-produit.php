						<?php		
						if (isset($_SESSION['panier']))
						{for($i=0;$i<count($_SESSION['panier']['idProduit']);$i++)
						{
					
				   echo '<tr>
							<td class="cart_description">
								<p>'.$_SESSION['panier']['nomProduit'][$i].'</p>
							</td>
							<td class="cart_description">
								<p>'.$_SESSION['panier']['nomProduit'][$i].'</p>
							</td>
							<td class="cart_price">
								<p>'.$_SESSION['panier']['prixProduit'][$i].' DH</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<input readonly="true" class="cart_quantity_input" type="text" name="quantity" value="'.$_SESSION['panier']['qteProduit'][$i].'" autocomplete="off" size="2">
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">'.$_SESSION['panier']['prixProduit'][$i].'DH</p>
							</td>
							<td class="cart_delete">
								<form method="GET">
								<a href="Fonctions/SupprimerArticle.php" class="cart_quantity_delete" ><i class="fa fa-times"></i></a>

								</form>
							</td>
						</tr>'
						;}} ?>