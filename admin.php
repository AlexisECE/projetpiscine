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
    <title>ADMIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" type="text/css" href="admin.css">
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
            <li class="nav-item"><a class="nav-link" href="admin.php">Admin</a></li>
            <li class="nav-item"><a class="nav-link" href="help.html">Aide</a></li>
            </ul> 
          </div>
          </div> 
      <br><br>
    <h2>Gérer</h2>
    <br>
    <form enctype="multipart/form-data" action="admins.php" method="post">
    <table>
            <tr>
                <td><br>Username: <br><br></td>
                <td><br><input class="nom" type="text" name="username"><br><br></td>
            </tr>
            <tr>
                <td>Email: <br><br></td>
                <td><input class="email" type="text" name="email"><br><br></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                 <input type="submit" name="button1" value="Ajouter">
                 <input type="submit" name="button2" value="Supprimer">
             </td>
            </tr>
        </table>
    </form>
        <form method="POST" action="enchere.php">
        <table>
            <tr>
            <td colspan="2" align="center">
                 <input type="submit" name="button3" value="Enchère">
            </tr>
    </form>

    

    <footer class="page-footer"> 
            <div class="footer-copyright text-center">&copy; <small>Copyright © 1995-2020 Poire Inc. Tous droits réservés. <a href= condition.html ><u>Conditions d'utilisation</u> </a>,<a href= donneeperso.html ><u>Données personnelles</u> </a>,<a href= cookie.html ><u>cookies</u> </a> et <a href= adchoice.html ><u>AdChoice</u> </a></small> </div>
            </footer> 

            <script>
              $('a1').mouseover(function() {
                $(this).dropdown('toggle')
              })
            </script>
</body>

</html>