<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php include("header.php"); ?>
<body>
    <?php
    session_start();
    if($_GET['page'] == 1){
       echo'<h2>Accueil !</h2>';
       include("page-accueil.php");
       
    }
    elseif($_GET['page'] ==2){
        echo'<h2>Articles</h2>';
        include("page-articles.php");
    }
    elseif($_GET['page'] ==3){
        echo'<h2>Contact</h2>';
        include("page-contact.php");
    }
    elseif($_GET['page']==4) {
        echo'<h2>Article</h2>';
        include("page-article.php");
    }
    session_start();
    ?>
</body>
<?php include("footer.php"); ?>
</html>