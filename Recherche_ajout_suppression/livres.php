<?php
	//recuperer les donnees venant du formulaire
	$titre = isset($_POST["titre"])? $_POST["titre"] : "";
	$auteur = isset($_POST["auteur"])? $_POST["auteur"] : "";
	$annee = isset($_POST["annee"])? $_POST["annee"] : "";
	$editeur = isset($_POST["editeur"])? $_POST["editeur"] : "";	

	//identifier votre base de donnees
	$database = "ecepoire";

	//connectez-vous dans votre BDD
	//votre serveur = localhost
	//votre login = root
	//votre mdp = <rien>
	$db_handle = mysqli_connect('localhost','root','');
	$db_found = mysqli_select_db($db_handle, $database);




	if (isset($_POST["button1"])) {
		if ($db_handle) {
			$sql = "SELECT * FROM livres";
			if ($titre != "") {
				$sql .= " WHERE Titre LIKE '%$titre%'";
				if($auteur != ""){
					$sql .= " AND Auteur LIKE '%$auteur%'";
				}
			}
			$result = mysqli_query($db_handle, $sql);
			//s'il ya des resultats
			if(mysqli_num_rows($result) == 0){
				echo"Book not found.<br>";
			}else {
				while ($data = mysqli_fetch_assoc($result)){
					echo "<br>";
					echo "ID: " . $data['ID'] . "<br>";
					echo "Titre: " . $titre . "<br>";
					echo "Auteur: " . $auteur . "<br>";
					echo "Annee: " . $annee . "<br>";
					echo "Editeur: " . $editeur . "<br>";
					$image = $data['Couverture'];
					echo "Photo" . "<img src='$image' height='120' width='100'>" .
"</td>";
				}
			}
		} else{
			echo "Database not found. <br>";



		}
	}



	if (isset($_POST["button2"])) {
		if ($db_handle) {
			echo "connected" . "<br>";
			$filename = $_FILES['image']['name'];
			$filetmpname = $_FILES['image']['tmp_name'];
			$folder = 'docimages/';
			move_uploaded_file($filetmpname, $folder.$filename);
			$sql = "INSERT INTO livres(Titre, Auteur, Annee, Editeur, Couverture) VALUES ('$titre', '$auteur', '$annee', '$editeur', '$filename')";
			$result = mysqli_query($db_handle, $sql);
			if( $result) {
					echo "<br>";
					echo "Titre: " . $titre . "<br>";
					echo "Auteur: " . $auteur . "<br>";
					echo "Annee: " . $annee . "<br>";
					echo "Editeur: " . $editeur . "<br>";
					echo "Photo" . "<img src='$filename' height='120' width='100'>" .
"</td>";
				
			}else {
				while ($data = mysqli_fetch_assoc($result)){
					echo "<br>";
					echo "nom image: " . $data['NomImage'] . "<br>";
				}
			}
		}
	}
	
 

	if (isset($_POST["button3"])) {
		if ($db_handle) {
			$sql = "SELECT * FROM livres";
			if ($titre != "") {
				$sql .= " WHERE Titre LIKE '%$titre%'";
				if($auteur != ""){
					$sql .= " AND Auteur LIKE '%$auteur%'";
				}
			}
			$result = mysqli_query($db_handle, $sql);
			//s'il ya des resultats
			if(mysqli_num_rows($result) == 0){
				echo"Book not found.<br>";
			} else {
				while ($data = mysqli_fetch_assoc($result) ) {
					$id = $data['ID'];
					echo "<br>";
				}
				$sql = "DELETE FROM livres";
				$sql .= " WHERE ID = $id";
				$result = mysqli_query($db_handle, $sql);
				echo "Delete successful. <br>";
			}
		} else{
			echo "Database not found. <br>";
		}
	}




	//fermer la connexion
	mysqli_close($db_handle);

?>