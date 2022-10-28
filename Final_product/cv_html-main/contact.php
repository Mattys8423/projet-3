<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/contact.css">
      <title>Liens Utiles</title>
  </head>

<body>
  <!-- navbar -->
  <header>
      <input type="checkbox" id="nav-toggle" class="nav-toggle" />
          <nav>
              <ul>
                  <li><a href="index.php">Accueil</a></li>
                  <li><a href="Onglet CV.php">CV</a></li>
                  <li><a href="page des liens utiles.php" class="active">Onglet Contact</a></li>
              </ul>
          </nav>
      <label for="nav-toggle" name="nav-toggle-label" class="nav-toggle-label">
          <span></span>
      </label>
  </header>

<br>
<br>
<br>

<div class="login-box">
  <form method='post'>
    <div class="user-box">
      <input type="text" name="Pseudo" required="">
      <label>Pseudo</label>
    </div>
    <div class="user-box">
      <input type="email" name="mail" required="">
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="password" name="mdp" required="">
      <label>Password</label>
    </div>
    <div class="user-box">
      <input type="tel" name="tel" required="">
      <label>Téléphone</label>
    </div>
    <label><span>Message</span></label>
      <textarea class='textarea' name="message" required="">
      </textarea>
    <div class="user-box">
      <input type="date" name="date" required="">
    </div>
      <button type='submit' class='btn btn-outline-danger'>Envoyer</button>
  </form>
</div>

<?php
$pdo = new PDO('mysql:host=localhost;dbname=hinokagutsuchi', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
if ($_POST) {
  $pdo->exec("INSERT INTO user (Pseudo, Mail, Mdp, Tel, Msg, Dt) VALUES ('$_POST[Pseudo]', '$_POST[mail]', '$_POST[mdp]', '$_POST[tel]', '$_POST[message]', '$_POST[date]')");
}

/* Construction de la requête
$qry = "SELECT COUNT(*) AS existe FROM user WHERE Pseudo = '".$_POST['Pseudo']."' AND Mdp = '" .($_POST['mdp'] . "'");

// Exécution de la requête
$result = mysqli_query($qry) or die('ERR_SQL : ' . $qry . '<br />' . mysqli_error());
if(! mysql_result($result, 0, 'existe')) {
   do_html_header(); 
   die('<h3>Sorry</h3>Bienvenue Nouvel Utilisateur');
}
do_html_header();
echo'<h3>Bienvenue à nouveau </h3>'.$webUser;*/

?>