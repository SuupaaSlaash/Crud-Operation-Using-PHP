<?php
include("connect.php");

$input_username = $_POST['user'];
$input_password = $_POST['pass'];
$input_type = $_POST['type'];

$sql = mysqli_query($conn, "INSERT INTO logintable_db (`username`, `password`, `type`) VALUES ('$input_username', '$input_password', '$input_type')");
if($sql) {
    header("location:admin_dashboard.php");
}else {
    echo "Unable to Register";
}
?>