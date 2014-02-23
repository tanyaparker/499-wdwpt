<?php require_once 'box.css'; ?>

<!doctype html>
<html>
<head>
	<title>DVD Results</title>
</head>

<body>
	<h1>Your search returned: </h1>

	<?php foreach($dvds as $dvd) : ?>
		<div class="gradientBox">
			<b><u><?php echo $dvd->title; ?><br /></b></u>
			Rating: <?php echo $dvd->rating_name; ?><br />
			Genre: <?php echo $dvd->genre_name; ?><br />
			Label: <?php echo $dvd->label_name; ?><br />
			Sound: <?php echo $dvd->sound_name; ?><br />
			Format: <?php echo $dvd->format_name; ?><br />
			Release Data: <?php echo $dvd->release_date; ?><br />
		</div>
	<?php endforeach; ?>


</body>
</html>