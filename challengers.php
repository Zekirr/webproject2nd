<?php
require_once "API_init.php";

//  initialisation du Data Dragon pour récupérer les images, comme la photo de profil du joueur
use RiotAPI\DataDragonAPI\DataDragonAPI;
DataDragonAPI::initByCdn();

$league = $api->getLeagueChallenger('RANKED_SOLO_5x5');

$challengers_LP = [];
for($i = 0; $i < 300; $i++){
    $challenger_LP = $league->entries[$i]->leaguePoints;
    $winrate = $league->entries[$i]->wins + $league->entries[$i]->losses;
    $winrate_length = strlen($winrate);
    $winrate_length = pow(10, $winrate_length);
    $winrate /= $winrate_length;
    $challenger_LP += $winrate;
    array_push($challengers_LP, $challenger_LP);
}
sort($challengers_LP);
$challengers_LP = array_reverse($challengers_LP);

$challengers = [];
$challengers_test = array_fill(0, 300, 0);
for($i = 0; $i < 300; $i++){
    for($j = 0; $j < 300; $j++){
        $challenger_LP = $league->entries[$j]->leaguePoints;
        $challenger_name = $league->entries[$j]->summonerName;
        $winrate = $league->entries[$j]->wins + $league->entries[$j]->losses;
        $winrate_length = strlen($winrate);
        $winrate_length = pow(10, $winrate_length);
        $winrate /= $winrate_length;
        $challenger_LP += $winrate;

        if($challenger_LP === $challengers_LP[$i] && $challengers_test[$j] === 0){
            $challengers[$i] = $challenger_name;
            $challengers_test[$j] = 1;
            break;
        }
    }
}


function display_challs($position, $name, $lp, $wins, $losses){
    echo "<tr><td>".$position."</td>";

    echo "<td>"."<a href='main.php?searchinput=".$name."'>".$name."</a>"."</td>";

    echo "<td>".$lp." LP</td>";

    echo "<td>".$wins."/".$losses." - ".round($wins/($wins + $losses) * 100)."%"."</td>";

    echo "</tr>";
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Noxus Stats - Challengers page</title>
        <link rel="stylesheet" href="challengers.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="scrollbar.css">
    </head>
        <body>
        <?php include_once "header.php" ?>

        <section>
            <span id="challengers">Challengers</span>
            <div id="tableau">
                <table>
                    <tr>
                        <th>#</th>
                        <th>Summoner name</th>
                        <th>LP</th>
                        <th>Win Rate</th>
                    </tr>
                    <?php
                    for($i = 0; $i < 300; $i++){
                        for($j = 0; $j < 300; $j++){
                            $challenger = $league->entries[$j]->summonerName;
                            if($challengers[$i] === $challenger){
                                $position = $i + 1;
                                $name = $challengers[$i];
                                $lp = $league->entries[$j]->leaguePoints;
                                $wins = $league->entries[$j]->wins;
                                $losses = $league->entries[$j]->losses;
                                display_challs($position, $name, $lp, $wins, $losses);
                                break;
                            }
                        }
                    }
                    ?>
                </table>
            </div>
            <?php include_once "footer.php" ?>
        </section>
        </body>
</html>
