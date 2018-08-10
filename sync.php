<?php
if (empty($_GET['key']) || empty($_GET['sectionkey'])) {
	header("HTTP/1.0 404 Not Found");
	exit;
}

require_once 'config.php';
require_once 'NiceSSH.php';

$section = $server->getLibrary()->getSection($_GET['sectionkey']);
$sectionType = $section->getType();

if ($sectionType === "movie") {
	$movie = $section->getMovie($_GET['key']);
	$filename = array_pop(explode("/", $movie->getMedia()->getFiles()[0]->getFile()));
	$size = $movie->getMedia()->getFiles()[0]->getSize();
}

/* $host, 
 * $port = 22, 
 * $fingerprint = 'xxxxxxxx', 
 * $user = 'username', 
 * $pubkeyfile = '/home/username/.ssh/id_rsa.pub', 
 * $prikeyfile = '/home/username/.ssh/id_rsa', 
 * $passphrase = null
 */
try {
	$ssh = new NiceSSH(
		$remoteSync['from']['host'], 
		$remoteSync['from']['port'], 
		$remoteSync['from']['fingerprint'],
		$remoteSync['from']['user'],
		$remoteSync['from']['pubkeyfile'],
		$remoteSync['from']['prikeyfile'],
		$remoteSync['from']['passphrase']
		);
}
catch (Exception $ex) {
	echo $ex->getMessage();
}

