<?php include('../Fonctions/Connexion.php');?>
<?php
	

    $name       = @trim(stripslashes($_POST['name'])); 
    $email      = @trim(stripslashes($_POST['email'])); 
    $subject    = @trim(stripslashes($_POST['subject'])); 
    $message    = @trim(stripslashes($_POST['message'])); 

   
		
	$req_top = $bdd ->prepare('insert into message(nom,email,sujet,message) values(?,?,?,?)');
	
         $req_top->execute(array($name,$email,$subject,$message));
   
		     header('Location: ../index.php');

	?>