<?php
$flag = false;
include('conn.php');
if (isset($_POST['subbtn'])) {
  $name = $_POST['uname'];
  $password = hash('sha256', $_POST['passwd']);
  $phone = $_POST['pno'];
  $email = $_POST['uemail'];

  $sql = "INSERT INTO `members`(`name`, `password`, `phone`, `email`, `dt`) VALUES ('$name','$password','$phone','$email',current_timestamp())";

  if ($conn->query($sql)) {
    header("Location: http://localhost/OnlineRecharge/login.php");
    die;
  } else {
    $flag = true;
  }
}
?>

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
      <input type="password" placeholder="Enter Your Password" name="passwd" id="passwd1" class="Input" />
      <input type="password" placeholder="Enter Your Password Again" name="passwd" id="passwd2" class="Input" />
      <p id="pass_validater" style="color: red; font-size:14px; margin:0; display:none">Password doesn't match</p>
      <input type="email" placeholder="Enter Your Email" name="uemail" id="uemail" class="Input" />
      <label for="accept" style="font-size: 14px;"><input type="checkbox" name="accept" id="accept" required> I hereby accept all the <a href="terms.php" style="text-decoration: none;">terms & conditions</a>.</label>
      <button type="submit" class="subbtn" name="subbtn" onclick="validate_password()">
        Sign Up
      </button>
      <?php
      if ($flag) {
        echo "
          <p style='color:red; font-size:14px'>Can not sign up try again</p>
        ";
      }
      ?>
      <a href="login.php" style="font-size: 14px; text-decoration: none; display: block; text-align: center;">Already have a account? Sign In</a>
  </div>
  </form>
  </div>
  <footer>
    <?php
    include('footer.php');
    ?>
  </footer>

  <script>
    function validate_password() {
      var pass1 = document.getElementById("passwd1").value;
      var pass2 = document.getElementById("passwd2").value;

      if (pass1 != pass2) {
        document.getElementById("pass_validater").style.display = "flex";
        <?php
        $flag = true;
        ?>
      }
    }
  </script>
</body>

</html>