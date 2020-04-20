<?php
	//recuperer les donnees venant du formulaire
	$item = isset($_POST["item"])? $_POST["item"] : "";
	$nom = isset($_POST["nom"])? $_POST["nom"] : "";
	$prix = isset($_POST["prix"])? $_POST["prix"] : "";
 
	//identifier votre base de donnees
	$database = "poire";

	//connectez-vous dans votre BDD
	//votre serveur = localhost
	//votre login = root
	//votre mdp = <rien>
	$db_handle = mysqli_connect('localhost','root','root');
	$db_found = mysqli_select_db($db_handle, $database);


	if (isset($_POST["button1"])) {
		if ($db_handle) {

				$sql = "INSERT INTO enchere(Item, Nom, Prixench) VALUES ('$item', '$nom', '$prix')";
				$result = mysqli_query($db_handle, $sql);
				echo "Add successful." . "<br>";

				//on affiche le livre ajouté
				$sql = "SELECT * FROM enchere";
				if ($item != "") {
					$sql .= " WHERE Item LIKE '%$item%'";
					if($nom != ""){
						$sql .= " AND Nom LIKE '%$nom%'";
					}
				}
				$result = mysqli_query($db_handle, $sql);
				//s'il ya des resultats
				while ($data = mysqli_fetch_assoc($result)){
					echo "<br>";
					echo "ID: " . $data['ID'] . "<br>";
					echo "Item: " . $data['Item'] . "<br>";
					echo "Nom: " . $data['Nom'] . "<br>";
					echo "Prix enchère: " . $data['Prixench'] . "<br>";
				}

		} else{
			echo "Database not found. <br>";
		}
	}
	
	//fermer la connexion
	mysqli_close($db_handle);
	


?>
