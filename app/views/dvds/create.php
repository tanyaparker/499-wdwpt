<?php require 'form.css'; ?>
<!doctype html>
<html>
<head>
	<title>DVD Insert</title>
</head>

<body>

<form method="get" action="/dvds">
	<h1><font face="Helvetica">DVD Insert</font></h1>
	<table>
	<tr>
		<td><font face="Helvetica"><b>DVD Title:</b></font></td>
		<td><input type="text" name="title" /></td>
	</tr>
	<tr>
		<td><font face="Helvetica"><b>Genre:</b></font></td>
		<td><select name="genre_id">
			<option value="All">All</option>
			<?php foreach ($genres as $genre) :
				echo "<option value='$genre->id'>$genre->genre_name</option>";
			endforeach; ?>
		</select></td>
	</tr>
	<tr>
		<td><font face="Helvetica"><b>Rating:</b></font></td>
		<td><select name="rating_id">
			<option value="All">All</option>
			<?php foreach ($ratings as $rating) :
				echo "<option value='$rating->id'>$rating->rating_name</option>";
			endforeach; ?>
		</select></td>
	</tr>
	<tr>
		<td><font face="Helvetica"><b>Label:</b></font></td>
		<td><select name="label_id">
			<option value="All">All</option>
			<?php foreach ($labels as $label) :
				echo "<option value='$label->id'>$label->label_name</option>";
			endforeach; ?>
		</select></td>
	</tr>
	<tr>
		<td><font face="Helvetica"><b>Sound:</b></font></td>
		<td><select name="sound_id">
			<option value="All">All</option>
			<?php foreach ($sounds as $sound) :
				echo "<option value='$sound->id'>$sound->sound_name</option>";
			endforeach; ?>
		</select></td>
	</tr>
	<tr>
		<td><font face="Helvetica"><b>Format:</b></font></td>
		<td><select name="format_id">
			<option value="All">All</option>
			<?php foreach ($formats as $format) :
				echo "<option value='$format->id'>$format->format_name</option>";
			endforeach; ?>
		</select></td>
	</tr>

	<tr>
		<td></td>
		<td><input type="submit"  value="Submit" /></td>
	</tr>
</form>


</body>
</html>