<?php 
	$data = $section->getAllMovies();
	//echo "<pre>".print_r($data[0])."</pre>";
?>
<div class="row">
	  <div class="col-md-1">#</div>
	  <div class="col-md-3">Title (year)</div>
	  <div class="col-md-1">Resolution</div>
	  <div class="col-md-1">GB</div>
	  <div class="col-md-1">File</div>
	  <div class="col-md"  >Summary</div>
</div>
<?php foreach ($data as $i => $item) { ?>
	<div class="row">
		<div class="col-md-1"><?php echo $i; ?></div>
		<div class="col-md-3"><?php echo htmlspecialchars($item->getTitle() . " (" . $item->getYear() . ")"); ?></div>
		<div class="col-md-1"><?php echo htmlspecialchars($item->getMedia()->getVideoResolution()); ?></div>
		<div class="col-md-1"><?php echo htmlspecialchars(round($item->getMedia()->getFiles()[0]->getSize()/1024/1024/1024, 2)); ?></div>
		<div class="col-md-3">
			<a target="_blank" href="//<?php echo htmlspecialchars($server->getAddress() . ":" . $server->getPort() . $item->getMedia()->getFiles()[0]->getKey()); ?>">Direct</a> - 
			<a target="_blank" href="download.php?sectionkey=<?php echo urlencode($section->getTitle()); ?>&key=<?php echo urlencode($item->getKey()); ?>">Via DL Page</a>
		</div>
		<div class="col-md"  ><?php echo htmlspecialchars(substr($item->getSummary(), 0, 50)). "..."; ?></div>
	</div>
<?php 
if ($i > 10) break;
} ?>
