<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ajouter un article</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php include("header.php")?>
<body>
    <form method="POST">
        <fieldset>
            <p> Ecrire un article :</p>
            <label for="Titre">Titre</label>
            <div id="Titre">
                <input type="text" name="Titre" id="Titre">
            </div>
            <label for="Image">Image</label>
            <div id="Image">
                <input type="blomb" name="Image" id="Image">
            </div>
            <label for="Auteur">Auteur</label>
            <div id="Auteur">
                <input type="text" name="Auteur" id="Auteur">
            </div>
            <label for="Contenu texte">Contenu texte</label>
            <div id="Contenu texte">
                <input type="text" name="Contenu texte" id="Contenu texte">
            </div>
            <label for="Extrait">Extrait</label>

        <textarea name="ajouter_article" placeholder="Votre message"></textarea><br/>

        <br><input type="submit" value="Envoyer">
</fieldset>
</form>
</br>
<?php if(isset($message)) { echo $message; } ?>
</body>
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
        if(isset($_POST ['Titre'], $_POST['ajouter_article'])) {
            if(!empty($_POST['Titre']) AND !empty($_POST['ajouter_article'])) {
                $titre= htmlspecialchars($_POST['Titre']);
                $red_article= htmlspecialchars($_POST['ajouter_article']);
                $ins= $bdd->prepare('INSERT INTO Articles (Titre,Image,Date de publication,Auteur, Contenu texte,Extrait) VALUES(?,?,NOW(),?,?,?)');
                $ins->execute(array($titre, $red_article));
                $message= 'Votre article est posté !';
            } else {
                $message= 'Veuillez remplir tous les champs';
            }
        }
        $pdo=connect_to_database();
           ?>
</html>