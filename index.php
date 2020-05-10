<?php ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Noxus Stats</title>
    <script src="https://kit.fontawesome.com/4a87f9d18c.js" crossorigin="anonymous"></script>  <!-- intégration kit d'icônes -->
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="scrollbar.css">
    <link rel="stylesheet" href="header.css">

</head>

<?php include_once "header.php"?>

<body>

<img id="logolp" src="ressources/Noxus_logo.png">

<div class="pagecontent">
    <p>Découvrez les stats de vos différentes parties</p>
</div>

<form class="searchbar">
    <input type="search" placeholder="Summoner name.." id="searchinput">
    <button type="submit" id="searchbutton">
        <i class="fas fa-search"></i>
    </button>
</form>


<div class="backgroundcontainer">
    <img id="backgroundimage" src="ressources/noxus_splash.jpg">
</div>

</body>
