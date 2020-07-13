<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>
<footer>
<a href="https://github.com/Laurine-lefort">Profil github</a>
<a href="https://www.linkedin.com/in/laurine-le-fort-976449198/">Profil linkedin</a>
<a href="http://localhost:8888/ISCC-2020/ISCC-2020-MyDevBlog/front.php?page=4">Espace administration</a>
<?php
if ($_GET['page']==5){
    echo'<h3>Espace administration<h3>';
}
?>
</footer>
</html>