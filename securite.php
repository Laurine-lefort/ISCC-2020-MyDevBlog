<?php
            function connected_data() {    
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
             if (!empty($_POST['loginn'])&& !empty($_POST['passwordd']))
            {
            $login=$_POST['loginn'];
             $password=$_POST['passwordd'];
                        
           $requete=$pdo->query("SELECT passwordd
            FROM utilisateurs
             WHERE loginn='$login'");
            $res=$requete->fetchAll();
                        
            if ($res)
             {
            if($password == $res[0]['passwordd'])
             {
              echo "Bonjour ".$_POST['loginn']." !";
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