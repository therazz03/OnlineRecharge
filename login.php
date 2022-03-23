<?php
session_start();
include('conn.php');
$flag = false;
if (isset($_POST['mybtn'])) {
    $phone = $_POST['phone'];
    $password = hash('sha256', $_POST['password']);

    $sql = "SELECT * From `members` where phone= '$phone' and password = '$password'";

    if (mysqli_num_rows($conn->query($sql)) > 0) {
        $sql = "SELECT name, phone, email, balance FROM members where phone= '$phone' and password = '$password'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        $_SESSION['username'] = $row["name"];
        $_SESSION['phone'] = $row["phone"];
        $_SESSION['email'] = $row["email"];
        $_SESSION['balance'] = $row["balance"];


        header("Location: http://localhost/OnlineRecharge/dashboard.php");
        die;



        // if ($result->num_rows > 0) {
        //     while ($row = $result->fetch_assoc()) {
        //         echo "name: " . $row["name"] . " - phone: " . $row["phone"] . " -email " . $row["email"] . "<br>";
        //     }
        // }
    } else {
        $flag = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/ors-logo1.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <header>
        <?php
        include('header.php');
        ?>
    </header>
    <div class="container">
        <img src="images/login.svg" alt="">
        <form action="login.php" method="post">
            <div class="login">
                <h1>Sign In</h1>
                <h3>to continue with your account</h3>
                <?php
                incorrect_user_check($flag);
                ?>
                <input type="text" name="phone" id="phone" placeholder="Enter Your Phone No" class="Input">
                <input type="password" name="password" id="password" placeholder="Enter Your password" class="Input">
                <button type="submit" name="mybtn" class="mybtn1">Sign In</button>
                <a href="adminlogin.php" style="font-size: 14px; text-decoration: none">Admin Login</a>
                <a href="signup.php" style="font-size: 14px; text-decoration: none">Don't have a account? Sign Up</a>
            </div>
        </form>
    </div>
    <footer>
        <?php
        include('footer.php');
        ?>
    </footer>
</body>

</html>