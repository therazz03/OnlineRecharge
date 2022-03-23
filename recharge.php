<?php
session_start();
include('conn.php');
if (isset($_GET['recharge'])) {
    if (!isset($_SESSION['username'])) {
        header("Location: http://localhost/OnlineRecharge/login.php");
    } else {
        // code for making recharge and debiting money from acccount
        $uno = $_SESSION['phone'];
        $sql = "select sno, balance from `members` where phone = '$uno'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $bal = $row['balance'];
        $sno = $row['sno'];
        $rechargeType = $_GET['recharge'];  //to get what is being recharged

        if ($rechargeType == "phnRecharge") {
            $value = $_GET['amt'];
            $no = $_GET['phnno'];
            $plan = $_GET['plan'];
            $tdesc = "Mobile Recharge";


            if ($value > $bal or $plan > $bal) {
                echo "
                    <script> document.getElementById('insuBalphn').style.display = 'flex'; </script>
                ";
            } else {
                if (strlen($value) == 0) {
                    $currentBal = $bal - $plan;
                    $sql1 = "update `members` set balance = $currentBal where phone = '$uno'";
                    $conn->query($sql1);
                    $sql2 = "INSERT INTO `transaction`(`userno`, `tm`, `tdesc`, `dt`, `sno`) VALUES ('$no','$plan', '$tdesc', current_timestamp(),'$sno')";
                    $conn->query($sql2);
                    header("Location: http://localhost/OnlineRecharge/dashboard.php");
                } else {
                    $currentBal = $bal - $value;
                    $sql1 = "update `members` set balance = $currentBal where phone = '$uno'";
                    $conn->query($sql1);
                    $sql2 = "INSERT INTO `transaction`(`userno`, `tm`, `tdesc`, `dt`, `sno`) VALUES ('$no','$value', '$tdesc', current_timestamp(),'$sno')";
                    $conn->query($sql2);
                    header("Location: http://localhost/OnlineRecharge/dashboard.php");
                }
            }
        } elseif ($rechargeType == "dthRecharge") {
            $operator = $_GET["operator-dth"];
            $subId = $_GET["id"];
            $amount = $_GET["amount"];

            if ($amount > $bal) {
                echo "
                    <script> document.getElementById('insuBaldth').style.display = 'flex'; </script>
                ";
            } else {
                $currentBal = $bal - $amount;
                $tdesc = "Dth Recharge";
                $sql1 = "update `members` set balance = $currentBal where phone = '$uno'";
                $conn->query($sql1);
                $sql2 = "INSERT INTO `transaction`(`userno`, `tm`, `tdesc`, `dt`, `sno`) VALUES ('$subId','$amount', '$tdesc', current_timestamp(),'$sno')";
                if (!$conn->query($sql2)) {
                    echo "falied";
                }
                header("Location: http://localhost/OnlineRecharge/dashboard.php");
            }
        } elseif ($rechargeType == "ccpay") {
            $ccno = $_GET["ccno"];
            $ccamt = $_GET["ccamount"];

            if ($ccamt > $bal) {
                echo '
                    <script> document.getElementById("insuBalcc").style.display = "flex" </script>
                ';
            } else {
                $tdesc = "Credit Card Payment";
                $currentBal = $bal - $ccamt;
                $sql1 = "update `members` set balance = $currentBal where phone = '$uno'";
                $conn->query($sql1);
                $sql2 = "INSERT INTO `transaction`(`userno`, `tm`, `tdesc`, `dt`, `sno`) VALUES ('$ccno','$ccamt', '$tdesc', current_timestamp(),'$sno')";
                $conn->query($sql2);
                header("Location: http://localhost/OnlineRecharge/dashboard.php");
            }
        }
    }
}
?>

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
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
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
                    <form action="recharge.php" method="get">
                        <input type="text" name="phnno" id="phnno" placeholder="Enter Mobile Number" onkeyup="numCheck()">
                        <select name="operator" id="op" onchange="showPlan(this.value)">
                            <option value="default" selected disabled>Select Opeartor</option>
                            <option value="1">Jio</option>
                            <option value="2">VI</option>
                            <option value="3">Airtel</option>
                            <option value="4">Bsnl</option>
                        </select>
                        <select name="type" id="type" onchange="checkType(this.value)">
                            <option value="prepaid">Prepaid</option>
                            <option value="postpaid">Postpaid</option>
                        </select>
                        <select name="plan" id="plan">
                            <option value="" disabled selected>Select Plan</option>
                        </select>
                        <input type="text" placeholder="Enter Amount" id="amt" name="amt" style="display: none;">
                        <b id="insuBalphn" style="color:red; margin-left:50px; display:none">Insufficient Balance</b>
                        <button type="submit" name="recharge" value="phnRecharge">Recharge</button>
                    </form>
                </div>
                <div class="dth Card" id="dth">
                    <p style="text-align: left; padding-left:5px">DTH Recharge</p>
                    <form action="recharge.php" method="get">
                        <select name="operator-dth" id="operator-dth">
                            <option value="default" selected disabled>Select Opeartor</option>
                            <option value="tatasky">TataSky</option>
                            <option value="d2h">D2H</option>
                            <option value="airteldth">Airtel Digital TV</option>
                            <option value="dishtv">Dish TV</option>
                            <option value="sundirect">Sun Direct</option>
                        </select>
                        <input type="text" placeholder="Enter Subscriber ID" name="id" id="id" onkeyup="idCheck()">
                        <input type="text" placeholder="Enter Amount" name="amount">
                        <b id="insuBaldth" style="color:red; margin-left:50px; display:none">Insufficient Balance</b>
                        <button type="submit" name="recharge" value="dthRecharge">Recharge</button>
                    </form>
                </div>
                <div class="cc Card" id="ccpay">
                    <p style="text-align: left; padding-left:5px">Credit Card Payment</p>
                    <form action="recharge.php" method="get">
                        <input type="text" name="ccno" id="ccno" placeholder="Enter Credit Card No" onkeyup="ccCheck()">
                        <input type="text" name="ccamount" placeholder="Enter Amount">
                        <b id="insuBalcc" style="color:red; margin-left:50px; display:none">Insufficient Balance</b>
                        <button type="submit" name="recharge" value="ccpay">Pay</button>
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
    <script>
        function showPlan(str) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("plan").innerHTML = xmlhttp.responseText;
                }
            };
            xmlhttp.open("GET", "getplan.php?q=" + str, true);
            xmlhttp.send();
        }

        function checkType(str) {
            var type = document.getElementById("type").value
            if (type == "postpaid") {
                document.getElementById("plan").style.display = "none"
                document.getElementById("amt").style.display = "flex"
            } else {
                document.getElementById("plan").style.display = "flex"
                document.getElementById("amt").style.display = "none"
            }
        }

        function numCheck() {
            val = document.getElementById("phnno").value
            if (val.length != 10) {
                document.getElementById("phnno").style.border = " 2px solid red"
                isValid = false
            } else {
                document.getElementById("phnno").style.border = "2px solid black"
            }
        }

        function idCheck() {
            val = document.getElementById("id").value
            if (val.length != 10) {
                document.getElementById("id").style.border = " 2px solid red"
                isValid = false
            } else {
                document.getElementById("id").style.border = "2px solid black"
            }
        }

        function ccCheck() {
            val = document.getElementById("ccno").value
            if (val.length != 12) {
                document.getElementById("ccno").style.border = " 2px solid red"
                isValid = false
            } else {
                document.getElementById("ccno").style.border = "2px solid black"
            }
        }

        function test() {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Insufficient Balance',
            })
        }
    </script>

</body>

</html>