<link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
<script src="bootstrap/bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/bootstrap/js/jquery.min.js"></script>

<style>
  .header {
    padding: 0.7rem;
    font-size: 1.3rem;
    background: whitesmoke;
  }

  .Link:hover {
    text-shadow: 1px 1px 3px rgb(189, 189, 189);
  }

  .mybtn {
    border: 2px solid black;
    margin-left: 10px;
    border-radius: 7px;
  }

  .mybtn:hover {
    background-color: black;
    color: white;
    border: 2px solid white;
  }
</style>

<body>
  <div class="header">
    <nav class="navbar navbar-expand-lg navbar-light text-primary" style="background: transparent">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="images/ors-logo1.png" alt="logo" height="70px" width="70px" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link Link" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link Link" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="recharge.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Recharge
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background: whitesmoke;">
                <li><a class="dropdown-item" href="recharge.php">Mobile Recharge</a></li>
                <li><a class="dropdown-item" href="#">DTH Reacharge</a></li>
                <li><a class="dropdown-item" href="#">Pay Bills</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link Link" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <a href="login.php">
            <button class="btn mybtn">Sign In</button></a>
          <a href="signup.php">
            <button class="btn mybtn">Sign Up</button>
          </a>
        </div>
      </div>
    </nav>
  </div>

</body>