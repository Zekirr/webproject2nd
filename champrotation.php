<?php
require_once "API_init.php";

//  initialisation du Data Dragon pour récupérer les images, comme la photo de profil du joueur
use RiotAPI\DataDragonAPI\DataDragonAPI;
DataDragonAPI::initByCdn();

$rotation = $api->getChampionRotations()->freeChampionIds;

$champions_names = [];
for($i = 0; $i <= 14; $i++){
    $champions_names[$i] = $api->getStaticChampion($rotation[$i])->name;
}
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

<section>
    <div class="champrotation">
        <?php
        for($i = 0; $i <= 14; $i++){
            echo DataDragonAPI::getChampionLoading($champions_names[$i]);
        }
        ?>
    </div>

    <?php include_once "footer.php" ?>
</section>

</body>
</html>
