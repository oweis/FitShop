    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	
	
	<script type="text/javascript" >
	
	//var myVar1 = setInterval(JSFacture, 1000);	
	var myVar1 = setInterval(JSPanier,1000);

 			
			function JSTest(){alert('Test');}

				function JSPanier()
					{	
				
						if(window.XMLHttpRequest)
						{
							xmlhttppanier = new XMLHttpRequest();
						}else {
							xmlhttppanier = new ActiveXObject('Microsoft.XMLHTTP');
						}
					xmlhttppanier.onreadystatechange = function()
							{
								if(xmlhttppanier.readyState == 4 && xmlhttppanier.status == 200)
								{
								document.getElementById('panierpanier').innerHTML  = xmlhttppanier.responseText;
								document.getElementById('payementpayement').innerHTML  = xmlhttppanier.responseText;

								}
							}
							
							
						xmlhttppanier.open('GET','serveurpanier.php',true);
						xmlhttppanier.send();
					
							
					}
				
				function JSAjouter_Article()
					{	
				
						if(window.XMLHttpRequest)
						{
							xmlhttp1 = new XMLHttpRequest();
						}else {
							xmlhttp1 = new ActiveXObject('Microsoft.XMLHTTP');
						}
					xmlhttp1.onreadystatechange = function()
							{
								if(xmlhttp1.readyState == 4 && xmlhttp1.status == 200)
								{
									// var imageProduit = document.getElementById('imageProduit') ;
									var nomProduit = document.getElementById('nomProduit');
									var idProduit = document.getElementById('idProduit') ;
									var qteProduit = document.getElementById('qteProduit') ;
									var prixProduit =  document.getElementById('prixProduit');
									
									}
							}
							alert('Le produit est bien ajouté au panier ! ')
							
					//	xmlhttp1.open('GET','Include/AjouterArticle.php?qteProduit='+qteProduit+'&prixProduit='+prixProduit+'&idProduit='+idProduit,true);
						xmlhttp1.open('GET','Fonctions/AjouterArticle.php?JSprixProduit='+prixProduit.value+'&JSqteProduit='+qteProduit.value+'&JSidProduit='+idProduit.value+'&JSnomProduit='+nomProduit.value,true);
						xmlhttp1.send() ;
					
							
					}
				
			
 
 
				function JScreation_panier()
					{	
						if(window.XMLHttpRequest)
						{
							xmlhttp1 = new XMLHttpRequest();
						}else {
							xmlhttp1 = new ActiveXObject('Microsoft.XMLHTTP');
						}
					xmlhttp1.onreadystatechange = function()
					
							{
								if(xmlhttp1.readyState == 4 && xmlhttp1.status == 200)
								{	
										var email = document.getElementById('email').value;
								}
							}
							
						var v_idss = document.formulaire.ids.value;
						xmlhttp1.open('GET','CreationPanier.php?email='+email,true);
						
					//	xmlhttp.open('GET','Signatures.php?idss='+str,true);
						xmlhttp1.send();
					}
			
		//document.getElementById("deconnecter").addEventListener("click", JSsupression_panier);
			
					function JSsupression_panier()
					{ 
						if(window.XMLHttpRequest)
						{
							xmlhttp1 = new XMLHttpRequest();
						}else {
							xmlhttp1 = new ActiveXObject('Microsoft.XMLHTTP');
						}
					xmlhttp1.onreadystatechange = function()
							{
								if(xmlhttp1.readyState == 4 && xmlhttp1.status == 200)
								{	
										
								}
							}
							
						xmlhttp1.open('GET','Fonctions/SuppressionPanier.php',true);
						
					//	xmlhttp.open('GET','Signatures.php?idss='+str,true);
						xmlhttp1.send();
						
					}
					
					
					function JSSupprimer_Article(idProduit)
					{	
						if(window.XMLHttpRequest)
						{
							xmlhttp1 = new XMLHttpRequest();
						}else {
							xmlhttp1 = new ActiveXObject('Microsoft.XMLHTTP');
						}
					xmlhttp1.onreadystatechange = function()
					
							{
								if(xmlhttp1.readyState == 4 && xmlhttp1.status == 200)
								{	
								}
							}
							alert('Le produit est supprimé au panier ! ')
						xmlhttp1.open('GET','Fonctions/SupprimerAricle.php?SuppidProduit='+idProduit,true);
						
					//	xmlhttp.open('GET','Signatures.php?idss='+str,true);
						xmlhttp1.send();
					}
			
		//document.getElementById("deconnecter").addEventListener("click", JSsupression_panier);
		
		
		
		function JSPassercommande()
					{	
							alert('Merci! votre commande est bien passée ')
						
					}
	</script>


	

