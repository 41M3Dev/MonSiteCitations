<?php 
    // Connexion et choix de la base de données
   // require_once '../config/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
        <div class="header">
            <a href="index.html" class="logo">Citation</a>
            <div class="header-right">
                <a href="anime/naruto.html">Naruto</a>
                <a href="php/formannonce.php">Déposer une annonce</a>
                <a href="#avoire">AVOIR</a>
                <a href="#avoire">AVOIR</a>
            </div>
        </div>
        <div class="container">
        <form action="/action_page.php">
          <label for="fname">Auteur</label>
          <input type="text" id="fname" name="firstname" placeholder="Nom de l'auteur">
      
          <label for="subject">Citation</label>
          <textarea id="subject" name="subject" placeholder="Votre citation" style="height:200px"></textarea>
      
          <input type="submit" value="Submit">
        </form>
      </div>
    
</body>
</html>