
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
   <head> 
      <title>Connectez vous</title> 
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
       <link rel="stylesheet" type="text/css" href="css/css.css">
       <link href="css/bootstrap.css">
       <link href='http://fonts.googleapis.com/css?family=Irish+Grover'
              rel='stylesheet' type='text/css'>
   </head> 
    <body class="article"> 
        <br>
        <div class="container" id="bord">
            <a href="Accueil.php"><img class="pic1" src="img/Brain-canstockphoto44701927.jpg"></a><br>
            <div class="header">
                <h1 class="titre1"> Inspirations Note </h1>
                <h3 class="titre3"> Make Your Touch !! </h3><br>
            </div>
        </div>
        <div class="form">
            <h2>Decrire vos informations</h2> 
            <form action="insertionArticle.php" method="POST" enctype="multipart/form-data">  
                 <input type="email" placeholder="Adress Mail" /><br>
                 <input type="password" placeholder="Mot de Passe" /><br><br>
                
                <button type="submit"><strong>Connexion</strong></button><br><br>
                <p class="connect">Vous n'avez pas encore un compte<br><a href="form-inscri.php"><strong>Inscrivez-Vous</strong></a></p><br><br>
                
                
                
                
            </form> 
            <br /> 
        </div>
    
</body> 
</html>
