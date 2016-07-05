<?php
	try{
		if (session_status() == PHP_SESSION_NONE) {
			session_start();
			}
		//ipChaimae 192.168.43.170 56.1
	 $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=localhost;dbname=ecommercedb', 'root', '',$pdo_options);
		
	}
	catch(Exception $e)
	{
	die('Erreur : '.$e->getMessage()); }
?>
