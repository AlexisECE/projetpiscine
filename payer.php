<!DOCTYPE html>

<html>

	<head>
		<title>Paiement</title>
		<meta charset="utf-8">
	</head>
	
	<body>
		<h3>Paiement par carte :</h3>
		<form action="carte.php" method="post">
			<table>
				<tr>
					<td>Payer par:</td>
					<td>
						<input type="radio" name="carte" value="MasterCard">MasterCard <br>
						<input type="radio" name="carte" value="Visa">Visa <br>
						<input type="radio" name="carte" value="AmericanExpress">AmericanExpress <br><br>
							
					</td>
				</tr>
				<tr>
					<td>Numéro de la carte:</td>
					<td><input type="text" name="numcarte"></td>
				</tr>
				<tr>
					<td>Nom:</td>
					<td><input type="text" name="nomcarte"></td>
				</tr>
				<tr>
					<td>Date d'expiration:</td>
					<td><input type="date" name="datecarte"></td>
				</tr>
				<tr>
					<td>Code de sécurité:</td>
					<td><input type="text" name="codecarte"></td>
				</tr>
			</table>
			
			<h3>Coordonnées de livraison :</h3>
			
			<table>
				<tr>
					<td>Adresse:</td>
					<td><input type="text" name="adresse"></td>
				</tr>
				<tr>
					<td>Ville:</td>
					<td><input type="text" name="ville"></td>
				</tr>
				<tr>
					<td>Code Postal:</td>
					<td><input type="text" name="codepostal"></td>
				</tr>
				<tr>
					<td>Pays:</td>
					<td><input type="text" name="pays"></td>
				</tr>
				<tr>
					<td>Numéro de téléphone:</td>
					<td><input type="text" name="numtel"></td>
				</tr>
				<tr>
					<td>E-mail:</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="button1" value="Valider le paiement">
					</td>
				</tr>
			</table>
		</form>
	</body>
	
</html>