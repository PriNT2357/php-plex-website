<?php 
	//$data = $section->getAllMovies();
	$data = $sectionInfo['Video'];
	echo "<pre>".print_r($data[5], true)."</pre>";
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
	<?php $filename = array_pop(explode("/", $item['Media']['Part']['file']));?>
	<?php //$linktofile = $server->getAddress() . ":" . $server->getPort() . $item->getMedia()->getFiles()[0]->getKey();?>
	<?php //$synckey = $item->getKey(); ?>
	<div class="row hoverable">
		<div class="col-md-1"><?php echo $i; ?></div>
		<div class="col-md-3"><?php echo htmlspecialchars($item['title'] . " (" . $item['year'] . ")"); ?></div>
		<div class="col-md-1"><?php echo htmlspecialchars($item['Media']['videoResolution']); ?></div>
		<div class="col-md-1"><?php echo htmlspecialchars(round($item['Media']['Part']['size']/1024/1024/1024, 2)); ?></div>
		<div class="col-md-1">
			<a href="//<?php echo htmlspecialchars($filename); ?>">DL</a>
		</div>
		<div class="col-md"  ><?php echo htmlspecialchars(substr($item['summary'], 0, 50)). "..."; ?></div>
	</div>
<?php 
if ($i > 50) break;
} ?>
