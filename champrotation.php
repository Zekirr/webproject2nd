<?php
require_once "API_init.php";

//  initialisation du Data Dragon pour récupérer les images, comme la photo de profil du joueur
use RiotAPI\DataDragonAPI\DataDragonAPI;
DataDragonAPI::initByCdn();



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Noxus Stats - Champions rotation</title>
    <script src="https://kit.fontawesome.com/4a87f9d18c.js" crossorigin="anonymous"></script>  <!-- intégration kit d'icônes -->
    <link rel="stylesheet" href="champrotation.css">
    <link rel="stylesheet" href="scrollbar.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>
<?php include_once "header.php" ?>

<div class="champrotation">
    <?
    for ($i = 0; $i <= 14; $i++){
        $rotation = $api->getChampionRotations()->freeChampionIds;
        echo DataDragonAPI::getChampionLoading($api->getStaticChampion($rotation[$i])->name);

    }?>
</div>
</body>