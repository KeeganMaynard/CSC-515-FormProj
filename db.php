<?php
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = "mysql";
$conn = mysqli_connect($servername, $username, $password, "$dbname");
if(!$conn)
{
	die('Could not Connect MySQL Server:' .mysql_error());
}

$check = "SHOW TABLES LIKE 'member_registration'";

if(mysqli_query($conn, $check))
{
	//Table already created - do nothing
}
else
{
	//sql to create table
	$sql = "CREATE TABLE member_registration(
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(255) NOT NULL,
	lastname VARCHAR(255) NOT NULL,
	email VARCHAR(255),
	mobile INT(20),
	gender VARCHAR(255),
	city VARCHAR(255),
	state VARCHAR(255),
	qualification VARCHAR(255),
	password VARCHAR(255)
	)";
	
	if(!mysqli_query($conn, $sql))
	{
		echo "Error creating table: ".mysqli_error($conn);
	}
}

?>