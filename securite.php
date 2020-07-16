<?php
            function connect_to_database() {    
                $servername = "localhost"; 
                $username = 'root';    
                 $password = 'root'; 
                 $databasename = "utilisateurs"; 
             try {      
                   $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);  
                   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                  
                   echo "<h3>Connected successfully<h3/>";   
          
             }  
            catch (PDOException $e) {        
                    echo "<h3>Connection failed</h3>". $e->getMessage();  
            } 

         }
            function login ($pdo)
             {
             try
            { 
             if (!empty($_POST['login'])& !empty($_POST['password']))
            {
            $login=$_POST['login'];
             $password=$_POST['password'];
                        
           $requete=$pdo->query("SELECT password
            FROM utilisateurs
             WHERE login='$login'");
            $res=$requete->fetchAll();
                        
            if ($res)
             {
            if($password == $res[0]['password'])
             {
              echo "Bonjour ".$_POST['login']." !";
               echo '<br>';
              echo "Vous êtes connectés";
              echo '<br>';
        header("page-ajout-articles.php");
              }
             }
     else
             {
     echo '<p>mauvais couple identifiant / mot de passe.</p>';
     }
       }
        }
    catch(PDOException $e)
{
    echo "Login erreur" .$e->getMessage();
 }
}
                        
 $pdo= connect_to_database();
 login($pdo);
?>
</html>

