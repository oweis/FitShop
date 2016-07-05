<?php
		 $req = $bdd ->prepare('select * from produit where idproduit=? ' );
		 $req->execute(array(($_GET["idproduit"])));

		 
		 
	 foreach($req as $donne) {echo'

<div class="product-details">
                            <!--product-details-->
														<div id="test"></div>

                            <div class="col-sm-5">
                                <div class="view-product">
																										

											<img id="imageProduit" src="data:image/jpeg;base64,'.base64_encode( $donne['image'] ).'" />
                                    <h3>'.$donne['taille'].'</h3>
											</div>

                                                                </div>
                                                                <div class="col-sm-7">
                                                                    <div class="product-information">
                                                                        <!--/product-information-->
                                                                        <img src="" class="newarrival" alt="" />
																			<form method="GET">
																		</p><input type="hidden" value="'.$donne['nom'].'" id="nomProduit"/>
                                                                        <h2>'.$donne['nom'].'</h2>
                                                                        <p> Taille :'.$donne['taille'].'</p>

                                                                        <span>
                                                                         <table> <tr>
																			<td><input type="hidden" readonly="true" id="idProduit" value="'.$donne['idproduit'].'"/></td></tr>
																			 <input type="hidden" readonly="true" id="prixProduit" value="'.$donne['prix'] .'"/>
																			<tr> <td> <span><b>Prix  :</b></span></td><td><h2>'.$donne['prix'].'DH</h2></td></tr>
                                                                         <tr> <td> <span><b>Quantité :</b></span></td>
																		 
																		  <td><input type="text" id="qteProduit" /></td>	
																			</br>
																			<td><a href="produitdetails.php?idproduit='.$donne['idproduit'].'" ><button class="btn btn-fefault cart" onclick="JSAjouter_Article()" type="button"  cart" cart" value="Ajouter au panier" >Ajouter au panier</button></a></td></tr>
																			</table>
																			</form>
                                                                        </span>
                                                                        <p>
                                                                            <b>Diponibilité : en stock </b> 
                                                                        </p>
                                                                        <p>
                                                                            <b> Marque  '.$donne['idmarque'] .'</b>
                                                                        </p>
                                                                    </div>
                                                                    <!--/product-information-->
                                                                </div>
                                                            </div>
                                                            <!--/product-details-->
                                                            <div class="category-tab shop-details-tab">
                                                                <!--category-tab-->
                                                                <div class="col-sm-12">
                                                                    <ul class="nav nav-tabs">
                                                                        <li>
                                                                            <a href="#details" data-toggle="tab">Details</a>
                                                                        </li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                                   
																  
                                                                
                                                            </div>';}?>
 
  