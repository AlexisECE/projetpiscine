<?php
//recuprer les données venant de votre formulaire
$nom = isset($_POST["nom"])? $_POST["nom"] : "";
$descriptions = isset($_POST["descriptions"])? $_POST["descriptions"] : ""; 
$prixmin = isset($_POST["prixmin"])? $_POST["prixmin"] : ""; 
$prixmax = isset($_POST["prixmax"])? $_POST["prixmax"] : "";
$photo = isset($_POST["photo"])? $_POST["photo"] : "";
//identifier votre BDD 
$database = "poire";
//connectez-vous de la BDD
$db_handle = mysqli_connect('localhost', 'root', 'root'); 
$db_found = mysqli_select_db($db_handle, $database);
//si le bouton est cliqué
if (isset($_POST["button"])) 
{ //si la BDD existe
    if ($db_found)
     {
//on cherche le livre
if ($_POST["button"]) 
{ 
    if ($db_found) 
    {
        $sql = "SELECT * FROM items";
        if ($nom != "") 
        {
            //on cherche le livre avec les paramètres titre et auteur
            $sql .= " WHERE Nom LIKE '%$nom%'";
            if ($descriptions != "") 
            {
                $sql .= " AND Descriptions LIKE '%$descriptions%'";
            } 
            
        }

         $result = mysqli_query($db_handle, $sql); //regarder s'il y a des résultats
         if (mysqli_num_rows($result) == 0) 
         {
         //pas de résultat
         echo "caca not found. <br>"; 
        } else {
            $sql = "INSERT INTO items(Nom, Descriptions, Prixmin, Prixmax, Photo) 
            VALUES('$nom', '$descriptions', '$prixmin', '$prixmax','$photo)";
            $result = mysqli_query($db_handle, $sql);
            echo "Add successful." . "<br>";
            //afficher les résultats

            $sql = "SELECT * FROM items";
            if ($nom != "") 
            {
             //on cherche le livre avec les paramètres titre et auteur
                $sql .= " WHERE Nom LIKE '%$nom%'";
            if ($descriptions != "") 
            {
                $sql .= " AND Descriptions LIKE '%$descriptions%'";
            } 
            
   
}
$result = mysqli_query($db_handle, $sql);
while ($data = mysqli_fetch_assoc($result)) {
    echo "Informations sur l'article ajouté':" . "<br>"; 
    echo "ID: " . $data['ID'] . "<br>";
    echo "Nom: " . $data['Nom'] . "<br>";
    echo "Descriptions: " . $data['Descriptions'] . "<br>";
    echo "Prixmin: " . $data['Prixmin'] . "<br>";
    echo "Prixmax: " . $data['Prixmax'] . "<br>";
    echo "Photo: " . $data['Photo'] . "<br>";
    echo "<br>";
} 
}
} 
else 
{
echo "Database not found";
} 
}
//fermer la connexion
mysqli_close($db_handle);
?>
