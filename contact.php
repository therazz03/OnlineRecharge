<?php
session_start();
$flag = false;
include('conn.php');
// if ($conn) {
//     echo " connected";
// }
if (isset($_POST['subbtn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `support`(`name`, `email`, `concern`, `dt`) VALUES ('$name','$email','$desc', current_timestamp())";

    if ($conn->query($sql)) {
        header("Location: http://localhost/OnlineRecharge/contact.php");
        die;
    } else {
        $flag = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="shortcut icon" href="images/ors-logo1.png" type="image/x-icon">
    <title>Contact Us</title>
    <style>
        .faq {
            padding: 24px;
        }

        .faq h1 {
            margin: 34px 0px;
        }

        .faq h3 {
            font-size: 27px;
            margin-bottom: 25px;
            text-decoration: underline;
        }

        .faqs {
            text-align: justify;
            padding: 14px 0px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <header>
        <?php
        include('header.php');
        ?>
    </header>
    <div class="contact">
        <img src="images/contact-us.svg" alt="contact-us-bg">
        <form action="contact.php" method="post" id="contact-us">
            <h1>Contact Us</h1>
            <h3 style="font-size: 20px; text-align:center">Fill up these details to contact</h3>
            <p style="font-size: 14px; text-align:justify">We'll respond with you within 24 hours</p>
            <input type="text" name="name" id="name" placeholder="Enter Your Name" class="Input">
            <input type="email" name="email" id="email" placeholder="Enter Your Email" class="Input">
            <textarea name="desc" id="desc" cols="30" rows="6" placeholder="Enter Your Query Here" style="resize:none" class="Input"></textarea>
            <?php
            if ($flag) {
                echo "
                        <p style='color:red; font-size:14px'>Can not submit your responce try again</p>
                        ";
            }
            ?>
            <button type="submit" name="subbtn" class="subbtn">Submit</button>
        </form>
    </div>
    <div class="faq">
        <h1 style="color: #6C63FF;">FAQ</h1>
        <h3>Recharge Related</h3>
        <div class="faqs">
            <h5>How many recharges can be done in a day?</h5>
            <p>You can perform any number of transactions per day/month through our Website/Mobile site. However, there might be restrictions from your banks end due to risks. </p>
        </div>
        <div class="faqs">
            <h5>What should I do if I did not get the right benefits?</h5>
            <p>Plan showing the same on our site and the operator’s operator’s website: In case if the plan is the same on our website and the operator’s website and if you haven’t received the right benefits, you need to get in touch with the operator as they will be able to assist you on the benefits of the same.Plan showing different benefits on operator’s website: In case if the plan is different on the operator’s website and if you haven’t received the right benefits, please contact us for further assistance.</p>
        </div>
        <div class="faqs">
            <h5>Can we pay postpaid data card numbers or landline and utility bill payments?</h5>
            <p>Yes. We're updating our list of billers continuously and rolling them out on all our platforms. Please check out the apps / website to confirm if your biller is present.</p>
        </div>
        <div class="faqs">
            <h5>Does the recharge happen immediately?</h5>
            <p>Yes, you get your recharge immediately. As soon as the payment is made, you will get a confirmation message from us and a recharge message from your mobile operator. Generally it takes less than 10 seconds for the transaction to complete.</p>
        </div>
        <div class="faqs">
            <h5>At the time of recharge, I’m unable to proceed further and I’m getting an error as the operator is down. What does this mean?</h5>
            <p>There are times when your operator may not be able to provide recharge services to any user. In such cases, we wait for the operator to fix the technical issue at their end and hence request you to try to attempt the recharge transaction after few hours.</p>
        </div>
        <div class="faqs">
            <h5>My DTH recharge failed but payment was successful, why so? When will I receive a refund?</h5>
            <p>If the details you entered for your DTH account are valid, the recharge will be successful. In cases of incorrect details or technical failure, the payment goes through but recharges fail at the service provider’s end.</p>
            <p>For other payment methods, the refund will be processed in 5-7 business days, depending upon your bank's policy. Your bank usually sends you an SMS once the refund is successfully credited.</p>
            <p>Important: If you have received any cashback for the DTH recharge, the cashbank amount will be deducted from the refund amount.</p>
        </div>
        <div class="faqs">
            <h5>I have recharged a wrong DTH account. Can you cancel DTH recharge?</h5>
            <p>DTH recharges cannot be cancelled on Freecharge once you have made the payment successfully. For further assistance, we request you to contact your service provider for support.</p>
        </div>
        <p>Didn't find what you are looking for <a href="#contact-us" style="text-decoration: none;">contact us</a>.</p>

    </div>
    <footer>
        <?php
        include("footer.php")
        ?>
    </footer>
</body>

</html>