<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>
<header>
    <h1> Travel Blog</h1>
</header>
<body>
<a href="http://localhost:8888/ISCC-2020/ISCC-2020-MyDevBlog/front.php?page=1">Accueil !</a>
  <a href="http://localhost:8888/ISCC-2020/ISCC-2020-MyDevBlog/front.php?page=2">Articles</a>
  <a href="http://localhost:8888/ISCC-2020/ISCC-2020-MyDevBlog/front.php?page=3">Contact</a>
    <?php
    session_start();
    if($_GET['page'] == 1){
       echo'<h2>Accueil !</h2>';
       
    }
    elseif($_GET['page'] ==2){
        echo'<h2>Articles</h2>';
    }
    elseif($_GET['page'] ==3){
        echo'<h2>Contact</h2>';
    }
    ?>

</body>
<footer>

</footer>
</html>