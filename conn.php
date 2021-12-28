<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "testing";


$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("Connecting failed due to " . mysqli_connect_error());
}



// function for checking correct username & password 
function check($flag)
{
    if ($flag == true) {
        echo "<p style='color: red;'>Incorrect username/password.</p>";
    }
}
