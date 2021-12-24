<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                <input type="text" name="username" id="username" placeholder="Enter Your Username" class="Input">
                <input type="password" name="password" id="password" placeholder="Enter Your password" class="Input">
                <button type="submit" name="mybtn" class="mybtn1">Login</button>
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