<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "onlinerecharge";


$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("Connecting failed due to " . mysqli_connect_error());
}


// function for checking correct username & password 
function incorrect_user_check($flag)
{
    if ($flag == true) {
        echo "<p style='color: red;'>Incorrect username/password.</p>";
    }
}

function successfully_submit_responce($flag)
{
    echo "
                <p style='color:green; font-size:14px'>Successfully Submitted</p>
                ";
}
