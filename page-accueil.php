<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php include("header.php")?>
<header>
    <h2> Mon projet </h2>
</header>
<body>
<p>Je suis étudiante en communication marketing et digital. J'ai pour passion les voyages et également la photographie. J'ai pu commencer dès le plus jeune âge à voyager à travers le monde. Souvent il est compliqué de trouver une destination qui réponds à nos envies et besoins. Vous trouverez donc ainsi ici quels sont les avantages de chaques destinations, des informations importantes à connaître sur cette ville ou pays avant de s'y rendre, et les endroits à visiter absolument pour s'imprégner de la culture et en faire un voyage inoubliable.</p>
<?php
function connect_to_database() {    
    $servername = "localhost"; 
    $username = 'root';    
     $password = 'root'; 
     $databasename = "articles"; 
 try {      
       $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);  
       $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
       echo"Connection réussie";
        return $pdo;
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

    $articles=$pdo->query('SELECT * FROM Articles');
while($article =$articles->fetch())
{
    echo'<ul><li>' .$article['Titre']. '</li></ul>';
}
        ?>
        <?php
    }
$pdo=connect_to_database();
articles($pdo);
include("footer.php");
?>
</ul>
</body>
</html>
