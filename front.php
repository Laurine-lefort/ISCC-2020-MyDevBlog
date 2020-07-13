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
<a href="http://localhost:8888/ISCC-2020/ISCC-2020-MyDevBlog/page-accueil.php">Accueil !</a>
  <a href="http://localhost:8888/ISCC-2020/ISCC-2020-MyDevBlog/page-articles.php">Articles</a>
  <a href="http://localhost:8888/ISCC-2020/ISCC-2020-MyDevBlog/page-contact.php">Contact</a>
  <a href="http://localhost:8888/ISCC-2020/ISCC-2020-MyDevBlog/page-article.php">Article</a>
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
    elseif($_GET['page']==4) {
        echo'<h2>Article</h2>';
    }
    session_start();
    ?>

</body>
</html>