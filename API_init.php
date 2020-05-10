<?php
//  Include all required files (installation via Composer is required)
require_once __DIR__  . "/vendor/autoload.php";

use RiotAPI\LeagueAPI\LeagueAPI;
use RiotAPI\LeagueAPI\Definitions\Region;

//  Initialize the library
$api = new LeagueAPI([
    //API key
    LeagueAPI::SET_KEY    => 'RGAPI-b692c4c9-4c40-4802-82d5-438aa8ea50b1',
    //Target region
    LeagueAPI::SET_REGION => Region::EUROPE_WEST,
]);
