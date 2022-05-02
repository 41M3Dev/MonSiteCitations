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
        <link rel="stylesheet" href="../css/style.css">
        <title>Citation</title>
    </head>
    <body>
    <?php include("header.php") ?>
        
        <h1>Citation de One Piece</h1>
        <?php // Affihce les valeur de la base de donnée
$sql="SELECT `id`, `anime`, `auteur`, `citation` FROM `citation` WHERE `anime` = 'OnePiece'";
            $result = $bdd->query($sql);
            while ($row = $result->fetch(PDO::FETCH_ASSOC)){?>
        <article class="article">
            <blockquote>
                <p><?php echo "{$row['citation']}" ?></p>
                <cite><?php echo "{$row['auteur']}" ?></cite>
                <?php $nom = strtoupper($row['auteur'])  ?> <div class="blockquote-author-image" style="--image: url('../img/onepiece/<?php echo "$nom.jpg" ?>')"> </div> <?php ?>
            </blockquote>
        </article>
        <?php
            }
        ?>
        <script>
            function myFunction() {
            var element = document.body;
            element.classList.toggle("dark");
            }
        </script>
    </body>
</html>