<!DOCTYPE html>
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
    <script src="../js/script.js"></script>
    <title>Document</title>
</head>
<body>
<?php include("header.php") ?>
      <div class="connexion-box">
        <h2>Connexion</h2>
        <form>
          <div class="input-container ic1">
            <input id="pseudo" class="input" type="text" placeholder=" " />
            <div class="cut"></div>
            <label for="pseudo" class="placeholder">Psuedo</label>
          </div>
          <div class="input-container ic2">
            <input id="password" class="input" type="text" placeholder=" " />
            <div class="cut"></div>
            <label for="password" class="placeholder">Mot de passe</label>
          </div>
            <a href="">
              Connexion
            </a>
        </form>
      </div>
</body>
</html>