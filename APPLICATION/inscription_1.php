<?php

if(!empty($_POST))
{
    // Hachage du mot de passe
	$pass_hash = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
	// Création de la clef d'activation
    $cle = md5(microtime(TRUE)*100000);
	
	// Cette partie expédie un mail a l'adresse indiqué ci-dessous
	$email = $_POST['email'];
	$pseudo = $_POST['pseudo'];
	$subject = "Bienvenu - L'Espace OwO"; 
	
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= "From: inscription@lespace-owo.fr" . "\r\n"; // Sender's E-mail
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$message ='<table style="width:100%">
		
	<tr><td>Bonjour ' . $pseudo . '</td></tr>
	<tr><td>Bienvenue chez L\'Espace - OwO</td></tr>
	<tr><td>Afin de valider votre inscription, merci de Cliquer sur le lien ci-dessous:</td></tr>
	<tr><td><a href="http://s759943723.onlinehome.fr/activation.php?pseudo='.$pseudo.'&cle='.$cle.'">Je valide mon Inscirption</a></td></tr>
</table>';

	
	
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
        $stmt = $conn->prepare("INSERT INTO membres(pseudo, pass, email, date_inscription, cle) VALUES('".$_POST['pseudo']."', '".$pass_hash."','".$_POST['email']."',CURDATE(),'".$cle."')");
		// Execution requete
		$stmt->execute();
		// Envoi mail validation
		mail($email, $subject, $message, $headers);
		// Message quand l'inscription à bien été enregistré
		
		echo "Votre inscription à bien été prise en compte, vous allez recevoir un email de confirmation.<br/>
		 Merci de cliquer sur le lien à l'interieur de ce mail pour activer votre compte.<br/>
		 Vous allez être redirigé dans 10 secondes. Si ce n'est pas le cas, cliquer <a href=\"index.php\">ici</a>";
		
	}
	catch(PDOException $e) // Exception erreur
	{
		echo $sql . "<br>" . $e->getMessage();
	}
	// Deconnexion BDD
	$conn = null;

	header('Location: index.php');
}

?>
<html>
<head>
<META HTTP-EQUIV="Refresh" CONTENT="10; URL=index.php">
</head>
</html>