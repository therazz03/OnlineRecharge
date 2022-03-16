<?php
session_start();
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
            <!-- this heading will be replaced with php code that will show the current user name and his remaining balance -->
            <?php echo  "<h3 class='user-data'>" . " Welcome "  . $_SESSION['username'] . "</h3>"  ?>
            <?php echo  "<h3 class='user-data'>" . "Phone: " . $_SESSION['phone'] . "</h3>"  ?>
            <?php echo "<h3 class='user-data'>" . "Email: " . $_SESSION['email'] . "</h3>" ?>

        </div>
        <div class="transactions">
            <h3>Previous Transactions</h3>
            <ol>
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
            </ol>
        </div>
    </div>
    <footer>
        <?php
        include('footer.php');
        ?>
    </footer>
</body>

</html>