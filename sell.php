<!DOCTYPE html> 
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" type="text/css" href="inscription.css">
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head> 
    <body> 
        <form action="sells.php" method="post">
        <div class="container">
            <nav class="navbar navbar-expand">
              <a class="navbar-brand" href="index.html"><img src="poirelog.png" alt="logo" width="150px" height="90px"/></a>
              <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
               </button>
            </nav> 
            

            <div class="row">
                <div class="col-md-5 mx-auto">
                <div id="first">
                    <div class="myform form">
                         <div class="logo mb-3">
                             <div class="col-md-12 text-center">
                                <h1><b>Vendre</b></h1>
                                <h8>Veuillez entrer les informations de votre article !</h8>
                                <br><br><br>
                                <form action="sells.php" method="post">
                                    <table>
                                         <tr>
                                            
                                            <td><input type="text" name="nom" placeholder="Nom" size="38px"></td> 
                                        </tr>
                                        <tr>
                                            <td><input type="text" name="descriptions" placeholder="Description de l'article" size="38px" style="height:100px;"></td> 
                                        </tr>
                                        <tr>
                                          <td><input type="number" step="0.01" name="prixmin" placeholder="Prix Minimum"style="width:378px"></td>
                                        </tr>
                                       
                                        <tr>
                                            <td><input type="number" step="0.01" name="prixmax" placeholder="Prix d'achat immédiat"style="width:378px"></td> 
                                        </tr> 

                                        <tr>
                                          
                                          <td><input type="file" name="photo"></td> 
                                        
                                        </tr>

                                        <tr>
                                            <td><small><br>En cliquant sur <b>Valider</b>, vous confirmez avoir lu et accepté les <a href= condition.html ><u>Conditions d'utilisation</u> </a>. Veuillez vous référer à notre <a href= avis.html ><u>Avis sur les données personnelles</u> </a> pour toute information concernant le traitement de vos données.</small>
                                                <br><br></td>
                                        </tr>

                                        <tr>

                                        <td colspan="2" align="center">
                                       <input type="submit" name="button" value="Valider"></td>

                                        </tr>
                                        </table>


                                </form>
                                
                              </div>

                              </div>
                            </form>
                             
                              <footer class="page-footer"> 
                            
                                    <div class="footer-copyright text-center">&copy; <small>Copyright © 1995-2020 Poire Inc. Tous droits réservés. <a href= condition.html ><u>Conditions d'utilisation</u> </a>,<a href= donneeperso.html ><u>Données personnelles</u> </a>,<a href= cookie.html ><u>cookies</u> </a> et <a href= adchoice.html ><u>AdChoice</u> </a></small>
                                    </div>
                                    </footer>   

            <script>
              $('a1').mouseover(function() {
                $(this).dropdown('toggle')
              })
            </script>

    </body>
</html>

