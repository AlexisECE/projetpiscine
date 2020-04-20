<?php

	//recuperer les donnees venant du formulaire
	$numcarte = isset($_POST["numcarte"])? $_POST["numcarte"] : "";
	$nomcarte = isset($_POST["nomcarte"])? $_POST["nomcarte"] : "";
	$datecarte = isset($_POST["datecarte"])? $_POST["datecarte"] : "";
	$codecarte = isset($_POST["codecarte"])? $_POST["codecarte"] : "";	
	$adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
	$ville = isset($_POST["ville"])? $_POST["ville"] : "";
	$codepostal = isset($_POST["codepostal"])? $_POST["codepostal"] : "";
	$pays = isset($_POST["pays"])? $_POST["pays"] : "";	
	$numtel = isset($_POST["numtel"])? $_POST["numtel"] : "";	
	$email = isset($_POST["email"])? $_POST["email"] : "";
 
	//identifier votre base de donnees
	$database = "ecepoire";

	//connectez-vous dans votre BDD
	//votre serveur = localhost
	//votre login = root
	//votre mdp = <rien>
	$db_handle = mysqli_connect('localhost','root','');
	$db_found = mysqli_select_db($db_handle, $database);

	//si le bouton est cliqué
	if (isset($_POST["button1"])) {
	
		//si une selection de carte de crédit est faite
		$carte = isset($_POST["carte"])? $_POST["carte"] :"";
		if ($db_handle) {
			$sql = "SELECT * FROM payer";
			if ($numcarte != "") {
				$sql .= " WHERE Numero LIKE '$numcarte'";
				if($nomcarte != ""){
					$sql .= " AND Nom LIKE '$nomcarte'";
					if($datecarte != ""){
						$sql .= " AND Date LIKE '$datecarte'";
						if($codecarte != ""){
							$sql .= " AND Code LIKE '$codecarte'";
							if($carte != ""){
								$sql .= " AND Type LIKE '$carte'";	
							}	
						}
					}
				}
			}
			$result = mysqli_query($db_handle, $sql);
			//s'il ya des resultats
			if(mysqli_num_rows($result) == 0){
				echo "Mauvaise carte.<br>";
			}else {
				echo "Paiement validé.<br>";
				echo "Merci pour votre commande.<br>";
				echo "Livraison prévue dans une semaine au $adresse, $ville, $codepostal, $pays .<br>";
			}
		}

	}
	//fermer la connexion
	mysqli_close($db_handle);
	
?>