<?php
$title = "Exercise 3: Variable, Strings & Operators";
include 'Exer2/header.php'; 
?>

<h1>Form Creation: Create a simple HTML form to collect the
user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], 
You are welcome to my site.”</h1>

<form method="post" action="process.php">
    Name: <input type="text" name="nimi" required> <br><br>
    Email: <input type="email" name="email" required> <br><br>
    DOB: <input type= "date" name="dob"> <br><br>
    select color: <input type= "color" name="color"> <br><br>
    <input type="submit" value="Submit">

</form>






<?php include 'Exer2/footer.php'; ?>




