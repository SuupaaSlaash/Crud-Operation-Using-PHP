<?php
include("connect.php");

$input_customerID = $_POST['id'];
$input_customerName = $_POST['customerName'];
$input_phone = $_POST['phone'];
$input_address = $_POST['address'];
$input_postal = $POST['postalID'];
$input_country = $POST['country'];

$sql = mysqli_query($conn, "INSERT INTO clients_db (`customerName`, `phone`, `address`, `postalID`, `country`) VALUES ('$input_customerName', '$input_phone', '$input_address', `$input_postal`, `$input_country`)");
if($sql) {
    header("location:admin_dashboard.php");
}else {
    echo "Unable to create user";
};
?>