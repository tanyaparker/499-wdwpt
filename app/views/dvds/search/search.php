<?php
include 'form.css';
?>

<!doctype html>
<html>
<head>
	<title>DVD Search</title>
</head>

<body>

<form method="get" action="/dvds">
	<h1><font face="Helvetica">DVD Search</font></h1>
	<table>
	<tr>
		<td><font face="Helvetica"><b>DVD Title:</b></font></td>
		<td><input type="text" name="title" /></td>
	</tr>
	<tr>
		<td><font face="Helvetica"><b>Genre:</b></font></td>
		<td><select>
			<option value="">All</option>
		</select></td>
	</tr>
	<tr>
		<td><font face="Helvetica"><b>Rating:</b></font></td>
		<td><select>
			<option value="">All</option>
		</select></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit"  value="Search" /></td>
	</tr>
</form>


</body>
</html>