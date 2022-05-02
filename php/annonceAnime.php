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
<?php include("header.php") ?>
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