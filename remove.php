<?php
include("connect.php");

$input_customerid = $_GET['customerID'];

$sql = mysqli_query($conn, "DELETE FROM clients_db WHERE `customerID`='$input_customerid'");
if($sql){
    header("location:dashboard.php");
}else{
    echo "Unable to delete the user";
}



?>