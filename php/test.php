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
    <link rel="stylesheet" href="../css/stdyle.css">
    <title>Document</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  min-height: 100vh;
  align-items: center;
  justify-content: center;
  background: rgb(190, 176, 176);
  position: relative;
}

.container{
  max-width: 2000px;
  overflow: hidden;
  padding: 10px 0;
}
.container .main-card{
  display: flex;
  width: 200%;
}

.container .main-card .cards{
  width: 50%;
  display: flex;
  flex-wrap: wrap;
  margin: 0 20px;
  justify-content: space-between;
}
.main-card .cards .cardH,.main-card .cards .cardB{
  width: calc(100% / 3 - 10px);
  background: #fff;
  border-radius: 12px;
  padding: 30px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.25);
  transition: all 0.4s ease;
}
.main-card .cards .cardH:hover,.main-card .cards .cardB:hover{
  transform: translateY(-20px)
}
.cards .cardH .content,.cards .cardB .content{
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.cards .cardH .content .img, .cards .cardB .content .img{
  height: 130px;
  width: 130px;
  border-radius: 50%;
  padding: 3px;
  background: #FF676D;
  margin-bottom: 14px;
}
.cardH .content .img img, .cardB .content .img img{
  height: 100%;
  width: 100%;
  border: 3px solid #ffff;
  border-radius: 50%;
  object-fit: cover;
}
.card .content .name{
  font-size: 20px;
  font-weight: 500;
}
.cardH .content .job a, .cardB .content .job a{
  font-size: 20px;
  color: #FF676D;
  text-decoration: none;
}
.cardB{
  margin-top: 25px;
}
#cardBG{
  margin-right: 20px;
}
#cardHG{
  margin-right: 20px;
}

    </style>
</head>
<body>
<?php include("header.php") ?>
<div class="container">
            <div class="main-card">
                    <div class="cards">
                        <div class="cardH">
                            <div class="content">
                                <div class="img">
                                    <img src="img/deco.jpg" alt="">
                                </div>
                                <div class="details">
                                    <div class="job"><a href="nc/categorie/decoration.php">Decoration</a></div>
                                </div>
                            
                            </div>
                        </div>
                        <div class="cardH">
                            <div class="content">
                                <div class="img">
                                    <img src="img/mode.jpg" alt="">
                                </div>
                                <div class="details">
                                    <div class="job"> <a href="nc/categorie/mode.php">Mode</a></div>
                                </div>
                            
                            </div>
                        </div>
                </div>
            </div>
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