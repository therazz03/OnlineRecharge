<?php
session_start();
include("conn.php");
if (!isset($_SESSION['username'])) {
    header("Location: http://localhost/OnlineRecharge/login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/ors-logo1.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Dashboard</title>
</head>

<body>
    <header>
        <?php
        include('header.php');
        ?>
    </header>
    <div class="dashboard">
        <div class="user">
            <img src="images/male_avatar.svg" alt="user avatar" style="height: 100px; width: 100px">

            <?php echo  "<h3 class='user-data'>" . " Welcome "  . ucwords($_SESSION['username']) . "</h3>"  ?>
            <?php
            $phn = $_SESSION['phone'];
            $sql = "select sno, balance from `members` where phone = '$phn'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $sno = $row['sno'];

            echo "<h3 class='user-data'>" . "Balance: " . $row['balance'] . "</h3>" ?>
            <?php echo  "<h3 class='user-data'>" . "Phone: " . $_SESSION['phone'] . "</h3>"  ?>
            <?php echo "<h3 class='user-data'>" . "Email: " . $_SESSION['email'] . "</h3>" ?>

        </div>
        <div class="transactions">
            <h3>Previous Transactions</h3>
            <table class="table table-striped table-hover" id="tab" style="margin-top: 30px;">
                <tr>
                    <th>Transaction Id</th>
                    <th> Amount</th>
                    <th> Account No.</th>
                    <th> Category</th>
                    <th> Date and Time</th>
                </tr>
                <b id="trans" style="display:none">No previous transactions.</b>
                <?php
                $sql = "select * from transaction where sno = '$sno'";
                $resultset = $conn->query($sql);
                if (mysqli_num_rows($resultset) == 0) {
                    echo "
                        <script> 
                        document.getElementById('trans').style.display = 'flex' 
                        document.getElementById('tab').style.display = 'none'
                        </script>
                    ";
                }
                while ($row = mysqli_fetch_assoc($resultset)) {
                    $tnx = $row['tn'] + rand(139678, 4569984);
                    echo "
                <tr>
                <td>" . "tnx" . $tnx . "</td>
                <td>" . $row['tm'] . "</td>
                <td>" . $row['userno'] . "</td>
                <td>" . $row['tdesc'] . "</td>
                <td>" . $row['dt'] . "</td>
                 </tr>
                ";
                }
                ?>

            </table>
            <!-- <ol>
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, quidem?
                    <ul>
                        <li>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde voluptate iusto magnam deserunt recusandae optio?
                        </li>
                    </ul>
                </li>
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, quidem?
                    <ul>
                        <li>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde voluptate iusto magnam deserunt recusandae optio?
                        </li>
                    </ul>
                </li>
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, quidem?
                    <ul>
                        <li>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde voluptate iusto magnam deserunt recusandae optio?
                        </li>
                    </ul>
                </li>
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, quidem?
                    <ul>
                        <li>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde voluptate iusto magnam deserunt recusandae optio?
                        </li>
                    </ul>
                </li>
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti, quidem?
                    <ul>
                        <li>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde voluptate iusto magnam deserunt recusandae optio?
                        </li>
                    </ul>
                </li>
            </ol> -->
        </div>
    </div>
    <footer>
        <?php
        include('footer.php');
        ?>
    </footer>
</body>

</html>