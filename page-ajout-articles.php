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
<form method= "post" action="page-ajout-articles.php">
            <p>
                <label for="Titre"> Titre:</label>
                <input type="text" name="Titre" id="Titre" placeholder="..." style="width: 250px;" style="height: 30px;"/>
        </p>
        <p>
                <label for="Image"> Image</label>
                <input type="blomb" name="Image" id="Image" style="width: 250px;" style="height: 30px;"/>
        </p>
        <p>
                <label for="Date de publication"> Date de publication:</label>
                <input type="date" name="Date de publication" id="Date de publication" placeholder="../../...." style="width: 250px;" style="height: 30px;"/>
        </p>
        <p>
                <label for="Auteur"> Auteur:</label>
                <input type="text" name="Auteur" id="Auteur" placeholder="..." style="width: 250px;" style="height: 30px;"/>
        </p>
        <p>
                <label for="Contenu texte"> Contenu texte:</label>
                <input type="text" name="Contenu texte" id="Contenu texte" placeholder="..." style="width: 250px;" style="height: 30px;"/>
        </p>
        <p>
                <label for="Extrait"> Extrait:</label>
                <input type="text" name="Extrait" id="Extrait" placeholder="..." style="width: 250px;" style="height: 30px;"/>
        </p>
        <input type="submit" value="Envoyer!">
        </form>
        
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
function insert_data($pdo) {
    $titre= addslashes($_POST ['Titre']);
    $image= addslashes($_POST ['Image']);
    $date= addslashes($_POST ['Date de publication']);
    $auteur= addslashes($_POST ['Auteur']);
    $texte= addslashes($_POST ['Contenu texte']);
    $extrait= addslashes($_POST ['Extrait']);
    try {
        if (!empty($_POST['Titre']) && !empty($_POST['Image']) && !empty($_POST['Date de publication']) && !empty($_POST['Auteur'])&& !empty($_POST['Contenu texte'])&& !empty($_POST['Extrait'])){
        $sql= "INSERT INTO Articles(Titre, Image,Date de publication, Auteur, Contenu texte, Extrait)
                    VALUES('$titre', '$image', '$date','$auteur','$texte','$extrait')";

        $pdo->exc($sql);
        header('page-ajout-articles.php');
        echo 'Article ajouté';}
    }
    catch (PDOException $e) {
        echo"Erreur insert". $e->getMessage();
    }
}
$pdo=connect_to_database();
insert_data($pdo);

        ?>
        </body>
</html>



    

    
        