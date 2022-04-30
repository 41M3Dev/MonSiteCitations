<?php 
    // Connexion et choix de la base de données
   require_once '../config/config.php';
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
            <a href="../index.html" class="logo">Citation</a>
            <div class="header-right">
                <a href="../php/formannonce.php">Déposer une annonce</a>
                <div class="menu">
                    <button class="menubtn">Anime</button>
                    <div class="menu-content">
                        <a href="../anime/onepiece.php">One Piece</a>
                        <a href="../anime/naruto.php">Naruto</a>
                        <a href="#avoire">AVOIR</a>
                        <a href="#avoire">AVOIR</a>
                    </div>
                </div>
                <div class="menu">
                    <button class="menubtn">Film</button>
                    <div class="menu-content">
                        <a href="#avoire">AVOIR</a>
                        <a href="#avoire">AVOIR</a>
                        <a href="#avoire">AVOIR</a>
                        <a href="#avoire">AVOIR</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        <form action="" method="GET">
            <label for="choix_bieres">Auteur:</label>
            <input name="auteur" list="auteur" type="text" id="fname">
            <datalist id="auteur">
                <option value="Naruto">
                <option value="Itachi">
                <option value="Gaara">
                <option value="Hinata">
            </datalist>
            <label for="subject">Citation</label>
            <textarea id="subject" name="citation" placeholder="Votre citation" style="height:200px"></textarea>
            <input type="submit" value="Envoyer" name="envoyer">
        </form>
      </div>
</body>
</html>

<?php
    if(isset($_GET['envoyer'])){
            if(!empty($_GET['auteur']) && !empty($_GET['citation']))
            {
        //Récpétration des valeur
            $auteur = htmlspecialchars($_GET['auteur']);
            $citation = htmlspecialchars($_GET['citation']);
        // Insertion des valeur dans la base de donnée
            $requete = "INSERT INTO `citation`(`auteur`,`citation`) VALUES (?,?)";
            $res = $bdd->prepare($requete);
            $exec = $res->execute(array($auteur,$citation));
            }
        }
    
?>