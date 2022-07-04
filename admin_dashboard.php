<?php
session_start();
include("conn.php");
if (!isset($_SESSION['username'])) {
  header("Location: http://localhost/OnlineRecharge/adminlogin.php");
}

if (isset($_POST['subBtn'])) {
  $pr = $_POST['planRate'];
  $pdesc = $_POST['planDesc'];
  $ono = $_POST['oNo'];

  $sql = "INSERT INTO `plans`(`pr`, `pdesc`, `ono`) VALUES ('$pr','$pdesc','$ono')";
  $conn->query($sql);
}

if (isset($_POST['delBtn'])) {
  $pno = $_POST['planNo'];

  $sql = "DELETE FROM `plans` WHERE `plans`.`pno` = '$pno'";
  $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="shortcut icon" href="images/ors-logo1.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/admin_dashboard.css" />
  <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <title>Dashboard: Admin</title>
</head>

<body>
  <?php
  include('header.php');
  ?>

  <div class="Container">
    <h1>Admin Dashboard</h1>
    <div class="controls ">
      <form action="admin_dashboard.php" method="post">
        <table class="table caption-top">
          <caption>Add or Remove Plan</caption>
          <thead>
            <td>Action</td>
            <td>Value</td>
          </thead>
          <tbody>
            <tr>
              <td>Add Plan</td>
              <td><input type="text" placeholder="Enter Plan Rate" name="planRate"></td>
              <td><input type="text" placeholder="Enter Plan Description" name="planDesc"></td>
              <td><input type="text" placeholder="Enter Operator No" name="oNo"></td>
              <td><button type="submit" class="btn btn-outline-dark" name="subBtn">Add Plan</button></td>
            </tr>
            <tr>
              <td>Remove Plan</td>
              <td><input type="text" placeholder="Enter Plan No" name="planNo"></td>
              <td colspan="3"><button type="submit" class="btn btn-outline-dark" name="delBtn">Remove Plan</button></td>
            </tr>
          </tbody>
        </table>
        <table class="table table-bordered caption-top">
          <caption>Queries for Support</caption>
          <thead>
            <td>S No.</td>
            <td>Name</td>
            <td>Email</td>
            <td>Query</td>
            <td>Date and Time</td>
          </thead>
          <tbody>
            <?php
            $sql = "select * from `support`";
            $result = $conn->query($sql);
            while ($row = mysqli_fetch_assoc($result)) {
              echo "
                <tr>
                  <td> " . $row['sno'] . " </td>
                  <td> " . $row['name'] . " </td>
                  <td> " . $row['email'] . " </td>
                  <td> " . $row['concern'] . " </td>
                  <td> " . $row['dt'] . " </td>
                </tr>
              ";
            }
            ?>
          </tbody>
        </table>
      </form>
    </div>
  </div>

  <?php
  include('footer.php');
  ?>
</body>

</html>