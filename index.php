<?php
if(isset($_GET['reg'])){
    setcookie('region', $_GET['reg'], time() + 365*24*3600, null, null, false, true);
    $_GET['reg'] = '';
    header('Location: index.php');
}

include_once 'API_init.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Noxus Stats</title>
    <script src="https://kit.fontawesome.com/4a87f9d18c.js" crossorigin="anonymous"></script>  <!-- intégration kit d'icônes -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="scrollbar.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
</head>

<body>

<?php include_once "header.php"?>

<section>
<img id="logolp" src="ressources/Noxus_logo.png" alt="">

<div class="pagecontent">
    <p>Découvrez les stats de vos différentes parties</p>
</div>

<form class="searchbar" method="get" action="main.php">
    <label for="searchinput"></label><input type="search" placeholder="Summoner name.." id="searchinput" name="searchinput">
    <button type="submit" id="searchbutton">
        <i class="fas fa-search"></i>
    </button>
</form>


<div class="backgroundcontainer">
    <img id="backgroundimage" src="ressources/noxus_splash.jpg" alt="">
</div>

<div id="footer">
    <?php include_once "footer.php" ?>
</div>

</section>

</body>
