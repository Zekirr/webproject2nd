<?php

declare(strict_types=1);


//==================================================================dd=
//  CLASS AUTOLOAD
//==================================================================dd=

// Possible Composer autoloader locations
static $autoloader_paths = [
	__DIR__ . '/../../vendor/autoload.php',
	__DIR__ . '/../../../../autoload.php',
];
// Try to include autoloader
foreach ($autoloader_paths as $autoloader_path)
{
	if (is_file($autoloader_path))
	{
		include_once $autoloader_path;
		break;
	}
}


//==================================================================dd=
//  CLI APPLICATION INIT
//==================================================================dd=

use RiotAPI\LeagueAPICLI\Application;

if (PHP_VERSION_ID < 70000)
	trigger_error("This version (" . PHP_VERSION . ") of PHP is not supported by this library. PHP7.0 or higher required.", E_USER_ERROR);

if (!class_exists("RiotAPI\LeagueAPICLI\Application"))
	trigger_error("Class autoloading failed. Library installation with Composer is required. Are you using Composer?", E_USER_ERROR);

die((new Application())->run());
