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
    <script src="../js/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<?php include("header.php") ?>
        <div class="container">
        <form action="" method="GET">
            <label>Anime :</label>
            <input name="anime" list="auteur" type="text" id="fname">
            <label>Auteur :</label>
            <input name="auteur" list="auteur" type="text" id="fname">
            <label for="subject">Citation</label>
            <textarea id="subject" name="citation" placeholder="Votre citation" style="height:200px"></textarea>
            <input type="submit" value="Envoyer" name="envoyer">
        </form>
      </div>
.
</body>
</html>
<?php
    if(isset($_GET['envoyer'])){
            if(!empty($_GET['auteur']) && !empty($_GET['citation']) && !empty($_GET['anime']) )
            {
        //Récpétration des valeur
            $auteur = htmlspecialchars($_GET['auteur']);
            $citation = htmlspecialchars($_GET['citation']);
            $anime = htmlspecialchars($_GET['anime']);
        // Insertion des valeur dans la base de donnée
            $requete = "INSERT INTO `citationanime`(`anime`,`auteur`,`citation`) VALUES (?,?,?)";
            $res = $bdd->prepare($requete);
            $exec = $res->execute(array($anime,$auteur,$citation));
            }
        }
    
?>