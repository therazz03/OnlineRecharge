<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="images/ors-logo1.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/signup.css" />
  <title>Sign Up</title>
</head>

<body>
  <header>
    <?php
    include('header.php');
    ?>
  </header>
  <div class="form-container">
    <img src="images/sign-up.svg" alt="">
    <form action="signup.php" method="post">
      <div class="signup"></div>

      <h1 style="text-align: center;">Sign Up</h1>
      <h3 style="text-align: center; font-size: 20px;">to continue with our site</h3>
      <input type="text" placeholder="Enter Your Name" name="uname" id="uname" class="Input" />
      <input type="text" placeholder="Enter Your Phone Number" name="pno" id="pno" class="Input" />
      <input type="password" placeholder="Enter Your Password" name="passwd" id="passwd" class="Input" />
      <input type="password" placeholder="Enter Your Password Again" name="passwd" id="passwd" class="Input" />
      <input type="email" placeholder="Enter Your Email" name="uemail" id="uemail" class="Input" />
      <label for="accept" style="font-size: 14px;"><input type="checkbox" name="accept" id="accept" required> I hereby accept all the <a href="terms.php" style="text-decoration: none;">terms & conditions</a>.</label>
      <button type="submit" class="subbtn" name="subbtm">
        Sign Up
      </button>
      <a href="login.php" style="font-size: 14px; text-decoration: none; display: block; text-align: center;">Already have a account? Sign In</a>
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