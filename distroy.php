<?php
session_start();
session_destroy();
header("Location: http://localhost/OnlineRecharge/login.php");
