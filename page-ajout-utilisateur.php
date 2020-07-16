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
           $pdo=connect_to_database();
           ?> 
        
        <form method= "post" action="page-ajout-utilisateur.php">
            <p>
                <label for="Nom_utilisateur"> Nom de l'utilisateur:</label>
                <input type="text" name="Nom_utilisateur" id="Nom_utilisateur" placeholder="lau.lft" style="width: 250px;" style="height: 30px;"/>
        </p>
        <p>
                <label for="login"> Login:</label>
                <input type="text" name="login" id="login" style="width: 250px;" style="height: 30px;"/>
        </p>
        <p>
                <label for="password"> password:</label>
                <input type="text" name="password" id="password" placeholder="856" style="width: 250px;" style="height: 30px;"/>
        </p>
        <input type="submit" value="Envoyer!">
        </form>

        <?php
function insert_data($pdo) {
    $Nu= $_POST ['Nom_utilisateur'];
    $login= $_POST ['login'];
    $password= $_POST ['password'];

    try {
        $_REQUEST= "INSERT INTO lesutilisateurs(Nom_utilisateur, login,password)
                    VALUES('$Nu', '$login', '$password')";

        $pdo->exc($_REQUEST);
    }
    catch (PDOException $e) {
        echo"Erreur insert". $e->getMessage();
    }
}
insert_data($pdo);

        ?>
</html>