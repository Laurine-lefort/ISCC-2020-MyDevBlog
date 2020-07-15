<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php include("header.php")?>

<body>
<?php
function connect_to_database() {    
    $servername = "localhost"; 
    $username = 'root';    
     $password = 'root'; 
     $databasename = "articles"; 
 try {      
       $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);  
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
       } 
       catch (PDOException $e) 
       {        
            echo "Connection failed : ". $e->getMessage();  
              } 
           }
           ?>
<ul>
    <?php

function articles($pdo) {

    $articles=$pdo->query("SELECT * FROM articles")->fetchAll();

    foreach($articles as $articles) {
        echo'<h2><li>'. $articles['titre'].'</li></h2>';
        echo'<p>'.$articles['extrait'].'</p>';
        
        $number_article=$articles['Titre'];
        ?>
        <?php
    }
}
connect_to_database();
articles($pdo);
?>
</ul>
</body>
<?php include("footer.php")?>
</html>