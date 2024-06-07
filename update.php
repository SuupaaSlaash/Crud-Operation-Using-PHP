<?php
include("connect.php");

$input_customerID = $_POST['id'];
$input_customerName = $_POST['customerName'];
$input_phone = $_POST['phone'];
$input_address = $_POST['address'];
$input_postal = $POST['postalID'];
$input_country = $POST['country'];

$sql = mysqli_query($conn, "UPDATE clients_db SET `customerName`='$input_customerName', `phone`='$input_phone', `address`='$input_address', `postalID`='$input_postal', `country`='$input_country' WHERE `id`='$input_customerID'");
if($sql) {
    header("location:admin_dashboard.php");
}else {
    echo "Unable to update user";
}


?>