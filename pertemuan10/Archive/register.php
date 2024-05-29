<?php
    session_start();

    if (isset($_SESSION["email"])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2> Register </h2>

    <form method="POST" action="./registerProses.php">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <br>

        <input type="submit" value="Register">
    </form>
</body>
</html>