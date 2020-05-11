<?php
require_once "API_init.php";

$name = '';
$level = '';
$pp = '';

use RiotAPI\DataDragonAPI\DataDragonAPI;
DataDragonAPI::initByCdn();

if(isset($_POST["searchinput"])){
    $summoner = $api->getSummonerByName($_POST["searchinput"]);
    $name = $summoner->name;
    $level = $summoner->summonerLevel;
    $pp = $summoner->profileIconId;
}
else{
//    renvoyer vers la page d'erreur
    echo 'erreur';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Noxus Stats - Summoner page</title>
    <script src="https://kit.fontawesome.com/4a87f9d18c.js" crossorigin="anonymous"></script>  <!-- intégration kit d'icônes -->
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="scrollbar.css">
    <link rel="stylesheet" href="header.css">
</head>


<body>
<?php include_once "header.php"?>

<div class="summoner_info">
    <?= DataDragonAPI::getProfileIcon($pp, ['id' => 'avatar']) ?>
    <span id="summonername"><?= $name ?>: lvl <?= $level ?></span>
</div>

<img id="rank" src="ressources/diams.png">

<table>
    <thead>
    <tr>
        <td>Invocateur</td>
        <td>Winrate</td>
        <td>Points</td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><img src=""> test</td>
        <td>test</td>
        <td>test</td>
    </tr>
    </tbody>
</table>
</body>
</html>
