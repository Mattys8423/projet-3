<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Accueil</title>
</head>

<body>
    <!-- navbar -->
    <header>
        <input type="checkbox" id="nav-toggle" class="nav-toggle" />
            <nav>
                <ul>
                    <li><a href="index.html" class="active">Accueil</a></li>
                    <li><a href="Onglet CV.html">CV</a></li>
                    <li><a href="page des liens utiles.html">Onglet Contact</a></li>
                </ul>
            </nav>
        <label for="nav-toggle" name="nav-toggle-label" class="nav-toggle-label">
            <span></span>
        </label>
    </header>
<br>
<br>
<br>
<br>
<br>

<?php
$pdo = new PDO('mysql:host=localhost;dbname=hinokagutsuchi', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
$get_cat = $pdo ->query('SELECT * FROM user');
    while ($cat = $get_cat-> fetch(PDO::FETCH_ASSOC)) {
?>
    <br>
    <div class="card" style="width: 50rem;">
        <div class="card-header">
            <div><?php echo $cat['Pseudo']; ?></div>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><div><?php echo $cat['Mail']; ?></div>
            <li class="list-group-item"><div><?php echo $cat['Tel']; ?></div>
        </ul>
    </div>
    Vous a écrit : <?php echo $cat['Msg']; ?> le <?php echo $cat['Dt']; ?>
    <br>
<?php
}
?>

