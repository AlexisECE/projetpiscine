<?php
	//identifier votre base de donnees
	$database = "poire";
	
	//connectez-vous dans votre BDD
	//votre serveur = localhost
	//votre login = root
	//votre mdp = <rien>
	$db_handle = mysqli_connect('localhost','root','root');
	$db_found = mysqli_select_db($db_handle, $database);
	
	if ($db_handle) {
		$sql = "SELECT * FROM enchere";
		$result = mysqli_query($db_handle, $sql);
		//s'il ya des resultats
		if(mysqli_num_rows($result) == 0){
			echo"Book not found.<br>";
		}else {
			while ($data = mysqli_fetch_assoc($result)){
				echo "<br>";
				echo "ID: " . $data['ID'] . "<br>";
				echo "Item: " . $data['Item'] . "<br>";
				echo "Nom: " . $data['Nom'] . "<br>";
				echo "Prix enchère: " . $data['Prixench'] . "€" . "<br>";
			}
		}



	} else{
		echo "Database not found. <br>";
	}
	
	//fermer la connexion
	mysqli_close($db_handle);
?>	

<!DOCTYPE html>
<html>

<head>
    <title>Enchères</title>
    <meta charset="utf-8">
</head>

<body>
    <form enctype="multipart/form-data" action="clore.php" method="post">
        <table>
            <tr>
                <td>Clore l'enchère sur l'item suivant :</td>
                <td><input type="text" name="item"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
					<input type="submit" name="button2" value="Clore">
				</td>
            </tr>
        </table>
    </form>
</body>

</html>