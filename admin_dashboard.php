<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="images/ors-logo1.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/admin_dashboard.css" />
  <title>Dashboard: Admin</title>
</head>

<body>
  <?php
  include('header.php');
  ?>

  <div class="container">
    <h1>Admin Dashboard</h1>
    <div class="controls">
      <form action="admin_dashboard.php" method="post">
        <select name="table" id="selectTable">
          <option value="members">Members</option>
          <option value="support">Support</option>
          <option value="operator">Operator</option>
          <option value="plans">Plans</option>
          <option value="transaction">Transaction</option>
        </select>
        <select name="mod" id="mod">
          <option value="INSERT">INSERT</option>
          <option value="MODIFY">MODIFY</option>
          <option value="DELETE">DELETE</option>
          <option value="TRUNCATE">TRUNCATE</option>
          <option value="DROP">DROP</option>
        </select>
      </form>
    </div>
  </div>

  <?php
  include('footer.php');
  ?>
</body>

</html>