<html>

<!-- form -->

<?php

$name = $_POST["name"];

// EMAIL VALIDATION

$x = $_POST["email"];
$y = "/^[a-zA-Z0-9]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})+$/";
if(preg_match($y,$x)==1)
{
    echo "correct email id";
    echo "<br>";

} else {
    echo "wrong email";
    echo "<br>";
}

// <!-- MOBILE NUMBER VALIDATION -->

$ph = $_POST["mobile"];
$phv = "/^[0-9]{10}+$/";
if(preg_match($phv,$ph)==1){
    echo "correct phone number";
    echo "<br>";

} else {
    echo "wrong number";
    echo "<br>";
}

// <!-- PASSWORD VALIDATION -->

$password = $_POST["password"];
// 1special character, 1digit, 1uppercase & 1lowercase letter, 8 character of total length is must
$passwordCheck = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";

if(preg_match($passwordCheck,$password)==1){
    echo "correct password";
} else {
    echo "wrong password";
}
?>
</html>