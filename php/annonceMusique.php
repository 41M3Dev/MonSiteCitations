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
            <label>Musique :</label>
            <input name="musique" list="auteur" type="text" id="fname">
            <label>Artiste :</label>
            <input name="artiste" list="auteur" type="text" id="fname">
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
        
            if(!empty($_GET['artiste']) && !empty($_GET['citation']) && !empty($_GET['musique']) )
            {
        //Récpétration des valeur
            $artiste = htmlspecialchars($_GET['artiste']);
            $citation = htmlspecialchars($_GET['citation']);
            $musique = htmlspecialchars($_GET['musique']);
        // Insertion des valeur dans la base de donnée
            $requete = "INSERT INTO `citationmusique`(`musique`, `artiste`, `citation`) VALUES (?,?,?)";
            $res = $bdd->prepare($requete);
            $exec = $res->execute(array($musique,$artiste,$citation));
            }
        }
    
?>