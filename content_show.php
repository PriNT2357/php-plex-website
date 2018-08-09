<?php 
	$data = $section->getAllShows();
?>
<div class="row">
	  <div class="col-md-1">#</div>
	  <div class="col-md-3">Title (year)</div>
	  <div class="col-md-1">Seasons</div>
	  <div class="col-md-1">Episodes</div>
	  <div class="col-md"  >Summary</div>
</div>
<?php foreach ($data as $i => $item) { ?>
	<div class="row">
		  <div class="col-md-1"><?php echo $i; ?></div>
		  <div class="col-md-3"><?php echo htmlspecialchars($item->getTitle() . " (" . $item->getYear() . ")"); ?></div>
		  <div class="col-md-1"><?php echo htmlspecialchars(count($item->getSeasons())); ?></div>
		  <div class="col-md-1"><?php echo htmlspecialchars(count($item->getAllEpisodes())); ?></div>
		  <div class="col-md"  ><?php echo htmlspecialchars(substr($item->getSummary(), 0, 50)). "..."; ?></div>
	</div>
<?php } ?>
