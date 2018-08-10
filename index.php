<?php
require_once 'config.php';
?>
<html>
<head>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="theme/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="container">
		
		<div class="row">
			<div class="col-1">
				<?php require_once 'nav.php'; ?>
			</div>
			<div class="col">
				<?php include_once 'content.php'; ?>
			</div>
		</div>

	</div>

</body>
</html>
