<?php

	$Civilite = htmlspecialchars($_POST["Civilite"]);
	$Nom = htmlspecialchars($_POST["Nom"]);
	$Prenom = htmlspecialchars($_POST["Prenom"]);
	$Adresse = htmlspecialchars($_POST["Adresse"]);
	$Remarques = htmlspecialchars($_POST["Remarques"]);

	echo 'Bonjour ' . $Nom . ' votre candidature à bien été enregistrée !';

	// 1 : on ouvre le fichier
	$monfichier = fopen('donneesformulaire.txt', 'a+');
	fputs($monfichier, "==================================\n"); 
    fputs($monfichier,$Civilite."\n");
	fputs($monfichier, $Nom."\n"); 
	fputs($monfichier, $Prenom."\n"); 
	fputs($monfichier, $Adresse."\n"); 
	fputs($monfichier, $Remarques."\n"); 

	// 3 : quand on a fini de l'utiliser, on ferme le fichier
	fclose($monfichier);


?>