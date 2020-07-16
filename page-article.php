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

    $articles=$pdo->query("SELECT * FROM Articles WHERE Titre = 'Dubai'");
while($article =$articles->fetch())
{
  echo'<ul><li>' .$article['Titre']. '</li></ul>';
  echo'<ul><li>' .$article['Date de publication']. '</li></ul>';
  echo'<ul><li>' .$article['Auteur']. '</li></ul>';
  echo'<ul><li>' .$article['Contenu texte']. '</li></ul>';
  echo'<ul><li>' .$article['Extrait']. '</li></ul>';
  echo'<br></br>';
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
