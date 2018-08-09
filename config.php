<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);

require_once 'Plex/Plex.php';

$servers = array(
	'dockerserver' => array(
		"address" => "<SERVER IP ADDRESS>",
		"token" => "<PLEX AUTH TOKEN>"
	)
);


$plex = new Plex();

$plex->registerServers($servers);
$server = $plex->getServer('dockerserver');
