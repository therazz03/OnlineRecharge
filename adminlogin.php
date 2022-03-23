<?php
session_start();
include('conn.php');
$flag = false;
if (isset($_POST['mybtn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * From `admin` where username= '$username' and password = '$password'";

    if (mysqli_num_rows($conn->query($sql)) > 0) {
        $sql = "SELECT * FROM `admin` where username= '$username' and password = '$password'";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $row["aname"];


        header("Location: http://localhost/OnlineRecharge/admin_dashboard.php");
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
    <title>Admin Login</title>
</head>

<body>
    <header>
        <?php
        include('header.php');
        ?>
    </header>
    <div class="container">
        <img src="images/login.svg" alt="">
        <form action="adminlogin.php" method="post">
            <div class="login">
                <h1>Admin Sign In</h1>
                <h3>to continue with your account</h3>
                <?php
                incorrect_user_check($flag);
                ?>
                <input type="text" name="username" id="phone" placeholder="Enter Your Username" class="Input">
                <input type="password" name="password" id="password" placeholder="Enter Your password" class="Input">
                <button type="submit" name="mybtn" class="mybtn1">Sign In</button>
                <a href="login.php" style="font-size: 14px; text-decoration: none">User Login</a>
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