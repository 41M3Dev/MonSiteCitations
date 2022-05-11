<!DOCTYPE html>
<?php 
    // Connexion et choix de la base de données
   require_once '../config/config.php';
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../js/script.js"></script>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Citation</title>
        <script src="../js/script.js"></script>
    </head>
    <body>
    <?php include("header.php") ?>
        
        <h1>Citation d'anime</h1>
        <?php // Affihce les valeur de la base de donnée
            $sql="SELECT `id`, `anime`, `auteur`, `citation` FROM `citationanime` ORDER BY id DESC";
            $result = $bdd->query($sql);
            while ($row = $result->fetch(PDO::FETCH_ASSOC)){?>
        <article class="article">
            <blockquote>
                <p><?php echo "{$row['citation']}" ?></p>
                <cite><?php echo "{$row['auteur']} dans {$row['anime']}"?></cite>
                <?php $nom = strtoupper($row['auteur'])  ?>
            </blockquote>
        </article>
        <?php
            }
        ?>
.
    </body>
</html>