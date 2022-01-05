<!-- for validating user password -->
<!-- <?php
$pass = "therazzishere@ORS";
$converted = hash('sha256', $pass);
$pass1 = "therazzishere@ORS";
$converted1 = hash('sha256', $pass1);
if (strcmp($converted, $converted1) == 0) {
  echo "Correct Password";
} else {
  echo "Incorrect Password";
}
?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="images/ors-logo1.png" type="image/x-icon" />
    <link rel="stylesheet" href="css/forget.css" />
    <title>Reset Password</title>
  </head>

  <body>
    <header>
      <?php
    include('header.php');
    ?>
    </header>
    <div class="container">
      <img src="images/forgot_password.svg" alt="" />
      <form action="forget.php" method="post">
        <div class="forget">
          <h1>Find Your Account</h1>
          <h3>Enter your phone number or email</h3>
          <input
            type="text"
            name="username"
            id="username"
            placeholder="Enter Your Phone or Email"
            class="Input"
          />
          <button type="submit" name="mybtn" class="mybtn1">Search</button>
          <a href="login.php" style="font-size: 14px; text-decoration: none"
            >Sign In?</a
          >
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
