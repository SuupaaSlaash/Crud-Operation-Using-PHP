<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="registerstyle.css">
</head>
<body>
   
    <form action="register_user.php" method="post">
        <h1>Register</h1>

        <label for="">Username: </label>
        <input type="text" name="user" placeholder="username"><br><br>

        <label for="">Password: </label>
        <input type="password" name="pass" placeholder="password"><br><br>

        <label for="">Type: </label><br><br>
        <select name="type">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select><br><br>

        <input type="submit" value="Register"><br><br>
        <p>Already have an account?<a href="index.html">Click Here.</a></p>
    </form>
</body>
</html>