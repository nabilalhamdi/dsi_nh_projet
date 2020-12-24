
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
   <head> 
      <title>Inscription</title> 
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
                 <input type="text" placeholder="Prenom" /><br>
                 <input type="text" placeholder="Nom" /><br>
                 <input type="email" placeholder="Adress Mail" /><br>
                 <input type="password" placeholder="Mot de Passe" /><br>
                <p>Date de naissance :<input type="date" style="width:200px;margin-left:0px;"></p> <br>
                <p>Genre : 
                <select>
                    <option>----------</option>
                    <option>Homme</option>
                    <option>Famme</option>
                
                </select></p><br>
                <button type="submit"><strong>Inscrire</strong></button>
                <button type="reset"><strong>Anuler</strong></button><br><br>
                <p class="connect"><a href="form-connect.php"><strong>Vous avez deja un compte</strong></a></p><br><br>
                
                
                
            </form> 
            <br /> 
        </div>
    
</body> 
</html>
