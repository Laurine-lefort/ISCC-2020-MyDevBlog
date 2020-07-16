<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php include("header1.php")?>
<header>
    <h2> Mon projet </h2>
</header>
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

function ajout_utilisateur($pdo)
{
    $login =$_POST ['login'];
    $password=$_POST ['password'];
    try {
        $sql="INSERT INTO
        utilisateurs (login, password)
        VALUES ('$login', '$password')";
        $pdo->exec($sql);
        echo "utilisateur ajouté";
    }  catch (PDOException $e) {
        echo "utilisateur non ajouté";
    }
}




           $pdo=connect_to_database();
           ajout_utilisateur($pdo);
           ?> 
</html>