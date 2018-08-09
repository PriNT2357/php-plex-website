<?php

require_once 'config.php';

if (empty($_GET['key']) || empty($_GET['sectionkey'])) {
	header("HTTP/1.0 404 Not Found");
	exit;
}


$section = $server->getLibrary()->getSection($_GET['sectionkey']);
$sectionType = $section->getType();

if ($sectionType === "movie") {
	$movie = $section->getMovie($_GET['key']);
	$filename = array_pop(explode("/", $movie->getMedia()->getFiles()[0]->getFile()));
	$size = $movie->getMedia()->getFiles()[0]->getSize();
}
$url = "//" . $server->getAddress() . ":" . $server->getPort();
$url .= $movie->getMedia()->getFiles()[0]->getKey();

header("x-plex-token: oBKsRxbkfxatfHyyzoXq");
header("location: " . $url);
header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header("Content-Disposition: attachment; filename='" . $filename . "'"); 
header('Content-Transfer-Encoding: binary');
header('Connection: Keep-Alive');
//~ header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
//~ header('Pragma: public');
header('Content-Length: ' . $size);
//~ echo "<pre>".print_r($movie, true)."</pre>";
//~ echo $url;
//~ echo "<br>";
//~ echo $filename;


//~ toto: get file using curl instead so filename isn't always file.mkv
