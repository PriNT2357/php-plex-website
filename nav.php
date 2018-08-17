<?php

//$sections = $server->getLibrary()->getSections();
$sections = $client->getLibrarySections();
//print_r($sections);
?>
<div class="row">
	<a href="/plex">Home</a>
</div>
<?php
foreach($sections['Directory'] as $section) {
	?>
	<div class="row">
		<a href="?section=<?php echo urlencode($section['key']); ?>"><?php echo $section['title']; ?></a>
	</div>
<?php } ?>
