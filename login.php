<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="log.css"/>
</head>
<body>
<?php
require('config.php');
session_start();
if (isset($_POST['username']))
{
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `users` WHERE username='$username' and password='".hash('sha256', $password)."'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: index2.php");
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>
<div class="container">
            <nav class="navbar navbar-expand">
              <a class="navbar-brand" href="index.php"><img src="poirelog.png" alt="logo" width="150px" height="90px"/></a>
               </button>
            </nav> 
<form class="box" action="" method="post" name="login">
<h1 class="box-logo box-title">Bonjour</h1>
<p class="box-register">Se connecter à Poire ou <a href= inscription.php ><u>créer un compte</u> </a></p>
  <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
<input type="password" class="box-input" name="password" placeholder="Mot de passe">
<input type="submit" value="Connexion " name="submit" class="box-button">

<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>