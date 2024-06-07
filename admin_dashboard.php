<?php
include("checking_session.php");
include("connect.php");
if(!isSessionActive()){
    header("location:index.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboardstyle.css">
</head>
<body>

    <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>

    <h2>List of Users</h2>
    <p><a href="create.php">Create new user</a></p>
    <p><a href="logout.php">Logout</a></p>

    <table>
        <thead>
            <tr>
                <th>customerID</th>
                <th>customerName</th>
                <th>phone</th>
                <th>addresss</th>
                <th>postalID</th>
                <th>country</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = mysqli_query($conn, "SELECT * FROM clients_db");
            while($row = mysqli_fetch_array($sql)){
                echo "<tr>";
                echo "<td>".$row['customerID']."</td>";
                echo "<td>".$row['customerName']."</td>";
                echo "<td>".$row['phone']."</td>";
                echo "<td>".$row['address']."</td>";
                echo "<td>".$row['postalID']."</td>";
                echo "<td>".$row['country']."</td>";
                echo "<td><a href='update_user.php?id=".$row['customerID']."'>update</a></td>";
                echo "<td><a href='confirm.php?id=".$row['customerID']."'>delete</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>