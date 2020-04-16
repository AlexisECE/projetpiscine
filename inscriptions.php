<?php
        //recuperer les données venant de la page HTML
        $prenom = isset($_POST["prenom"])? $_POST["prenom"] : ""; 
        $nom = isset($_POST["nom"])? $_POST["nom"] : ""; 
        $email = isset($_POST["email"])? $_POST["email"] : ""; 
        $mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
        //identifier votre BDD
        $database = "poire";
        //connectez-vous dans votre BDD
        //Rappel: votre serveur = localhost | votre login = root |votre password = <rien> 
        $db_handle = mysqli_connect('localhost', 'root', 'root');
        $db_found = mysqli_select_db($db_handle, $database);
        
        if ($_POST["button"]) 
        { 
            if ($db_found) 
            {
                $sql = "SELECT * FROM user";
                if ($prenom != "") 
                {
                    //on cherche le livre avec les paramètres titre et auteur
                    $sql .= " WHERE Prenom LIKE '%$prenom%'";
                    if ($nom != "") 
                    {
                        $sql .= " AND Nom LIKE '%$nom%'";
                    } 
                    
                }
                $result = mysqli_query($db_handle, $sql);
//regarder s'il y a de résultat
if (mysqli_num_rows($result) != 0) 
{
       //le livre est déjà dans la BDD
echo "user already exists.";
} 
else 
{
    $sql = "INSERT INTO user(Prenom, Nom, Email, Mdp) 
            VALUES('$prenom', '$nom', '$email', '$mdp')";
$result = mysqli_query($db_handle, $sql);
echo "Add successful." . "<br>";
//on affiche le livre ajouté
$sql = "SELECT * FROM user";
if ($prenom != "") 
{
    //on cherche le livre avec les paramètres titre et auteur
    $sql .= " WHERE Prenom LIKE '%$prenom%'";
    if ($nom != "") 
    {
        $sql .= " AND Nom LIKE '%$nom%'";
    } 
   
}
$result = mysqli_query($db_handle, $sql);
while ($data = mysqli_fetch_assoc($result)) {
    echo "Informations sur le livre ajouté:" . "<br>"; 
    echo "ID: " . $data['ID'] . "<br>";
    echo "Prenom: " . $data['Prenom'] . "<br>";
    echo "Nom: " . $data['Nom'] . "<br>";
    echo "Email: " . $data['Email'] . "<br>";
    echo "Mdp: " . $data['Mdp'] . "<br>";
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

