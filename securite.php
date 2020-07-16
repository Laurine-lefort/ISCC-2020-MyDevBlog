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

  $sth->excecute(array('admin','login'));
  $login =$sth->fetchAll();

  $sth->execute(array('2020', 'password'));
  $password= $sth->fetchAll();
     }

$pdo=connected_data();


  
    ?>