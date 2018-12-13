<?php

if(!empty($_GET))
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
        $stmt = $conn->prepare("SELECT id,pseudo,cle FROM membres WHERE pseudo = ? ");
        
		// Execution -> Si le peudo existe enregistre la clef sur $row
        if($stmt->execute(array($_GET['pseudo'])))
        {
            $row = $stmt->fetch();
        }

        // Verification si la clef envoyé est la meme que sur la BDD
        if($_GET['cle'] == $row[cle])
        {
            // Passage du compte en mode actif
            // Requete
            $sql = "UPDATE membres SET actif = '1' WHERE pseudo ='".$_GET['pseudo']."' AND cle = '".$_GET['cle']."'";
            // Preparation requete
            $stmt = $conn->prepare($sql);
            // Execution requete
            $stmt->execute();

        }

        session_start();

			$_SESSION['id'] = $row[id];
			
            $_SESSION['pseudo'] = $row['pseudo'];

            header('Location: membre.php');
	}
	catch(PDOException $e) // Exception
	{
		echo $sql . "<br>" . $e->getMessage();
    }

    // Deconnexion BDD
    $conn = null;

}
?>