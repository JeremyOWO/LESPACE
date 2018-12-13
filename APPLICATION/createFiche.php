<?php

$sql = null;
/*if(isset($_POST['id_google']))
{  */ 
	try
	{
        error_log($_POST['id_google']);
        error_log($_POST['addresse']);
        error_log($_POST['latitude']);
        error_log($_POST['longitude']);
        error_log($_POST['nlat']);
        error_log($_POST['nlong']);
        error_log($_POST['slat']);
        error_log($_POST['slong']);
        error_log($_POST['name']);
        error_log($_POST['rating']);

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
        $stmt = $conn->prepare("INSERT INTO clients (id_google,addresse,latitude,longitude,nlat,nlong,slat,slong,name,open_hours_id,photo_id,rating) 
        VALUES (:id_google, :addresse, :latitude, :longitude, :nlat, :nlong, :slat, :slong, :name, :open_hours_id, :photo_id, :rating)");
        $stmt->bindParam(':id_google', $id_google);
        $stmt->bindParam(':addresse', $addresse);
        $stmt->bindParam(':latitude', $latitude);
        $stmt->bindParam(':longitude', $longitude);
        $stmt->bindParam(':nlat', $nlat);
        $stmt->bindParam(':nlong', $nlong);
        $stmt->bindParam(':slat', $slat);
        $stmt->bindParam(':slong', $slong);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':open_hours_id', $open_hours_id);
        $stmt->bindParam(':photo_id', $photo_id);
        $stmt->bindParam(':rating', $rating);
        // insertion d'une ligne
        $id_google = $_POST['id_google'];
        $addresse = $_POST['addresse'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $nlat = $_POST['nlat'];
        $nlong = $_POST['nlong'];
        $slat = $_POST['slat'];
        $slong = $_POST['slong'];
        $name = $_POST['name'];
        $open_hours_id = 22222;
        $photo_id = 22222;
        $rating = $_POST['rating'];
        
        /*$id_google = 222222;
        $addresse = 'ererere';
        $latitude = 3.33333;
        $longitude = 3.333333;
        $nlat = 3.3333;
        $nlong = 22.2222;
        $slat = 22.22222;
        $slong = 22.22222;
        $name = 'ZZZZZZ';
        $open_hours_id = 22222;
        $photo_id = 22222;
        $rating = 2.2;*/

        $stmt->execute();
        // Execution requete
        
		
		// Envoi mail validation
		/*if (!$stmt) {
            error_log("\nPDO::errorInfo():\n");
            error_log(print_r($conn->errorInfo()));
         }*/
		error_log("ca devrait ok");
	}
	catch(PDOException $e) // Exception erreur
	{
		echo $sql . "<br>" . $e->getMessage();
	}
	// Deconnexion BDD
	$conn = null;

	
//}

?>