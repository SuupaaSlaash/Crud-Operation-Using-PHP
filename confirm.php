<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
</head>
<body>
    
    <p>Are you sure that you want to delete this user id #:<?php echo $_GET['id']; ?>?</p>
    <?php $id=$_GET['id']; ?>
    <?php echo '<p><a href="admin_dashboard.php">Cancel</a> | <a href="remove.php?id='.$id.'">OK</a></p>'; ?>

</body>
</html>