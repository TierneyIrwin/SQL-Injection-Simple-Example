<?php
/*
	PHP Code for PDO Database access. The first few variables are for initializing the PDO access. After that the function getInfo queries the database for the primary key id equal to the one given in the form in index.php. The foreach loop then displays the information.

	Author:TierneyIrwin
	Date:3/19/17
	Version:1.0

*/
	$dsn = 'mysql:dbname=project3_partA;host=0.0.0.0';
	$user= 'newUser';
	$pass = 'n3wus3rp4ssw0rd';
	$pdo = new PDO($dsn,$user,$pass);
	function get($db)
	{
		return$db->query('SELECT * FROM Cats WHERE id =' . $_GET['id']);
	}
	foreach(get($pdo) as $row)
	{
		echo "<li>".$row['name']." - ".$row['cuteness']."</li>";
	}
?>
