<?php
//  Include all required files (installation via Composer is required)
require_once __DIR__  . "/vendor/autoload.php";

use RiotAPI\LeagueAPI\LeagueAPI;
use RiotAPI\LeagueAPI\Definitions\Region;

$api_key = "RGAPI-b056b76e-9e2e-44ba-a15d-1411dc313074";

//  Initialize the library
if(isset($_COOKIE['region'])){
    if($_COOKIE['region'] == 'euw'){
        $api = new LeagueAPI([
            //API key
            LeagueAPI::SET_KEY    => $api_key,
            //Target region
            LeagueAPI::SET_REGION => Region::EUROPE_WEST,
        ]);
    }
    elseif($_COOKIE['region'] == 'eune'){
        $api = new LeagueAPI([
            //API key
            LeagueAPI::SET_KEY    => $api_key,
            //Target region
            LeagueAPI::SET_REGION => Region::EUROPE_EAST,
        ]);
    }
    elseif($_COOKIE['region'] == 'na'){
        $api = new LeagueAPI([
            //API key
            LeagueAPI::SET_KEY    => $api_key,
            //Target region
            LeagueAPI::SET_REGION => Region::NORTH_AMERICA,
        ]);
    }
    elseif($_COOKIE['region'] == 'kr'){
        $api = new LeagueAPI([
            //API key
            LeagueAPI::SET_KEY    => $api_key,
            //Target region
            LeagueAPI::SET_REGION => Region::KOREA,
        ]);
    }
}
else{
    $api = new LeagueAPI([
        //API key
        LeagueAPI::SET_KEY    => $api_key,
        //Target region
        LeagueAPI::SET_REGION => Region::EUROPE_WEST,
    ]);
}
