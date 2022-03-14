<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/ors-logo1.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/bootstrap/bootstrap/css/bootstrap.min.css">
    <script src="/bootstrap/bootstrap/js/bootstrap.min.js"></script>
    <script src="/bootstrap/bootstrap/js/jquery.min.js"></script> -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="css/recharge.css">
    <title>Recharge</title>
</head>

<body>
    <header>
        <?php
        include('header.php');
        ?>
    </header>
    <div class="Container">
        <div class="section">
            <!-- <div id="modes">
                <ul>
                    <li><a href="recharge.php#phn" class="Btn">Phone</a></li>
                    <li><a href="recharge.php#dth" class="Btn">DTH</a></li>
                    <li><a href="recharge.php#ccpay" class="Btn">Credit Card</a></li>
                </ul>
            </div> -->
            <div class="top">
                <h3>Recharges made easy</h3>
            </div>
            <div class="pages" id="Page">
                <div class="phone Card" id="phn">
                    <p style="text-align: left; padding-left:5px">Phone Recharge</p>
                    <form action="recharge.php" method="post">
                        <input type="text" name="phnno" placeholder="Enter Mobile Number">
                        <select name="operator" id="op">
                            <option value="default" selected disabled>Select Opeartor</option>
                            <option value="jio">Jio</option>
                            <option value="vi">VI</option>
                            <option value="airtel">Airtel</option>
                            <option value="bsnl">Bsnl</option>
                        </select>
                        <select name="type" id="">
                            <option value="prepaid">Prepaid</option>
                            <option value="postpaid">Postpaid</option>
                        </select>
                        <select name="plan" id="plan">
                            <option value="">plan 1</option>
                            <option value="">plan 2</option>
                            <option value="">plan 3</option>
                            <option value="">plan 4</option>
                        </select>
                        <button type="submit" name="recharge">Recharge</button>
                    </form>
                </div>
                <div class="dth Card" id="dth">
                    <p style="text-align: left; padding-left:5px">DTH Recharge</p>
                    <form action="recharge.php" method="post">
                        <select name="operator-dth" id="operator-dth">
                            <option value="default" selected disabled>Select Opeartor</option>
                            <option value="tatasky">TataSky</option>
                            <option value="d2h">D2H</option>
                            <option value="airteldth">Airtel Digital TV</option>
                            <option value="dishtv">Dish TV</option>
                            <option value="sundirect">Sun Direct</option>
                        </select>
                        <input type="text" placeholder="Enter Subscriber ID" name="id">
                        <input type="text" placeholder="Enter Amount" name="amount">
                        <button type="submit">Recharge</button>
                    </form>
                </div>
                <div class="cc Card" id="ccpay">
                    <p style="text-align: left; padding-left:5px">Credit Card Payment</p>
                    <form action="recharge.php" method="post">
                        <input type="text" name="ccno" placeholder="Enter Credit Card No">
                        <input type="text" name="ccamount" placeholder="Enter Amount">
                        <button type="submit">Pay</button>
                    </form>
                </div>
            </div>



        </div>
    </div>
    <footer>
        <?php
        include('footer.php');
        ?>
    </footer>
    <script src="js/recharge.js"></script>

</body>

</html>