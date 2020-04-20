<?php
	//recuperer les donnees venant du formulaire
	$item = isset($_POST["item"])? $_POST["item"] : "";
	
	//identifier votre base de donnees
	$database = "poire";
	
	//connectez-vous dans votre BDD
	//votre serveur = localhost
	//votre login = root
	//votre mdp = <rien>
	$db_handle = mysqli_connect('localhost','root','root');
	$db_found = mysqli_select_db($db_handle, $database);
	
	if ($db_handle) {
		$sql = "SELECT ID, MAX(Prixench), Item, Nom FROM enchere WHERE Item LIKE '$item'";
		$result = mysqli_query($db_handle, $sql);
		//s'il ya des resultats
		if(mysqli_num_rows($result) == 0){
			echo"Enchere not found.<br>";
		}else {
			while ($data = mysqli_fetch_assoc($result)){
				$id = $data['ID'];
				echo "<br>";
				echo "Les résultats de l'enchère pour l'item sont:";	
				echo "<br>";				
				echo "Item: " . $data['Item'] . "<br>";
				echo "Nom: " . $data['Nom'] . "<br>";
				echo "Prix max: " . $data['MAX(Prixench)'] . " €" . "<br>";
				$Prixmax = $data['MAX(Prixench)'];
			}
			$sql = "DELETE FROM enchere";
			$sql .= " WHERE Prixench = $Prixmax";
			$result = mysqli_query($db_handle, $sql);
		}
		
		$sql = "SELECT MAX(Prixench) FROM enchere WHERE Item LIKE '$item'";
		$result = mysqli_query($db_handle, $sql);
		//s'il ya des resultats
		if(mysqli_num_rows($result) == 0){
			echo"Enchere not found.<br>";
		}else {
			while ($data = mysqli_fetch_assoc($result)){
				echo "Le deuxieme prix pour cette enchère est de : " . $data['MAX(Prixench)'] . " €" . "<br>";
				$Prixdeux = $data['MAX(Prixench)'];
				if ($Prixdeux != $Prixmax) {
					$Prixfinal = ($Prixdeux + 1);
					echo "Le prix final est donc de: " . $Prixfinal . " €" . "<br>";
				}
			}
		}
		
	} else{
		echo "Database not found. <br>";
	}
	
	//encheres

//on prend le max (ex 500)

//on le met dans une variable tmp avec aussi le nom de l'utilisateur etc

//on supprime de la bdd le max

//on prend le deuxieme max (genre 400)

//et on rerempli la bdd avec 400+ 1 et le nom de l'utilisateur qui avait 500.


//meilleure offre

	
	//fermer la connexion
	mysqli_close($db_handle);
?>	
