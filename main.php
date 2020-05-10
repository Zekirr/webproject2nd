<?php
require_once "API_init.php";

$name = '';
$level = '';

if(isset($_POST["searchinput"])){
    $summoner = $api->getSummonerByName($_POST["searchinput"]);
    $name = $summoner->name;
    $level = $summoner->summonerLevel;
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
    <link rel="stylesheet" href="scrollbar.css">
    <link rel="stylesheet" href="main.css">
</head>


<body>

<?= $name ?>
<br>
<?= $level ?>

</body>
</html>
