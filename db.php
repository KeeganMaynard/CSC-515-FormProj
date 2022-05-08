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
?>