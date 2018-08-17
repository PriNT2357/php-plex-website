<?php 

if (empty($_GET['section'])) {
	echo "Make a selection on the left";
}
else {
	//$library = $server->getLibrary();
	//$section = $library->getSection($_GET['section']);
	//$sectionType = $section->getType();
	
	$sectionInfo = $client->getLibrarySectionContents($_GET['section']);
	$sectionType = $sectionInfo['viewGroup'];
	//print_r($sectionInfo);
	?>
	
	<div class="row">
		<div class="col-12">
			<?php echo "Section: ({$sectionType}) " . urldecode($_GET['section']); ?>
		</div>
	</div>
		<?php
		if (isset($sectionType)) {
			include_once 'content_'.$sectionType . '.php';
		}
		?>
	
	<?php 
//echo "<pre>".print_r($data[0])."</pre>";
}

