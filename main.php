<?php
require_once "API_init.php";

//  initialisation du Data Dragon pour récupérer les images, comme la photo de profil du joueur
use RiotAPI\DataDragonAPI\DataDragonAPI;
DataDragonAPI::initByCdn();

if(isset($_POST["searchinput"])){
    $summoner = $api->getSummonerByName($_POST["searchinput"]);
    $name = $summoner->name;
    $level = $summoner->summonerLevel;
    $pp = $summoner->profileIconId;
    $entries = $api->getLeagueEntriesForSummoner($summoner->id);
    $rank = $entries[0]->rank;
    $league_points = $entries[0]->leaguePoints;
    $tier = strtolower($entries[0]->tier);
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
    <link rel="stylesheet" href="footer.css">
</head>


<body>
<?php include_once "header.php"?>

<section>
    <div id="summoner_info">
        <?= DataDragonAPI::getProfileIcon($pp, ['id' => 'avatar']) ?>
        <span id="summonername"><?= $name ?></span>
    </div>

    <div id="rank">
        <img id="tier_img" alt="<?= $tier ?>" src="ressources/<?= $tier ?>.png">
        <span>level</span>
        <span>KDA</span>
        <span>diagrammes</span>
        <span>main champion</span>
    </div>

    <div id="info_table">
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
                <td><img alt="" src=""> test</td>
                <td>test</td>
                <td>test</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div id="empty"></div>

    <div id="footer">
        <?php include_once "footer.php" ?>
    </div>

</section>
</body>
</html>

