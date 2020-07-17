<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php include("header1.php")?>

<body>
<?php
function connect_to_database() {    
    $servername = "localhost"; 
    $username = 'root';    
     $password = 'root'; 
     $databasename = "utilisateurs"; 
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

function utilisateurs($pdo) {

    $utilisateurs=$pdo->query("SELECT * FROM lesutilisateurs");
while($utilisateurs =$utilisateurs->fetch())
{
  echo'<ul><li>' .$utilisateurs['Nom_utilisateur']. '</li></ul>';
  echo'<ul><li>' .$utilisateurs['login']. '</li></ul>';
  echo'<ul><li>' .$utilisateurs['password']. '</li></ul>';
  echo'<br></br>';
}
        ?>
        <?php
    }
$pdo=connect_to_database();
utilisateurs($pdo);
?>
</ul>
</body>
</html>