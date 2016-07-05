var myVar1 = setInterval(JSFacture, 1000);
 			
			function JSTest(){alert('Test');}

				function JSFacture()
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
								document.getElementById('paniertotal').innerHTML  = xmlhttp1.responseText;
								document.getElementById('total').innerHTML  = xmlhttp1.responseText;


								}
							}
							
							
						xmlhttp1.open('GET','Fonctions/CalculerFacture.php',true);
						xmlhttp1.send();
					
							
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
							alert('ff');
						/*	
					//	xmlhttp1.open('GET','Include/AjouterArticle.php?qteProduit='+qteProduit+'&prixProduit='+prixProduit+'&idProduit='+idProduit,true);
						xmlhttp1.open('GET','Include/AjouterArticle.php?JSprixProduit='+prixProduit.value+'&JSqteProduit='+qteProduit.value+'&JSidProduit='+idProduit.value+'&JSnomProduit='+nomProduit.value,true);
						xmlhttp1.send() ;
					
							*/
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
							
						xmlhttp1.open('GET','SupprimerAricle.php?SuppidProduit='+idProduit,true);
						
					//	xmlhttp.open('GET','Signatures.php?idss='+str,true);
						xmlhttp1.send();
					}
			
		//document.getElementById("deconnecter").addEventListener("click", JSsupression_panier);