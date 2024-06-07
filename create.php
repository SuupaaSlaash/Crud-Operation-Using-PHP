<?php
include("checking_session.php");
if(!isSessionActive()){
    header("location:index.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    
    <form action="create_user.php" method="post">
        <h1>Create</h1>

        <label for="">Customer Name</label>
        <input type="text" name="customerName"><br>

        <label for="">Phone</label>
        <input type="number" name="phone"><br>

        <label for="">Address</label>
        <input type="text" name="address">

        <label for="">Postal ID</label>
        <input type="number" name="postalID">

        <label for="">Country</label>
        <input type="text" name="country">
        

        <input type="submit" value="Create">
        
        <a href="admin_dashboard.php">Back to dashboard</a>
    </form>
</body>
</html>