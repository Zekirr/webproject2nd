<?php
//  Include all required files (installation via Composer is required)
require_once __DIR__  . "/vendor/autoload.php";

use RiotAPI\LeagueAPI\LeagueAPI;
use RiotAPI\LeagueAPI\Definitions\Region;

//  Initialize the library
if(isset($_COOKIE['region'])){
    if($_COOKIE['region'] == 'euw'){
        $api = new LeagueAPI([
            //API key
            LeagueAPI::SET_KEY    => 'RGAPI-e76f9f6b-77ae-47f6-a635-aa396f148f0f',
            //Target region
            LeagueAPI::SET_REGION => Region::EUROPE_WEST,
        ]);
    }
    elseif($_COOKIE['region'] == 'eune'){
        $api = new LeagueAPI([
            //API key
            LeagueAPI::SET_KEY    => 'RGAPI-e76f9f6b-77ae-47f6-a635-aa396f148f0f',
            //Target region
            LeagueAPI::SET_REGION => Region::EUROPE_EAST,
        ]);
    }
    elseif($_COOKIE['region'] == 'na'){
        $api = new LeagueAPI([
            //API key
            LeagueAPI::SET_KEY    => 'RGAPI-e76f9f6b-77ae-47f6-a635-aa396f148f0f',
            //Target region
            LeagueAPI::SET_REGION => Region::NORTH_AMERICA,
        ]);
    }
    elseif($_COOKIE['region'] == 'kr'){
        $api = new LeagueAPI([
            //API key
            LeagueAPI::SET_KEY    => 'RGAPI-e76f9f6b-77ae-47f6-a635-aa396f148f0f',
            //Target region
            LeagueAPI::SET_REGION => Region::KOREA,
        ]);
    }
}
else{
    $api = new LeagueAPI([
        //API key
        LeagueAPI::SET_KEY    => 'RGAPI-e76f9f6b-77ae-47f6-a635-aa396f148f0f',
        //Target region
        LeagueAPI::SET_REGION => Region::EUROPE_WEST,
    ]);
}