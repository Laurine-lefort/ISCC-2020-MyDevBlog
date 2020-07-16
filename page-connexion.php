<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php include("header1.php")?>
<header>
    <h2>Connexion</h2>
<form method="POST" action="securite.php">
    <label for="login">Login</label>
<div id="login">
    <input type="text" name="login" id="login">
</div>
    
    <label for="password">Password</label>
<div id="password">
    <input type="text" name="password" id="password">
</div>

<input type="submit" value="Envoyer">
</form>
    </body>
</html>