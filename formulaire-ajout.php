
<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
   <head> 
      <title>Ajouter Article</title> 
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
       <link rel="stylesheet" type="text/css" href="css/css.css">
       <link href="css/bootstrap.css">
       <link href='http://fonts.googleapis.com/css?family=Irish+Grover'
              rel='stylesheet' type='text/css'>
   </head> 
    <body class="article"> 
        <br>
        <div class="container" id="bord">
            <img class="pic1" src="img/Brain-canstockphoto44701927.jpg"><br>
            <div class="header">
                <h1 class="titre1"> Inspirations Note </h1>
                <h3 class="titre3"> Make Your Touch !! </h3><br>
            </div>
        </div>
        <div class="form">
            <h2>Nouvel article</h2> 
            <form action="insertionArticle.php" method="POST" enctype="multipart/form-data">  
                <p>Titre de l'article: <input type="text" name="titre" /></p> 
                <p>Commentaire: <br /><textarea name="commentaire" rows="10" cols="50"></textarea></p> 
                <input type="hidden" name="MAX_FILE_SIZE" value="2097152"> 
                <p>Choisissez une photo avec une taille inférieure à 2 Mo.</p> 
                <input type="file" name="photo"> 
                <br /><br /> 
                <input type="submit" name="ok" value="Publier"> 
            </form> 
            <br /> 
        </div>
        
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
    
</body> 
</html>
