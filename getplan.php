<?php
include('conn.php');

$q = $_GET['q'];
$sql = "SELECT pr, pdesc FROM plans WHERE ono = '" . $q . "'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    // echo $row['pdesc'];
    echo "
    <option value = '" . $row['pr'] . "'>" . $row['pr'] . "₹  "  . $row['pdesc'] . " </option>
    ";
}
