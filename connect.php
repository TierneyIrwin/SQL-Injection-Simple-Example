<?php
$dsn = 'mysql:dbname=project3_partA;host=0.0.0.0';
$user= 'newUser';
$pass = 'n3wus3rp4ssw0rd';
$pdo = new PDO($dsn,$user,$pass);
function getAll($db)
{
	return$db->query('SELECT * FROM Cats WHERE id =' . $_GET['id']);
}
foreach(getAll($pdo) as $row)
{
	echo "<li>".$row['name']." - ".$row['cuteness']."</li>";
}
?>
