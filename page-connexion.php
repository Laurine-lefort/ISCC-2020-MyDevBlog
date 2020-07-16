<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php include("header1.php")?>
<header>
    <h2> Connexion </h2>
</header>
    <body>
        <div id="after_submit"></div>
<form id="page-connexion" action="page-connexion.php" method="POST" enctype="multipart/form-data">
  <div class="row">
    <label class="required" for="login">Login:</label><br />
    <input id="login" class="input" name="login" type="text" value="" size="30" /><br />
    <span id="login_validation" class="error_message"></span>
  </div>
  <div class="row">
    <label class="required" for="password">Password:</label><br />
    <input id="password" class="input" name="password" type="text" value="" size="30" /><br />
    <span id="password_validation" class="error_message"></span>
  </div>
    <input id="submit_button" type="submit" value="Identification" />
</form>
    </body>
</html>