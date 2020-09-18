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
    <title>Enchères</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<div class="container">
            <nav class="navbar navbar-expand">
              <a class="navbar-brand" href="index.php"><img src="poirelog.png" alt="logo" width="150px" height="90px"/></a>
               </button>
            </nav> 
<form class="box" action="" method="post" name="login">
<h1 class="box-logo box-title">Veuillez entrer votre enchère.</h1>
</form>
  
<body>
    <form enctype="multipart/form-data" action="enchere.php" method="post">
        <table>
            <tr>
                <td>Sur quel objet voulez-vous enchérir:</td>
                <td><input type="text" name="item"></td>
            </tr>
            <tr>
                <td>A quel nom ?</td>
                <td><input type="text" name="nom"></td>
            </tr>
            <tr>
                <td>A quel prix ?</td>
                <td><input type="text" name="prix"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
					<input type="submit" name="button1" value="Enchérir">
				
				
				</td>
            </tr>
        </table>
    </form>
</body>

</html>
