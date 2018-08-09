<?php

$sections = $server->getLibrary()->getSections();

?>
<div class="row">
	<a href="/plex">Home</a>
</div>
<?php
foreach($sections as $section) {
	?>
	<div class="row">
		<a href="?section=<?php echo urlencode($section->getTitle()); ?>"><?php echo $section->getTitle(); ?></a>
	</div>
<?php } ?>
