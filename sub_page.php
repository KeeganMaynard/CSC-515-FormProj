
<?php
	$success = true;
	$data = "Form input successful";
	
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

	if(!preg_match($nameRegex, $fname)){
		$success = false;
	}
	
	if(!preg_match($nameRegex, $lname))
	{
		$success = false;
	}
	
	if(!preg_match($emailRegex, $email))
	{
		$success = false;
	}
	
	if(!preg_match($mobileRegex, $mobile))
	{
		$success = false;
	}
	
	if(!preg_match($stringRegex, $gender))
	{
		$success = false;
	}
	
	if(!preg_match($stringRegex, $city))
	{
		$success = false;
	}
	
	if(!preg_match($stringRegex, $state))
	{
		$success = false;
	}
	
	if(!preg_match($stringRegex, $qualif))
	{
		$success = false;
	}
	
	if(!preg_match($passRegex, $pass))
	{
		$succes = false;
	}
	
	if($success == false)
	{
		$data = "Form input unsuccessful";
	}
	else
	{
		//connect to the database and insert values
		require_once "db.php";
		
		$firstname = mysqli_real_escape_string($conn,$fname);
		$lastname = mysqli_real_escape_string($conn, $lname);
		$email = mysqli_real_escape_string($conn, $email);
		$mobile = mysqli_real_escape_string($conn, $mobile);
		$gender = mysqli_real_escape_string($conn, $gender);
		$city = mysqli_real_escape_string($conn, $city);
		$state = mysqli_real_escape_string($conn, $state);
		$qualification = mysqli_real_escape_string($conn, $qualif);
		$password = mysqli_real_escape_string($conn, $pass);
		
		$sql = "INSERT INTO member_registration (firstname, lastname, email, mobile, gender, city, state, qualification, password)
		VALUES ('$firstname', '$lastname', '$email', '$mobile', '$gender', '$city', '$state', '$qualification', '$password');";
		
		if(!mysqli_query($conn, $sql))
		{
			$data = '"Error: " .$sql ."". mysqli_error($conn)';
		}
		
		mysqli_close($conn);
	}

	echo $data;
?>