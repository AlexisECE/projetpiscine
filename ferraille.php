<!DOCTYPE html> 
<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
?>
<html>
    <head>
        <title>Ferraille ou Trésor</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" type="text/css" href="style2.css">
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head> 
    <body> 
        <div class="container">
            <nav class="navbar navbar-expand">
              <a class="navbar-brand" href="index2.php"><img src="poire2.png" alt="logo" width="120px" height="60px"/></a>
              <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
               </button>


              <div class="dropdown">
                <a1 class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Catégories</a1>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="ferraille.php">Ferraille ou Trésor</a>
                  <a class="dropdown-item" href="bpmusee.php">Bon pour le Musée</a>
                  <a class="dropdown-item" href="accessoirevip.php">Accessoire VIP</a>
                </div>
              </div>

              
              <form class="form-inline" action="recherche.php">
                <input class="form-control " type="search" placeholder="Rechercher un item" aria-label="Search" size="63px">
                <button class="btn btn-outline-light" name="button1" type="submit">Rechercher</button>
              </form>
            

             
          <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="sell.php">Vendre</a></li>
             <div class="dropdown">
            <a1 class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mon compte</a1>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="panier.php">Mon panier</a>
                  <a class="dropdown-item" href="annonce.php">Mes annonces</a>
                  <a class="dropdown-item" href="logout.php">Déconnexion</a>
                </div>
</div>
<li class="nav-item"><a class="nav-link" href="encherir.php">Enchère</a></li>
            <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
            
            </ul> </div>
          </div>
            <br>
            
          <div class="container">
          <h4>CATEGORIE : FERRAILLE OU TRESOR</h4>

          <br>
          
                
                <?php
	//identifier votre base de données (BDD)
	$database = "poire";
	
	//connectez-vous dans votre BDD
	$db_handle = mysqli_connect('localhost', 'root', 'root' );
	$db_found = mysqli_select_db($db_handle, $database);
	
	//si le BDD existe, faire le traitement
	if ($db_found) {
    //sans condition
    
		$sql = "SELECT * FROM items WHERE Categorie LIKE 'Ferraille ou Tresor'";
		$result = mysqli_query($db_handle, $sql);
		while ($data = mysqli_fetch_assoc($result)) {
      echo "<br>";
      echo "Categorie: " . $data['Categorie'] . "<br>";
      echo "Nom: " . $data['Nom'] . "<br>";
      echo "Descriptions: " . $data['Descriptions'] . "<br>";
      echo "Prixmin: " . $data['Prixmin'] . "<br>";
      echo "Prixmax: " . $data['Prixmax'] . "<br>";
      $image = $data['Couverture'];
      echo "Photo" . "<img src='$image' height='120' width='100'>" .
"</td>";
 
			
		}//end while

	}//end if
	//si le BDD n'existe pas
	else {
		echo "Database not found";
	}//end else
	//fermer la connection
	mysqli_close($db_handle);
?>
                
      
        </div>
        <!-- /.container -->

            </nav> 



            <script>
              $('a1').mouseover(function() {
                $(this).dropdown('toggle')
              })
            </script>

    </body>
</html>
