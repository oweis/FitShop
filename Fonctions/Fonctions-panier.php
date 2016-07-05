<?php

  function supprimePanier(){
   unset($_SESSION['panier']);
}

  function compterArticles()
{
   if (isset($_SESSION['panier']))
   return count($_SESSION['panier']['idProduit']);
   else
   return 0;

	}

  function isVerrouille(){
   if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou'])
   return true;
   else
   return false;
	}

	function MontantGlobal(){
   $total=0;
   for($i = 0; $i < count($_SESSION['panier']['idProduit']); $i++)
   {
      $total += $_SESSION['panier']['qteProduit'][$i] * $_SESSION['panier']['prixProduit'][$i];
   }
   return $total;
}

	function modifierQTeArticle($idProduit,$qteProduit){
   //Si le panier éxiste
   if (creationPanier() && !isVerrouille())
   {
      //Si la quantité est positive on modifie sinon on supprime l'article
      if ($qteProduit > 0)
      {
         //Recharche du produit dans le panier
         $positionProduit = array_search($idProduit,  $_SESSION['panier']['idProduit']);

         if ($positionProduit !== false)
         {
            $_SESSION['panier']['qteProduit'][$positionProduit] = $qteProduit ;
         }
      }
      else
      supprimerArticle($idProduit);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

	function supprimerArticle($idProduit){
   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Nous allons passer par un panier temporaire
      $tmp=array();
      $tmp['idProduit'] = array();
      $tmp['qteProduit'] = array();
      $tmp['prixProduit'] = array();
	  $tmp['nomProduit'] = array();
      $tmp['verrou'] = $_SESSION['panier']['verrou'];

      for($i = 0; $i < count($_SESSION['panier']['idProduit']); $i++)
      {
         if ($_SESSION['panier']['idProduit'][$i] !== $idProduit)
         {
            array_push( $tmp['idProduit'],$_SESSION['panier']['idProduit'][$i]);
            array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
            array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);
			array_push( $tmp['nomProduit'],$_SESSION['panier']['nomProduit'][$i]);
           // array_push( $tmp['imageProduit'],$_SESSION['panier']['imageProduit'][$i]);
         }

      }
      //On remplace le panier en session par notre panier temporaire à jour
      $_SESSION['panier'] =  $tmp;
      //On efface notre panier temporaire
      unset($tmp);
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}


	function ajouterArticle($idProduit,$qteProduit,$prixProduit,$nomProduit){

   //Si le panier existe
   if (creationPanier() && !isVerrouille())
   {
      //Si le produit existe déjà on ajoute seulement la quantité
      $positionProduit = array_search($idProduit,  $_SESSION['panier']['idProduit']);

      if ($positionProduit !== false)
      {
         $_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit ;
      }
      else
      {
         //Sinon on ajoute le produit
         array_push( $_SESSION['panier']['idProduit'],$idProduit);
         array_push( $_SESSION['panier']['qteProduit'],$qteProduit);
         array_push( $_SESSION['panier']['prixProduit'],$prixProduit);
         array_push( $_SESSION['panier']['nomProduit'],$nomProduit);
       //  array_push( $_SESSION['panier']['imageProduit'],$imageProduit);
      }
   }
   else
   echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}

function creationPanier(){
   if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
	  $_SESSION['panier']['nomProduit'] = array();
      $_SESSION['panier']['idProduit'] = array();
      $_SESSION['panier']['qteProduit'] = array();
      $_SESSION['panier']['prixProduit'] = array();
      $_SESSION['panier']['verrou'] = false;
	   // $_SESSION['panier']['imageProduit'] = array();
   }
      return true;
}
   ?>
