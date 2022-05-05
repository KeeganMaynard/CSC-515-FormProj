
<?php
$errors = [];
$data = [];

$fname = $_POST["name"];
$lname = $_POST["last"];
$email = $_POST["email"];
$mobile = $_POST["number"];
$gender = $_POST["gender"];
$city = $_POST["city"];
$state = $_POST["state"];
$qualif = $_POST["qualif"];
$pass = $_POST["passW"];

$data['message'] = 'In the PHP';

echo json_encode($data);
?>