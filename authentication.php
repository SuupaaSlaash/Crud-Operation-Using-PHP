<?php
session_start();
include("connect.php");

$input_username = $_POST['user'];
$input_password = $_POST['pass'];

$sql = "SELECT * FROM logintable_db WHERE `username`='$input_username' AND `password`='$input_password'";
$result = mysqli_query($conn, $sql); 
$count = mysqli_num_rows($result);

if($count > 0){
    $_SESSION['username'] = $input_username;
    header("location:admin_dashboard.php");
}else{
    echo "Incorrect Username or Password";
}
?>