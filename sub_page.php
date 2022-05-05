<?php
    require_once "db.php";

$fname = mysqli_real_escape_string($conn,$_POST["firstname"]);
$lname = mysqli_real_escape_string($conn,$_POST["lastname"]);
$email = mysqli_real_escape_string($conn,$_POST["email"]);
$mobile = mysqli_real_escape_string($conn,$_POST["mobile"]);
$gender = mysqli_real_escape_string($conn,$_POST["gender"]);
$city = mysqli_real_escape_string($conn,$_POST["city"]);
$state = mysqli_real_escape_string($conn,$_POST["state"]);
$qualif = mysqli_real_escape_string($conn,$_POST["qualification"]);
$pass = mysqli_real_escape_string($conn,$_POST["password"]);

if (mysqli_query($conn,"INSERT INTO csc515-project (firstname, lastname, email, mobile, gender,
 city, state, qualification, password)
VALUES ('" . $fname . "', '" . $lname. "', '" . $email . "', '" . $mobile . "', '"  . $gender . "', '" . $city . "', '" . $state . "', '" . $qualif . "', '" . $pass . "')")){
    echo '1';
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}

mysqli_close($conn);
?>
