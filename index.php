<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div id="app">
		<h3>Basic Calculator</h3>
		<form method="GET">
			<input type="text" name="num1" placeholder="first value"><br>
			<input type="text" name="num2" placeholder="second value"><br><br>
			<select name="operator">
				<option>None</option>
				<option>Add</option>
				<option>Minus</option>
				<option>Multiply</option>
				<option>Divide</option>
			</select>
			<br>
			<button name="submit" value="submit" type="submit">Calculate</button>
		</form>

		<p>The answer is: <span id="result"></span> </p>

	</div>
	
	<?php include 'main.php' ?>;

	 
</body>
</html>

