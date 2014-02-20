<!doctype html>
<html>
<head>
	<title>DVD Results</title>
</head>

<body>
	<h1>Your search returned: </h1>

	<?php foreach($dvds as $dvd) : ?>
		<div class="dvd">
			<h4>
				<?php echo $dvd->title; ?> by
			</h4>
			<p>Rating: <?php echo $dvd->rating; ?></p>
			<p>Genre: <?php echo $dvd->genre; ?></p>
			<p>Label: <?php echo $dvd->label; ?></p>
			<p>Sound: <?php echo $dvd->sound; ?></p>
			<p>Format: <?php echo $dvd->format; ?></p>
			<p>Release Data: <?php echo $dvd->release_date; ?></p>
		</div>
	<?php endforeach; ?>


</body>
</html>