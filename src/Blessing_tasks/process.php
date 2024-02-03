<?php
//what to do with form data
$title = "Your information";
include 'Exer2/header.php';
$nimi = $_POST ["nimi"];
$email = $_POST ["email"];

echo "Hello "  . $nimi . " <br>Your email id is: "  . $email;

include 'Exer2/footer.php';
?>