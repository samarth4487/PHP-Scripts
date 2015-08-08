<?php

if(isset($_POST['text']) && isset($_POST['replace']) && isset($_POST['replace-with'])){

	$text = $_POST['text'];
	$replace = $_POST['replace'];
	$replace_with = $_POST['replace-with'];

	$search_length = strlen($replace);
	$offset = 0;

	if(!empty($text) && !empty($replace) && !empty($replace_with)){
		while($strpos = strpos($text,$replace,$offset)){
			$text = substr_replace($text, $replace_with, $strpos, $search_length);
			$offset = $offset + $search_length;
		}

		echo '<h1>' . $text . '</h1>';
	}

	else{
		echo 'Please fill in all the details!';
	}
}

?>



<!DOCTYPE html>

<html>
	<head>
		<title>Find and Replace</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<div class="container">
			<h1 class="heading">Find and Replace Application - ( HTML, CSS, PHP )</h1>
			<hr><br><br><br>

			<form method="POST" action="a.php" class="form">
				<br><br>
				<label for="text"><strong><em>Enter the Text</em></strong></label><br>
				<textarea id="text" rows="6" cols="30" name="text"></textarea><br><br>

				<label for="replace"><strong><em>Text to Replace</em></strong></label><br>
				<input type="text" id="replace" name="replace"><br><br>

				<label for="replace-with"><strong><em>Replace With</em></strong></label><br>
				<input type="text" id="replace-with" name="replace-with"><br><br>

				<input type="submit" value="Find and Replace">
				<br><br>
			</form>

			<br><br><br><br><br><hr>
			<strong><em>Copyright &copy; 2015</em></strong>
		</div>
	</body>
</html>