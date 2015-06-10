<!-- Author : Samarth Paboowal -->
<!-- Date Created : 10th June, 2015 -->

<?php

/*  name of your host
	phpmyadmin username
	phpmyadmin password
	database name
*/

$db_host = "localhost";
$db_username = "your_username";
$db_password = "your_password";
$db_name = "database_name";

// Connecting mysql with php script and selecting database
@mysql_connect("$db_host", "$db_username", "$db_password") or die ("Cannot connect to MySQL");
@mysql_select_db("$db_name") or die ("No database named $db_name");

// Updating views everytime page is open
mysql_query("UPDATE viewcounter SET `views` = `views` + 1 WHERE id = 1");
$sql = mysql_query("SELECT * FROM viewcounter WHERE id = 1");

// Fetching mysql array of table row
while($info = mysql_fetch_array($sql)){
	$views = $info["views"];
}

?>

<!-- sample html to display views -->
<html>
<head>
	<title>Count Views</title>
</head>
<body bgcolor = "red">
	<br><br><br><br><br><br><br><br><br><br>
	<h1 align = "center">VIEWS : <?php echo $views ?></h1>
</body>
</html>