<?php
    require_once "db.php";

$fname = mysqli_real_escape_string($conn,$_POST["name"]);
$lname = mysqli_real_escape_string($conn,$_POST["last"]);
$email = mysqli_real_escape_string($conn,$_POST["email"]);
$mobile = mysqli_real_escape_string($conn,$_POST["number"]);
$gender = mysqli_real_escape_string($conn,$_POST["gender"]);
$city = mysqli_real_escape_string($conn,$_POST["city"]);
$state = mysqli_real_escape_string($conn,$_POST["state"]);
$qualification = mysqli_real_escape_string($conn,$_POST["qualif"]);
$password = mysqli_real_escape_string($conn,$_POST["pword"]);

$sql = "INSERT INTO csc515_project (firstname, lastname, email, mobile, gender, city, state, qualification, password)
VALUES ('$fname','$lname','$email',$mobile,'$gender','$city','$state','$qualification','$password');";
   
if (mysqli_query($conn, $sql)){
    echo '1';
}
else {
    echo '"Error: " . $sql . "" . mysqli_error($conn)';
}

mysqli_close($conn);
//'" . $fname . "', '" . $lname. "', '" . $email . "', '" . $mobile . "', '"  . $gender . "', '" . $city . "', '" . $state . "', '" . $qualif . "', '" . $pass . "')")
?>
