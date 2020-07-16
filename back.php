<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php include("header1.php"); ?>
<body>
    <?php
    session_start();
    if($_GET['page'] == 6){
       echo'<h2>Connexion</h2>';
       include("page-connexion.php");
       
    }
    elseif($_GET['page'] ==7){
        echo'<h2>ajout article</h2>';
        include("page-ajout-articles.php");
    }
    elseif($_GET['page'] ==8){
        echo'<h2>ajout utilisateur</h2>';
        include("page-ajout-utilisateur.php");
    }
    elseif($_GET['page']==9) {
        echo'<h2>utilisateurs</h2>';
        include("page-utilisateurs.php");
    }
    session_start();
    ?>
</body>
</html>