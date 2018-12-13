<?php

if(!empty($_POST['pseudo']) && !empty($_POST['mdp']))
{
	
	try
	{
		$fichier = 'BDD.csv';

		$csv = new SplFileObject($fichier); // On instancie l'objet SplFileObject
		$csv->setFlags(SplFileObject::READ_CSV); // On indique que le fichier est de type CSV
		$csv->setCsvControl(';');

		foreach($csv as $ligne){
			
		}
		// Connexion BDD
		$conn = new PDO("mysql:host=".$ligne[0].":".$ligne[1].";dbname=".$ligne[2]."", $ligne[3], $ligne[4]);
		
		// Activation du mode exception PDO
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Preparation requete recherche existance pseudo + recuperation clef correspondante
        $stmt = $conn->prepare("SELECT id,pass,actif FROM membres WHERE pseudo = ? ");

		if($stmt->execute(array($_POST['pseudo'])))
        {
			$row = $stmt->fetch();

			if(password_verify($_POST['mdp'],$row['pass']) && $row['actif'] == 1)
			{
				session_start();
				error_log("le password est ok ");

				$_SESSION['id'] = $row['id'];
				
				$_SESSION['pseudo'] = $_POST['pseudo'];
				header('Location: membre.php');
				exit();
			}

        }
        
        
	}
	catch(PDOException $e) // Exception erreur
	{
		echo $sql . "<br>" . $e->getMessage();
	}
	// Deconnexion BDD
	$conn = null;

	header('Location: index.php');
	exit();
}

?>
