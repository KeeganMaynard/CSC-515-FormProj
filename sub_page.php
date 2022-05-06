
<?php
	$data = [];
	
	//Variable declaration
	$fname = $_POST["name"];
	$lname = $_POST["last"];
	$email = $_POST["email"];
	$mobile = $_POST["number"];
	$gender = $_POST["gender"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$qualif = $_POST["qualif"];
	$pass = $_POST["passW"];

	//Regex variable declarations
	$nameRegex = "/^[a-zA-Z'\s]{1,30}$/";
	$emailRegex = "/^(?!.{41})[a-z0-9]+(?:\.[a-z0-9]+)*@[a-z0-9-]+(?:\.[a-z0-9-]+)*\.[a-zA-Z]{2,6}$/";
	$mobileRegex = "/^(?=.*\d)/";
	$stringRegex = "/^[a-zA-Z]/";
	$passRegex = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]){3,10}/";

	if(preg_match($nameRegex, $fname)){
		echo $fname;
	}
	else
	{
		echo "Invalid";
	}
	
	if(preg_match($nameRegex, $lname))
	{
		echo $lname;
	}
	else
	{
		echo "Invalid";
	}
	
	if(preg_match($emailRegex, $email))
	{
		echo $email;
	}
	else
	{
		echo "Invalid";
	}
	
	if(preg_match($mobileRegex, $mobile))
	{
		echo $mobile;
	}
	else
	{
		echo "Invalid";
	}
	
	if(preg_match($stringRegex, $gender))
	{
		echo $gender;
	}
	else
	{
		echo "Invalid";
	}
	
	if(preg_match($stringRegex, $city))
	{
		echo $city;
	}
	else
	{
		echo "Invalid";
	}
	
	if(preg_match($stringRegex, $state))
	{
		echo $state;
	}
	else
	{
		echo "Invalid";
	}
	
	if(preg_match($stringRegex, $qualif))
	{
		echo $qualif;
	}
	else
	{
		echo "Invalid";
	}
	
	if(preg_match($passRegex, $pass))
	{
		echo $pass;
	}
	else
	{
		echo "Invalid";
	}
	
	$data['message'] = 'In the PHP';

	echo json_encode($data);
?>