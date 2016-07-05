<?php
				  
		try{ 
							$email = $_GET["email"];
						    $_SESSION['email']=$email;
							creationPanier();

			}
		catch(Exception $e){
			echo "Check Again";
		}
	
?>
