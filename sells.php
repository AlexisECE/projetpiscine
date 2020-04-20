<?php
    //recuperer les donnees venant du formulaire
    $categorie = isset($_POST["categorie"])? $_POST["categorie"] : "";
	$nom = isset($_POST["nom"])? $_POST["nom"] : "";
	$descriptions = isset($_POST["descriptions"])? $_POST["descriptions"] : "";
	$prixmin = isset($_POST["prixmin"])? $_POST["prixmin"] : "";
	$prixmax = isset($_POST["prixmax"])? $_POST["prixmax"] : "";	

	//identifier votre base de donnees
	$database = "poire";

	//connectez-vous dans votre BDD
	//votre serveur = localhost
	//votre login = root
	//votre mdp = <rien>
	$db_handle = mysqli_connect('localhost','root','root');
	$db_found = mysqli_select_db($db_handle, $database);




	if (isset($_POST["button2"])) {
		if ($db_handle) {
			$filename = $_FILES['image']['name'];
			$filetmpname = $_FILES['image']['tmp_name'];
			$folder = 'docimages/';
			move_uploaded_file($filetmpname, $folder.$filename);
			$sql = "INSERT INTO items(Categorie,Nom, Descriptions, Prixmin, Prixmax, Image) VALUES ('$categorie','$nom', '$descriptions', '$prixmin', '$prixmax', '$filename')";
			$result = mysqli_query($db_handle, $sql);
			if( $result) {
                    echo "<br>";
                    echo "Categorie: " . $categorie . "<br>";
					echo "Nom: " . $nom . "<br>";
					echo "Descriptions: " . $descriptions . "<br>";
					echo "Prixmin: " . $prixmin . "<br>";
					echo "Prixmax: " . $prixmax . "<br>";
					echo "Photo" . "<img src='$filename' height='120' width='100'>" .
"</td>";
echo "
       <div class='sucess'>
             <h4>Ajout avec succès.</h4>
             <p>Cliquez <a href='login.php'>ici</a> pour retourner à la page d'accueil.</p>
       </div>";
				
			}else {
				while ($data = mysqli_fetch_assoc($result)){
					echo "<br>";
					echo "nom image: " . $data['NomImage'] . "<br>";
				}
			}
		}
	}
	

	//fermer la connexion
	mysqli_close($db_handle);

?>