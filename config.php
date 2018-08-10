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

$remoteSync = array(
	//-- this is where the plex data is stored
	'from' => array(
		"host" => "192.168.2.80",
		"port" => 22,
		"fingerprint" => "fingerprint",
		"username" => "",
		"password" => "",
		"keyfile" => "",
		"path" => ""
	),
	//-- this is where the data will be pushed to
	'to' => array()
);


$plex = new Plex();

$plex->registerServers($servers);
$server = $plex->getServer('dockerserver');
